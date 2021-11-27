<?php
namespace controller\profile\match\detail;

use lib\Auth;
use model\UserModel;
use model\profile\match\scoreModel;
use db\profile\MatchQuery;

function get() {

    $score = new ScoreModel;
    $score->id = get_param('id', null, false);

    $fetchedScore = MatchQuery::fetchById($score);

    \view\profile\match\detail\index($fetchedScore);

}
