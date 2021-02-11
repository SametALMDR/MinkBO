<?php
/* Smarty version 3.1.36, created on 2021-01-12 07:54:31
  from 'C:\xampp\htdocs\MinkBo\admin\templates\group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffd2b878b1259_48938456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e9ee31409a36fef6d28fbb8d22ff15108ac383f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\group.tpl',
      1 => 1610427271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd2b878b1259_48938456 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Grup #<?php echo $_smarty_tpl->tpl_vars['gr']->value->name;?>
</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Grup</span></li>
                <li><span>Grup Düzenle</span></li>
            </ol>
        </div>
    </header>

    <!-- start: page -->

    <form class="ecommerce-form action-buttons-fixed pb-3" action="" method="post">
        <div class="row">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-dollar-circle"></i>
                                <h2 class="card-big-info-title">Grup Katılımcıları</h2>
                                <?php if (!empty($_smarty_tpl->tpl_vars['ok_at']->value)) {?>
                                    <div class="alert alert-success mb-3 rounded-0">
                                        <p class="mb-0"><i class="fa fa-check-circle"></i> <?php echo $_smarty_tpl->tpl_vars['ok_at']->value;?>
</p>
                                    </div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['error_at']->value) {?>
                                    <div class="alert alert-danger mb-3 rounded-0">
                                        <ul class="list-unstyled mb-0">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors_at']->value, 'e');
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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gr']->value->attends, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['a']->value[0]->uid;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['a']->value[0]->name;?>
 <?php echo $_smarty_tpl->tpl_vars['a']->value[0]->surname;?>
</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <button name="remove_user" value="<?php echo $_smarty_tpl->tpl_vars['a']->value[0]->uid;?>
" class="badge badge-danger border-0 p-2"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <h2 class="card-big-info-title m-0 custom-title">Grup Bilgileri</h2>
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
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Grup Adı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="name" value="<?php echo $_smarty_tpl->tpl_vars['gr']->value->name;?>
" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Grup Açıklaması</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <textarea type="text" class="form-control form-control-modern" name="description" rows="5" required><?php echo $_smarty_tpl->tpl_vars['gr']->value->description;?>
</textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_group" class="btn btn-dark">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>
    <section class="card card-modern card-big-info">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="card-big-info-title m-0 custom-title">Grup Gönderileri</h2>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Gönderi Sahibi</th>
                            <th>Gönderi İçeriği</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'p', false, 'key');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['p']->value->uid;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['p']->value->uname;?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value->surname;?>
</a></td>
                                <td><?php echo mb_substr($_smarty_tpl->tpl_vars['p']->value->content,0,100);?>
...</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['p']->value->created_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <a class="update-row mr-3 pointer" href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value->pid;?>
" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</section>
<?php }
}
