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
$WEB_ROOT = 'http' . ((empty($_SERVER['HTTPS'])) ? '' : 's') . '://'. $_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'],"",$dir_path);
if(substr($WEB_ROOT, -1) == '/'){
    $WEB_ROOT = substr($WEB_ROOT,0,-1);
}

define('BASE_DIR',  $dir_path);
define('BASE_URL',  $WEB_ROOT);
define('USERFILES_DIR',  'files/users/');

use Illuminate\Database\Capsule\Manager as DB;
require 'vendor/autoload.php';
require 'config.php';
require 'includes/functions.php';

$smarty             = new Smarty();
$smarty->debugging  = false;
$smarty->caching    = false;

/**
 * Initialized Variables
 */
$error          = false;
$errors         = [];
$ok             = "";
$lguser         = [0 => ""];
$notifications  = "";
$unread_nf      = "";
$FriendRequests = "";
$TotalNotificationCount = 0;
$upcoming_events = "";
$suggested_groups = "";
$LGUserFriends = [];
$PostNot = "";
$Advertisements = "";
/**
 * Profile Update
 */
if(isset($_POST['info-update'])){
    try {
        try{
            $user = DB::table('users')->where('username',$_POST['username'])->whereNotIn('uid', [$_SESSION['user']])->get();
            $email = DB::table('users')->where('email',$_POST['email'])->whereNotIn('uid', [$_SESSION['user']])->get();
            if(count($user)){
                $error  = true;
                $errors[] = "Bu kullanıcı adı kullanılmaktadır!";
            }
            if(count($email)){
                $error  = true;
                $errors[] = "Bu e-posta adresi kullanılmaktadır!";
            }
            if($_POST['birth3'] > 2008){
                $error = true;
                $errors[] = "13 yaşından büyük olmanız gereklidir!";
            }
        }catch (Exception $e){
            $error  = true;
            $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
        }
        if(!$error) {
            if (!empty($_POST['password'])) {
                DB::table('users')->where('uid', $_SESSION['user'])->update([
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
                ]);
            }
            DB::table('users')->where('uid', $_SESSION['user'])->update([
                'name' => $_POST['name'],
                'surname' => $_POST['surname'],
                'birthday' => $_POST['birth3'] . "-" . $_POST['birth2'] . "-" . $_POST['birth1'],
                'gender' => $_POST['gender'],
                'city' => $_POST['city'],
                'state' => $_POST['state'],
                'description' => $_POST['description'],
                'job' => $_POST['job']
            ]);
            $ok = "Kullanıcı bilgileri güncellendi";
        }
    }catch (Exception $e){
        $error = true;
        $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere bildirin!";
    }
}

/**
 * Defined Variables
 */
if(isset($_SESSION['user'])){
    try {
        $lguser = DB::table('users')->where('uid',$_SESSION['user'])->get();
        if(!count($lguser)){
            unset($_SESSION['user']);
            redirect(BASE_URL.'/login.php');
        }
        define('USERFILE_DIR',  'files/users/'.$lguser[0]->uid."/");
        $notifications = DB::table('notifications')
            ->where('uid',$_SESSION['user'])
            ->orderBy('notifications.created_at','DESC')
            ->get();
        $unread_nf = DB::table('notifications')->where([
            ['uid',"=",$_SESSION['user']],
            ['unread',"=",1]
        ])->count();
        /**
         * Friend Requests
        */
        $FriendRequests = DB::table('friend_requests')
            ->where('friend_uid',$_SESSION['user'])
            ->orderBy('friend_requests.created_at','DESC')
            ->limit(2)
            ->get();
        $TotalNotificationCount = DB::table('friend_requests')
            ->where([
                ['friend_uid',"=",$_SESSION['user']],
                ['unread','=',1]
            ])
            ->orderBy('friend_requests.created_at','DESC')
            ->count();
        $TotalNotificationCount += DB::table('notifications')->where([
            ['req_user_id','=',$_SESSION['user']],
            ['unread','=',1]
        ])->count();
        foreach ($FriendRequests as $i => $FriendRequest) {
            $fuser = DB::table('users')->where('uid',$FriendRequest->uid)->select('uid','name','surname','image')->get();
            $fuser = $fuser[0];
            $FriendRequests[$i]->uid = $fuser->uid;
            $FriendRequests[$i]->image = $fuser->image;
            $FriendRequests[$i]->message = "<b>".ucfirst($fuser->name)." ".ucfirst($fuser->surname)."</b> adlı kişiden arkadaşlık isteği aldınız.";
        }
        $myidd = $_SESSION['user'];
        /**
         *
         */
        $upcoming_events = DB::table('events')
            ->where('event_time','>',date('Y-m-d H:i:s'))
            ->whereRaw("!JSON_CONTAINS(users,$myidd)")
            ->orderBy('event_time','ASC')
            ->limit(5)
            ->get();
        /**
         *
         */
        $suggested_groups = DB::table('groups')
            ->whereRaw("!JSON_CONTAINS(users,$myidd)")
            ->select('groups.*',DB::raw('JSON_LENGTH(users) as total'))
            ->orderBy('total','DESC')
            ->limit(5)
            ->get();
        /**
         * Messages
         */
        $HisUsers = DB::table('users')->where('uid',$_SESSION['user'])->value('friends');
        $HisUsers = json_decode($HisUsers);
        foreach ($HisUsers as $uid) {
            $LGUserFriends[] = DB::table('users')->where('uid',$uid)->get();
        }
        /**
         * Post Notifications
         */
        $PostNot = DB::table('notifications')
            ->where('req_user_id',$_SESSION['user'])
            ->join('users','users.uid','=','req_user_id')
            ->orderBy('notifications.created_at','DESC')
            ->limit(3)
            ->get();
        /**
         * Advertisements
         */
        $Advertisements = DB::table('advertisements')->where('status','=','1')->get();
    }catch (Exception $e){
        echo $e->getMessage();
    }
}

/**
 * TPL Variables
 */
$smarty->assign('WEB_ROOT',BASE_URL);
$smarty->assign('BASE_ROOT',BASE_DIR);
$smarty->assign('get',$_GET);
$smarty->assign('post',$_POST);
$smarty->assign('lguser',$lguser[0]);
$smarty->assign('notifications',$notifications);
$smarty->assign('unread_nf',$unread_nf);
$smarty->assign('FriendRequests',$FriendRequests);
$smarty->assign('TotalNotificationCount',$TotalNotificationCount);
$smarty->assign('upcoming_events',$upcoming_events);
$smarty->assign('suggested_groups',$suggested_groups);
$smarty->assign('LGUserFriends',$LGUserFriends);
$smarty->assign('PostNot',$PostNot);
$smarty->assign('Advertisements',$Advertisements);