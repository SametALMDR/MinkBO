<?php
/* Smarty version 3.1.36, created on 2021-01-12 08:48:55
  from 'C:\xampp\htdocs\MinkBo\admin\templates\advertisements.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffd3847ba2662_74982008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75a04d8ec3edae8b1a26abee844382e89c7f9909' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\advertisements.tpl',
      1 => 1610430534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd3847ba2662_74982008 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Reklamlar</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Reklamlar</b></h2>
                    <div class="ui buttons">
                        <button type="button" class="pb-2 mb-1 mt-1 mr-1 btn btn-primary" data-toggle="modal" data-target="#new">+ Yeni Reklam Ekle</button>
                    </div>
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
                            <th>Açıklama</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Güncellenme Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['advs']->value, 'a', false, 'key');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><?php echo mb_substr($_smarty_tpl->tpl_vars['a']->value->description,0,300);?>
...</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['a']->value->created_at));?>
</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['a']->value->updated_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" style="color: rgb(0 34 128);"
                                       data-aid="<?php echo $_smarty_tpl->tpl_vars['a']->value->aid;?>
"
                                       data-desc="<?php echo $_smarty_tpl->tpl_vars['a']->value->description;?>
"
                                       data-status="<?php echo $_smarty_tpl->tpl_vars['a']->value->status;?>
"
                                       data-img="<?php echo $_smarty_tpl->tpl_vars['a']->value->img;?>
">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="<?php echo $_smarty_tpl->tpl_vars['a']->value->aid;?>
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

<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Reklam Ekle</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Açıklama</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="desc form-control form-control-modern" name="desc" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Görsel</label>
                        <div class="col-lg-7 col-xl-9">
                            <input type="file" name="img">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Durum</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="status custom-control-input" name="status" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Kullanıcılar tarafından görülebilir</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" name="new" class="btn btn-info">Ekle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Reklam Güncelleme</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İçerik</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="edit-desc form-control form-control-modern" name="desc" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Görsel</label>
                        <div class="col-lg-7 col-xl-9">
                            <input type="file" name="img">
                            <span class="d-block mt-2 fs-12">Görseli değiştirmek için yükleyiniz..</span>
                            <img src="" class="curr-img w-50">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Durum</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="edit-status custom-control-input" name="status" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Kullanıcılar tarafından görülebilir</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" name="update-cont" class="btn btn-success">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('.update-row').click(function (){
        $('button[name=update-cont]').attr('value',$(this).data('aid'))
        $('.edit-desc').val($(this).data('desc'))
        $('.curr-img').attr('src',"../img/advertisements/"+$(this).data('img'))
        if($(this).data('img') === ''){
            $('.curr-img').hide()
        }else{
            $('.curr-img').show()
        }
        if($(this).data('status')){
            $('.edit-status').prop('checked',true)
        }else{
            $('.edit-status').prop('checked',false)
        }
        $('#edit').modal('show')
    })
<?php echo '</script'; ?>
><?php }
}
