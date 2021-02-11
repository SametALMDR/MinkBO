<?php

require_once 'init.php';
require_once 'includes/functions.php';
use Illuminate\Database\Capsule\Manager as DB;

if(!isset($_SESSION['user'])){
    redirect('login.php');
}

try{
    $who ="";
    $me = false;
    if(isset($_GET['uid'])){
        $who    = $_GET['uid'];
        $user   = DB::table('users')->where('uid',$_GET['uid'])->get()[0];
    }else{
        $who    = $lguser[0]->uid;
        $user   = $lguser[0];
        $me     = true;
    }
    $RealFriends = [];
    $friends = DB::table('users')->where('uid',$who)->value('friends');
    $friends = json_decode($friends);
    foreach ($friends as $i => $friend) {
        $uu = DB::table('users')->where('uid',$friend)->select('uid','name','surname','username','image')->get();
        $RealFriends[] = [$uu[0]->name." ".$uu[0]->surname."(".$uu[0]->username.")",$uu[0]->image,$uu[0]->uid];
    }
}catch (Exception $e){
    $error = true;
    $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    echo $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('user',$user);
$smarty->assign('me',$me);
$smarty->assign('RealFriends',$RealFriends);

$smarty->display('header.tpl');
$smarty->display('friends.tpl');
$smarty->display('footer.tpl');
