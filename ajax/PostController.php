<?php

require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['remove_post_file'])){
    try {
        $attachments = DB::table('posts')->where('pid',$_POST['pid'])->value('attachments');
        $attachments = json_decode($attachments,true);
        $content = DB::table('posts')->where('pid',$_POST['pid'])->value('content');
        if(count($attachments) == 1){
            if(empty($content)){
                $error = true;
                $res = [
                    'status'=>0,
                    'message'=> "Genel içerik boş olamaz!"
                ];
                echo json_encode($res);
            }
        }
        if(!$error){
            if(file_exists("../files/users/".$lguser[0]->uid."/".$_POST['filename'])){
                unlink("../files/users/".$lguser[0]->uid."/".$_POST['filename']);
            }
            $arr = [];
            foreach ($attachments as $key => $attachment) {
                foreach ($attachment as $type => $a) {
                    if($a != $_POST['filename']){
                        $arr[] = [$type=>$a];
                    }
                }
            }
            $attachments = json_encode($arr);
            DB::table('posts')->where('pid',$_POST['pid'])->update([
                'attachments'=>$attachments
            ]);
            $res = [
                'status'=>1,
                'message'=> "Dosya gönderiden kaldırıldı"
            ];
            echo json_encode($res);

        }
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['remove_post'])){
    try {
        $attachments = DB::table('posts')->where('pid',$_POST['pid'])->value('attachments');
        $attachments = json_decode($attachments);
        if (($key = array_search($_POST['filename'],$attachments)) !== false) {
            unset($attachments[$key]);
        }
        $attachments = json_encode($attachments);
        DB::table('posts')->where('pid',$_POST['pid'])->update([
            'attachments'=>$attachments
        ]);
        $res = [
            'status'=>1,
            'message'=> "Dosya Yüklendi"
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['like_post'])){
    try {
        $req_uid = DB::table('posts')->where('pid',$_POST['pid'])->value('uid');
        $likes = DB::table('posts')->where('pid',$_POST['pid'])->value('likes');
        $likes = json_decode($likes);
        $likes[] = $_SESSION['user'];
        $likes = json_encode($likes);
        DB::table('posts')->where('pid',$_POST['pid'])->update([
            'likes'=>$likes
        ]);
        if($req_uid != $_SESSION['user']){
            DB::table('notifications')->insert([
                'uid'=>$_SESSION['user'],
                'message'=>ucfirst($lguser[0]->name)." ".strtoupper($lguser[0]->surname)." bir gönderinizi beğendi.",
                'req_user_id'=>$req_uid,
                'post_id'=>$_POST['pid'],
                'unread'=>1,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
        $res = [
            'status'=>1,
            'message'=> "Gönderi beğenildi."
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['dislike_post'])){
    try {
        $likes = DB::table('posts')->where('pid',$_POST['pid'])->value('likes');
        $likes = json_decode($likes);
        $list = [];
        foreach ($likes as $like) {
            if($like != $_SESSION['user']){
                $list[] = $like;
            }
        }
        $likes = json_encode($likes);
        DB::table('posts')->where('pid',$_POST['pid'])->update([
            'likes'=>$list
        ]);
        $res = [
            'status'=>1,
            'message'=> "Gönderi beğenildi."
        ];
        echo json_encode($res);
    }catch (Exception $e){
        $res = [
            'status'=>0,
            'message'=> "Bir hata oluştu.Yetkililer ile görüşün."
        ];
        echo json_encode($res);
    }
}

if(isset($_POST['new-comment'])){
    try {
        $req_uid = DB::table('posts')->where('pid',$_POST['pid'])->value('uid');
        $id = DB::table('comments')->insertGetId([
            'pid'=>$_POST['pid'],
            'uid'=>$_SESSION['user'],
            'comment_parent'=>(isset($_POST['parent'])?$_POST['parent']:'0'),
            'comment'=>$_POST['comment'],
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
        $data = DB::table('comments')
            ->where('comments.comment_id','=',$id)
            ->join('users','users.uid','=','comments.uid')
            ->select('comments.*','users.name','users.surname','users.image')
            ->get()[0];
        $data->created_at = time_difference($data->created_at);
        if($req_uid != $_SESSION['user']){
            DB::table('notifications')->insert([
                'uid'=>$_SESSION['user'],
                'message'=>ucfirst($lguser[0]->name)." ".strtoupper($lguser[0]->surname)." bir gönderinize yorum yazdı.",
                'req_user_id'=>$req_uid,
                'post_id'=>$_POST['pid'],
                'unread'=>1,
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
        }
        $res = [
            'status'=>1,
            'message'=> 'Yorum gönderildi.',
            'data' => $data,
            'main' => (isset($_POST['parent'])?0:1)
        ];
        echo json_encode($res);
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['share_a_post'])){
    $post_er            = false;
    $post_err_message   = "";
    try {
        $UPLOAD_DIR = '../files/users/'.$_POST['uid'];
        $post = DB::table('posts')->where('pid',$_POST['pid'])->get()[0];
        $attachments = json_decode($post->attachments,true);
        if(!file_exists($UPLOAD_DIR)){
            mkdir($UPLOAD_DIR);
        }
        if(!file_exists("../".USERFILE_DIR)){
            mkdir("../".USERFILE_DIR);
        }
        foreach ($attachments as $i => $a){
            foreach ($a as $key=> $b) {
                $name = explode('.',$b);
                $file_name = time()."-".$_SESSION['user']."-".$i.".".$name[1];
                if (!copy($UPLOAD_DIR."/".$b, "../".USERFILE_DIR.$file_name)) {
                    $post_er = true;
                    $post_err_message = "source:".$UPLOAD_DIR."/".$b."Dosyalar kopyalanamadı.";
                }else{
                    $attachments[$i][$key] = $file_name;
                }
            }
        }
        if($post_er){
            json_ajax_error($post_err_message);
        }else{
            DB::table('posts')->insert([
                'uid'=>$_SESSION['user'],
                'content'=>$post->content,
                'attachments'=>json_encode($attachments),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
            json_ajax_success('Gönderi paylaşıldı.');
        }
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}


if(isset($_POST['remove_a_post'])){
    try {
        $comments = DB::table('comments')->where('pid',$_POST['pid'])->get();
        foreach ($comments as $comment) {
            DB::table('reports')
                ->where('reported_pid','=',$_POST['pid'])
                ->orWhere('reported_cid','=',$comment->comment_id)->delete();
        }
        DB::table('comments')->where('pid',$_POST['pid'])->delete();
        DB::table('notifications')->where('post_id',$_POST['pid'])->delete();
        DB::table('reports')->where('reported_pid',$_POST['pid'])->delete();
        $attachments = DB::table('posts')->where('pid',$_POST['pid'])->value('attachments');
        $attachments = json_decode($attachments,true);
        foreach ($attachments as $i => $a){
            foreach ($a as $key=> $b) {
                if(file_exists("../".USERFILE_DIR.$b)){
                    unlink("../".USERFILE_DIR.$b);
                }
            }
        }
        $saved = DB::table('users')->select('saved_posts','uid')->get();
        foreach ($saved as $s) {
            $list = [];
            $s->saved_posts = json_decode($s->saved_posts);
            foreach ($s->saved_posts as $saved_post) {
                if($_POST['pid'] != $saved_post){
                    $list[] = $saved_post;
                }
            }
            DB::table('users')->where('uid',$s->uid)->update([
                'saved_posts'=>json_encode($list)
            ]);
        }
        DB::table('posts')->where('pid',$_POST['pid'])->delete();
        json_ajax_success('Gönderi silindi.');
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['save_post'])){
    try {
        $posts = DB::table('users')->where('uid',$_SESSION['user'])->value('saved_posts');
        $posts = json_decode($posts);
        if(!in_array($_POST['pid'],$posts)){
            $posts[] = $_POST['pid'];
        }
        $posts = json_encode($posts);
        DB::table('users')->where('uid',$_SESSION['user'])->update([
            'saved_posts'=>$posts
        ]);
        json_ajax_success('Gönderi kayıt edildi.');
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['remove_save_post'])){
    try {
        $posts = DB::table('users')->where('uid',$_SESSION['user'])->value('saved_posts');
        $posts = json_decode($posts);
        $list = [];
        foreach ($posts as $post) {
            if($post != $_POST['pid']){
                $list[] = $post;
            }
        }
        $posts = json_encode($list);
        DB::table('users')->where('uid',$_SESSION['user'])->update([
            'saved_posts'=>$posts
        ]);
        json_ajax_success('Gönderi kayıt edildi.');
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}