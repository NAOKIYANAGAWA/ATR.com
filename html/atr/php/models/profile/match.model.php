<?php

namespace model\profile;

use lib\Msg;
use model\AbstractModel;
use staticList;

class MatchModel extends AbstractModel
{
    public int $id;
    public int $user_id;
    public int $prefecture_id;
    public string $city;
    public string $venue;
    public string $match_date;
    public int $match_type;
    public int $win_flg;
    public int $del_flg;
    protected static $SESSION_NAME = '_match';

    public function isValidMatchType()
    {
        return static::validateMatchType($this->match_type);
    }

    public static function validateMatchType($val)
    {
        $res = true;

        if (empty($val)) {
            Msg::push(Msg::ERROR, '試合形式は入力必須です。');
            $res = false;
        }

        if (!is_staticListParam($val, staticList::$match_type)) {
            Msg::push(Msg::ERROR, 'パラメータが不正です。');
            $res = false;
        }

        return $res;
    }
}
