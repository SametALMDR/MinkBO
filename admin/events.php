<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['delete-row'])){
    DB::table('notifications')->where('event_id',$_POST['delete-row'])->delete();
    DB::table('reports')->where('reported_eid',$_POST['delete-row'])->delete();
    DB::table('events')->where('eid',$_POST['delete-row'])->delete();
    $ok = "Etkinlik başarıyla silindi";
}

try {
    $evs = DB::table('events')
        ->join('users','users.uid','=','events.owner_uid')
        ->select('events.*','users.name as uname','users.surname','users.uid')
        ->get();
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('evs',$evs);
$smarty->display('header.tpl');
$smarty->display('events.tpl');
$smarty->display('footer.tpl');
