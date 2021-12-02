<?php
namespace controller\profile;

use lib\Auth;
use model\UserModel;
use db\UserQuery;
use model\profile\MatchModel;
use db\profile\MatchQuery;

function get()
{
    Auth::requireLogin();

    $user = UserModel::getSession();

    if (get_param('user_id', null, false)) {
        $user_id = get_param('user_id', null, false);
        $user = UserQuery::fetchById($user_id);
    } else {
        $user_id = $user->id;
    }

    $matchs = MatchQuery::joinUsers($user_id);

    $result = MatchModel::get_wins_and_lose($matchs);

    $points = MatchModel::count_points($matchs);

    \view\profile\index($user, $result, $points, $user_id);
}
