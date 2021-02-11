<?php
/* Smarty version 3.1.36, created on 2021-01-12 02:02:51
  from 'C:\xampp\htdocs\MinkBo\admin\templates\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffcd91b88d759_24407799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa16533ca200ff7a6a92d9ba4504fc72f51c71c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\settings.tpl',
      1 => 1610406166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffcd91b88d759_24407799 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Genel Ayarlar</h2>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>SMTP Mail Ayarları</b></h2>
                </header>
                <div class="card-body">
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
                    <form action="" method="post">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Host</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="host" value="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Port</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="port" value="<?php echo $_smarty_tpl->tpl_vars['port']->value;?>
" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Kullanıcı Adı</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Şifre</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="password" class="form-control form-control-modern" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Gönderen Adı</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="sender" value="<?php echo $_smarty_tpl->tpl_vars['sender']->value;?>
" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Gönderen E-posta Adresi</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="email" class="form-control form-control-modern" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" required="">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-dark" name="update">Güncelle</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- end: page -->
</section>
</div>
<?php }
}
