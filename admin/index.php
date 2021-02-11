<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(!isset($_SESSION['admin']) && !isset($_SESSION['mod'])){
    redirect('login.php');
}

$TotalAdmin = DB::table('admins')->count();
$TotalMod = DB::table('moderators')->count();
$TotalUser = DB::table('users')->count();
$TotalPost = DB::table('posts')->count();
$TotalGroup = DB::table('groups')->count();
$TotalEvent = DB::table('events')->count();
$TotalReport = DB::table('reports')->count();
$TotalAdv = DB::table('advertisements')->count();
$TotalCont = DB::table('contracts')->count();

$smarty->assign('ok',$ok);
$smarty->assign('error',$error);
$smarty->assign('errors',$errors);
$smarty->assign('TotalAdmin',$TotalAdmin);
$smarty->assign('TotalMod',$TotalMod);
$smarty->assign('TotalUser',$TotalUser);
$smarty->assign('TotalPost',$TotalPost);
$smarty->assign('TotalGroup',$TotalGroup);
$smarty->assign('TotalEvent',$TotalEvent);
$smarty->assign('TotalReport',$TotalReport);
$smarty->assign('TotalAdv',$TotalAdv);
$smarty->assign('TotalCont',$TotalCont);
$smarty->display('header.tpl');
$smarty->display('index.tpl');
$smarty->display('footer.tpl');
