<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once 'init.php';

if(isset($_SESSION['user'])){
    redirect('index.php');
}
if(isset($_POST['login'])){
    try {
        $user = DB::table('users')
            ->where([
                ['username', '=', $_POST['uoremail']],
                ['status','=','1']
            ])
            ->orWhere([
                ['email', '=', $_POST['uoremail']],
                ['status','=','1']
            ])->get();
        if(count($user)){
            if (password_verify($_POST['password'], $user[0]->password)) {
                $_SESSION['user'] = $user[0]->uid;
                DB::table('users')->where('uid',$_SESSION['user'])->update([
                    'session_status'=>'cevrimici'
                ]);
                DB::table('users_ip_history')->insert([
                    'uid'=>$_SESSION['user'],
                    'ip_address'=> $_SERVER['REMOTE_ADDR'] == "::1" ?"127.0.0.1":$_SERVER['REMOTE_ADDR'],
                    'logged_at'=> date('Y-m-d H:i:s')
                ]);
                redirect('index.php');
            } else {
                $error = true;
                $errors[] = "Hatalı şifre!";
            }
        }else{
            $error = true;
            $errors[] = "Sistem içerisinde böyle bir kullanıcı bulunamadı.";
        }
    }catch (Exception $e) {
        $error = true;
        $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}
$smarty->assign('post',$_POST);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->display('login.tpl');
