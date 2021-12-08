<?php
namespace db;

use lib\Msg;
use db\DataSource;
use model\ChatModel;

class ChatQuery
{
    public static function fetchInitChatRoom($user)
    {
        $db = new DataSource;
        $sql = 'select * from chat_rooms where agent_id = :agent_id or client_id = :client_id order by updated_at asc';

        $result = $db->selectOne($sql, [':agent_id' => $user->id, ':client_id' => $user->id], DataSource::CLS, ChatModel::class);

        return $result;
    }

    public static function fetchInitChatRoomByRoomId($room_id)
    {
        $db = new DataSource;
        $sql = 'select * from chat_rooms where id = :id order by updated_at asc';

        $result = $db->selectOne($sql, [':id' => $room_id], DataSource::CLS, ChatModel::class);

        return $result;
    }

    public static function fetchALLChatRooms($user)
    {
        $db = new DataSource;

        $sql = '
        select
            cr.*, u.nickname
        from chat_rooms cr
        inner join users u
            on cr.client_id = u.id
        where cr.client_id = :client_id
            or cr.agent_id = :agent_id
            and cr.del_flg != 1
            and u.del_flg != 1
        order by cr.updated_at asc
        ';

        $result = $db->select($sql, [':agent_id' => $user->id, ':client_id' => $user->id], DataSource::CLS, ChatModel::class);

        return $result;
    }

    public static function fetchALLChats($chat_room_id)
    {
        $db = new DataSource;
        $sql = '
        select
            cm.chat_room_id,cm.user_id,cm.message,cm.created_at, u.nickname
        from chat_messages cm
        inner join users u
            on cm.user_id = u.id
        where cm.chat_room_id = :id
            and cm.del_flg != 1
            and u.del_flg != 1
        order by cm.created_at asc
        ';

        $result = $db->select($sql, [':id' => $chat_room_id], DataSource::CLS, ChatModel::class);

        return $result;
    }

    public static function insert($params)
    {
        // if (!(
        //     $match->isValidMatchType()
        //     // * $match->isValidUserId()
        //     // * $match->isValidOpponentId()
        //     // * $match->isValidWinFlg()
        // )) {
        //     return false;
        // }
        $db = new DataSource;

        $sql = 'insert into chat_messages(
                    chat_room_id,
                    user_id,
                    message,
                    created_at
                ) values (
                    :chat_room_id,
                    :user_id,
                    :message,
                    :created_at
                )';

        return $db->execute($sql, [
            ':chat_room_id' => (int)$params['chat_room_id'],
            ':user_id' => (int)$params['user_id'],
            ':message' => $params['message'],
            ':created_at' => date('Y-m-d H:i:s'),
        ], true);
    }
}
