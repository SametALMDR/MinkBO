<?php

require_once 'init.php';
use Illuminate\Database\Capsule\Manager as DB;

$conts = DB::table('contracts')->where('status',1)->get();

$smarty->assign('conts',$conts);
$smarty->display('sozlesme.tpl');