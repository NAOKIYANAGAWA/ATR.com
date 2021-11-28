<?php
class StaticList
{
    const MATCH_TYPE_UNSELECTED = 0;
    const MATCH_TYPE_1SET = 1;
    const MATCH_TYPE_3SET = 3;
    const MATCH_TYPE_5SET = 5;

    public static $match_type = array(
        self::MATCH_TYPE_UNSELECTED => '未選択',
        self::MATCH_TYPE_1SET => '１セットマッチ',
        self::MATCH_TYPE_3SET => '３セットマッチ',
        self::MATCH_TYPE_5SET => '５セットマッチ',
    );

    const WIN_FLG_UNSELECTED = 0;
    const WIN_FLG_WIN = 1;
    const WIN_FLG_LOSE = 2;

    public static $win_flg = array(
        self::WIN_FLG_UNSELECTED => '未選択',
        self::WIN_FLG_WIN => '勝利',
        self::WIN_FLG_LOSE => '敗戦',
    );

    const SET_POINT_USER_UNSELECTED = 0;
    const SET_POINT_USER_ONE = 1;
    const SET_POINT_USER_TWO = 2;
    const SET_POINT_USER_THREE = 3;

    public static $set_point_user = array(
        self::SET_POINT_USER_UNSELECTED => '0',
        self::SET_POINT_USER_ONE => '1',
        self::SET_POINT_USER_TWO => '2',
        self::SET_POINT_USER_THREE => '3',
    );

    const SET_POINT_OPPONENT_UNSELECTED = 0;
    const SET_POINT_OPPONENT_ONE = 1;
    const SET_POINT_OPPONENT_TWO = 2;
    const SET_POINT_OPPONENT_THREE = 3;

    public static $set_point_opponent = array(
        self::SET_POINT_OPPONENT_UNSELECTED => '0',
        self::SET_POINT_OPPONENT_ONE => '1',
        self::SET_POINT_OPPONENT_TWO => '2',
        self::SET_POINT_OPPONENT_THREE => '3',
    );

    const FIRST_SET_GAME_POINT_USER_UNSELECTED = 0;
    const FIRST_SET_GAME_POINT_USER_ONE = 1;
    const FIRST_SET_GAME_POINT_USER_TWO = 2;
    const FIRST_SET_GAME_POINT_USER_THREE = 3;
    const FIRST_SET_GAME_POINT_USER_FOUR = 4;
    const FIRST_SET_GAME_POINT_USER_FIVE = 5;
    const FIRST_SET_GAME_POINT_USER_SIX = 6;
    const FIRST_SET_GAME_POINT_USER_SEVENTH = 7;

    public static $first_set_game_point_user = array(
        self::FIRST_SET_GAME_POINT_USER_UNSELECTED => '0',
        self::FIRST_SET_GAME_POINT_USER_ONE => '1',
        self::FIRST_SET_GAME_POINT_USER_TWO => '2',
        self::FIRST_SET_GAME_POINT_USER_THREE => '3',
        self::FIRST_SET_GAME_POINT_USER_FOUR => '4',
        self::FIRST_SET_GAME_POINT_USER_FIVE => '5',
        self::FIRST_SET_GAME_POINT_USER_SIX => '6',
        self::FIRST_SET_GAME_POINT_USER_SEVENTH => '7',
    );

    const FIRST_SET_GAME_POINT_OPPONENT_UNSELECTED = 0;
    const FIRST_SET_GAME_POINT_OPPONENT_ONE = 1;
    const FIRST_SET_GAME_POINT_OPPONENT_TWO = 2;
    const FIRST_SET_GAME_POINT_OPPONENT_THREE = 3;
    const FIRST_SET_GAME_POINT_OPPONENT_FOUR = 4;
    const FIRST_SET_GAME_POINT_OPPONENT_FIVE = 5;
    const FIRST_SET_GAME_POINT_OPPONENT_SIX = 6;
    const FIRST_SET_GAME_POINT_OPPONENT_SEVENTH = 7;

