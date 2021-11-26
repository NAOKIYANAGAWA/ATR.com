<?php 
namespace controller\profile\match;

use lib\Auth;
use model\UserModel;
use db\profile\MatchQuery;

function get() {

    Auth::requireLogin();

    $user = UserModel::getSession();

    $matchs = MatchQuery::fetchMatchs($user);

    $users = MatchQuery::fetchUsers();

    \view\profile\match\index($matchs, $users);

}
