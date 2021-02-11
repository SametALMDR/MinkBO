<?php
/* Smarty version 3.1.36, created on 2021-01-11 18:54:42
  from 'C:\xampp\htdocs\MinkBo\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffc74c2c0b602_03113403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e75882c96b8efd5a75c5434ac303651919dd63f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\header.tpl',
      1 => 1610380481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc74c2c0b602_03113403 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AnaSayfa - MinkBO</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" href="templates/css/iziToast.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="templates/assets/css/style.css">
    <link rel="stylesheet" href="templates/css/all.min.css">
    <link rel="stylesheet" href="templates/css/custom.css">

    <!-- Modernizer JS -->
    <?php echo '<script'; ?>
 src="templates/assets/js/vendor/modernizr-3.6.0.min.js"><?php echo '</script'; ?>
>
    <!-- jQuery JS -->
    <?php echo '<script'; ?>
 src="templates/assets/js/vendor/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <!-- Popper JS -->
    <?php echo '<script'; ?>
 src="templates/assets/js/vendor/popper.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap JS -->
    <?php echo '<script'; ?>
 src="templates/assets/js/vendor/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/js/iziToast.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/js/jquery.form.min.js" integrity="sha384-qlmct0AOBiA2VPZkMY3+2WqkHtIQ9lSdAsAn5RUJD/3vA5MKDgSGcdmIv4ycVxyn" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/js/functions.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var notification_count = <?php echo $_smarty_tpl->tpl_vars['TotalNotificationCount']->value;?>

        const root = "<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
"
        const lgusernamesurname = "<?php echo $_smarty_tpl->tpl_vars['lguser']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['lguser']->value->surname;?>
"
        const lguserpp = "<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['lguser']->value->image;?>
"
        const issecret = <?php echo $_smarty_tpl->tpl_vars['lguser']->value->secret_opt_name;?>

        const lguid = "<?php echo $_smarty_tpl->tpl_vars['lguser']->value->uid;?>
"
    <?php echo '</script'; ?>
>
</head>

<body>

<!-- header area start -->
<header>
    <div class="header-top sticky bg-white d-none d-lg-block bg-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <!-- header top navigation start -->
                    <div class="header-top-navigation">
                        <nav>
                            <ul>
                                <li><a class="list-title" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
">Anasayfa</a></li>
                                <li class="msg-trigger">
                                    <a class="list-title openn-message-box pointer text-white">Mesajlar</a>
                                </li>
                                <li class="notification-trigger">
                                    <a class="msg-trigger-btn list-title" href="#b">Bildirimler
                                        <?php if ($_smarty_tpl->tpl_vars['TotalNotificationCount']->value > 0) {?>
                                            <span class="badge badge-danger count-readed"><?php echo $_smarty_tpl->tpl_vars['TotalNotificationCount']->value;?>
</span>
                                        <?php }?>
                                    </a>
                                    <div class="message-dropdown" id="b">
                                        <div class="dropdown-title mb-1">
                                            <p class="recent-msg">Son Bildirimler</p>
                                        </div>
                                        <p class="not-title">Arkadaşlık Bildirimleri</p>
                                        <ul class="dropdown-msg-list friend-nots">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FriendRequests']->value, 'fr');
$_smarty_tpl->tpl_vars['fr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fr']->value) {
$_smarty_tpl->tpl_vars['fr']->do_else = false;
?>
                                                <li class="msg-list-item d-flex justify-content-between pb-1 read-now" style="cursor: initial;"  data-type="req">
                                                    <div class="profile-thumb">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['fr']->value->image;?>
" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <div class="align-items-center d-flex msg-content notification-content">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['fr']->value->uid;?>
" target="_blank"><p class="pt-0"><?php echo $_smarty_tpl->tpl_vars['fr']->value->message;?>
</p></a>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="a-d-buttons">
                                                                    <span class="fs-12 accept-friend-request" data-rid="<?php echo $_smarty_tpl->tpl_vars['fr']->value->id;?>
">Kabul et</span>
                                                                    <span class="fs-12 delete-friend-request" data-rid="<?php echo $_smarty_tpl->tpl_vars['fr']->value->id;?>
">Reddet</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="msg-time">
                                                        <p><?php echo time_difference($_smarty_tpl->tpl_vars['fr']->value->created_at);?>
</p>
                                                        <p>
                                                            <i class="fal fa-check-double read-status <?php if ($_smarty_tpl->tpl_vars['fr']->value->unread) {?>unreaded<?php } else { ?>readed<?php }?>" data-rid="<?php echo $_smarty_tpl->tpl_vars['fr']->value->id;?>
"></i>
                                                        </p>
                                                    </div>
                                                </li>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['fr']->do_else) {
?>
                                                <li class="mb-2 fs-12">Bildirim bulunmamaktadır.</li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                        <p class="not-title">Gönderi Bildirimleri</p>
                                        <ul class="dropdown-msg-list">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PostNot']->value, 'n');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
                                                <li class="msg-list-item d-flex justify-content-between read-now" data-type="not">
                                                    <!-- profile picture end -->
                                                    <div class="profile-thumb pointer" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['n']->value->uid;?>
'">
                                                        <figure class="profile-thumb-middle">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['n']->value->image;?>
" alt="profile picture">
                                                        </figure>
                                                    </div>
                                                    <!-- profile picture end -->

                                                    <!-- message content start -->
                                                    <div class="msg-content notification-content">
                                                        <a><p><?php echo $_smarty_tpl->tpl_vars['n']->value->message;?>
</p></a>
                                                    </div>
                                                    <!-- message content end -->

                                                    <!-- message time start -->
                                                    <div class="msg-time">
                                                        <p><?php echo time_difference($_smarty_tpl->tpl_vars['n']->value->created_at);?>
</p>
                                                        <p>
                                                            <i class="fal fa-check-double read-status <?php if ($_smarty_tpl->tpl_vars['n']->value->unread) {?>unreaded<?php } else { ?>readed<?php }?>" data-nid="<?php echo $_smarty_tpl->tpl_vars['n']->value->nid;?>
"></i>
                                                        </p>
                                                    </div>
                                                    <!-- message time end -->
                                                </li>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['n']->do_else) {
?>
                                                <li class="mb-2 fs-12">Bildirim bulunmamaktadır.</li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                        <div class="msg-dropdown-footer">
                                            <button class="btn-sm btn-custom text-white text-decoration-none"><i class="fal fa-eye"></i> Hepsini görüntüle</button>
                                            <button class="btn-sm btn-custom text-white text-decoration-none read-as-all"><i class="fal fa-check-double"></i> Hepsini okundu olarak işaretle</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- header top navigation start -->
                </div>

                <div class="col-md-2">
                    <!-- brand logo start -->
                    <div class="brand-logo text-center">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
">
                            <img class="logo-scale" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/logo.png" alt="brand logo">
                        </a>
                    </div>
                    <!-- brand logo end -->
                </div>

                <div class="col-md-5">
                    <div class="header-top-right d-flex align-items-center justify-content-end">
                        <!-- header top search start -->
                        <div class="header-top-search">
                            <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php" class="top-search-box">
                                <input type="text" name="q" placeholder="Arkadaş, Grup, Etkinlik Ara..." class="top-search-field" value="<?php if ((isset($_smarty_tpl->tpl_vars['get']->value['q']))) {
echo $_smarty_tpl->tpl_vars['get']->value['q'];
}?>" required>
                                <button class="top-search-btn"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                        <!-- header top search end -->

                        <!-- profile picture start -->
                        <div class="profile-setting-box">
                            <div class="profile-thumb-small overflow-visible w-init h-init">
                                <a href="javascript:void(0)" class="profile-triger">
                                    <figure>
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['lguser']->value->image;?>
" width="35" height="35">
                                            <span class="pl-2 text-white font-weight-bold text-capitalize"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->name;?>
</span>
                                            <i class="fas fa-caret-down  pl-2 text-white"></i>
                                        </div>
                                    </figure>
                                </a>
                                <div class="profile-dropdown">
                                    <div class="profile-head">
                                        <h5 class="name"><a href="#"><span class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->name;?>
</span> <span class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->surname;?>
</span></a></h5>
                                        <a class="mail" href="#"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->email;?>
</a>
                                    </div>
                                    <div class="profile-body">
                                        <ul>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php"><i class="flaticon-user"></i>Profilim</a></li>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/friends.php"><i class="flaticon-users"></i>Arkadaşlarım</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/account.php"><i class="flaticon-settings"></i>Hesap Ayarlarım</a></li>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php"><i class="flaticon-unlock"></i>Çıkış Yap</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- profile picture end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
<!-- header area start -->
<header>
    <div class="mobile-header-wrapper sticky d-block d-lg-none">
        <div class="mobile-header position-relative ">
            <div class="mobile-logo" style="background-color: #0948b3 !important;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="mobile-menu w-100">
                <ul>
                    <li>
                        <button class="search-trigger">
                            <i class="search-icon flaticon-search"></i>
                            <i class="close-icon flaticon-cross-out"></i>
                        </button>
                        <div class="mob-search-box">
                            <form class="mob-search-inner" method="get" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php">
                                <input type="text" name="q" placeholder="Arkadaş, Grup, Etkinlik Ara..." value="<?php if ((isset($_smarty_tpl->tpl_vars['get']->value['q']))) {
echo $_smarty_tpl->tpl_vars['get']->value['q'];
}?>" class="mob-search-field" required>
                                <button class="mob-search-btn"><i class="flaticon-search"></i></button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-chat-box">
                <div class="live-chat-title">
                    <!-- profile picture end -->
                    <div class="profile-thumb">
                        <a href="profile.html">
                            <figure class="profile-thumb-small profile-active">
                                <img src="" alt="profile picture">
                            </figure>
                        </a>
                    </div>
                    <!-- profile picture end -->
                    <div class="posted-author">
                        <h6 class="author"><a href="profile.html">Robart Marloyan</a></h6>
                        <span class="active-pro">active now</span>
                    </div>
                    <div class="live-chat-settings ml-auto">
                        <button class="chat-settings"><img src="templates/assets/images/icons/settings.png" alt=""></button>
                        <button class="close-btn"><img src="templates/assets/images/icons/close.png" alt=""></button>
                    </div>
                </div>
                <div class="message-list-inner">
                    <ul class="message-list custom-scroll">
                        <li class="text-friends">
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                            <div class="message-time">10 minute ago</div>
                        </li>
                        <li class="text-author">
                            <p>Many desktop publishing packages and web page editors</p>
                            <div class="message-time">5 minute ago</div>
                        </li>
                        <li class="text-friends">
                            <p>packages and web page editors </p>
                            <div class="message-time">2 minute ago</div>
                        </li>
                        <li class="text-friends">
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                            <div class="message-time">10 minute ago</div>
                        </li>
                        <li class="text-author">
                            <p>Many desktop publishing packages and web page editors</p>
                            <div class="message-time">5 minute ago</div>
                        </li>
                        <li class="text-friends">
                            <p>packages and web page editors </p>
                            <div class="message-time">2 minute ago</div>
                        </li>
                    </ul>
                </div>
                <div class="chat-text-field mob-text-box">
                    <textarea class="live-chat-field custom-scroll" placeholder="Text Message"></textarea>
                    <button class="chat-message-send" type="submit" value="submit">
                        <img src="templates/assets/images/icons/plane.png" alt="">
                    </button>
                </div>
            </div>
            <div class="mobile-header-profile" style="background-color: #0948b3 !important;">
                <!-- profile picture end -->
                <div class="profile-thumb profile-setting-box">
                    <a href="javascript:void(0)" class="profile-triger">
                        <figure class="profile-thumb-middle">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['lguser']->value->image;?>
" alt="profile picture">
                        </figure>
                    </a>
                    <div class="profile-dropdown text-left">
                        <div class="profile-head">
                            <h5 class="name"><a href="#"><span class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->name;?>
</span> <span class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->surname;?>
</span></a></h5>
                            <a class="mail" href="#"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->email;?>
</a>
                        </div>
                        <div class="profile-body">
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php"><i class="flaticon-user"></i>Profilim</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/friends.php"><i class="flaticon-users"></i>Arkadaşlarım</a></li>
                            </ul>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/account.php"><i class="flaticon-settings"></i>Hesap Ayarlarım</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php"><i class="flaticon-unlock"></i>Çıkış Yap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- profile picture end -->
            </div>
        </div>
    </div>
</header>
<!-- header area end --><?php }
}
