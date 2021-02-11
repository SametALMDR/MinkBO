<?php
/* Smarty version 3.1.36, created on 2021-01-12 16:37:22
  from 'C:\xampp\htdocs\MinkBo\admin\templates\posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffda612832138_52995613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c390597bebf6115123b25efefbbe2753b8fe519' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\posts.tpl',
      1 => 1610457277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffda612832138_52995613 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Gönderiler</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Gönderiler</b></h2>
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
                            <th>Gönderi Sahibi</th>
                            <th>Gönderi Açıklaması</th>
                            <th>Gönderi Tipi</th>
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
                                <td>
                                    <a <?php if ($_smarty_tpl->tpl_vars['p']->value->type != 'secret') {?>href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['p']->value->uid;?>
" target="_blank"<?php }?>>
                                        <?php if ($_smarty_tpl->tpl_vars['p']->value->type == 'secret') {?>
                                            Anonim Kullanıcı
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value->surname;?>

                                        <?php }?>
                                    </a>
                                </td>
                                <td><?php echo mb_substr($_smarty_tpl->tpl_vars['p']->value->content,0,100);?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['p']->value->type == 'secret') {?>gizli<?php } else { ?>normal<?php }?></td>
                                <td><?php echo date('d.m.y H:i',strtotime($_smarty_tpl->tpl_vars['p']->value->created_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value->pid;?>
" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="<?php echo $_smarty_tpl->tpl_vars['p']->value->pid;?>
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
