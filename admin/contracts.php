<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['new'])){
    DB::table('contracts')->insert([
        'title'=>$_POST['title'],
        'description'=>$_POST['desc'],
        'status'=>(isset($_POST['status']))?1:0,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $ok = "Yeni Sözleşme başarıyla eklendi";
}

if(isset($_POST['update-cont'])){
    DB::table('contracts')->where('cid',$_POST['update-cont'])->update([
        'title'=>$_POST['title'],
        'description'=>$_POST['desc'],
        'status'=>(isset($_POST['status']))?1:0,
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $ok = "Sözleşme başarıyla güncellendi";
}

if(isset($_POST['delete-row'])){
    DB::table('contracts')->where('cid',$_POST['delete-row'])->delete();
    $ok = "Sözleşme başarıyla silindi";
}

try {
    $cons = DB::table('contracts')->get();
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('cons',$cons);
$smarty->display('header.tpl');
$smarty->display('contracts.tpl');
$smarty->display('footer.tpl');
