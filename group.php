<?php

require_once 'init.php';
use Illuminate\Database\Capsule\Manager as DB;

if(!isset($_SESSION['user'])){
    redirect('login.php');
}
if(!isset($_GET['gid'])){
    redirect('index.php');
}

$UpdatePost = "";
$NewPost = "";
$NewPostError =  false;
$NewPostErrors = [];

if(isset($_POST['share-post'])){
    try {
        $attachments = [];
        if(!empty($_FILES['files']['name'][0])){
            if(!file_exists(USERFILE_DIR)){
                mkdir(USERFILE_DIR);
            }
            foreach ($_FILES as $FILE) {
                foreach ($FILE['name'] as $i => $name) {
                    if(!$NewPostError) {
                        $target_file = USERFILE_DIR . basename($name);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $file_name = time()."-".$lguser[0]->uid."-".$i.".".$imageFileType;
                        if (move_uploaded_file($FILE["tmp_name"][$i], USERFILE_DIR.$file_name)) {
                            $type = explode('/',$FILE["type"][$i]);
                            $attachments[] = [ $type[0] => $file_name ];
                        }else{
                            $NewPostError = true;
                            $NewPostErrors[] = "Dosyalar yüklenirken bir hata oluştu.";
                        }
                    }
                }

            }
        }
        $attachments = json_encode($attachments);
        if(!$NewPostError){
            DB::table('posts')->insert([
                'uid'=>$lguser[0]->uid,
                'gid'=>$_GET['gid'],
                'content'=>$_POST['share'],
                'attachments'=>$attachments,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
            $NewPost = "Gönderi oluşturuldu.";
        }
    }catch (Exception $e){
        $NewPostError = true;
        $NewPostErrors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['update-post'])){
    try {
        $attachments_real = DB::table('posts')->where('pid',$_POST['postid'])->value('attachments');
        $attachments_real = json_decode($attachments_real);
        $attachments = [];
        foreach ($attachments_real as $attachment) {
            $attachments[] = $attachment;
        }
        if(!empty($_FILES['files']['name'][0])){
            if(!file_exists(USERFILE_DIR)){
                mkdir(USERFILE_DIR);
            }
            foreach ($_FILES as $FILE) {
                foreach ($FILE['name'] as $i => $name) {
                    if(!$NewPostError) {
                        $target_file = USERFILE_DIR . basename($name);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $file_name = time()."-".$lguser[0]->uid."-".$i.".".$imageFileType;
                        if (move_uploaded_file($FILE["tmp_name"][$i], USERFILE_DIR.$file_name)) {
                            $type = explode('/',$FILE["type"][$i]);
                            $attachments[] = [ $type[0] => $file_name ];
                        }else{
                            $NewPostError = true;
                            $NewPostErrors[] = "Dosyalar yüklenirken bir hata oluştu.";
                        }
                    }
                }

            }
        }
        $attachments = json_encode($attachments);
        if(!$NewPostError){
            DB::table('posts')->where('pid',$_POST['postid'])->update([
                'content'=>$_POST['share'],
                'attachments'=>$attachments,
                'updated_at'=>date('Y-m-d H:i:s')
            ]);

            $UpdatePost = "Gönderi güncellendi.";
        }
    }catch (Exception $e){
        $NewPostError = true;
        $NewPostErrors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

try {
    $gid = $_GET['gid'];
    $g_info = DB::table('groups')->where('gid',$gid)->get()[0];
    $posts = DB::table('posts')
        ->where('posts.gid',$gid)
        ->join('users','users.uid','=','posts.uid')
        ->select('users.image','users.name','users.surname','posts.*')
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
}catch (Exception $e){
    $error = true;
    $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
}

$smarty->assign('ok',$ok); // for profile update
$smarty->assign('g_info',$g_info); // for profile update
$smarty->assign('NewPost',$NewPost); // for profile update
$smarty->assign('UpdatePost',$UpdatePost); // for profile update
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('posts',$posts);
$smarty->display('header.tpl');
$smarty->display('group.tpl');
$smarty->display('footer.tpl');