    public static $first_set_game_point_opponent = array(
        self::FIRST_SET_GAME_POINT_OPPONENT_UNSELECTED => '0',
        self::FIRST_SET_GAME_POINT_OPPONENT_ONE => '1',
        self::FIRST_SET_GAME_POINT_OPPONENT_TWO => '2',
        self::FIRST_SET_GAME_POINT_OPPONENT_THREE => '3',
        self::FIRST_SET_GAME_POINT_OPPONENT_FOUR => '4',
        self::FIRST_SET_GAME_POINT_OPPONENT_FIVE => '5',
        self::FIRST_SET_GAME_POINT_OPPONENT_SIX => '6',
        self::FIRST_SET_GAME_POINT_OPPONENT_SEVENTH => '7',
    );

    const SECOND_SET_GAME_POINT_USER_UNSELECTED = 0;
    const SECOND_SET_GAME_POINT_USER_ONE = 1;
    const SECOND_SET_GAME_POINT_USER_TWO = 2;
    const SECOND_SET_GAME_POINT_USER_THREE = 3;
    const SECOND_SET_GAME_POINT_USER_FOUR = 4;
    const SECOND_SET_GAME_POINT_USER_FIVE = 5;
    const SECOND_SET_GAME_POINT_USER_SIX = 6;
    const SECOND_SET_GAME_POINT_USER_SEVENTH = 7;

    public static $second_set_game_point_user = array(
        self::SECOND_SET_GAME_POINT_USER_UNSELECTED => '0',
        self::SECOND_SET_GAME_POINT_USER_ONE => '1',
        self::SECOND_SET_GAME_POINT_USER_TWO => '2',
        self::SECOND_SET_GAME_POINT_USER_THREE => '3',
        self::SECOND_SET_GAME_POINT_USER_FOUR => '4',
        self::SECOND_SET_GAME_POINT_USER_FIVE => '5',
        self::SECOND_SET_GAME_POINT_USER_SIX => '6',
        self::SECOND_SET_GAME_POINT_USER_SEVENTH => '7',
    );

    const SECOND_SET_GAME_POINT_OPPONENT_UNSELECTED = 0;
    const SECOND_SET_GAME_POINT_OPPONENT_ONE = 1;
    const SECOND_SET_GAME_POINT_OPPONENT_TWO = 2;
    const SECOND_SET_GAME_POINT_OPPONENT_THREE = 3;
    const SECOND_SET_GAME_POINT_OPPONENT_FOUR = 4;
    const SECOND_SET_GAME_POINT_OPPONENT_FIVE = 5;
    const SECOND_SET_GAME_POINT_OPPONENT_SIX = 6;
    const SECOND_SET_GAME_POINT_OPPONENT_SEVENTH = 7;

    public static $second_set_game_point_opponent = array(
        self::SECOND_SET_GAME_POINT_OPPONENT_UNSELECTED => '0',
        self::SECOND_SET_GAME_POINT_OPPONENT_ONE => '1',
        self::SECOND_SET_GAME_POINT_OPPONENT_TWO => '2',
        self::SECOND_SET_GAME_POINT_OPPONENT_THREE => '3',
        self::SECOND_SET_GAME_POINT_OPPONENT_FOUR => '4',
        self::SECOND_SET_GAME_POINT_OPPONENT_FIVE => '5',
        self::SECOND_SET_GAME_POINT_OPPONENT_SIX => '6',
        self::SECOND_SET_GAME_POINT_OPPONENT_SEVENTH => '7',
    );

    const THIRD_SET_GAME_POINT_USER_UNSELECTED = 0;
    const THIRD_SET_GAME_POINT_USER_ONE = 1;
    const THIRD_SET_GAME_POINT_USER_TWO = 2;
    const THIRD_SET_GAME_POINT_USER_THREE = 3;
    const THIRD_SET_GAME_POINT_USER_FOUR = 4;
    const THIRD_SET_GAME_POINT_USER_FIVE = 5;
    const THIRD_SET_GAME_POINT_USER_SIX = 6;
    const THIRD_SET_GAME_POINT_USER_SEVENTH = 7;

