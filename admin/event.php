<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(!isset($_GET['eid'])){
    redirect('events.php');
}

$ok_at = "";
$err_at = false;
$errors_at = [];

if(isset($_POST['remove_user'])){
    try{
        $list = [];
        $userss = DB::table('events')->where('eid',$_GET['eid'])->value('users');
        $userss = json_decode($userss);
        foreach ($userss as $u){
            if($u != $_POST['remove_user']){
                $list[] = $u;
            }
        }
        DB::table('events')->where('eid',$_GET['eid'])->update([
            'users'=>json_encode($list)
        ]);
        $ok_at = "Etkinlik katılımcıları güncellendi";
    }catch (Exception $e){
        $err_at = true;
        $errors_at[] = $e->getMessage();
    }
}

try {
    if(isset($_POST['update_event'])){
        DB::table('events')->where('eid',$_GET['eid'])->update([
            'name'=>$_POST['name'],
            'description'=>$_POST['description'],
            'location'=>$_POST['location'],
            'event_time'=>$_POST['event_time'],
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        $ok = "Etkinlik bilgileri güncellendi";
    }

    $ev = DB::table('events')->where('eid',$_GET['eid'])->get()[0];
    $ev->ex_time = date('Y-m-d',strtotime($ev->event_time))."T".date('H:i:s',strtotime($ev->event_time));
    $ev->attends = [];
    $ev->users = json_decode($ev->users);
    foreach ($ev->users as $u) {
        $ev->attends[] = DB::table('users')->where('uid',$u)->get();
    }
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}

$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('ok_at',$ok_at);
$smarty->assign('error_at',$err_at);
$smarty->assign('errors_at',$errors_at);
$smarty->assign('ev',$ev);
$smarty->display('header.tpl');
$smarty->display('event.tpl');
$smarty->display('footer.tpl');
