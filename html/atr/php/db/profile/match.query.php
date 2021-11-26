<?php

namespace db\profile;

use db\DataSource;
use model\profile\MatchModel;

class MatchQuery
{
    public static function fetchByUserId($user)
    {
        if (!$user->isValidEmail()) {
            return false;
        }

        $db = new DataSource;
        $sql = 'select * from matches where user_id = :id and del_flg != 1 order by id desc;';

        $result = $db->select($sql, [
            ':id' => $user->id
        ], DataSource::CLS, MatchModel::class);

        return $result;
    }


    public static function fetchMatchs($user)
    {
        $db = new DataSource;
        $sql = '
        select
            m.*, u.nickname
        from matches m
        inner join users u
            on m.user_id = u.id
        where m.user_id = :id
            and m.del_flg != 1
            and u.del_flg != 1
        order by m.user_id asc
        ';

        $result = $db->select($sql, [':id' => $user->id], DataSource::CLS, MatchModel::class);

        return $result;
    }

    public static function fetchUsers()
    {
        $db = new DataSource;
        $sql = 'select id, nickname from users';

        $result = $db->select($sql);

        return $result;
    }

}
