<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

try {
    if(isset($_POST['update'])){
        DB::table('config')->where('c_name','smtp_port')->update([
            'c_value'=>$_POST['port']
        ]);
        DB::table('config')->where('c_name','smtp_host')->update([
            'c_value'=>$_POST['host']
        ]);
        DB::table('config')->where('c_name','smtp_username')->update([
            'c_value'=>$_POST['username']
        ]);
        DB::table('config')->where('c_name','smtp_password')->update([
            'c_value'=>$_POST['password']
        ]);
        DB::table('config')->where('c_name','smtp_sender_email')->update([
            'c_value'=>$_POST['email']
        ]);
        DB::table('config')->where('c_name','smtp_sender_name')->update([
            'c_value'=>$_POST['sender']
        ]);
        $ok = "Genel ayarlar güncellendi";
    }

    $port = DB::table('config')->where('c_name','smtp_port')->value('c_value');
    $host = DB::table('config')->where('c_name','smtp_host')->value('c_value');
    $username = DB::table('config')->where('c_name','smtp_username')->value('c_value');
    $password = DB::table('config')->where('c_name','smtp_password')->value('c_value');
    $email = DB::table('config')->where('c_name','smtp_sender_email')->value('c_value');
    $sender = DB::table('config')->where('c_name','smtp_sender_name')->value('c_value');
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}

$smarty->assign('port',$port);
$smarty->assign('host',$host);
$smarty->assign('username',$username);
$smarty->assign('password',$password);
$smarty->assign('email',$email);
$smarty->assign('sender',$sender);
$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->display('header.tpl');
$smarty->display('settings.tpl');
$smarty->display('footer.tpl');
