<?php
/* Smarty version 3.1.36, created on 2021-01-11 20:54:05
  from 'C:\xampp\htdocs\MinkBo\templates\sozlesme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffc90bd99d7c9_01238760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa68bbd8b647b3f65f03ad22839cc4d9a7c9cbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\sozlesme.tpl',
      1 => 1610387583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc90bd99d7c9_01238760 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giriş Yap - MinkBo</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templates/assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="templates/assets/css/vendor/bicon.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="templates/assets/css/vendor/flaticon.css">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="templates/assets/css/plugins/plyr.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="templates/assets/css/plugins/slick.min.css">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="templates/assets/css/plugins/nice-select.css">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="templates/assets/css/plugins/perfect-scrollbar.css">
    <!-- light gallery css -->
    <link rel="stylesheet" href="templates/assets/css/plugins/lightgallery.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="templates/assets/css/style.css">
    <link rel="stylesheet" href="templates/css/animate.min.css">
    <link rel="stylesheet" href="templates/css/custom.css">
    <style>
        .timeline-bg-content {
            height: 100vh;
            box-shadow: 7px 0 12px 0 #adadad;
        }
    </style>
</head>

<body class="bg-transparent">
    <div class="container">
        <div class="bg-light mt-5 p-5">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conts']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            <h3><?php echo $_smarty_tpl->tpl_vars['c']->value->title;?>
</h3>
            <p><?php echo $_smarty_tpl->tpl_vars['c']->value->description;?>
</p>
            <br>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
    </div>
</body>
</html><?php }
}
