<?php
/* Smarty version 3.1.36, created on 2021-01-12 16:31:04
  from 'C:\xampp\htdocs\MinkBo\admin\templates\reports-comments.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffda498bd4fe5_67193344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec5de3dc0e885ac4df63cbfa0ecc2d6cccd36ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\reports-comments.tpl',
      1 => 1610458263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffda498bd4fe5_67193344 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Raporlanan Yorumlar</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Raporlanan Yorumlar</b></h2>
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
                            <th>Raporlayan Kullanıcı</th>
                            <th>Raporlanan Yorum</th>
                            <th>Mesaj</th>
                            <th>Rapor Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reports']->value, 'r', false, 'key');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                            <tr>
                                <td><span class="<?php if ($_smarty_tpl->tpl_vars['r']->value->unread) {?>unreaded<?php } else { ?>readed<?php }?>"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span></td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['r']->value->uid;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['r']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['r']->value->surname;?>
</a></td>
                                <td><a class="view-comment pointer" data-cid="<?php echo $_smarty_tpl->tpl_vars['r']->value->comment_id;?>
" data-comment="<?php echo $_smarty_tpl->tpl_vars['r']->value->comment;?>
">Yorumu İncele</a></td>
                                <td><?php echo mb_substr($_smarty_tpl->tpl_vars['r']->value->message,0,300);?>
</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['r']->value->created_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <form action="" method="post">
                                        <button name="delete-row" value="<?php echo $_smarty_tpl->tpl_vars['r']->value->rid;?>
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
</section>

<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Yorum İncele</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="cid">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Yorum</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="desc form-control form-control-modern" name="desc" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-success" name="update-comment">Güncelle</button>
                        <button type="submit" class="btn btn-danger" name="remove-comment">Sil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('.view-comment').click(function (){
        $('input[name=cid]').val($(this).data('cid'))
        $('textarea[name=desc]').val($(this).data('comment'))
        $('#view').modal('show')
    })
<?php echo '</script'; ?>
><?php }
}
