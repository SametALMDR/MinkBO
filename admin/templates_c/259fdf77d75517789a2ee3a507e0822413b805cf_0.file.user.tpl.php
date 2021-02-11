<?php
/* Smarty version 3.1.36, created on 2021-01-12 19:47:13
  from 'C:\xampp\htdocs\MinkBo\admin\templates\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffdd2912b88b2_46123949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259fdf77d75517789a2ee3a507e0822413b805cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\user.tpl',
      1 => 1610470016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdd2912b88b2_46123949 (Smarty_Internal_Template $_smarty_tpl) {
?><section role="main" class="content-body">
    <header class="page-header">
        <h2>Kullanıcı #<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Etkinlik</span></li>
                <li><span>Etkinlik Düzenle</span></li>
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
                                <h2 class="card-big-info-title">Kullanıcı Gönderileri</h2>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value->pid;?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['p']->value->content,0,20);?>
...</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/post.php?pid=<?php echo $_smarty_tpl->tpl_vars['p']->value->pid;?>
" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>                                            </form>
                                        </div>
                                    </div>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['p']->do_else) {
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            Herhangi bir gönderi bulunamadı...
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <h2 class="card-big-info-title">Kullanıcı Grupları</h2>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/group.php?gid=<?php echo $_smarty_tpl->tpl_vars['g']->value->gid;?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['g']->value->name,0,20);?>
...</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/group.php?gid=<?php echo $_smarty_tpl->tpl_vars['g']->value->gid;?>
" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>                                            </form>
                                        </div>
                                    </div>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['g']->do_else) {
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            Herhangi bir grup bulunamadı...
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <h2 class="card-big-info-title">Kullanıcı Etkinlikleri</h2>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/event.php?eid=<?php echo $_smarty_tpl->tpl_vars['e']->value->eid;?>
" target="_blank"><?php echo mb_substr($_smarty_tpl->tpl_vars['e']->value->name,0,20);?>
...</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['ADMIN_ROOT']->value;?>
/event.php?eid=<?php echo $_smarty_tpl->tpl_vars['e']->value->eid;?>
" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>                                            </form>
                                        </div>
                                    </div>
                                    <?php
}
if ($_smarty_tpl->tpl_vars['e']->do_else) {
?>
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            Herhangi bir etkinlik bulunamadı...
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-big-info-title m-0 custom-title">Kullanıcı Bilgileri </h2>
                                    <span class="custom-title">Son giriş : <span class="badge badge-primary"><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['user']->value->created_at));?>
</span></span>
                                </div>
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
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Görsel</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" width="75">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soyadı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <textarea type="text" class="form-control form-control-modern" name="surname" rows="5" required><?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
</textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-posta Adresi</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="email" class="form-control form-control-modern" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Kullanıcı Adı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Parola</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Doğum Günü</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <select class="form-control" name="birth1">
                                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (date('d',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                                    <?php }
}
?>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="birth2">
                                                    <option value="01" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '1') {?>selected<?php }?>>Ocak</option>
                                                    <option value="02" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '2') {?>selected<?php }?>>Şubat</option>
                                                    <option value="03" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '3') {?>selected<?php }?>>Mart</option>
                                                    <option value="04" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '4') {?>selected<?php }?>>Nisan</option>
                                                    <option value="05" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '5') {?>selected<?php }?>>Mayıs</option>
                                                    <option value="06" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '6') {?>selected<?php }?>>Haziran</option>
                                                    <option value="07" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '7') {?>selected<?php }?>>Temmuz</option>
                                                    <option value="08" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '8') {?>selected<?php }?>>Ağustos</option>
                                                    <option value="09" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '9') {?>selected<?php }?>>Eylül</option>
                                                    <option value="10" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '10') {?>selected<?php }?>>Ekim</option>
                                                    <option value="11" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '11') {?>selected<?php }?>>Kasım</option>
                                                    <option value="12" <?php if (date('m',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == '12') {?>selected<?php }?>>Aralık</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="birth3">
                                                    <?php
$__section_i_0_loop = (is_array(@$_loop=date('Y')+1) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = $__section_i_0_loop - 1;
$__section_i_0_total = min(($__section_i_0_start+ 1), 100);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] -= 1){
?>
                                                        <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php if (date('Y',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday)) == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</option>
                                                    <?php
}
}
?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Cinsiyet</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <select class="form-control form-control-modern" name="gender">
                                            <option value="Kadın" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 'Kadın') {?>selected<?php }?>>Kadın</option>
                                            <option value="Erkek" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 'Erkek') {?>selected<?php }?>>Erkek</option>
                                            <option value="Diğer" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 'Diğer') {?>selected<?php }?>>Diğer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İl/ilçe</label>
                                    <div class="col-lg-4 col-xl-3">
                                        <select class="form-control form-control-modern" name="city" id="city"></select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <select class="form-control form-control-modern" name="state" id="state"></select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Açıklama</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="description" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->description;?>
" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İş</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="job" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->job;?>
" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-posta Onay Durumu</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="verified" class="custom-control-input" id="customSwitch1" <?php if ($_smarty_tpl->tpl_vars['user']->value->email_verified) {?>checked<?php }?>>
                                            <label class="custom-control-label" for="customSwitch1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Hesap Durumu</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="status" class="custom-control-input" id="customSwitch2" <?php if ($_smarty_tpl->tpl_vars['user']->value->status) {?>checked<?php }?>>
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_user" class="btn btn-dark">Güncelle</button>
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
                    <h2 class="card-big-info-title m-0 custom-title">Kullanıcı IP Geçmişi</h2>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>IP Adresi</th>
                            <th>Giriş Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history']->value, 'h', false, 'key');
$_smarty_tpl->tpl_vars['h']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['h']->value) {
$_smarty_tpl->tpl_vars['h']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['h']->value->ip_address;?>
</td>
                                <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['h']->value->logged_at));?>
</td>
                                <td class="d-flex justify-content-center">
                                    <form action="" method="post">
                                        <button name="delete-h-row" value="<?php echo $_smarty_tpl->tpl_vars['h']->value->hid;?>
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

<?php echo '<script'; ?>
>
    $.getJSON( "../includes/il-ilce.json", function( data ) {
        isselectcity  = ""
        isselectstate = ""
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value->city))) {?>
        il  = "<?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
"
        <?php } else { ?>
        il  = "Adana"
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['user']->value->state))) {?>
        ilce  = "<?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
"
        <?php } else { ?>
        ilce  = "Aladağ"
        <?php }?>
        $.each( data, function( key, val ) {
            $.each(val, function (key2 , val2) {
                val2.il_adi === il ? isselectcity = "selected":isselectcity = ""
                $('#city').append('<option value="'+val2.il_adi+'" '+isselectcity+'>'+val2.il_adi+'</option>')

                if(val2.il_adi === il){
                    $.each(val2.ilceler, function (key3,val3) {
                        val3.ilce_adi === ilce ? isselectstate = "selected":isselectstate = ""
                        $('#state').append('<option value="'+val3.ilce_adi+'" '+isselectstate+'>'+val3.ilce_adi+'</option>')
                    })
                }
            })
        });

        $('#city').change(function () {
            $('#state').html("")
            $('#state').next().children('.current').html("")
            $('#state').next().children('.list').html("")
            city = this.value
            $.each( data, function( key, val ) {
                $.each(val, function (key2 , val2) {
                    if(val2.il_adi === city){
                        $.each(val2.ilceler, function (key3,val3) {
                            key3 === 0 ? isselectstate = "selected":isselectstate = ""
                            $('#state').append('<option value="'+val3.ilce_adi+'">'+val3.ilce_adi+'</option>')
                            if(key3 === 0){
                                $('#state').next().children('.current').html(val3.ilce_adi)
                            }
                            $('#state').next().children('.list').append('<li data-value="'+val3.ilce_adi+'" class="option '+isselectstate+'">'+val3.ilce_adi+'</li>')
                        })
                    }
                })
            });
        })
    });
<?php echo '</script'; ?>
><?php }
}
