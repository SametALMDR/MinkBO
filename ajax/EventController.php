<?php

require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['join_event'])){
    try {
        $users= DB::table('events')->where('eid',$_POST['eid'])->value('users');
        $list = [];
        $users = json_decode($users);
        foreach ($users as $user) {
            $list[] = $user;
        }
        $list[] = $_SESSION['user'];
        DB::table('events')->where('eid',$_POST['eid'])->update([
           'users' =>  json_encode($list)
        ]);
        $res = [
            'status'=>1,
            'message'=> "Etkinliğe katıldınız."
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