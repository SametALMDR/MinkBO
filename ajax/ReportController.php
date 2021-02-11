<?php

require_once '../init.php';
use Illuminate\Database\Capsule\Manager as DB;

header('Content-type: application/json');

if(isset($_POST['new_report'])){
    try {
        DB::table('reports')->insert([
            'sender_uid'=>$_SESSION['user'],
            'message'=>$_POST['message'],
            'unread'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        json_ajax_success("Hata yetkililere bildirildi");
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['report_comment'])){
    try {
        DB::table('reports')->insert([
            'sender_uid'=>$_SESSION['user'],
            'reported_cid'=>$_POST['cid'],
            'unread'=>1,
            'message'=>'Bir yorum bildirildi.',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        json_ajax_success("Yorum yetkililere bildirildi");
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['report_post'])){
    try {
        DB::table('reports')->insert([
            'sender_uid'=>$_SESSION['user'],
            'reported_pid'=>$_POST['pid'],
            'unread'=>1,
            'message'=>'Bir gönderi bildirildi.',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        json_ajax_success("Gönderi yetkililere bildirildi");
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['report_user'])){
    try {
        DB::table('reports')->insert([
            'sender_uid'=>$_SESSION['user'],
            'reported_uid'=>$_POST['uid'],
            'unread'=>1,
            'message'=>'Bir kullanıcı bildirildi.',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        json_ajax_success("Kullanıcı yetkililere bildirildi");
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['report_event'])){
    try {
        DB::table('reports')->insert([
            'sender_uid'=>$_SESSION['user'],
            'reported_eid'=>$_POST['eid'],
            'unread'=>1,
            'message'=>'Bir etkinlik bildirildi.',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        json_ajax_success("Etkinlik yetkililere bildirildi");
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}

if(isset($_POST['report_group'])){
    try {
        DB::table('reports')->insert([
            'sender_uid'=>$_SESSION['user'],
            'reported_gid'=>$_POST['gid'],
            'unread'=>1,
            'message'=>'Bir grup bildirildi.',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        json_ajax_success("Grup yetkililere bildirildi");
    }catch (Exception $e){
        json_ajax_sys_error();
    }
}