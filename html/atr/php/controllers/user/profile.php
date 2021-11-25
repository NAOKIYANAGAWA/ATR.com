<?php 
namespace controller\user\profile;

use lib\Auth;
use model\UserModel;
use db\MatchQuery;

function get() {

    Auth::requireLogin();

    $user = UserModel::getSession();

    $matchs = MatchQuery::fetchMatchs($user);

    $users = MatchQuery::fetchUsers();

    \view\user\profile\index($matchs, $users);

}