    public static $third_set_game_point_user = array(
        self::THIRD_SET_GAME_POINT_USER_UNSELECTED => '0',
        self::THIRD_SET_GAME_POINT_USER_ONE => '1',
        self::THIRD_SET_GAME_POINT_USER_TWO => '2',
        self::THIRD_SET_GAME_POINT_USER_THREE => '3',
        self::THIRD_SET_GAME_POINT_USER_FOUR => '4',
        self::THIRD_SET_GAME_POINT_USER_FIVE => '5',
        self::THIRD_SET_GAME_POINT_USER_SIX => '6',
        self::THIRD_SET_GAME_POINT_USER_SEVENTH => '7',
    );

    const THIRD_SET_GAME_POINT_OPPONENT_UNSELECTED = 0;
    const THIRD_SET_GAME_POINT_OPPONENT_ONE = 1;
    const THIRD_SET_GAME_POINT_OPPONENT_TWO = 2;
    const THIRD_SET_GAME_POINT_OPPONENT_THREE = 3;
    const THIRD_SET_GAME_POINT_OPPONENT_FOUR = 4;
    const THIRD_SET_GAME_POINT_OPPONENT_FIVE = 5;
    const THIRD_SET_GAME_POINT_OPPONENT_SIX = 6;
    const THIRD_SET_GAME_POINT_OPPONENT_SEVENTH = 7;

    public static $third_set_game_point_opponent = array(
        self::THIRD_SET_GAME_POINT_OPPONENT_UNSELECTED => '0',
        self::THIRD_SET_GAME_POINT_OPPONENT_ONE => '1',
        self::THIRD_SET_GAME_POINT_OPPONENT_TWO => '2',
        self::THIRD_SET_GAME_POINT_OPPONENT_THREE => '3',
        self::THIRD_SET_GAME_POINT_OPPONENT_FOUR => '4',
        self::THIRD_SET_GAME_POINT_OPPONENT_FIVE => '5',
        self::THIRD_SET_GAME_POINT_OPPONENT_SIX => '6',
        self::THIRD_SET_GAME_POINT_OPPONENT_SEVENTH => '7',
    );

    const FOURTH_SET_GAME_POINT_USER_UNSELECTED = 0;
    const FOURTH_SET_GAME_POINT_USER_ONE = 1;
    const FOURTH_SET_GAME_POINT_USER_TWO = 2;
    const FOURTH_SET_GAME_POINT_USER_THREE = 3;
    const FOURTH_SET_GAME_POINT_USER_FOUR = 4;
    const FOURTH_SET_GAME_POINT_USER_FIVE = 5;
    const FOURTH_SET_GAME_POINT_USER_SIX = 6;
    const FOURTH_SET_GAME_POINT_USER_SEVENTH = 7;

    public static $fourth_set_game_point_user = array(
        self::FOURTH_SET_GAME_POINT_USER_UNSELECTED => '0',
        self::FOURTH_SET_GAME_POINT_USER_ONE => '1',
        self::FOURTH_SET_GAME_POINT_USER_TWO => '2',
        self::FOURTH_SET_GAME_POINT_USER_THREE => '3',
        self::FOURTH_SET_GAME_POINT_USER_FOUR => '4',
        self::FOURTH_SET_GAME_POINT_USER_FIVE => '5',
        self::FOURTH_SET_GAME_POINT_USER_SIX => '6',
        self::FOURTH_SET_GAME_POINT_USER_SEVENTH => '7',
    );

    const FOURTH_SET_GAME_POINT_OPPONENT_UNSELECTED = 0;
    const FOURTH_SET_GAME_POINT_OPPONENT_ONE = 1;
    const FOURTH_SET_GAME_POINT_OPPONENT_TWO = 2;
    const FOURTH_SET_GAME_POINT_OPPONENT_THREE = 3;
    const FOURTH_SET_GAME_POINT_OPPONENT_FOUR = 4;
    const FOURTH_SET_GAME_POINT_OPPONENT_FIVE = 5;
    const FOURTH_SET_GAME_POINT_OPPONENT_SIX = 6;
    const FOURTH_SET_GAME_POINT_OPPONENT_SEVENTH = 7;

