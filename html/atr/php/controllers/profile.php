<?php 
namespace controller\profile;

use lib\Auth;
use model\UserModel;

function get() {

    Auth::requireLogin();

    \view\profile\index();

}
