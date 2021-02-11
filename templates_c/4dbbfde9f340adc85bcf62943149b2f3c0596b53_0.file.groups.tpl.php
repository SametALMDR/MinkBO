<?php
/* Smarty version 3.1.36, created on 2021-01-12 20:29:55
  from 'C:\xampp\htdocs\MinkBo\templates\groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffddc93200b62_07967913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dbbfde9f340adc85bcf62943149b2f3c0596b53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\groups.tpl',
      1 => 1610472592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_5ffddc93200b62_07967913 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- share box start -->
                    <div class="card">
                        <div class="row justify-content-between align-items-center ml-0 mr-0">
                            <h5>Gruplarım</h5>
                            <div>
                                <span class="btn btn-custom btn-sm text-white mr-2" style="padding:5px 10px" data-target="#newevent" data-toggle="modal"><i class="fal fa-plus-circle"></i> Yeni Grup Oluştur</span>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/grup.svg" alt="profile picture" width="25">
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($_smarty_tpl->tpl_vars['event_ok']->value)) {?>
                        <div class="alert alert-success">
                            <p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['event_ok']->value;?>
</p>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['event_error']->value) {?>
                        <div class="alert alert-danger">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event_errors']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                <div><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['event_up_ok']->value)) {?>
                        <div class="alert alert-success">
                            <p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['event_up_ok']->value;?>
</p>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['event_up_error']->value) {?>
                        <div class="alert alert-danger">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event_up_errors']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                <div><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['event_del_ok']->value)) {?>
                        <div class="alert alert-success">
                            <p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['event_del_ok']->value;?>
</p>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['event_del_error']->value) {?>
                        <div class="alert alert-danger">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['event_del_errors']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                <div><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    <?php }?>
                    <div class="row">
                        <!-- share box end -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="event text-center">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/grup.svg" alt="profile picture" width="45">
                                        <h5 class="text-uppercase mb-0 pt-2 mb-2">
                                            <?php echo $_smarty_tpl->tpl_vars['event']->value->name;?>

                                        </h5>
                                        <a class="mt-4 text-truncate" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['event']->value->owner_uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['event']->value->owner_uid;
}?>">Oluşturan: <?php echo $_smarty_tpl->tpl_vars['event']->value->uname;?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value->surname;?>

                                            <?php if ($_smarty_tpl->tpl_vars['event']->value->owner_uid == $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>(Sen)<?php }?>
                                        </a>
                                        <p class="pt-2 mb-0">Toplam Katılımcı : <?php echo $_smarty_tpl->tpl_vars['event']->value->total;?>
</p>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/group.php?gid=<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
"
                                           class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 d-inline-block" style="background: #09abb3!important;">
                                            Görüntüle
                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['event']->value->owner_uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                            <form action="" method="post" class="d-inline-block">
                                                <input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
">
                                                <button  type="submit" name="logout" class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #a5a5a5 !important;">Çık</button>
                                            </form>
                                            <button class="btn btn-custom report-group fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;" data-gid="<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
">Bildir</button>
                                        <?php } else { ?>
                                            <a class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 editnow"
                                               data-name="<?php echo $_smarty_tpl->tpl_vars['event']->value->name;?>
"
                                                    <?php if ($_smarty_tpl->tpl_vars['event']->value->owner_uid == $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                                        data-own="1"
                                                    <?php } else { ?>
                                                        data-own="0"
                                                    <?php }?>
                                               data-description="<?php echo $_smarty_tpl->tpl_vars['event']->value->description;?>
"
                                               data-gid="<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
">
                                                Güncelle
                                            </a>
                                            <form action="" method="post" class="d-inline-block">
                                                <input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
">
                                                <button  type="submit" name="cancel" class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;">Sil</button>
                                            </form>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <?php if (!count($_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <div class="card text-center pointer" style="padding: 125px 0;" data-toggle="modal" data-target="#textbox">
                            <p style="font-size: 35px;color: #efece8;">Grup Bulunamadı...</p>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal start -->
<div class="modal fade" id="newreport" aria-labelledby="newreport">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hata Bildir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form method="post" class="update-post-form" id="new-report-form">
                    <textarea name="message" class="share-field-big custom-scroll report-text" placeholder="Lütfen karşılaşmış olduğunuz hatayı detaylı bir şekilde ifade ediniz..." minlength="50"></textarea>
                    <div class="text-center">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="new_report" class="post-share-btn new-report-btn bg-one">GÖNDER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal start -->
<div class="modal fade" id="newevent" aria-labelledby="newevent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Grup Oluştur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form method="post" class="update-post-form" id="new-report-form">
                    <input type="text" name="name" placeholder="Grup adı ..." class="form-control mb-3" required>
                    <textarea name="description" class="share-field-big custom-scroll report-text" placeholder="Grup ile ilgili kısa açıklamalar...." minlength="10" required></textarea>
                    <div class="text-center">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="new_group" class="post-share-btn new-report-btn bg-one">OLUŞTUR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal start -->
<div class="modal fade" id="editevent" aria-labelledby="editevent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Grup Ayarları</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form method="post" class="update-post-form">
                    <input type="hidden" name="gid">
                    <input type="text" name="name" placeholder="Etkinlik adı ..." class="form-control mb-3" required>
                    <textarea name="description" class="share-field-big custom-scroll report-text" placeholder="Etkinlik ile ilgili kısa bilgiler...." minlength="25"></textarea>
                    <div class="text-center your-event">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="update_group" class="post-share-btn update-event bg-one">GÜNCELLE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<?php echo '<script'; ?>
>
    $(document).on('click','.editnow',function (){
        let gid = $(this).data('gid');
        let own = $(this).data('own');
        let name = $(this).data('name');
        let description = $(this).data('description');

        $('#editevent input[name=gid]').val(gid)
        if(own === 0){
            $('#editevent input[name=name]').val(name).attr('disabled','disabled')
            $('#editevent textarea[name=description]').val(description).attr('disabled','disabled')
            $('.your-event').hide()
        }else{
            $('#editevent input[name=name]').val(name).removeAttr('disabled')
            $('#editevent textarea[name=description]').val(description).removeAttr('disabled')
            $('.your-event').show()
        }

        $('#editevent').modal('show')
    })
<?php echo '</script'; ?>
><?php }
}
