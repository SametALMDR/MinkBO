<?php

require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['read_fr_notification'])){
    try {
        DB::table('friend_requests')->where('id',$_POST['rid'])->update(['unread'=>0]);
        $res = [
            'status'=>1,
            'message'=> "Bildirim okundu."
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

if(isset($_POST['read_not_notification'])){
    try {
        DB::table('notifications')->where('nid',$_POST['nid'])->update(['unread'=>0]);
        $res = [
            'status'=>1,
            'message'=> "Bildirim okundu."
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

if(isset($_POST['set_all_readed'])){
    try {
        DB::table('friend_requests')->update(['unread'=>0]);
        DB::table('notifications')->update(['unread'=>0]);
        $res = [
            'status'=>1,
            'message'=> "Bildirimler okundu."
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

if(isset($_POST['get_new_friend_notifications'])){
    try {
        $FriendRequests = DB::table('friend_requests')
            ->where('friend_uid',$_SESSION['user'])
            ->orderBy('friend_requests.created_at','DESC')
            ->limit(2)
            ->get();
        foreach ($FriendRequests as $i => $FriendRequest) {
            $fuser = DB::table('users')->where('uid',$FriendRequest->uid)->select('uid','name','surname','image')->get();
            $fuser = $fuser[0];
            $FriendRequests[$i]->uid = $fuser->uid;
            $FriendRequests[$i]->image = $fuser->image;
            $FriendRequests[$i]->message = "<b>".ucfirst($fuser->name)." ".ucfirst($fuser->surname)."</b> adlı kişiden arkadaşlık isteği aldınız.";
        }
        $res = [
            'status'=>1,
            'data'=> $FriendRequests
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }
}