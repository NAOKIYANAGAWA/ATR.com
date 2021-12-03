<?php
namespace controller\profile\match;

use lib\Auth;
use model\UserModel;
use db\UserQuery;
use db\profile\MatchQuery;
use model\profile\match\scoreModel;

function get()
{
    Auth::requireLogin();

    $auth_user = UserModel::getSession();

    if (get_param('user_id', null, false)) {
        $user_id = get_param('user_id', null, false);
        $user = UserQuery::fetchById($user_id);
    } else {
        $user_id = $auth_user->id;
    }

    $permission = false;

    if ($auth_user->id === $user_id) {
        $permission = true;
    }

    $score = new ScoreModel;
    if (get_param('match_id', null, false)) {
        $score->match_id = get_param('match_id', null, false);
    } else {
        $match_id = MatchQuery::fetchMostRecentMatchByUserId($user_id);
        $score->match_id = $match_id->id;
    }
    $score = MatchQuery::fetchScoreByMatchId($score);

    //todo getのparamがない時のメッセージ表示

    $matchs = MatchQuery::joinUsers($user_id);

    $users = MatchQuery::fetchAllUsers();

    $scores = MatchQuery::fetchAllScores($matchs);

    \view\profile\match\index($matchs, $users, $scores, $score, $permission, $user_id);
}
