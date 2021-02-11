<?php
/* Smarty version 3.1.36, created on 2021-01-12 20:30:42
  from 'C:\xampp\htdocs\MinkBo\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffddcc2458243_99236934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad5a3453aa42ee4a249007bdaddd293fbbf9a44f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\search.tpl',
      1 => 1610472630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffddcc2458243_99236934 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .friends-list {
        height: initial !important;
    }
    .recently.request{
        position: initial !important;
        top: initial !important;
        left: initial !important;
    }
    .friend-list-view:hover .author a {
        text-decoration: none;
    }
    .friends-section .content-box.friends-zone .friend-list-view:hover {
        background-color: #4c596d;
    }
</style>
<main>
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['ok']->value)) {?>
                        <div class="alert alert-success">
                            <p class="mb-0"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</p>
                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="alert alert-danger">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'e');
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
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="friends-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="font-weight-bold mb-3">
                                            Kişiler
                                        </h3>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box friends-zone">
                                            <div class="row mt--20 friends-list">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                                                <div class="col-lg-3 col-sm-6 recently request">
                                                    <div class="friend-list-view">
                                                        <!-- profile picture end -->
                                                        <div class="profile-thumb">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
">
                                                                <figure class="profile-thumb-middle">
                                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" alt="profile picture">
                                                                </figure>
                                                            </a>
                                                        </div>
                                                        <!-- profile picture end -->

                                                        <div class="posted-author">
                                                            <h6 class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
 (<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
)</a></h6>
                                                            <?php if (in_array($_smarty_tpl->tpl_vars['user']->value->uid,$_smarty_tpl->tpl_vars['AllFriendRequests']->value)) {?>
                                                                <button class="del-frnd" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
"><i class="fa fa-times-circle text-danger"></i> İptal Et</button>
                                                            <?php } else { ?>
                                                                <button class="add-frnd" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
">Arkadaş Ekle</button>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
}
if ($_smarty_tpl->tpl_vars['user']->do_else) {
?>
                                                    <p class="pl-3 pt-2">Herhangi bir sonuç bulunamadı..</p>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="friends-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="font-weight-bold mb-3">
                                           Etkinlikler
                                        </h3>
                                    </div>
                                    <!-- share box end -->
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['events']->value, 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
                                        <div class="col-md-4 mb-4">
                                            <div class="card">
                                                <div class="event text-center">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/etkin.svg" alt="profile picture" width="25">
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
                                                    <p class="pt-2">Vakit: <?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['event']->value->event_time));?>
</p>
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
                                                       data-location="<?php echo $_smarty_tpl->tpl_vars['event']->value->location;?>
"
                                                       data-date="<?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['event']->value->event_time));?>
"
                                                       data-time="<?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['event']->value->event_time));?>
"
                                                       data-eid="<?php echo $_smarty_tpl->tpl_vars['event']->value->eid;?>
">İncele</a>
                                                    <?php if ($_smarty_tpl->tpl_vars['event']->value->owner_uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                                        <a class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 join-event" data-eid="<?php echo $_smarty_tpl->tpl_vars['event']->value->eid;?>
" style="background: #a5a5a5 !important;">Katıl</a>
                                                        <button class="btn btn-custom report-event fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;" data-eid="<?php echo $_smarty_tpl->tpl_vars['event']->value->eid;?>
">Bildir</button>
                                                    <?php } else { ?>
                                                        <form action="" method="post" class="d-inline-block">
                                                            <input type="hidden" name="eid" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->eid;?>
">
                                                            <button  type="submit" name="cancel" class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;">İptal Et</button>
                                                        </form>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
}
if ($_smarty_tpl->tpl_vars['event']->do_else) {
?>
                                        <p class="pl-3">Herhangi bir sonuç bulunamadı..</p>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="friends-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="font-weight-bold mb-3">
                                            Gruplar
                                        </h3>
                                    </div>
                                    <!-- share box end -->
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['groups']->value, 'event');
$_smarty_tpl->tpl_vars['event']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->do_else = false;
?>
                                        <div class="col-md-4 mb-4">
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
                                                    <?php if ($_smarty_tpl->tpl_vars['event']->value->owner_uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                                        <a class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 join-group" data-gid="<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
" style="background: #a5a5a5 !important;">Katıl</a>
                                                        <button class="btn btn-custom report-group fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;" data-gid="<?php echo $_smarty_tpl->tpl_vars['event']->value->gid;?>
">Bildir</button>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
}
if ($_smarty_tpl->tpl_vars['event']->do_else) {
?>
                                        <p class="pl-3">Herhangi bir sonuç bulunamadı..</p>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal start -->
<div class="modal fade" id="editevent" aria-labelledby="editevent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Etkinlik Detay</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form method="post" class="update-post-form">
                    <input type="hidden" name="eid">
                    <input type="text" name="name" placeholder="Etkinlik adı ..." class="form-control mb-3" required>
                    <textarea name="description" class="share-field-big custom-scroll report-text" placeholder="Etkinlik ile ilgili kısa bilgiler...." minlength="25"></textarea>
                    <input type="text" name="location" placeholder="Etkinlik lokasyonu..." class="form-control mb-3">
                    <input type="datetime-local" name="time" class="form-control mb-3">
                    <div class="text-center your-event">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="update_event" class="post-share-btn update-event bg-one">GÜNCELLE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<?php echo '<script'; ?>
>
    $(document).on('click', '.add-frnd', function(e){
        var t = $(this);
        $.post( "ajax/requests.php", { friend_request: "1", uid: <?php echo $_smarty_tpl->tpl_vars['lguser']->value->uid;?>
, fid: $(this).data('uid')})
            .done(function( data ) {
                if(data.status){
                    t.html('<i class="fa fa-times-circle text-danger"></i> İptal Et')
                    t.removeClass('add-frnd')
                    t.addClass('del-frnd')
                }else{
                    alert(data.message)
                }
            })
            .fail(function() {
                alert("Bir hata oluştu");
            });
    })
    $(document).on('click', '.del-frnd', function(e){
        var t = $(this);
        $.post( "ajax/requests.php", { del_friend_request: "1", uid: <?php echo $_smarty_tpl->tpl_vars['lguser']->value->uid;?>
, fid: $(this).data('uid')})
            .done(function( data ) {
                if(data.status){
                    t.html('Arkadaş Ekle')
                    t.removeClass('del-frnd')
                    t.addClass('add-frnd')
                }else{
                    alert(data.message)
                }
            })
            .fail(function(data) {
                alert("Bir hata oluştu");
            });
    })
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).on('click','.editnow',function (){
        let eid = $(this).data('eid');
        let own = $(this).data('own');
        let name = $(this).data('name');
        let description = $(this).data('description');
        let location = $(this).data('location');
        let date = $(this).data('date');
        let time = $(this).data('time');

        $('#editevent input[name=eid]').val(eid)
        if(own === 0){
            $('#editevent input[name=name]').val(name).attr('disabled','disabled')
            $('#editevent textarea[name=description]').val(description).attr('disabled','disabled')
            $('#editevent input[name=location]').val(location).attr('disabled','disabled')
            $('#editevent input[name=time]').val(date+"T"+time).attr('disabled','disabled')
            $('.your-event').hide()
        }else{
            $('#editevent input[name=name]').val(name).removeAttr('disabled')
            $('#editevent textarea[name=description]').val(description).removeAttr('disabled')
            $('#editevent input[name=location]').val(location).removeAttr('disabled')
            $('#editevent input[name=time]').val(date+"T"+time).removeAttr('disabled')
            $('.your-event').show()
        }

        $('#editevent').modal('show')
    })
    $(document).on('click','.join-event',function (){
        var t = $(this)
        $.ajax({
            url: 'ajax/EventController.php',
            type: 'post',
            data: {
                join_event: "1",
                eid: $(this).data('eid'),
            },
            success: function (response) {
                if(response.status){
                    ss_m('Etkinliğe katıldınız.')
                    t.remove()
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })
    $(document).on('click','.join-group',function (){
        var t = $(this)
        $.ajax({
            url: 'ajax/GroupController.php',
            type: 'post',
            data: {
                join_group: "1",
                gid: $(this).data('gid'),
            },
            success: function (response) {
                if(response.status){
                    ss_m('Gruba katıldınız.')
                    t.remove()
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })
<?php echo '</script'; ?>
><?php }
}
