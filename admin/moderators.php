<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['new'])){
    DB::table('moderators')->insert([
        'name'=> $_POST['name'],
        'surname'=> $_POST['surname'],
        'email'=> $_POST['email'],
        'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
        'address'=> $_POST['address'],
        'phone'=> $_POST['phone'],
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $ok = "Yeni moderatör başarıyla oluşturuldu";
}

if(isset($_POST['update-admin'])){
    if(!empty($_POST['password'])){
        DB::table('moderators')->where('mid',$_POST['id'])->update([
            'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT),
        ]);
    }
    DB::table('moderators')->where('mid',$_POST['id'])->update([
        'name'=> $_POST['name'],
        'surname'=> $_POST['surname'],
        'email'=> $_POST['email'],
        'address'=> $_POST['address'],
        'phone'=> $_POST['phone'],
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $ok = "Moderatör başarıyla güncellendi";
}

if(isset($_POST['delete-row'])){
    DB::table('moderators')->where('mid',$_POST['delete-row'])->delete();
    $ok = "Moderatör başarıyla silindi";
}

try {
    $admins = DB::table('moderators')->get();
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('admins',$admins);
$smarty->display('header.tpl');
$smarty->display('moderators.tpl');
$smarty->display('footer.tpl');
