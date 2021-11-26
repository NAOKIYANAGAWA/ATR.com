<?php
namespace controller\user\match\detail;

use lib\Auth;
use model\UserModel;
use db\user\match\MatchQuery;

function get() {

    Auth::requireLogin();

    $user = UserModel::getSession();

    $matchs = MatchQuery::fetchMatchs($user);

    $users = MatchQuery::fetchUsers();

    \view\user\detail\index($matchs, $users);

}
