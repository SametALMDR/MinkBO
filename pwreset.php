<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once 'init.php';
require_once 'includes/mailer.php';

if(isset($_SESSION['user'])){
    redirect('index.php');
}
if(isset($_POST['reset'])){
    try {
        $user = DB::table('users')
            ->where('email', '=', $_POST['email'])
            ->get();
        if(count($user)){
            $token = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"),0,25);
            $mail->addAddress($user[0]->email, $user[0]->name." ".$user[0]->surname);
            $mail->isHTML(true);
            $mail->Subject = 'MinkBO Şifre Sıfırlama';
            $mail->Body    = '<h2>MinkBO Şifre Sıfırlama</h2><p>Merhabalar,'.$user[0]->name.' '.$user[0]->surname.'</p>';
            $mail->Body   .= '<p>Aşağıdaki linke tıklayarak şifre sıfırlama işlemini başlatabilirsiniz.</p>';
            $mail->Body   .= '<a href="'.BASE_URL.'/pwreset.php?token='.$token.'">'.BASE_URL.'/pwreset.php?token='.$token.'</a>';
            $mail->send();

            DB::table('pw_reset')->insert([
                'uid'   => $user[0]->uid,
                'token' => $token
            ]);
            $ok = "Şifre sıfırlama linki e-posta adresinize gönderildi";
        }else{
            $error = true;
            $errors[] = "Bu e-posta adresine sahip kullanıcı bulunamadı.";
        }
    }catch (Exception $e) {
        $error = true;
        $errors[] = $e->getMessage();
    }
}
if(isset($_GET['token'])){
    try {
        $istoken = DB::table('pw_reset')->where('token',$_GET['token'])->get();
        if(count($istoken)){
            $uid = $istoken[0]->uid;
            $istoken = true;
            if(isset($_POST['re-reset'])){
                if($_POST['password'] != $_POST['re-password']){
                    $error = true;
                    $errors[] = "Şifreler uyuşmamaktadır.";
                }else{
                    DB::table('users')->where('uid',$uid)->update([
                        'password'=> password_hash($_POST['password'],PASSWORD_DEFAULT)
                    ]);
                    $ok = "Şifreniz başarıyla güncellendi";
                    DB::table('pw_reset')->where('token',$_GET['token'])->delete();
                }
            }
        }else{
            $istoken = false;
            $error = true;
            $errors[] = "Herhangi bir kullanıcıya ait token bulunamadı.";
        }
    }catch (Exception $e){
        $error = true;
        $errors[] = "Sistem içerisinde bir hata oluştu";
    }
    $smarty->assign('istoken',$istoken);
}

$smarty->assign('get',$_GET);
$smarty->assign('post',$_POST);
$smarty->assign('ok',$ok);
$smarty->assign('post',$_POST);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->display('pwreset.tpl');
