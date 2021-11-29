<?php
namespace controller\profile\match;

use lib\Auth;
use model\UserModel;
use db\profile\MatchQuery;
use model\profile\match\scoreModel;

function get()
{
    Auth::requireLogin();

    $score = new ScoreModel;
    $score->match_id = get_param('match_id', 1, false);//todo デフォルトで表示するidの取得

    $fetchedScore = MatchQuery::fetchScoreByMatchId($score);

    //todo getのparamがない時のメッセージ表示

    $user = UserModel::getSession();

    $matchs = MatchQuery::fetchMatchs($user);

    $users = MatchQuery::fetchUsers();

    $scores = MatchQuery::fetchScores($matchs);

    \view\profile\match\index($matchs, $users, $scores, $fetchedScore);
}
