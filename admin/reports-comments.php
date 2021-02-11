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
if(isset($_POST['update-comment'])){
    DB::table('comments')->where('comment_id',$_POST['cid'])->update([
        'comment'=>$_POST['desc']
    ]);
    $ok = "Yorum başarıyla güncellendi";
}
if(isset($_POST['remove-comment'])){
    DB::table('reports')->where('reported_cid',$_POST['cid'])->delete();
    DB::table('comments')->where('comment_parent',$_POST['cid'])->delete();
    DB::table('comments')->where('comment_id',$_POST['cid'])->delete();
    $ok = "Yorum ve rapor silindi";
}
try {
    $reports = DB::table('reports')
        ->join('users','uid','=','reports.sender_uid')
        ->join('comments','comments.comment_id','=','reports.reported_cid')
        ->where('reports.reported_cid','!=',null)
        ->select('reports.*','users.uid','users.name','users.surname','comments.comment','comments.comment_id')
        ->get();
    DB::table('reports')->where('reports.reported_cid','!=',null)->update([
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
$smarty->display('reports-comments.tpl');
$smarty->display('footer.tpl');
