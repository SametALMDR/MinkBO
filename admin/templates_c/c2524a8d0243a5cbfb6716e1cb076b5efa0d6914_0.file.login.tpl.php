<?php
/* Smarty version 3.1.36, created on 2021-01-11 21:14:20
  from 'C:\xampp\htdocs\MinkBo\admin\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffc957c1caa11_29369775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2524a8d0243a5cbfb6716e1cb076b5efa0d6914' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\login.tpl',
      1 => 1610388858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc957c1caa11_29369775 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html class="fixed">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="MinkBO-Admin" />
    <meta name="description" content="MinkBO-Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/custom.css">
    <title>Minkbo Yönetim</title>
    <?php echo '<script'; ?>
 src="vendor/modernizr/modernizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="master/style-switcher/style.switcher.localstorage.js"><?php echo '</script'; ?>
>
</head>
<body>

<section class="body-sign">
    <div class="center-sign">
        <div class="panel card-sign">
            <div class="card-body">
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="alert alert-danger mb-3 rounded-0">
                        <ul class="list-unstyled mb-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                <li><i class="fa fa-times font-weight-bold"></i> <?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
                <form action="" method="post">
                    <h1 class="text-center mt-0 mb-2 p-0">MinkBO Yönetim</h1>
                    <div class="form-group mb-3">
                        <label>E-posta adresi</label>
                        <input name="email" type="email" class="form-control form-control-lg fs-14" value="<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['email']))) {
echo $_smarty_tpl->tpl_vars['post']->value['email'];
}?>"/>
                    </div>
                    <div class="form-group mb-3" style="border:0;padding-top: 0;">
                        <label>Parola</label>
                        <input name="password" type="password" class="form-control form-control-lg fs-14" />
                    </div>
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-primary mt-2">Giriş Yap</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php echo '<script'; ?>
 src="vendor/jquery/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/jquery-cookie/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/popper/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/common/common.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/nanoscroller/nanoscroller.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/magnific-popup/jquery.magnific-popup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="vendor/jquery-placeholder/jquery.placeholder.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="js/theme.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/theme.init.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
