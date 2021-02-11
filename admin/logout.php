<?php

use Illuminate\Database\Capsule\Manager as DB;
require_once '../admin/init.php';

if(isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
    redirect('login.php');
}

if(isset($_SESSION['mod'])){
    unset($_SESSION['mod']);
    redirect('login.php');
}
