<?php
namespace controller\chat;

use lib\Auth;
use model\UserModel;
use db\UserQuery;
use db\ChatQuery;
use model\profile\MatchModel;
use db\profile\MatchQuery;

function get()
{
    Auth::requireLogin();
    $user = UserModel::getSession();

    $room_id = get_param('room_id', null, false);
    //ユーザー権限
    // if (!empty($user)) {
    //     //リダイレクト処理
    // }
    if ($room_id) {
        $init_chat_room = ChatQuery::fetchInitChatRoomByRoomId($room_id);
    } else {
        $init_chat_room = ChatQuery::fetchInitChatRoom($user);
    }

    $chat_rooms = ChatQuery::fetchALLChatRooms($user);
    $chats = ChatQuery::fetchALLChats($init_chat_room->id);

    $params['init_chat_room'] = $init_chat_room;
    $params['chat_rooms'] = $chat_rooms;
    $params['chats'] = $chats;
    $params['user'] = $user;
    // echo '<pre>';
    // print_r($params);
    // echo '</pre>';
    // exit;
    \view\chat\index($params);
}
