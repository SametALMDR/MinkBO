<?php

require_once 'init.php';
use Illuminate\Database\Capsule\Manager as DB;

if(!isset($_SESSION['user'])){
    redirect('login.php');
}
$event_ok = "";
$event_error  = false;
$event_errors = [];

$event_up_ok = "";
$event_up_error  = false;
$event_up_errors = [];

$event_del_ok = "";
$event_del_error  = false;
$event_del_errors = [];

if(isset($_POST['new_group'])){
    try {
        DB::table('groups')->insert([
            'owner_uid'=> $_SESSION['user'],
            'name'=>$_POST['name'],
            'users'=>json_encode([$_SESSION['user']]),
            'description'=>$_POST['description'],
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
        $event_ok = "Grup oluşturuldu.";
    }catch (Exception $e){
        $event_error = true;
        $event_errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['update_group'])){
    try {
        DB::table('groups')->where('gid',$_POST['gid'])->update([
            'name'=>$_POST['name'],
            'description'=>$_POST['description'],
            'updated_at'=>date("Y-m-d H:i:s")
        ]);
        $event_up_ok = "Grup ayarları güncellendi";
    }catch (Exception $e){
        $event_up_error = true;
        $event_up_errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['cancel'])){
    try {
        $psts = DB::table('posts')->where('gid',$_POST['gid'])->get();
        foreach ($psts as $pst) {
            $comments = DB::table('comments')->where('pid',$pst->pid)->get();
            foreach ($comments as $comment) {
                DB::table('reports')->where('reported_cid',$comment->comment_id)->delete();
            }
            DB::table('comments')->where('pid',$pst->pid)->delete();
            DB::table('reports')->where('reported_pid',$pst->pid)->delete();
            DB::table('notifications')->where('post_id',$pst->pid)->delete();
            DB::table('posts')->where('pid',$pst->pid)->delete();
        }
        DB::table('notifications')->where('group_id',$_POST['gid'])->delete();
        DB::table('reports')->where('reported_gid',$_POST['gid'])->delete();
        DB::table('groups')->where('gid',$_POST['gid'])->delete();
        $event_del_ok = "Grup silindi.";
    }catch (Exception $e){
        $event_del_error = true;
        $event_del_errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
    }
}

if(isset($_POST['logout'])){
    $id = $_SESSION['user'];
    $json = DB::table('groups')->where('gid',$_POST['gid'])->value('users');
    $json = json_decode($json);
    $list = [];
    foreach ($json as $j) {
        if($id != $j){
            $list[] = $j;
        }
    }

    try {
        DB::table('groups')
            ->where('gid',$_POST['gid'])
            ->update([
                'users'=> json_encode($list)
            ]);
        $event_del_ok = "Gruptan ayrıldınız.";
    }catch (Exception $e){
        $event_del_error = true;
        $event_del_errors[] = $e->getMessage();
    }
}

try {
    $lgid = $_SESSION['user'];
    $groups = DB::table('groups')
        ->join('users','users.uid','=','groups.owner_uid')
        ->whereRaw("JSON_CONTAINS(groups.users,'$lgid')")
        ->orWhere("groups.owner_uid",'=',$_SESSION['user'])
        ->orderBy('groups.created_at','DESC')
        ->select('groups.*','users.name as uname','users.surname', DB::raw('JSON_LENGTH(groups.users) as total'))
        ->get();

}catch (Exception $e){
    $error = true;
    $errors[] = "Sistem içerisinde bir hata oluştu. Lütfen yetkililere başvurunuz.";
}

$smarty->assign('ok',$ok); // for profile update
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('event_ok',$event_ok); // for profile update
$smarty->assign('event_error',$event_error);
$smarty->assign('event_errors',$event_errors);
$smarty->assign('event_up_ok',$event_up_ok);
$smarty->assign('event_up_error',$event_up_error);
$smarty->assign('event_up_errors',$event_up_errors);
$smarty->assign('event_del_ok',$event_del_ok);
$smarty->assign('event_del_error',$event_del_error);
$smarty->assign('event_del_errors',$event_del_errors);
$smarty->assign('groups',$groups);
$smarty->display('header.tpl');
$smarty->display('groups.tpl');
$smarty->display('footer.tpl');
