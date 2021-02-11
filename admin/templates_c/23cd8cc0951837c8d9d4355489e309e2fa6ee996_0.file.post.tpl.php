<?php
/* Smarty version 3.1.36, created on 2021-01-12 16:25:27
  from 'C:\xampp\htdocs\MinkBo\admin\templates\post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffda347e450d9_48774908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23cd8cc0951837c8d9d4355489e309e2fa6ee996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\post.tpl',
      1 => 1610457926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffda347e450d9_48774908 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Gönderi #<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Gönderi</span></li>
                <li><span>Gönderi Düzenle</span></li>
            </ol>
        </div>
    </header>
    <div class="row">
        <div class="col">
            <section class="card card-modern card-big-info">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2-5 col-xl-1-5">
                            <i class="card-big-info-icon bx bx-dollar-circle"></i>
                            <h2 class="card-big-info-title">Gönderi Beğenileri</h2>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->likes_users, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                <div class="form-group row align-items-center">
                                    <div class="col-md-10">
                                        <a <?php if ($_smarty_tpl->tpl_vars['post']->value->type != 'secret') {?>href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['p']->value[0]->uid;?>
" target="_blank"<?php }?>>
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->type == 'secret') {?>
                                                Ananonim Kullanıcı
                                                <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['p']->value[0]->name;?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value[0]->surname;?>

                                            <?php }?>
                                        </a>
                                    </div>
                                    <div class="col-md-2">
                                        <form action="" method="post">
                                            <a <?php if ($_smarty_tpl->tpl_vars['post']->value->type != 'secret') {?>href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['p']->value[0]->uid;
}?>" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>
                                        </form>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="col-lg-3-5 col-xl-4-5">
                            <h2 class="card-big-info-title m-0 custom-title">Gönderi Bilgileri</h2>
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
                            <form class="ecommerce-form action-buttons-fixed pb-3" action="" method="post">
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Gönderi İçeriği</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <textarea type="text" class="form-control form-control-modern" name="description" rows="5"><?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>
</textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_post" class="btn btn-dark">Güncelle</button>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group row align-items-center">
                                <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Gönderi Ekleri</label>
                                <div class="col-lg-7 col-xl-6">
                                    <div class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->attachments, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a']->value, 'name', false, 'type');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['type']->value == 'image') {?>
                                                <div class="col-md-6">
                                                    <a class="gallery-selector" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" width="100%">
                                                    </a>
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['get']->value['pid'];?>
" method="post">
                                                        <div class="text-center mb-2 mt-2">
                                                            <button type="submit" class="btn btn-danger text-white" name="remove-file" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">Sil</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-md-6">
                                                    <iframe src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:250px" allowfullscreen></iframe>
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['get']->value['pid'];?>
" method="post">
                                                        <div class="text-center mb-2 mt-2">
                                                            <button type="submit" class="btn btn-danger text-white" name="remove-file" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">Sil</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            <?php }?>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <section class="card card-modern card-big-info">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="card-big-info-title m-0 custom-title">Gönderi Yorumları</h2>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Yorum Sahibi</th>
                            <th>Yorum İçeriği</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'c', false, 'key');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/user.php?uid=<?php echo $_smarty_tpl->tpl_vars['c']->value->uid;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['c']->value->surname;?>
</a></td>
                                <td><?php echo mb_substr($_smarty_tpl->tpl_vars['c']->value->comment,0,45);?>
...</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['c']->value->created_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <a class="update-row mr-3 pointer view-comment" data-cid="<?php echo $_smarty_tpl->tpl_vars['c']->value->comment_id;?>
" data-comment="<?php echo $_smarty_tpl->tpl_vars['c']->value->comment;?>
" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['get']->value['pid'];?>
" method="post">
                                        <button name="delete-comment" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->comment_id;?>
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
            </div>
    </section>
</section>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Yorum İncele</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['get']->value['pid'];?>
" method="post">
                    <input type="hidden" name="cid">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Yorum</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="desc form-control form-control-modern" name="comment" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-success" name="update-comment">Güncelle</button>
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
        $('textarea[name=comment]').val($(this).data('comment'))
        $('#edit').modal('show')
    })
<?php echo '</script'; ?>
><?php }
}
