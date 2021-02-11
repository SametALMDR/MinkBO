<?php
/* Smarty version 3.1.36, created on 2021-01-12 18:11:48
  from 'C:\xampp\htdocs\MinkBo\admin\templates\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffdbc34c45cb0_89790839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ce3a7ecd5c2fc6761b877ec3791b92f372927f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\users.tpl',
      1 => 1610464305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdbc34c45cb0_89790839 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Kullanıcılar</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Kullanıcılar</b></h2>
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
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>Kullanıcı Adı</th>
                            <th>E-posta adresi</th>
                            <th>Hesap Durum</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u', false, 'key');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value->name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value->surname;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value->username;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['u']->value->email;?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['u']->value->status) {?>Aktif<?php } else { ?>Pasif<?php }?></td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['u']->value->created_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <a class="update-row mr-3 pointer" href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['u']->value->uid;?>
" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="<?php echo $_smarty_tpl->tpl_vars['a']->value->mid;?>
" class="delete-row b-none" style="color: rgb(224, 6, 6);">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</section><?php }
}
