<?php
/* Smarty version 3.1.36, created on 2021-01-11 16:20:44
  from 'C:\xampp\htdocs\MinkBo\templates\account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffc50ac5b37b7_21078073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd93046bad7854f5db1eb3c1ec8014fff45c32146' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\account.tpl',
      1 => 1610371242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc50ac5b37b7_21078073 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->banner;?>
" id="current-cover-img">
        </div>
        <div class="profile-menu-area bg-white" style="box-shadow: 0px 3px 10px 0px #e6e6e6;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 offset-lg-3">
                        <div class="profile-menu-wrapper" <?php if (!$_smarty_tpl->tpl_vars['me']->value) {?>style="height: 30px" <?php }?>>
                            <div class="main-menu-inner header-top-navigation">
                                <nav class="text-center">
                                    <ul class="main-menu">
                                        <li class="active"><a> Hesap Ayarları & IP Geçmişi</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area profile-sidebar" style="height: 100%;margin-top: 0px;">
                        <!-- widget single item start -->
                        <div class="card widget-item" style="position: -webkit-sticky;position: sticky;">
                            <h4 class="widget-title">Genel Ayarlar</h4>
                            <div class="widget-body">
                                <div class="about-author">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="be_secret">
                                        <label class="custom-control-label" for="be_secret">Derdini anlat'ta gizli hesap kullan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div id="post-content">
                        <div class="card">
                            <h4 class="widget-title">Kullanıcı IP Geçmişi</h4>
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">IP Adresi</th>
                                    <th scope="col">Giriş Zamanı</th>
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
                                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</th>
                                        <td><?php echo $_smarty_tpl->tpl_vars['h']->value->ip_address;?>
</td>
                                        <td><?php echo date('d.m.Y H:i',strtotime($_smarty_tpl->tpl_vars['h']->value->logged_at));?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<?php echo '<script'; ?>
 type="text/javascript">
    const currbg = "<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->banner;?>
"
    const currpp = "<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
"
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="templates/js/profile.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $('#be_secret').change(function (e){
        let opt_val;
        if($(this).prop('checked')){
            opt_val = 1
        }else{
            opt_val = 0
        }
        $.ajax({
            url: 'ajax/requests.php',
            type: 'post',
            data: {
                change_secret: "1",
                opt: opt_val
            },
            success: function (response) {
                if(response.status){
                    ss_m('Ayar güncellendi.')
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
