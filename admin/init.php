<?php

session_start();
setlocale(LC_TIME,'tr_TR');
date_default_timezone_set('Europe/Istanbul');

/**
 * Define Base Path
 */
$url        = dirname($_SERVER['SCRIPT_NAME']);
$parse_url  = explode("/",$url);
unset($parse_url[0]);
$dir_path   = $_SERVER['DOCUMENT_ROOT'].$url;
$dir_out    = false;
for($i=0;$i<count($parse_url);$i++){
    $mydir  = scandir($dir_path);
    foreach ($mydir as $dir){
        if($dir == 'vendor'){
            $dir_out = true;
        }
    }
    if($dir_out){
        break;
    }
    $dir_path = dirname($dir_path);
}
$ADMIN_ROOT = 'http' . ((empty($_SERVER['HTTPS'])) ? '' : 's') . '://'. $_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'],"",$dir_path);
if(substr($ADMIN_ROOT, -1) == '/'){
    $WEB_ROOT = substr($ADMIN_ROOT,0,-1);
}
$WEB_ROOT = dirname($ADMIN_ROOT);

define('BASE_DIR',  $dir_path);
define('ADMIN_URL',  $ADMIN_ROOT);
define('WEB_URL',  $WEB_ROOT);
define('USERFILES_DIR',  'files/users/');

use Illuminate\Database\Capsule\Manager as DB;
require '../vendor/autoload.php';
require '../config.php';
require '../includes/functions.php';

$smarty             = new Smarty();
$smarty->debugging  = false;
$smarty->caching    = false;

$error          = false;
$errors         = [];
$ok             = "";
$manager        = "";
$type           = "";

try {
    if(isset($_POST['update_profile'])){
        if(isset($_SESSION['admin'])){
            DB::table('admins')->where('aid',$_SESSION['admin'])->update([
                'name'=>$_POST['name'],
                'surname'=>$_POST['surname'],
                'email'=>$_POST['email'],
                'address'=>$_POST['address'],
                'phone'=>$_POST['phone'],
                'updated_at'=>date("Y-m-d H:i:s")
            ]);
            if(!empty($_POST['password'])){
                DB::table('admins')->where('aid',$_SESSION['admin'])->update([
                    'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT)
                ]);
            }
            $ok = "Bilgileriniz başarıyla güncellendi";
        }elseif(isset($_SESSION['mod'])){
            DB::table('moderators')->where('aid',$_SESSION['mod'])->update([
                'name'=>$_POST['name'],
                'surname'=>$_POST['surname'],
                'email'=>$_POST['email'],
                'address'=>$_POST['address'],
                'phone'=>$_POST['phone'],
                'updated_at'=>date("Y-m-d H:i:s")
            ]);
            if(!empty($_POST['password'])){
                DB::table('moderators')->where('aid',$_SESSION['mod'])->update([
                    'password'=>password_hash($_POST['password'],PASSWORD_DEFAULT)
                ]);
            }
            $ok = "Bilgileriniz başarıyla güncellendi";
        }
    }
    /**
     * Report Counts
     */
    $unread_report_user_count = DB::table('reports')
        ->where([
            ['reported_uid','!=',null],
            ['unread','=','1']
        ])
        ->count();
    $unread_report_post_count = DB::table('reports')
        ->where([
            ['reported_pid','!=',null],
            ['unread','=','1']
        ])
        ->count();
    $unread_report_group_count = DB::table('reports')
        ->where([
            ['reported_gid','!=',null],
            ['unread','=','1']
        ])
        ->count();
    $unread_report_event_count = DB::table('reports')
        ->where([
            ['reported_eid','!=',null],
            ['unread','=','1']
        ])
        ->count();
    $unread_report_comment_count = DB::table('reports')
        ->where([
            ['reported_cid','!=',null],
            ['unread','=','1']
        ])
        ->count();

    $total_unread_count = 0;
    $total_unread_count += $unread_report_user_count;
    $total_unread_count += $unread_report_post_count;
    $total_unread_count += $unread_report_group_count;
    $total_unread_count += $unread_report_event_count;
    $total_unread_count += $unread_report_comment_count;
}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}

if(isset($_SESSION['admin'])){
    $manager = DB::table('admins')->where('aid',$_SESSION['admin'])->get()[0];
    $type = "admin";
}
if(isset($_SESSION['mod'])){
    $manager = DB::table('moderators')->where('mid',$_SESSION['mod'])->get()[0];
    $type = "mod";
}

$smarty->assign('ADMIN_ROOT',$ADMIN_ROOT);
$smarty->assign('WEB_ROOT',$WEB_ROOT);
$smarty->assign('post',$_POST);
$smarty->assign('get',$_GET);
$smarty->assign('session',$_SESSION);
$smarty->assign('manager',$manager);
$smarty->assign('type',$type);
$smarty->assign('unread_report_user_count', $unread_report_user_count);
$smarty->assign('unread_report_post_count', $unread_report_post_count);
$smarty->assign('unread_report_group_count', $unread_report_group_count);
$smarty->assign('unread_report_event_count', $unread_report_event_count);
$smarty->assign('unread_report_comment_count', $unread_report_comment_count);
$smarty->assign('total_unread_count', $total_unread_count);

