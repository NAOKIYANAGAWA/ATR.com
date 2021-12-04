<?php
namespace model;

use lib\Msg;

class UserModel extends AbstractModel {

    public string $email;
    public string $pwd;
    public string $nickname;

    protected static $SESSION_NAME = '_user';

    public function isValidEmail() {

        return static::validateEmail($this->email);

    }

    public static function validateEmail($val) {
        $res = true;

        if(empty($val)) {
            Msg::push(Msg::ERROR, 'Emailを入力してください。');
            $res = false;
        } else {

            if(strlen($val) > 30) {
                Msg::push(Msg::ERROR, 'Emailは１０桁以下で入力してください。');
                $res = false;
            }

            //ToDo emailのバリデーションを追加
            // if(!is_alnum($val)) {
            //     Msg::push(Msg::ERROR, 'Emailの形式で入力してください。');
            //     $res = false;
            // }

        }

        return $res;
    }

    public static function validatePwd($val)
    {
        $res = true;

        if (empty($val)) {

            Msg::push(Msg::ERROR, 'パスワードを入力してください。');
            $res = false;

        } else {

            if(strlen($val) < 4) {

                Msg::push(Msg::ERROR, 'パスワードは４桁以上で入力してください。');
                $res = false;

            }

            if(!is_alnum($val)) {

                Msg::push(Msg::ERROR, 'パスワードは半角英数字で入力してください。');
                $res = false;

            }
        }

        return $res;
    }

    public function isValidPwd()
    {
        return static::validatePwd($this->pwd);
    }

    public static function validateNickname($val)
    {

        $res = true;

        if (empty($val)) {

            Msg::push(Msg::ERROR, 'ニックネームを入力してください。');
            $res = false;

        } else {

            if(mb_strlen($val) > 10) {

                Msg::push(Msg::ERROR, 'ニックネームは１０桁以下で入力してください。');
                $res = false;

            }
        }

        return $res;
    }

    public function isValidNickname()
    {
        return static::validateNickname($this->nickname);
    }
}
