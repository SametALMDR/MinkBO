<?php

require_once 'init.php';
require_once 'includes/functions.php';
use Illuminate\Database\Capsule\Manager as DB;

if(!isset($_SESSION['user'])){
    redirect('login.php');
}

$UpdatePost = "";
$NewPost = "";
$NewPostError =  false;
$NewPostErrors = [];

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
    $posts = DB::table('posts')
        ->where([
            ['posts.uid','=',$who],
            ['posts.type','=','normal'],
            ['posts.gid','=',null]
        ])
        ->join('users','users.uid','=','posts.uid')
        ->select('users.name','users.surname','posts.*')
        ->orderBy('posts.created_at','DESC')
        ->get();
    foreach ($posts as $i => $post) {
        $posts[$i]->comments = DB::table('comments')
            ->where([
                ['comments.pid','=',$post->pid],
                ['comments.comment_parent','=','0']
            ])
            ->join('users','users.uid','=','comments.uid')
            ->select('comments.*','users.name','users.surname','users.image')
            ->get();
        foreach ($posts[$i]->comments as $k => $comment) {
            $posts[$i]->comments[$k]->created_at = time_difference($comment->created_at);
            $posts[$i]->comments[$k]->subcomments = DB::table('comments')
                ->where('comments.comment_parent','=',$comment->comment_id)
                ->join('users','users.uid','=','comments.uid')
                ->select('comments.*','users.name','users.surname','users.image')
                ->get();
            foreach ($posts[$i]->comments[$k]->subcomments as $x => $subcomment) {
                $posts[$i]->comments[$k]->subcomments[$x]->created_at = time_difference($subcomment->created_at);
            }
        }
        $posts[$i]->attachments = json_decode($post->attachments,true);
        $likes = json_decode($post->likes);
        if(in_array($_SESSION['user'],$likes)){
            $posts[$i]->liked = 1;
        }else{
            $posts[$i]->liked = 0;
        }
        $posts[$i]->likes = count($likes);
        $posts[$i]->created_at  = time_difference($post->created_at);
    }

    $history = DB::table('users_ip_history')->where('uid',$_SESSION['user'])->get();

}catch (Exception $e){
    $error = true;
    $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
}

$smarty->assign('ok',$ok); // for profile update
$smarty->assign('NewPost',$NewPost); // for profile update
$smarty->assign('UpdatePost',$UpdatePost); // for profile update
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('posts',$posts);
$smarty->assign('user',$user);
$smarty->assign('me',$me);
$smarty->assign('history',$history);
$smarty->display('header.tpl');
$smarty->display('account.tpl');
$smarty->display('footer.tpl');
