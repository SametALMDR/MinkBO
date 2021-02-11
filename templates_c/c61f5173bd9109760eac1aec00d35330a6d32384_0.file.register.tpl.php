<?php
/* Smarty version 3.1.36, created on 2021-01-08 00:52:40
  from 'C:\xampp\htdocs\MinkBo\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff782a807d4b6_00428153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61f5173bd9109760eac1aec00d35330a6d32384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\register.tpl',
      1 => 1608336417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff782a807d4b6_00428153 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kayıt Ol - MinkBo</title>
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
                                    <h3 class="title">Yeni kullanıcı hesabınızı hemen aktif edin...</h3>
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
                                    <form class="signup-inner--form" method="post" action="">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" name="name" class="single-field" placeholder="İsim" minlength="3" maxlength="255" value="<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['name']))) {
echo $_smarty_tpl->tpl_vars['post']->value['name'];
}?>" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="text" name="surname" class="single-field" placeholder="Soyisim" minlength="3" maxlength="255" value="<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['surname']))) {
echo $_smarty_tpl->tpl_vars['post']->value['surname'];
}?>" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="email" name="email" class="single-field" placeholder="E-posta adresi" value="<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['email']))) {
echo $_smarty_tpl->tpl_vars['post']->value['email'];
}?>" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="username" class="single-field" placeholder="Kullanıcı Adı" minlength="3" value="<?php if ((isset($_smarty_tpl->tpl_vars['post']->value['username']))) {
echo $_smarty_tpl->tpl_vars['post']->value['username'];
}?>" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="password" class="single-field" minlength="6" placeholder="Parola" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="re-password" class="single-field" minlength="6" placeholder="Parola Tekrar" required>
                                            </div>
                                            <div class="col-4">
                                                <select class="nice-select" name="birth1">
                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                        <option <?php if ($_smarty_tpl->tpl_vars['i']->value <= 9) {?>value="0<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php } else { ?>value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth1']))) {
if ($_smarty_tpl->tpl_vars['i']->value == $_smarty_tpl->tpl_vars['post']->value['birth1']) {?>selected<?php }
} elseif ($_smarty_tpl->tpl_vars['i']->value == date('d')) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                    <?php }
}
?>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select class="nice-select" name="birth2">
                                                    <option value="01" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "01") {?>selected<?php }
} elseif (date('m') == '1') {?>selected<?php }?>>Ocak</option>
                                                    <option value="02" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "02") {?>selected<?php }
} elseif (date('m') == '2') {?>selected<?php }?>>Şubat</option>
                                                    <option value="03" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "03") {?>selected<?php }
} elseif (date('m') == '3') {?>selected<?php }?>>Mart</option>
                                                    <option value="04" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "04") {?>selected<?php }
} elseif (date('m') == '4') {?>selected<?php }?>>Nisan</option>
                                                    <option value="05" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "05") {?>selected<?php }
} elseif (date('m') == '5') {?>selected<?php }?>>Mayıs</option>
                                                    <option value="06" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "06") {?>selected<?php }
} elseif (date('m') == '6') {?>selected<?php }?>>Haziran</option>
                                                    <option value="07" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "07") {?>selected<?php }
} elseif (date('m') == '7') {?>selected<?php }?>>Temmuz</option>
                                                    <option value="08" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "08") {?>selected<?php }
} elseif (date('m') == '8') {?>selected<?php }?>>Ağustos</option>
                                                    <option value="09" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "09") {?>selected<?php }
} elseif (date('m') == '9') {?>selected<?php }?>>Eylül</option>
                                                    <option value="10" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "10") {?>selected<?php }
} elseif (date('m') == '10') {?>selected<?php }?>>Ekim</option>
                                                    <option value="11" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "11") {?>selected<?php }
} elseif (date('m') == '11') {?>selected<?php }?>>Kasım</option>
                                                    <option value="12" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth2']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth2'] == "12") {?>selected<?php }
} elseif (date('m') == '12') {?>selected<?php }?>>Aralık</option>
                                                </select>
                                            </div><div class="col-4">
                                                <select class="nice-select" name="birth3">
                                                    <?php
$__section_i_0_loop = (is_array(@$_loop=date('Y')+1) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = $__section_i_0_loop - 1;
$__section_i_0_total = min(($__section_i_0_start+ 1), 100);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] -= 1){
?>
                                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['birth3']))) {
if ($_smarty_tpl->tpl_vars['post']->value['birth3'] == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }
} elseif (date('Y') == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</option>
                                                    <?php
}
}
?>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="nice-select" name="gender">
                                                    <option value="Erkek" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['gender']))) {
if ($_smarty_tpl->tpl_vars['post']->value['gender'] == "Erkek") {?>selected<?php }
}?>>Erkek</option>
                                                    <option value="Kadın" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['gender']))) {
if ($_smarty_tpl->tpl_vars['post']->value['gender'] == "Kadın") {?>selected<?php }
}?>>Kadın</option>
                                                    <option value="Diğer" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['gender']))) {
if ($_smarty_tpl->tpl_vars['post']->value['gender'] == "Diğer") {?>selected<?php }
}?>>Diğer</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select class="nice-select" name="city" id="city"></select>
                                            </div>
                                            <div class="col-6">
                                                <select class="nice-select" name="state" id="state"></select>
                                            </div>
                                            <div class="col-12 text-left mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agree" class="custom-control-input" id="customCheck1" <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['agree']))) {?>checked<?php }?> required>
                                                    <label class="custom-control-label" for="customCheck1">Kullanıcı <a target="_blank" href="sozlesme.php">sözleşmesini</a> okudum ve onayladım.</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="log-btn-custom shadow-lg submit-btn mt-0" name="register">Kayıt Ol</button>
                                                <h6 class="terms-condition pt-3 font-weight-italic font-weight-light">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/login.php" class="text-dark">Zaten hesabınız var mı? Giriş Yap...</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </form>
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

<?php echo '<script'; ?>
>
    $.getJSON( "includes/il-ilce.json", function( data ) {
        isselectcity  = ""
        isselectstate = ""
        <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['city']))) {?>
            il  = "<?php echo $_smarty_tpl->tpl_vars['post']->value['city'];?>
"
        <?php } else { ?>
            il  = "Adana"
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['state']))) {?>
        ilce  = "<?php echo $_smarty_tpl->tpl_vars['post']->value['state'];?>
"
        <?php } else { ?>
        ilce  = "Aladağ"
        <?php }?>
        $.each( data, function( key, val ) {
            $.each(val, function (key2 , val2) {
                val2.il_adi === il ? isselectcity = "selected":isselectcity = ""
                $('#city').append('<option value="'+val2.il_adi+'">'+val2.il_adi+'</option>')
                $('#city').next().children('.current').html(il)
                $('#city').next().children('.list').append('<li data-value="'+val2.il_adi+'" class="option '+isselectcity+'">'+val2.il_adi+'</li>')

                if(val2.il_adi === il){
                    $.each(val2.ilceler, function (key3,val3) {
                        val3.ilce_adi === ilce ? isselectstate = "selected":isselectstate = ""
                        $('#state').append('<option value="'+val3.ilce_adi+'">'+val3.ilce_adi+'</option>')
                        $('#state').next().children('.current').html(ilce)
                        $('#state').next().children('.list').append('<li data-value="'+val3.ilce_adi+'" class="option '+isselectstate+'">'+val3.ilce_adi+'</li>')
                    })
                }
            })
        });

        $('#city').change(function () {
            $('#state').html("")
            $('#state').next().children('.current').html("")
            $('#state').next().children('.list').html("")
            city = this.value
            $.each( data, function( key, val ) {
                $.each(val, function (key2 , val2) {
                    if(val2.il_adi === city){
                        $.each(val2.ilceler, function (key3,val3) {
                            key3 === 0 ? isselectstate = "selected":isselectstate = ""
                            $('#state').append('<option value="'+val3.ilce_adi+'">'+val3.ilce_adi+'</option>')
                            if(key3 === 0){
                                $('#state').next().children('.current').html(val3.ilce_adi)
                            }
                            $('#state').next().children('.list').append('<li data-value="'+val3.ilce_adi+'" class="option '+isselectstate+'">'+val3.ilce_adi+'</li>')
                        })
                    }
                })
            });
        })
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
