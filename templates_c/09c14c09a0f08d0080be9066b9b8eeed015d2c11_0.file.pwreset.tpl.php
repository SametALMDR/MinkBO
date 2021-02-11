<?php
/* Smarty version 3.1.36, created on 2021-01-08 00:57:23
  from 'C:\xampp\htdocs\MinkBo\templates\pwreset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff783c386e8d2_58041699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09c14c09a0f08d0080be9066b9b8eeed015d2c11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\pwreset.tpl',
      1 => 1608071620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff783c386e8d2_58041699 (Smarty_Internal_Template $_smarty_tpl) {
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

<main>
    <div class="main-wrapper pb-0 mb-0">
        <div class="timeline-wrapper">
            <div class="timeline-page-wrapper">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6 order-2 order-lg-1 login-left-side">
                            <div class="timeline-bg-content bg-img" data-bg="templates/assets/images/login-bg.jpg">
                                <h3 class="timeline-bg-title"><span class="mink-text">MinkBO</span>
                                    <br>
                                    <span class="mink-text-desc">Bugünlerde tanışmak istediğin kişilerle iletişim kur ve hayatında olup bitenleri herkesle paylaş...</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center login-right-bg">
                            <div class="signup-form-wrapper">
                                <div class="signup-inner text-center">
                                    <h3 class="title">Şifrenizi sıfırlayın...</h3>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['ok']->value)) {?>
                                        <div class="alert alert-success mb-0 rounded-0">
                                            <a><i class="flaticon-send font-weight-bold"></i> <?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</a>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                                        <div class="alert alert-danger mb-0 rounded-0">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                                    <li><i class="flaticon-cross-out font-weight-bold"></i> <?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</li>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </ul>
                                        </div>
                                    <?php }?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['get']->value['token']))) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['istoken']->value && empty($_smarty_tpl->tpl_vars['ok']->value)) {?>
                                            <form class="signup-inner--form" method="post" action="?token=<?php echo $_smarty_tpl->tpl_vars['get']->value['token'];?>
">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <input type="password" name="password" class="single-field" minlength="6" placeholder="Şifre" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="password" name="re-password" class="single-field" minlength="6" placeholder="Şifre Tekrar" required>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="bg-secondary shadow-lg submit-btn mt-3" name="re-reset">Yenile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php }?>
                                    <?php } else { ?>
                                        <form class="signup-inner--form" method="post" action="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="email" name="email" class="single-field" value="<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['email']))) {
echo $_smarty_tpl->tpl_vars['post']->value['email'];
}?>" placeholder="E-posta adresi" required>
                                                </div>
                                                <div class="col-12">
                                                    <button class="bg-secondary shadow-lg submit-btn mt-3" name="reset">Sıfırla</button>
                                                    <h6 class="terms-condition pt-3 font-weight-italic font-weight-light"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php" class="text-dark">Geri Dön</a></h6>
                                                </div>
                                            </div>
                                        </form>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JS
============================================ -->

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
<!-- Slick Slider JS -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/slick.min.js"><?php echo '</script'; ?>
>
<!-- nice select JS -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/nice-select.min.js"><?php echo '</script'; ?>
>
<!-- audio video player JS -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/plyr.min.js"><?php echo '</script'; ?>
>
<!-- perfect scrollbar js -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
<!-- light gallery js -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/lightgallery-all.min.js"><?php echo '</script'; ?>
>
<!-- image loaded js -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/imagesloaded.pkgd.min.js"><?php echo '</script'; ?>
>
<!-- isotope filter js -->
<?php echo '<script'; ?>
 src="templates/assets/js/plugins/isotope.pkgd.min.js"><?php echo '</script'; ?>
>
<!-- Main JS -->
<?php echo '<script'; ?>
 src="templates/assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
