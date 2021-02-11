<?php
/* Smarty version 3.1.36, created on 2021-01-12 16:08:43
  from 'C:\xampp\htdocs\MinkBo\admin\templates\comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffd9f5bb97fb0_29175152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e66fd0c5a9deb9d2856c0285d21bf74a3eebcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\comments.tpl',
      1 => 1610456882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd9f5bb97fb0_29175152 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Etkinlikler</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Etkinlikler</b></h2>
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
                            <th>Etkinlik Sahibi</th>
                            <th>Etkinlik Adı</th>
                            <th>Etkinlik Lokasyonu</th>
                            <th>Etkinlik Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['evs']->value, 'e', false, 'key');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['e']->value->uid;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['e']->value->uname;?>
 <?php echo $_smarty_tpl->tpl_vars['e']->value->surname;?>
</a></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['e']->value->name;?>
</td>
                                <td><?php echo mb_substr($_smarty_tpl->tpl_vars['e']->value->location,0,300);?>
</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['e']->value->event_time));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/event.php?eid=<?php echo $_smarty_tpl->tpl_vars['e']->value->eid;?>
" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="<?php echo $_smarty_tpl->tpl_vars['e']->value->eid;?>
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
