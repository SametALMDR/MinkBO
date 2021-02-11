<?php
/* Smarty version 3.1.36, created on 2021-01-11 15:13:54
  from 'C:\xampp\htdocs\MinkBo\templates\friends.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffc41025863d4_06339819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9443c14f5cde4f8f546b9cb5422f5f9caebd6774' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\friends.tpl',
      1 => 1610367231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc41025863d4_06339819 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .author a:hover {
        color: white !important;
    }
</style>
<main>
    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->banner;?>
" id="current-cover-img">
        </div>
        <div class="profile-menu-area bg-white" style="box-shadow: 0px 3px 10px 0px #e6e6e6;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" alt="profile picture" style="box-shadow: 0 1px 15px 0px rgba(51, 51, 51, 0.2)" width="270" id="current-pp-img">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav class="text-center">
                                    <ul class="main-menu">
                                        <?php if ($_smarty_tpl->tpl_vars['me']->value) {?>
                                        <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/friends.php">Arkadaşlarım</a></li>
                                            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/groups.php">Gruplarım</a></li>
                                            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/events.php">Etkinliklerim</a></li>
                                        <?php }?>
                                        </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 d-none d-md-block">
                        <div class="profile-edit-panel">
                            <a class="edit-btn text-white pointer" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ((isset($_smarty_tpl->tpl_vars['get']->value['uid']))) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['get']->value['uid'];
}?>">Profil<?php if ($_smarty_tpl->tpl_vars['me']->value) {?>im<?php } else { ?>i Görüntüle<?php }?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="secondary-menu-wrapper secondary-menu-2 bg-white" style="box-shadow: 0 3px 10px 0 #e6e6e6;opacity: 1;">
                            <div class="filter-menu text-center" style="margin-left: initial;width: 100%">
                                <button class="active clr-main">Arkadaşlar (<?php echo count($_smarty_tpl->tpl_vars['RealFriends']->value);?>
)</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="friends-section mt-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content-box friends-zone">
                            <div class="row mt--20 friends-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RealFriends']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view" style="    word-break: break-word;">
                                            <div class="profile-thumb">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['f']->value[2];?>
">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['f']->value[1];?>
" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="posted-author">
                                                <h6 class="author"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['f']->value[2];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value[0];?>
</a></h6>
                                                <?php if ($_smarty_tpl->tpl_vars['me']->value) {?><button class="del-frnd" data-uid="<?php echo $_smarty_tpl->tpl_vars['f']->value[2];?>
">Arkadaşlıktan çıkar</button><?php }?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </div>
                    <?php if (!count($_smarty_tpl->tpl_vars['RealFriends']->value)) {?>
                        <div class="col-12">
                            <div class="card text-center" style="padding: 125px 0;">
                                <p style="font-size: 35px;color: #efece8;">Herhangi bir arkadaşınız bulunmamaktadır...</p>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php echo '<script'; ?>
>
    $('.del-frnd').click(function (){
        var t = $(this)
        $.ajax({
            url: 'ajax/FriendsController.php',
            type: 'post',
            data: {
                remove_friend: "1",
                uid: $(this).data('uid'),
            },
            success: function (response) {
                if(response.status){
                    t.remove()
                    ss_m('Arkadaş listesinden silindi.')
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
