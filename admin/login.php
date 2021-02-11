<?php
use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(isset($_SESSION['admin'])){
    redirect('index.php');
}
if(isset($_SESSION['mod'])){
    redirect('index.php');
}

try{
    if(isset($_POST['login'])){
        $admins = DB::table('admins')
            ->where('email','=',$_POST['email'])
            ->get();
        $moderators = DB::table('moderators')
            ->where('email','=',$_POST['email'])
            ->get();
        if(count($admins)){
            if (password_verify($_POST['password'], $admins[0]->password)) {
                $_SESSION['admin'] = $admins[0]->aid;
                redirect('index.php');
            }else{
                $error = true;
                $errors[] = "Hatalı şifre girdiniz.";
            }
        }else if(count($moderators)){
            if (password_verify($_POST['password'], $moderators[0]->password)) {
                $_SESSION['mod'] = $moderators[0]->mid;
                redirect('index.php');
            }else{
                $error = true;
                $errors[] = "Hatalı şifre girdiniz.";
            }
        }else{
            $error = true;
            $errors[] = "Herhangi bir yönetici bulunamadı.";
        }
    }
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->display('login.tpl');