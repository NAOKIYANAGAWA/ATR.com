<?php

namespace model;

use lib\Msg;

class MatchModel extends AbstractModel
{

    public int $id;
    public int $user_id;
    public int $prefecture_id;
    public string $city;
    public string $venue;
    public string $date;
    public string $match_type;
    public int $win_flg;
    public int $del_flg;
    protected static $SESSION_NAME = '_match';

}
