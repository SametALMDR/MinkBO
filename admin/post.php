<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(!isset($_GET['pid'])){
    redirect('posts.php');
}

$ok_at = "";
$err_at = false;
$errors_at = [];

try {
    if(isset($_POST['update-comment'])){
        DB::table('comments')->where('comment_id',$_POST['cid'])->update([
            'comment'=>$_POST['comment']
        ]);
        $ok = "Yorum başarıyla güncellendi";
    }
    if(isset($_POST['delete-comment'])){
        DB::table('reports')->where('reported_cid',$_POST['delete-comment'])->delete();
        DB::table('comments')->where('comment_parent',$_POST['delete-comment'])->delete();
        DB::table('comments')->where('comment_id',$_POST['delete-comment'])->delete();
        $ok = "Yorum gönderiden silindi";
    }
    if(isset($_POST['update_post'])){
        DB::table('posts')->where('pid',$_GET['pid'])->update([
            'content'=>$_POST['description'],
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        $ok = "Gönderi bilgileri güncellendi";
    }
    if(isset($_POST['remove-file'])){
        $att = DB::table('posts')->where('pid',$_GET['pid'])->value('attachments');
        $att = json_decode($att);
        $list = [];
        foreach ($att as $a) {
            foreach ($a as $type => $name) {
                if($name != $_POST['remove-file']){
                    $list[$type] = $name;
                }
            }
        }
        if(count($list)){
            $up = "[".json_encode($list)."]";
        }else{
            $up = json_encode($list);
        }
        DB::table('posts')->where('pid',$_GET['pid'])->update([
            'attachments'=> $up
        ]);
        $ok = "Dosya gönderi içerisinden silindi";
    }

    $post = DB::table('posts')
        ->join('users','users.uid','=','posts.uid')
        ->where('posts.pid',$_GET['pid'])
        ->select('posts.*','users.name as uname','users.surname','users.uid')
        ->get()[0];
    $post->likes = json_decode($post->likes);
    $post->attachments = json_decode($post->attachments);
    $post->likes_users = [];
    foreach ($post->likes as $u) {
        $post->likes_users[] = DB::table('users')->where('uid',$u)->get();
    }
    $comments = DB::table('comments')
        ->join('users','users.uid','=','comments.uid')
        ->where('comments.pid',$_GET['pid'])
        ->select('comments.*','users.name as name','users.surname','users.uid')
        ->orderBy('created_at','DESC')
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
$smarty->assign('post',$post);
$smarty->assign('comments',$comments);
$smarty->display('header.tpl');
$smarty->display('post.tpl');
$smarty->display('footer.tpl');
