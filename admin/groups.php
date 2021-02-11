<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['delete-row'])){
    $gid = $_POST['delete-row'];
    $users = DB::table('users')->get();
    $posts = DB::table('posts')->where('gid',$gid)->get();
    foreach ($posts as $post) {
        /**
         * Kullanıcılardan postidler siliniyor
         */
        foreach ($users as $user) {
            $user->saved_posts = json_decode($user->saved_posts);
            $list = [];
            foreach ($user->saved_posts as $p) {
                if($p != $post->pid){
                    $list[] = $p;
                }
            }
            DB::table('users')->where('uid',$user->uid)->update([
                'saved_posts'=>json_encode($list)
            ]);
        }
        /**
         * Posta ait yorumlar ve raporlar siliniyor
         */
        $comments = DB::table('comments')->where('pid',$post->pid)->get();
        foreach ($comments as $comment) {
            DB::table('reports')->where('reported_cid',$comment->comment_id)->delete();
        }
        DB::table('comments')->where('pid',$post->pid)->delete();
        DB::table('reports')->where('reported_pid',$post->pid)->delete();
        DB::table('notifications')->where('post_id',$post->pid)->delete();
    }
    DB::table('posts')->where('gid',$gid)->delete();
    DB::table('reports')->where('reported_gid',$_POST['delete-row'])->delete();
    DB::table('groups')->where('gid',$_POST['delete-row'])->delete();
    $ok = "Grup başarıyla silindi";
}

try {
    $grs = DB::table('groups')
        ->join('users','users.uid','=','groups.owner_uid')
        ->select('groups.*','users.name as uname','users.surname','users.uid')
        ->get();
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('grs',$grs);
$smarty->display('header.tpl');
$smarty->display('groups.tpl');
$smarty->display('footer.tpl');
