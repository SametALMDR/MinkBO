<?php

require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['get_messages'])){
    try {
        $messages = DB::table('messages')
            ->where([
                ['sender_uid','=',$_SESSION['user']],
                ['receiver_uid','=',$_POST['receiver']]
            ])
            ->orWhere([
                ['sender_uid','=',$_POST['receiver']],
                ['receiver_uid','=',$_SESSION['user']]
            ])
            ->get();
        $res = [
            'status'=>1,
            'message'=> "OK",
            'data'=> $messages
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> $e->getMessage()
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['read_message'])){
    try {
        $messages = DB::table('messages')
            ->where([
                ['sender_uid','=',$_POST['sender_uid']],
                ['receiver_uid','=',$_SESSION['user']]
            ])
            ->update([
                'receiver_unread'=>0
            ]);
        $res = [
            'status'=>1,
            'message'=> "OK",
            'data'=> $messages
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> $e->getMessage()
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['scan_messages'])){
    try {
        $messages = DB::table('messages')
            ->where([
                ['receiver_uid','=',$_SESSION['user']],
                ['receiver_unread','=',1]
            ])
            ->get();
        $res = [
            'status'=>1,
            'message'=> "OK",
            'data'=> $messages
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> $e->getMessage()
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['send_message'])){
    try {
        DB::table('messages')->insert([
            'sender_uid'=>$_POST['sender'],
            'receiver_uid'=>$_POST['receiver'],
            'receiver_unread'=>1,
            'message'=>$_POST['message'],
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        $res = [
            'status'=>1,
            'message'=> "OK",
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> $e->getMessage()
        ];
        echo json_encode($res);
    }
}