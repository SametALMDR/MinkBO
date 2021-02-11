<?php

require_once 'init.php';
use Illuminate\Database\Capsule\Manager as DB;
DB::table('users')->where('uid',$_SESSION['user'])->update([
    'session_status'=>'cevrimdisi'
]);
unset($_SESSION['user']);
redirect(BASE_URL.'/login.php');