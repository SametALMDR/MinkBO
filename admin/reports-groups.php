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
        ->join('users','uid','=','reports.sender_uid')
        ->where('reports.reported_gid','!=',null)
        ->select('reports.*','users.uid','users.name','users.surname')
        ->get();
    DB::table('reports')->where('reports.reported_gid','!=',null)->update([
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
$smarty->display('reports-groups.tpl');
$smarty->display('footer.tpl');