    public static $fourth_set_game_point_opponent = array(
        self::FOURTH_SET_GAME_POINT_OPPONENT_UNSELECTED => '0',
        self::FOURTH_SET_GAME_POINT_OPPONENT_ONE => '1',
        self::FOURTH_SET_GAME_POINT_OPPONENT_TWO => '2',
        self::FOURTH_SET_GAME_POINT_OPPONENT_THREE => '3',
        self::FOURTH_SET_GAME_POINT_OPPONENT_FOUR => '4',
        self::FOURTH_SET_GAME_POINT_OPPONENT_FIVE => '5',
        self::FOURTH_SET_GAME_POINT_OPPONENT_SIX => '6',
        self::FOURTH_SET_GAME_POINT_OPPONENT_SEVENTH => '7',
    );

    const FIFTH_SET_GAME_POINT_USER_UNSELECTED = 0;
    const FIFTH_SET_GAME_POINT_USER_ONE = 1;
    const FIFTH_SET_GAME_POINT_USER_TWO = 2;
    const FIFTH_SET_GAME_POINT_USER_THREE = 3;
    const FIFTH_SET_GAME_POINT_USER_FOUR = 4;
    const FIFTH_SET_GAME_POINT_USER_FIVE = 5;
    const FIFTH_SET_GAME_POINT_USER_SIX = 6;
    const FIFTH_SET_GAME_POINT_USER_SEVENTH = 7;

    public static $fifth_set_game_point_user = array(
        self::FIFTH_SET_GAME_POINT_USER_UNSELECTED => '0',
        self::FIFTH_SET_GAME_POINT_USER_ONE => '1',
        self::FIFTH_SET_GAME_POINT_USER_TWO => '2',
        self::FIFTH_SET_GAME_POINT_USER_THREE => '3',
        self::FIFTH_SET_GAME_POINT_USER_FOUR => '4',
        self::FIFTH_SET_GAME_POINT_USER_FIVE => '5',
        self::FIFTH_SET_GAME_POINT_USER_SIX => '6',
        self::FIFTH_SET_GAME_POINT_USER_SEVENTH => '7',
    );

    const FIFTH_SET_GAME_POINT_OPPONENT_UNSELECTED = 0;
    const FIFTH_SET_GAME_POINT_OPPONENT_ONE = 1;
    const FIFTH_SET_GAME_POINT_OPPONENT_TWO = 2;
    const FIFTH_SET_GAME_POINT_OPPONENT_THREE = 3;
    const FIFTH_SET_GAME_POINT_OPPONENT_FOUR = 4;
    const FIFTH_SET_GAME_POINT_OPPONENT_FIVE = 5;
    const FIFTH_SET_GAME_POINT_OPPONENT_SIX = 6;
    const FIFTH_SET_GAME_POINT_OPPONENT_SEVENTH = 7;

    public static $fifth_set_game_point_opponent = array(
        self::FIFTH_SET_GAME_POINT_OPPONENT_UNSELECTED => '0',
        self::FIFTH_SET_GAME_POINT_OPPONENT_ONE => '1',
        self::FIFTH_SET_GAME_POINT_OPPONENT_TWO => '2',
        self::FIFTH_SET_GAME_POINT_OPPONENT_THREE => '3',
        self::FIFTH_SET_GAME_POINT_OPPONENT_FOUR => '4',
        self::FIFTH_SET_GAME_POINT_OPPONENT_FIVE => '5',
        self::FIFTH_SET_GAME_POINT_OPPONENT_SIX => '6',
        self::FIFTH_SET_GAME_POINT_OPPONENT_SEVENTH => '7',
    );
}
