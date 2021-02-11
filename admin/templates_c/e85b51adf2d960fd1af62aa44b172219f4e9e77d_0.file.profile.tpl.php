<?php
/* Smarty version 3.1.36, created on 2021-01-11 22:16:00
  from 'C:\xampp\htdocs\MinkBo\admin\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffca3f064bca8_80621987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e85b51adf2d960fd1af62aa44b172219f4e9e77d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\profile.tpl',
      1 => 1610392558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffca3f064bca8_80621987 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Adminler</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Profil</span></li>
                <li><span>Profil Düzenle</span></li>
            </ol>
        </div>
    </header>

    <!-- start: page -->

    <form class="ecommerce-form action-buttons-fixed" action="" method="post">
        <div class="row">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-dollar-circle"></i>
                                <h2 class="card-big-info-title">Admin Bilgileri</h2>
                                <p class="card-big-info-desc">Tüm formları eksiksiz bir şekilde doldurunuz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['ok']->value)) {?>
                                            <div class="alert alert-success mb-3 rounded-0">
                                                <p class="mb-0"><i class="fa fa-check-circle"></i> <?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</p>
                                            </div>
                                        <?php }?>
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
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İsim</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="name" value="<?php echo $_smarty_tpl->tpl_vars['manager']->value->name;?>
" required="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soy İsim</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['manager']->value->surname;?>
" required="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adres</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="address" value="<?php echo $_smarty_tpl->tpl_vars['manager']->value->address;?>
" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Telefon</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
															<span class="input-group-prepend">
																<span class="input-group-text">
																	<i class="fas fa-phone"></i>
																</span>
															</span>
                                            <input id="phone" name="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(534) 123-1234" value="<?php echo $_smarty_tpl->tpl_vars['manager']->value->phone;?>
" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-user-circle"></i>
                                <h2 class="card-big-info-title">Hesap Bilgileri</h2>
                                <p class="card-big-info-desc">Tüm formları eksiksiz bir şekilde doldurunuz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-mail</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="email" class="form-control form-control-modern" name="email" value="<?php echo $_smarty_tpl->tpl_vars['manager']->value->email;?>
" required="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Şifre</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_profile" class="btn btn-dark">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>

    <!-- end: page -->
</section><?php }
}
