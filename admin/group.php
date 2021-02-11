<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(!isset($_GET['gid'])){
    redirect('groups.php');
}

$ok_at = "";
$err_at = false;
$errors_at = [];

if(isset($_POST['remove_user'])){
    try{
        $list = [];
        $userss = DB::table('groups')->where('gid',$_GET['gid'])->value('users');
        $userss = json_decode($userss);
        foreach ($userss as $u){
            if($u != $_POST['remove_user']){
                $list[] = $u;
            }
        }
        DB::table('groups')->where('gid',$_GET['gid'])->update([
            'users'=>json_encode($list)
        ]);
        $ok_at = "Grup katılımcıları güncellendi";
    }catch (Exception $e){
        $err_at = true;
        $errors_at[] = $e->getMessage();
    }
}

try {
    if(isset($_POST['update_group'])){
        DB::table('groups')->where('gid',$_GET['gid'])->update([
            'name'=>$_POST['name'],
            'description'=>$_POST['description'],
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        $ok = "Grup bilgileri güncellendi";
    }

    $gr = DB::table('groups')->where('gid',$_GET['gid'])->get()[0];
    $gr->attends = [];
    $gr->users = json_decode($gr->users);
    foreach ($gr->users as $u) {
        $gr->attends[] = DB::table('users')->where('uid',$u)->get();
    }
    $posts = DB::table('posts')
        ->join('users','users.uid','=','posts.uid')
        ->where('gid',$_GET['gid'])
        ->select('posts.*','users.name as uname','users.surname','users.uid')
        ->get();
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
$smarty->assign('gr',$gr);
$smarty->assign('posts',$posts);
$smarty->display('header.tpl');
$smarty->display('group.tpl');
$smarty->display('footer.tpl');
