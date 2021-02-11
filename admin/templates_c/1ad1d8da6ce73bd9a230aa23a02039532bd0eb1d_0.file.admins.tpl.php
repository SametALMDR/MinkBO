<?php
/* Smarty version 3.1.36, created on 2021-01-12 17:23:50
  from 'C:\xampp\htdocs\MinkBo\admin\templates\admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffdb0f678ee44_69618919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ad1d8da6ce73bd9a230aa23a02039532bd0eb1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\admins.tpl',
      1 => 1610461427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdb0f678ee44_69618919 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Adminler</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Adminler</b></h2>
                    <div class="ui buttons">
                        <button type="button" class="pb-2 mb-1 mt-1 mr-1 btn btn-primary" data-toggle="modal" data-target="#new">+ Yeni Admin Ekle</button>
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
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>E-posta adresi</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'a', false, 'key');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['a']->value->surname;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['a']->value->email;?>
</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['a']->value->created_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" style="color: rgb(0 34 128);"
                                       data-id="<?php echo $_smarty_tpl->tpl_vars['a']->value->aid;?>
"
                                       data-name="<?php echo $_smarty_tpl->tpl_vars['a']->value->name;?>
"
                                       data-surname="<?php echo $_smarty_tpl->tpl_vars['a']->value->surname;?>
"
                                       data-email="<?php echo $_smarty_tpl->tpl_vars['a']->value->email;?>
"
                                       data-address="<?php echo $_smarty_tpl->tpl_vars['a']->value->address;?>
"
                                       data-phone="<?php echo $_smarty_tpl->tpl_vars['a']->value->phone;?>
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
                <h4 class="modal-title mt-0" id="exampleModalLabel">Admin Ekle</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="col-12">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soy İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="surname" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-mail</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="email" class="form-control form-control-modern" name="email" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Şifre</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adres</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">Telefon</label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </span>
                                    <input id="phone" name="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(534) 123-1234" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                            <button type="submit" name="new" class="btn btn-info">Ekle</button>
                        </div>
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
                <h4 class="modal-title mt-0" id="exampleModalLabel">Admin Güncelleme</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="id">
                    <div class="col-12">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soy İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="surname" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-mail</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="email" class="form-control form-control-modern" name="email" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Şifre</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adres</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">Telefon</label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </span>
                                    <input id="phone" name="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(534) 123-1234" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                            <button type="submit" name="update-admin" class="btn btn-info">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    $('.update-row').click(function (){
        $('#edit input[name=id]').val($(this).data('id'))
        $('#edit input[name=name]').val($(this).data('name'))
        $('#edit input[name=surname]').val($(this).data('surname'))
        $('#edit input[name=email]').val($(this).data('email'))
        $('#edit input[name=address]').val($(this).data('address'))
        $('#edit input[name=phone]').val($(this).data('phone'))
        $('#edit').modal('show')
    })
<?php echo '</script'; ?>
><?php }
}
