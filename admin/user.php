<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(!isset($_GET['uid'])){
    redirect('users.php');
}

$ok_at = "";
$err_at = false;
$errors_at = [];

if(isset($_POST['remove_user'])){
    try{
        $list = [];
        $userss = DB::table('events')->where('eid',$_GET['eid'])->value('users');
        $userss = json_decode($userss);
        foreach ($userss as $u){
            if($u != $_POST['remove_user']){
                $list[] = $u;
            }
        }
        DB::table('events')->where('eid',$_GET['eid'])->update([
            'users'=>json_encode($list)
        ]);
        $ok_at = "Etkinlik katılımcıları güncellendi";
    }catch (Exception $e){
        $err_at = true;
        $errors_at[] = $e->getMessage();
    }
}

try {
    if(isset($_POST['update_user'])){
        try{
            $user = DB::table('users')->where([
                ['username','=',$_POST['username']],
                ['uid','!=',$_GET['uid']]
            ])->get();
            $email = DB::table('users')->where([
                ['email','=',$_POST['email']],
                ['uid','!=',$_GET['uid']]
            ])->get();
            if(count($user)){
                $error  = true;
                $errors[] = "Bu kullanıcı adı kullanılmaktadır!";
            }
            if(count($email)){
                $error  = true;
                $errors[] = "Bu e-posta adresi kullanılmaktadır!";
            }
        }catch (Exception $e){
            $error  = true;
            $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
        }
        if(!$error){
            if(!empty($_POST['password'])) {
                DB::table('users')->where('uid',$_GET['uid'])->update([
                    'password'      => password_hash($_POST['password'],PASSWORD_DEFAULT),
                ]);
            }
            DB::table('users')->where('uid',$_GET['uid'])->update([
                'name'          => $_POST['name'],
                'surname'       => $_POST['surname'],
                'email'         => $_POST['email'],
                'username'      => $_POST['username'],
                'birthday'      => $_POST['birth3']."-".$_POST['birth2']."-".$_POST['birth1'],
                'gender'        => $_POST['gender'],
                'city'          => $_POST['city'],
                'state'         => $_POST['state'],
                'email_verified'=> (isset($_POST['verified'])?1:0),
                'status'        => (isset($_POST['status'])?1:0),
                'description'   => $_POST['description'],
                'job'           => $_POST['job'],
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
            $ok = "Kullanıcı bilgileri güncellendi";
        }
    }

    if(isset($_POST['delete-h-row'])){
        DB::table('users_ip_history')->where('hid',$_POST['delete-h-row'])->delete();
        $ok = "Kullanıcı geçmiş bilgisi silindi";
    }

    $user = DB::table('users')->where('uid',$_GET['uid'])->get()[0];
    $posts = DB::table('posts')->where('uid',$_GET['uid'])->orderBy('created_at','DESC')->get();
    $groups = DB::table('groups')->where('owner_uid',$_GET['uid'])->orderBy('created_at','DESC')->get();
    $events = DB::table('events')->where('owner_uid',$_GET['uid'])->orderBy('created_at','DESC')->get();
    $history = DB::table('users_ip_history')->where('uid',$_GET['uid'])->orderBy('logged_at','DESC')->get();

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
$smarty->assign('user',$user);
$smarty->assign('posts',$posts);
$smarty->assign('groups',$groups);
$smarty->assign('events',$events);
$smarty->assign('history',$history);
$smarty->display('header.tpl');
$smarty->display('user.tpl');
$smarty->display('footer.tpl');
