<?php

namespace model\profile;

use lib\Msg;
use model\AbstractModel;
use staticList;

class MatchModel extends AbstractModel
{
    public int $user_id;
    public int $opponent_id;
    public int $prefecture_id;
    public string $city;
    public string $venue;
    public string $match_date;
    public int $match_type;
    public int $win_flg;
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

    public function isValidId()
    {
        return static::validateId($this->match_id);
    }

    public static function validateId($val)
    {
        $res = true;

        if (empty($val) || !is_numeric($val)) {
            Msg::push(Msg::ERROR, 'パラメータが不正です。');
            $res = false;
        }

        return $res;
    }

    public static function get_wins_and_lose($matchs)
    {
        $result = [
        'wins' => 0,
        'loses' => 0,
    ];
        foreach ($matchs as $match) {
            if ($match->win_flg === 1) {
                $result['wins']++;
            } else {
                $result['loses']++;
            }
        }
        return $result;
    }

    public static function count_points($matchs)
    {
        $points = 0;
        foreach ($matchs as $match) {
            if ($match->win_flg === 1) {
                switch ($match->match_type) {
            case 1:
                $points += 10;
                break;
            case 3:
                $points += 30;
                break;
            case 5:
                $points += 50;
                break;
            };
            }
        }

        return $points;
    }
}
