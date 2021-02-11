<?php
/* Smarty version 3.1.36, created on 2021-01-12 20:34:30
  from 'C:\xampp\htdocs\MinkBo\admin\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffddda6cb4a64_23444875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a3405ea8bc912c451de6e206ee0758824f09f04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\admin\\templates\\index.tpl',
      1 => 1610472869,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffddda6cb4a64_23444875 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .widget-summary .widget-summary-col {
        vertical-align: middle;
    }
</style>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Genel Bilgiler</h2>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Genel Bilgiler</b></h2>
                </header>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row mb-3">
							<?php if ((isset($_smarty_tpl->tpl_vars['session']->value['admin']))) {?>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-primary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Adminler</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalAdmin']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-secondary">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-secondary">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Moderatörler</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalAdmin']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
							<?php }?>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-tertiary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-tertiary">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Kullanıcılar</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalUser']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-quaternary">
                                                    <i class="fas fa-copy"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Gönderiler</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalPost']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Gruplar</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalGroup']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-secondary">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Etkinlikler</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalEvent']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-tertiary">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Raporlar</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalReport']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
							<?php if ((isset($_smarty_tpl->tpl_vars['session']->value['admin']))) {?>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-quaternary">
                                                    <i class="fas fa-ad"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Reklamlar</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalAdv']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Sözleşmeler</h4>
                                                    <div class="info">
                                                        <strong class="amount"><?php echo $_smarty_tpl->tpl_vars['TotalCont']->value;?>
</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
							<?php }?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- end: page -->
</section>
</div>
<?php }
}
