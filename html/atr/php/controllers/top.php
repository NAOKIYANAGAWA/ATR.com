<?php
namespace controller\top;

use db\profile\MatchQuery;
use model\profile\MatchModel;

function get()
{
    $matchs = MatchQuery::fetchAll();
    $users = MatchQuery::fetchDistinctUsers();

    $rank_info = [];

    foreach ($users as $user) {
        foreach ($matchs as $match) {
            if ($user->id === $match->user_id && $match->win_flg === 1) {
                $rank_info[$user->id]['user_id'] = $user->id;
                $rank_info[$user->id]['nickname'] = $user->nickname;

                //勝敗集計
                $rank_info[$user->id]['wins']++;

                //ポイント集計
                if ($match->win_flg === 1) {
                    switch ($match->match_type) {
                    case 1:
                        $rank_info[$user->id]['points'] += 10;
                        break;
                    case 3:
                        $rank_info[$user->id]['points'] += 30;
                        break;
                    case 5:
                        $rank_info[$user->id]['points'] += 50;
                        break;
                    };
                }
            }
        }
    }

    //ポイントを降順に並び替え
    foreach ($rank_info as $key => $value) {
        $sort_keys[$key] = $value['points'];
    }
    array_multisort($sort_keys, SORT_DESC, $rank_info);

    //上位10のみ取得
    $rank_info = array_slice($rank_info, 0, 10);

    \view\top\index($rank_info);
}
