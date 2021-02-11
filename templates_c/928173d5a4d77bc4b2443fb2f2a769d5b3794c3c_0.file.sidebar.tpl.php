<?php
/* Smarty version 3.1.36, created on 2021-01-12 08:35:21
  from 'C:\xampp\htdocs\MinkBo\templates\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffd351948b3a9_05461919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '928173d5a4d77bc4b2443fb2f2a769d5b3794c3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\sidebar.tpl',
      1 => 1610429719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd351948b3a9_05461919 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-3 order-2 order-lg-1">
    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card widget-item">
            <div class="widget-body left-widget">
                <ul class="like-page-list-wrapper">
                    <li class="unorder-list pointer" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['lguser']->value->image;?>
" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->name;?>
</span>
                                    <span class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['lguser']->value->surname;?>
</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/talk.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/anlat.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Derdini Anlat!</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/friends.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/ark.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Arkadaşlarım</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer"  onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/groups.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/grup.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Gruplarım</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/trends.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/trend.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Trend Paylaşımlar</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/events.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/etkin.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Etkinliklerim</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/saved-posts.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/kayit.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Kaydedilenler</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" data-toggle="modal" data-target="#newreport">
                        <a data-toggle="modal" data-target="#newreport" class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/report.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Bildir</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->

        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Yaklaşan Etkinlikler</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upcoming_events']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a>
                                    <figure class="profile-thumb-small">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/etkin.svg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="unorder-list-info">
                                <h3 class="list-title"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php?q=<?php echo $_smarty_tpl->tpl_vars['e']->value->name;?>
" class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['e']->value->name;?>
</a></h3>
                                <p class="list-subtitle"><a><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['e']->value->event_time));?>
</a></p>
                            </div>
                        </li>
                        <?php
}
if ($_smarty_tpl->tpl_vars['e']->do_else) {
?>
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a style="opacity: 0.5;">
                                    Yakınlarda herhangi bir etkinlik bulunmamaktadır.
                                </a>
                            </div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->

        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Önerilen Gruplar</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suggested_groups']->value, 'g');
$_smarty_tpl->tpl_vars['g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->do_else = false;
?>
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a>
                                    <figure class="profile-thumb-small rounded-0">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/img/grup.svg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="align-items-center d-flex unorder-list-info">
                                <h3 class="list-title"><a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/search.php?q=<?php echo $_smarty_tpl->tpl_vars['g']->value->name;?>
" class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['g']->value->name;?>
</a></h3>
                            </div>
                        </li>
                        <?php
}
if ($_smarty_tpl->tpl_vars['g']->do_else) {
?>
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a style="opacity: 0.5;">
                                    Önerilebilecek herhangi bir grup bulunmamaktadır.
                                </a>
                            </div>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->
        <?php if (count($_smarty_tpl->tpl_vars['Advertisements']->value)) {?>
        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Reklam</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Advertisements']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
                        <li class="d-block">
                            <?php if (!empty($_smarty_tpl->tpl_vars['a']->value->img)) {?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/advertisements/<?php echo $_smarty_tpl->tpl_vars['a']->value->img;?>
">
                            <?php }?>
                            <p class="mt-2"><?php echo $_smarty_tpl->tpl_vars['a']->value->description;?>
</p>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->
        <?php }?>
    </aside>
</div><?php }
}
