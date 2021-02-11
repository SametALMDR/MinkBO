<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['delete-row'])){
    DB::table('reports')->where('rid',$_POST['delete-row'])->delete();
    $ok = "Rapor başarıyla silindi";
}

try {
    $reports = DB::table('reports')
        ->join('users as u1','u1.uid','=','reports.reported_uid')
        ->join('users as u2','u2.uid','=','reports.sender_uid')
        ->where('reports.reported_uid','!=',null)
        ->select('reports.*','u1.name as u1name','u2.name as u2name','u1.uid as u1uid','u2.uid as u2uid','u1.surname as u1surname','u2.surname as u2surname')
        ->get();
    DB::table('reports')->where('reports.reported_uid','!=',null)->update([
        'unread'=>0
    ]);
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('reports',$reports);
$smarty->display('header.tpl');
$smarty->display('reports-users.tpl');
$smarty->display('footer.tpl');
