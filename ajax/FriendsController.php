<?php

require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['remove_friend'])){
    try {
        /**
         * For logged user
         */
        $friends = DB::table('users')->where('uid',$_SESSION['user'])->value('friends');
        $friends = json_decode($friends);
        $list = [];
        foreach ($friends as $friend) {
            if($friend != $_POST['uid']){
                $list[] = $friend;
            }
        }
        $friends = json_encode($list);
        DB::table('users')->where('uid',$_SESSION['user'])->update([
            'friends'=> $friends
        ]);
        /**
         * For deleted user
         */
        $other_friens   = DB::table('users')->where('uid',$_POST['uid'])->value('friends');
        $other_friens = json_decode($other_friens);
        $list = [];
        foreach ($other_friens as $friend) {
            if($friend != $_SESSION['user']){
                $list[] = $friend;
            }
        }
        $other_friens = json_encode($list,true);
        DB::table('users')->where('uid',$_POST['uid'])->update([
            'friends'=> $other_friens
        ]);
        $res = [
            'status'=>1,
            'message'=> "Arkadaş listesinden silindi."
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