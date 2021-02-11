<?php
/* Smarty version 3.1.36, created on 2021-01-11 07:12:28
  from 'C:\xampp\htdocs\MinkBo\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffbd02c362c06_79329837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8094b3c1bcccd31b5b5c8c0a594824a64589b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\messages.tpl',
      1 => 1610338346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffbd02c362c06_79329837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main>
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Son Mesajlar</h4>
                            <div class="widget-body">
                                <div class="frnd-search-inner custom-scroll p-0 m-0" style="height: auto;">
                                    <ul class="user-list-1">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LGUserFriends2']->value, 'f');
$_smarty_tpl->tpl_vars['f']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->do_else = false;
?>
                                            <li class="d-flex align-items-center open-message-box mb-3"
                                                data-uid="<?php echo $_smarty_tpl->tpl_vars['f']->value[0]->uid;?>
"
                                                data-fullname="<?php echo $_smarty_tpl->tpl_vars['f']->value[0]->name;?>
 <?php echo $_smarty_tpl->tpl_vars['f']->value[0]->surname;?>
"
                                                data-image="<?php echo $_smarty_tpl->tpl_vars['f']->value[0]->image;?>
"
                                                data-status="<?php echo $_smarty_tpl->tpl_vars['f']->value[0]->session_status;?>
">
                                                <!-- profile picture end -->
                                                <div class="profile-thumb <?php if ($_smarty_tpl->tpl_vars['f']->value[0]->session_status == 'cevrimici') {?>active<?php } else { ?>passive<?php }?>">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php?uid=<?php echo $_smarty_tpl->tpl_vars['f']->value[0]->uid;?>
" target="_blank"
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['f']->value[0]->image;?>
" alt="profile picture">
                                                    </figure>
                                                    </a>
                                                </div>
                                                <!-- profile picture end -->

                                                <div class="posted-author">
                                                    <h6 class="author chat-username"><?php echo $_smarty_tpl->tpl_vars['f']->value[0]->name;?>
 <?php echo $_smarty_tpl->tpl_vars['f']->value[0]->surname;?>
</h6>
                                                    <p class="session-status"><?php if ($_smarty_tpl->tpl_vars['f']->value[0]->session_status == 'cevrimici') {?>Çevrimiçi<?php } else { ?>Çevrimdışı<?php }?></p>
                                                </div>
                                            </li>
                                            <?php
}
if ($_smarty_tpl->tpl_vars['f']->do_else) {
?>
                                            <div style="text-align: center;padding-top: 70px;opacity: 0.6;">Herhangi bir arkadaşınız bulunmamaktadır.</div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>


                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="position-relative" style="width: 100%;">
                        <div class="live-chat-inner">
                            <div class="chat-output-box show" style="position: initial;">
                                <div class="live-chat-title">
                                    <!-- profile picture end -->
                                    <div class="profile-thumb live-user-status">
                                        <a href="#">
                                            <figure class="profile-thumb-small">
                                                <img src="" alt="profile picture" class="live-user-image">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <div class="posted-author">
                                        <h6 class="author"><a class="live-user-name"></a></h6>
                                        <span class="active-pro live-status"></span>
                                    </div>
                                    <div class="live-chat-settings ml-auto">
                                        <button class="close-btn" data-close="chat-output-box"><i class="flaticon-cross-out"></i></button>
                                    </div>
                                </div>
                                <div class="message-list-inner">
                                    <ul class="message-list custom-scroll kayy"></ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php }
}
