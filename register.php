<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once 'init.php';

if(isset($_SESSION['user'])){
    redirect('index.php');
}
$il = file_get_contents("includes/il-ilce.json");
$il = json_decode($il, true);

if(isset($_POST['register'])){
    try{
        $user = DB::table('users')->where('username',$_POST['username'])->get();
        $email = DB::table('users')->where('email',$_POST['email'])->get();
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
    if($_POST['password'] != $_POST['re-password']){
        $error = true;
        $errors[] = "Şifreler uyuşmamaktadır!";
    }
    if($_POST['birth3'] > 2008){
        $error = true;
        $errors[] = "13 yaşından büyük olmanız gereklidir!";
    }
    if(!$error){
        try{
            $id = DB::table('users')->insertGetId([
                'name'          => $_POST['name'],
                'surname'       => $_POST['surname'],
                'email'         => $_POST['email'],
                'username'      => $_POST['username'],
                'password'      => password_hash($_POST['password'],PASSWORD_DEFAULT),
                'birthday'      => $_POST['birth3']."-".$_POST['birth2']."-".$_POST['birth1'],
                'gender'        => $_POST['gender'],
                'city'          => $_POST['city'],
                'state'         => $_POST['state'],
                'email_verified'=> 0,
                'status'        => 1,
                'image'         => 'default.svg',
                'banner'        => 'def-banner.png',
                'description'   => 'Bu alanda kendinizi tanıtabilir veya yaşantınız hakkında bilgiler verebilirsiniz.',
                'job'           => 'Belirtilmedi',
                'lastlogin'     => date('Y-m-d H:i:s'),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
            $_SESSION['user'] = $id;
            redirect('index.php');
        }catch (Exception $e){
            $error  = true;
            $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
        }
    }
}
$smarty->assign('post',$_POST);
$smarty->assign('il',$il['data']);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->display('register.tpl');
