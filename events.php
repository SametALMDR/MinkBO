<?php

require_once 'init.php';
use Illuminate\Database\Capsule\Manager as DB;

if(!isset($_SESSION['user'])){
    redirect('login.php');
}
$event_ok = "";
$event_error  = false;
$event_errors = [];

$event_up_ok = "";
$event_up_error  = false;
$event_up_errors = [];

$event_del_ok = "";
$event_del_error  = false;
$event_del_errors = [];

if(isset($_POST['new_event'])){
    try {
        DB::table('events')->insert([
            'owner_uid'=> $_SESSION['user'],
            'name'=>$_POST['name'],
            'users'=>json_encode([$_SESSION['user']]),
            'description'=>$_POST['description'],
            'location' => $_POST['location'],
            'event_time'=>$_POST['time'],
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
        $event_ok = "Etkinlik oluşturuldu.";
    }catch (Exception $e){
        $event_error = true;
        $event_errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['update_event'])){
    try {
        DB::table('events')->where('eid',$_POST['eid'])->update([
            'name'=>$_POST['name'],
            'description'=>$_POST['description'],
            'location' => $_POST['location'],
            'event_time'=>$_POST['time'],
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
        $event_up_ok = "Etkinlik güncellendi";
    }catch (Exception $e){
        $event_up_error = true;
        $event_up_errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['cancel'])){
    try {
        DB::table('events')->where('eid',$_POST['eid'])->delete();
        $event_del_ok = "Etkinlik iptal edildi.";
    }catch (Exception $e){
        $event_del_error = true;
        $event_del_errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['logout'])){
    $id = $_SESSION['user'];
    $json = DB::table('events')
        ->where('eid',$_POST['eid'])
        ->value('users');
    $json = json_decode($json);
    $list = [];
    foreach ($json as $j) {
        if($id != $j){
            $list[] = $j;
        }
    }

    try {
        DB::table('events')
            ->where('eid',$_POST['eid'])
            ->update([
                'users'=> json_encode($list)
            ]);
        $event_del_ok = "Etkinlikten katılmaktan vazgeçtiniz.";
    }catch (Exception $e){
        $event_del_error = true;
        $event_del_errors[] = $e->getMessage();
    }
}

try {
    $lgid = $_SESSION['user'];
    $events = DB::table('events')
        ->join('users','users.uid','=','events.owner_uid')
        ->whereRaw("JSON_CONTAINS(users,'$lgid')")
        ->orWhere("owner_uid",'=',$_SESSION['user'])
        ->orderBy('event_time','ASC')
        ->select('events.*','users.name as uname','users.surname', DB::raw('JSON_LENGTH(events.users) as total'))
        ->get();

}catch (Exception $e){
    $error = true;
    $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
}

$smarty->assign('ok',$ok); // for profile update
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('event_ok',$event_ok); // for profile update
$smarty->assign('event_error',$event_error);
$smarty->assign('event_errors',$event_errors);
$smarty->assign('event_up_ok',$event_up_ok);
$smarty->assign('event_up_error',$event_up_error);
$smarty->assign('event_up_errors',$event_up_errors);
$smarty->assign('event_del_ok',$event_del_ok);
$smarty->assign('event_del_error',$event_del_error);
$smarty->assign('event_del_errors',$event_del_errors);
$smarty->assign('events',$events);
$smarty->display('header.tpl');
$smarty->display('events.tpl');
$smarty->display('footer.tpl');
