<?php
require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['profile_pp_update'])){
    $target_dir = "../img/users/".$lguser[0]->uid."/";
    if(!file_exists($target_dir)){
        mkdir($target_dir);
    }
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir."default.".$imageFileType)) {
        try {
            DB::table('users')->where('uid',$lguser[0]->uid)->update([
                'image'=> "users/".$lguser[0]->uid."/default.".$imageFileType
            ]);
            $res = [
                'status'=>1,
                'message'=> "Dosya Yüklendi"
            ];
            echo json_encode($res);
        }catch (Exception $e){
            $res = [
                'status'=>0,
                'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
            ];
            echo json_encode($res);
        }
    } else {
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu. Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }

}

if(isset($_POST['profile_cover_update'])){
    $target_dir = "../img/users/".$lguser[0]->uid."/";
    if(!file_exists($target_dir)){
        mkdir($target_dir);
    }
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir."def-banner.".$imageFileType)) {
        try {
            DB::table('users')->where('uid',$lguser[0]->uid)->update([
                'banner'=> "users/".$lguser[0]->uid."/def-banner.".$imageFileType
            ]);
            $res = [
                'status'=>1,
                'message'=> "Dosya Yüklendi"
            ];
            echo json_encode($res);
        }catch (Exception $e){
            $res = [
                'status'=>0,
                'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
            ];
            echo json_encode($res);
        }
    } else {
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu. Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }

}

if(isset($_POST['friend_request'])){
    try {
        DB::table('friend_requests')->insert([
            'uid'=>$_POST['uid'],
            'friend_uid'=> $_POST['fid'],
            'unread' => '1',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
        /*
        DB::table('user_notifications')->insert([
            'message'=>'<b>Samet</b> tarafından arkadaşlık isteği aldınız.',
            'uid'=> $_POST['fid'],
            'unread'=>1,
            'req_user_id'=>$_POST['uid'],
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
        */
        $res = [
            'status'=>1,
            'message'=> "İstek gönderildi"
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

if(isset($_POST['accept_friend_request'])){
    try {
        $other_user = DB::table('friend_requests')->where(['id'=>$_POST['rid']])->value('uid');
        $u1 = DB::table('users')->where('uid',$other_user)->value('friends');
        $u2 = DB::table('users')->where('uid',$lguser[0]->uid)->value('friends');
        $u1 = json_decode($u1);
        $u2 = json_decode($u2);
        $u1[] = $lguser[0]->uid;
        $u2[] = $other_user;
        $u1 = json_encode($u1);
        $u2 = json_encode($u2);
        DB::table('users')->where('uid',$other_user)->update(['friends'=>$u1]);
        DB::table('users')->where('uid',$lguser[0]->uid)->update(['friends'=>$u2]);
        DB::table('friend_requests')->where(['id'=>$_POST['rid']])->delete();
        $res = [
            'status'=>1,
            'message'=> "İstek kabul edildi."
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

if(isset($_POST['remove_friend_request'])){
    try {
        DB::table('friend_requests')->where(['id'=>$_POST['rid']])->delete();
        $res = [
            'status'=>1,
            'message'=> "İstek silindi"
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

if(isset($_POST['del_friend_request'])){
    try {
        DB::table('friend_requests')->where([
            'uid'=>$_POST['uid'],
            'friend_uid'=> $_POST['fid']
        ])->delete();
        $res = [
            'status'=>1,
            'message'=> "İstek gönderildi"
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

if(isset($_POST['change_secret'])){
    try {
        DB::table('users')->where('uid',$_SESSION['user'])->update([
            'secret_opt_name'=> $_POST['opt']
        ]);
        $res = [
            'status'=>1,
            'message'=> "Ayar güncellendi"
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