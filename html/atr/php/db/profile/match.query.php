<?php

namespace db\profile;

use db\DataSource;
use model\profile\MatchModel;
use model\profile\match\ScoreModel;

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

    public static function fetchScores($matchs)
    {
        $db = new DataSource;
        $sql = 'select * from scores';

        $scores = $db->select($sql, [], DataSource::CLS, ScoreModel::class);

        foreach ($matchs as $match) {
            foreach ($scores as $score) {
                if ($match->id === $score->match_id) {
                    $result[] = $score;
                }
            }
        }

        return $result;
    }

    public static function fetchById($score)
    {

        // if (!$topic->isValidEmail()) {
        //     return false;
        // }

        $db = new DataSource;
        $sql = '
        select * from scores where id = :id';
        //     s.*, u.nickname
        // from topics t
        // inner join users u
        //     on t.user_id = u.id
        // where t.id = :id
        //     and t.del_flg != 1
        //     and u.del_flg != 1
        // order by t.id desc
        // ';

        $result = $db->selectOne($sql, [
            ':id' => $score->id
        ], DataSource::CLS, ScoreModel::class);

        return $result;
    }

    public static function insert($match, $score, $user, $db)
    {
        if (!(
            $match->isValidMatchType()
            // * $match->isValidUserId()
            // * $match->isValidOpponentId()
            // * $match->isValidWinFlg()
        )) {
            return false;
        }

        // $db = new DataSource;
        $sql = 'insert into matches(opponent_id, match_type, win_flg, user_id) values (:opponent_id, :match_type, :win_flg, :user_id)';

        $is_success = $db->execute($sql, [
            ':opponent_id' => $match->opponent_id,
            ':match_type' => $match->match_type,
            ':win_flg' => $match->win_flg,
            ':user_id' => $user->id,
        ], true);

        if ($is_success) {
            $sql = 'insert into scores(
                    match_id,
                    set_point_user,
                    set_point_opponent,
                    first_set_game_point_user,
                    first_set_game_point_opponent,
                    second_set_game_point_user,
                    second_set_game_point_opponent,
                    third_set_game_point_user,
                    third_set_game_point_opponent,
                    fourth_set_game_point_user,
                    fourth_set_game_point_opponent,
                    fifth_set_game_point_user,
                    fifth_set_game_point_opponent
                ) values (
                    :match_id,
                    :set_point_user,
                    :set_point_opponent,
                    :first_set_game_point_user,
                    :first_set_game_point_opponent,
                    :second_set_game_point_user,
                    :second_set_game_point_opponent,
                    :third_set_game_point_user,
                    :third_set_game_point_opponent,
                    :fourth_set_game_point_user,
                    :fourth_set_game_point_opponent,
                    :fifth_set_game_point_user,
                    :fifth_set_game_point_opponent
                )';

            return $db->execute($sql, [
                'match_id' => $db->get_lastInsertId(),
                'set_point_user' => $score->set_point_user,
                'set_point_opponent' => $score->set_point_opponent,
                'first_set_game_point_user' => $score->first_set_game_point_user,
                'first_set_game_point_opponent' => $score->first_set_game_point_opponent,
                'second_set_game_point_user' => $score->second_set_game_point_user,
                'second_set_game_point_opponent' => $score->second_set_game_point_opponent,
                'third_set_game_point_user' => $score->third_set_game_point_user,
                'third_set_game_point_opponent' => $score->third_set_game_point_opponent,
                'fourth_set_game_point_user' => $score->fourth_set_game_point_user,
                'fourth_set_game_point_opponent' => $score->fourth_set_game_point_opponent,
                'fifth_set_game_point_user' => $score->fifth_set_game_point_user,
                'fifth_set_game_point_opponent' => $score->fifth_set_game_point_opponent,
            ]);
        }
    }
}
