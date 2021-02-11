<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

if(isset($_POST['new'])){
    $target_dir = "../img/advertisements/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        $error = true;
        $errors[] = "Sadece JPG, JPEG, PNG & GIF formatları desteklenmektedir.";
    }
    $newname = time()."-r.".$imageFileType;
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir.$newname)) {

    } else {
        $error = true;
        $errors[] = "Dosya yüklenirken bir hata oluştu.";
    }
    if(!$error){
        DB::table('advertisements')->insert([
            'description'=>$_POST['desc'],
            'status'=>(isset($_POST['status']))?1:0,
            'img'=> $newname,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        $ok = "Yeni reklam başarıyla eklendi";
    }
}

if(isset($_POST['update-cont'])){
    if ($_FILES["img"]["size"] > 0) {
        $target_dir = "../img/advertisements/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            $error = true;
            $errors[] = "Sadece JPG, JPEG, PNG & GIF formatları desteklenmektedir.";
        }
        $newname = time()."-r.".$imageFileType;
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_dir.$newname)) {
            DB::table('advertisements')->where('aid',$_POST['update-cont'])->update([
                'img'=> $newname,
            ]);
        } else {
            $error = true;
            $errors[] = "Dosya yüklenirken bir hata oluştu.";
        }
    }
    DB::table('advertisements')->where('aid',$_POST['update-cont'])->update([
        'description'=>$_POST['desc'],
        'status'=>(isset($_POST['status']))?1:0,
        'updated_at'=>date('Y-m-d H:i:s')
    ]);
    $ok = "Reklam başarıyla güncellendi";
}

if(isset($_POST['delete-row'])){
    DB::table('advertisements')->where('aid',$_POST['delete-row'])->delete();
    $ok = "Reklam başarıyla silindi";
}

try {
    $advs = DB::table('advertisements')->get();
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}


$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('advs',$advs);
$smarty->display('header.tpl');
$smarty->display('advertisements.tpl');
$smarty->display('footer.tpl');
