<?php
namespace controller\profile;

use lib\Auth;
use model\UserModel;
use db\profile\MatchQuery;

function get()
{
    Auth::requireLogin();

    $user = UserModel::getSession();

    $matchs = MatchQuery::fetchMatchs($user);

    $result = get_match_data($matchs);

    $points = count_points($matchs);

    \view\profile\index($user, $matchs, $result, $points);
}
