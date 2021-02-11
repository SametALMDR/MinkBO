<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['delete-row'])){
    $pid = $_POST['delete-row'];
    $users = DB::table('users')->get();
    foreach ($users as $user) {
        $user->saved_posts = json_decode($user->saved_posts);
        $list = [];
        foreach ($user->saved_posts as $p) {
            if($p != $pid){
                $list[] = $p;
            }
        }
        DB::table('users')->where('uid',$user->uid)->update([
            'saved_posts'=>json_encode($list)
        ]);
    }
    $comments = DB::table('comments')->where('pid',$_POST['delete-row'])->get();
    foreach ($comments as $comment) {
        DB::table('comments')->where('comment_id',$comment->comment_id)->delete();
    }
    DB::table('comments')->where('pid',$_POST['delete-row'])->delete();
    DB::table('notifications')->where('post_id',$_POST['delete-row'])->delete();
    DB::table('reports')->where('reported_pid',$_POST['delete-row'])->delete();
    DB::table('posts')->where('pid',$_POST['delete-row'])->delete();
    $ok = "Gönderi başarıyla silindi";
}

try {
    $posts = DB::table('posts')
        ->join('users','users.uid','=','posts.uid')
        ->select('posts.*','users.name as name','users.surname')
        ->get();
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('posts',$posts);
$smarty->display('header.tpl');
$smarty->display('posts.tpl');
$smarty->display('footer.tpl');
