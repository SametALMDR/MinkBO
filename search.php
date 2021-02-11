<?php

require_once 'init.php';
use Illuminate\Database\Capsule\Manager as DB;
if(!isset($_SESSION['user'])){
    redirect('login.php');
}

try {
    /**
     * Friends
     */
    $lgfriends = DB::table('users')->where('uid',$_SESSION['user'])->value('friends');
    $lgfriends = json_decode($lgfriends);
    if(count($lgfriends)){
        $out="";
    }else{
        $out="0";
    }
    foreach ($lgfriends as $lgfriend) {
        $out .=$lgfriend.",";
    }
    if(count($lgfriends)){
        $out = substr($out,0,strlen($out)-1);
    }
    $users = DB::table('users')
        ->whereRaw("name like '%".$_GET['q']."%' AND uid !=".$_SESSION['user']." AND uid NOT IN($out) ")
        ->orWhereRaw("surname like '%".$_GET['q']."%' AND uid !=".$_SESSION['user']." AND uid NOT IN($out) ")
        ->orWhereRaw("username like '%".$_GET['q']."%' AND uid !=".$_SESSION['user']." AND uid NOT IN($out) ")
        ->get();
    $FriendRequests = DB::table('friend_requests')->select('friend_uid')->where('uid',$lguser[0]->uid)->get();
    $AllFriendRequests = [];
    foreach ($FriendRequests as $friendRequest) {
        $AllFriendRequests[] = $friendRequest->friend_uid;
    }

    $smarty->assign('AllFriendRequests',$AllFriendRequests);
    $smarty->assign('users',$users);

    /**
     * Events
     */
    $uiid = $_SESSION['user'];
    $events = DB::table('events')
        ->where([
            ['events.name','like','%'.$_GET['q'].'%'],
            ['events.event_time','>',date('Y-m-d :H:i:s')],
            ['events.owner_uid','!=',$_SESSION['user']]
        ])
        ->whereRaw("!JSON_CONTAINS(events.users,$uiid)")
        ->join('users','users.uid','=','events.owner_uid')
        ->select('events.*','users.name as uname','users.surname', DB::raw('JSON_LENGTH(events.users) as total'))
        ->get();

    $groups = DB::table('groups')
        ->where([
            ['groups.name','like','%'.$_GET['q'].'%'],
            ['groups.owner_uid','!=',$_SESSION['user']]
        ])
        ->whereRaw("!JSON_CONTAINS(groups.users,$uiid)")
        ->join('users','users.uid','=','groups.owner_uid')
        ->select('groups.*','users.name as uname','users.surname', DB::raw('JSON_LENGTH(groups.users) as total'))
        ->get();


}catch (Exception $e){
    $error = true;
    $errors[] = $e->getMessage();
}

$smarty->assign('ok',$ok); // for profile update
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('events',$events);
$smarty->assign('groups',$groups);
$smarty->display('header.tpl');
$smarty->display('search.tpl');
$smarty->display('footer.tpl');
