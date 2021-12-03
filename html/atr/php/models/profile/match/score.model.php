<?php

namespace model\profile\match;

use lib\Msg;
use model\AbstractModel;

class ScoreModel extends AbstractModel
{
    public int $id;
    public int $match_id;
    public int $set_point_user;
    public int $set_point_opponent;
    public int $first_set_game_point_user;
    public int $first_set_game_point_opponent;
    public int $second_set_game_point_user;
    public int $second_set_game_point_opponent;
    public int $third_set_game_point_user;
    public int $third_set_game_point_opponent;
    public int $fourth_set_game_point_user;
    public int $fourth_set_game_point_opponent;
    public int $fifth_set_game_point_user;
    public int $fifth_set_game_point_opponent;
    protected static $SESSION_NAME = '_score';
}
