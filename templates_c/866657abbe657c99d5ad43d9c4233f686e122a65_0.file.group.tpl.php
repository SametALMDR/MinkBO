<?php
/* Smarty version 3.1.36, created on 2021-01-10 22:31:44
  from 'C:\xampp\htdocs\MinkBo\templates\group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffb5620b34648_59792685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866657abbe657c99d5ad43d9c4233f686e122a65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\group.tpl',
      1 => 1610307103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_5ffb5620b34648_59792685 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <div>
                                <h5><?php echo $_smarty_tpl->tpl_vars['g_info']->value->name;?>
</h5>
                                <p><?php echo $_smarty_tpl->tpl_vars['g_info']->value->description;?>
</p>
                            </div>
                            <img src="http://localhost/MinkBo/templates/img/grup.svg" alt="profile picture" width="45">
                        </div>
                    </div>
                    <div class="card">
                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['lguser']->value->image;?>
" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box">
                                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Ne yapıyorsun, <?php echo ucfirst($_smarty_tpl->tpl_vars['lguser']->value->name);?>
 ?" data-toggle="modal" data-target="#textbox"></textarea>
                                </form>
                            </div>
                            <!-- share content box end -->

                            <!-- Modal start -->
                            <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Gönderi Oluştur</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body custom-scroll">
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/group.php?gid=<?php echo $_smarty_tpl->tpl_vars['get']->value['gid'];?>
" method="post" enctype="multipart/form-data">
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Ne yapıyorsun, <?php echo ucfirst($_smarty_tpl->tpl_vars['lguser']->value->name);?>
 ?"></textarea>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input type="file" name="files[]" multiple class="file-post border mb-2 p-2 w-100">
                                                    </div>
                                                </div>
                                                <p class="small">*İzin verilen dosya türleri: resim,video,ses</p>
                                                <div class="text-center">
                                                    <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                                                    <button type="submit" name="share-post" class="post-share-btn bg-one">PAYLAŞ</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal end -->
                        </div>
                    </div>
                    <!-- share box end -->

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['post']->value->uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;
}?>">
                                        <figure class="profile-thumb-middle">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['post']->value->image;?>
" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['post']->value->uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;
}?>">
                                            <?php echo $_smarty_tpl->tpl_vars['post']->value->name;?>
 <span class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['post']->value->surname;?>
</span>
                                        </a>
                                    </h6>
                                    <span class="post-time"><?php echo $_smarty_tpl->tpl_vars['post']->value->created_at;?>
</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->uid == $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                                <li>
                                                    <button class="update-post" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>
" data-attachments="<?php echo str_replace('"',"'",json_encode($_smarty_tpl->tpl_vars['post']->value->attachments));?>
">Gönderiyi Güncelle</button>
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->uid != $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                                <li class="report-post-btn">
                                                    <button class="report-post" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
">Gönderiyi Bildir</button>
                                                </li>
                                            <?php }?>
                                            <li class="save-post-btn">
                                                <button class="save-post" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
">Gönderiyi Kaydet</button>
                                            </li>
                                            <?php if ($_smarty_tpl->tpl_vars['post']->value->uid == $_smarty_tpl->tpl_vars['lguser']->value->uid) {?>
                                                <li class="del-post-btn">
                                                    <button class="del-post" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
">Gönderiyi Sil</button>
                                                </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                <?php if (!empty($_smarty_tpl->tpl_vars['post']->value->content)) {?>
                                    <p class="post-desc">
                                        <?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

                                    </p>
                                <?php }?>
                                <?php if (count($_smarty_tpl->tpl_vars['post']->value->attachments)) {?>
                                    <div class="post-thumb-gallery img-gallery">
                                        <div class="row text-center no-gutters your-class">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->attachments, 'single');
$_smarty_tpl->tpl_vars['single']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['single']->value) {
$_smarty_tpl->tpl_vars['single']->do_else = false;
?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['single']->value, 'filename', false, 'type');
$_smarty_tpl->tpl_vars['filename']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['filename']->value) {
$_smarty_tpl->tpl_vars['filename']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value == 'image') {?>
                                                        <div class="col-12">
                                                            <figure class="post-thumb">
                                                                <a class="gallery-selector" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
">
                                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
">
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="col-12">
                                                            <figure class="post-thumb">
                                                                <div class="plyr__video-embed plyr-youtube">
                                                                    <iframe src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:250px" allowfullscreen></iframe>
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="post-meta">
                                    <button class="d-inline-flex post-meta-like <?php if ($_smarty_tpl->tpl_vars['post']->value->liked) {?>post-dislike clr-red<?php } else { ?>post-like<?php }?>" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
" data-like="<?php echo $_smarty_tpl->tpl_vars['post']->value->likes;?>
">
                                        <i class="bi bi-like"></i>
                                        <span class="desc"><?php echo $_smarty_tpl->tpl_vars['post']->value->likes;?>
 kişi bunu beğendi</span>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-share share-a-post" data-pid="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value->uid;?>
">
                                                <i class="bi bi-share"></i>
                                                <span>Paylaş</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comments">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value->comments, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                        <div class="share-box-inner mb-1">
                                            <div class="profile-thumb">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['lguser']->value->uid != $_smarty_tpl->tpl_vars['comment']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['comment']->value->uid;
}?>">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['comment']->value->image;?>
" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="share-content-box w-100">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="pl-3">
                                                            <p class="comment-bg">
                                                            <span class="d-flex justify-content-between">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['lguser']->value->uid != $_smarty_tpl->tpl_vars['comment']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['comment']->value->uid;
}?>" class="text-capitalize comment-user">
                                                                    <?php echo $_smarty_tpl->tpl_vars['comment']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['comment']->value->surname;?>

                                                                </a>
                                                                <span class="fs-12"><?php echo $_smarty_tpl->tpl_vars['comment']->value->created_at;?>
</span>
                                                            </span>
                                                                <span class="d-block">
                                                                <?php echo $_smarty_tpl->tpl_vars['comment']->value->comment;?>

                                                            </span>
                                                            </p>
                                                            <div class="d-flex justify-content-between comment-btns">
                                                                <span class="pointer font-weight-bold fs-12 mr-2 clr-main reply-comment" data-pid="<?php echo $_smarty_tpl->tpl_vars['comment']->value->pid;?>
" data-cid="<?php echo $_smarty_tpl->tpl_vars['comment']->value->comment_id;?>
"><i class="fal fa-reply"></i> Yanıtla</span>
                                                                <?php if ($_smarty_tpl->tpl_vars['lguser']->value->uid != $_smarty_tpl->tpl_vars['comment']->value->uid) {?>
                                                                    <span class="pointer font-weight-bold fs-12 clr-main report-comment" data-cid="<?php echo $_smarty_tpl->tpl_vars['comment']->value->comment_id;?>
"><i class="fal fa-exclamation-triangle"></i> Bildir!</span>
                                                                <?php }?>
                                                            </div>

                                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value->subcomments, 's');
$_smarty_tpl->tpl_vars['s']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->do_else = false;
?>
                                                                <div class="share-box-inner mt-2 mb-3">
                                                                    <div class="profile-thumb">
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['lguser']->value->uid != $_smarty_tpl->tpl_vars['s']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['s']->value->uid;
}?>">
                                                                            <figure class="profile-thumb-middle">
                                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['s']->value->image;?>
" alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                    <div class="share-content-box w-100">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="pl-3">
                                                                                    <p class="comment-bg">
                                                                                    <span class="d-flex justify-content-between">
                                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php<?php if ($_smarty_tpl->tpl_vars['lguser']->value->uid != $_smarty_tpl->tpl_vars['s']->value->uid) {?>?uid=<?php echo $_smarty_tpl->tpl_vars['s']->value->uid;
}?>" class="text-capitalize comment-user">
                                                                                            <?php echo $_smarty_tpl->tpl_vars['s']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['s']->value->surname;?>

                                                                                        </a>
                                                                                        <span class="fs-12"><?php echo $_smarty_tpl->tpl_vars['s']->value->created_at;?>
</span>
                                                                                    </span>
                                                                                        <span class="d-block">
                                                                                        <?php echo $_smarty_tpl->tpl_vars['s']->value->comment;?>

                                                                                    </span>
                                                                                    </p>
                                                                                    <div class="d-flex justify-content-between comment-btns">
                                                                                        <?php if ($_smarty_tpl->tpl_vars['lguser']->value->uid != $_smarty_tpl->tpl_vars['s']->value->uid) {?>
                                                                                            <span class="pointer font-weight-bold fs-12 clr-main report-comment" data-cid="<?php echo $_smarty_tpl->tpl_vars['s']->value->comment_id;?>
"><i class="fal fa-exclamation-triangle"></i> Bildir!</span>
                                                                                        <?php }?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <!-- Comment box -->
                                    <div class="share-box-inner">
                                        <div class="profile-thumb">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/profile.php">
                                                <figure class="profile-thumb-middle">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['lguser']->value->image;?>
" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="share-content-box w-100">
                                            <form class="share-text-box send-comment" action="">
                                                <input type="hidden" name="new-comment" value="1">
                                                <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['post']->value->pid;?>
">
                                                <input name="comment" class="share-text-field" aria-disabled="true" placeholder="Yorum yaz..." style="padding-right: 20px;">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Comment box end -->
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->
                        <?php
}
if ($_smarty_tpl->tpl_vars['post']->do_else) {
?>
                        <div class="card text-center pointer" style="padding: 125px 0;" data-toggle="modal" data-target="#textbox">
                            <p style="font-size: 35px;color: #efece8;">Hadi hemen birşeyler paylaş!</p>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal start -->
<div class="modal fade" id="edit-post-modal" aria-labelledby="textbox">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gönderi Düzenle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form action="" method="post" enctype="multipart/form-data" class="update-post-form">
                    <textarea name="share" class="share-field-big custom-scroll" placeholder="Ne yapıyorsun, <?php echo ucfirst($_smarty_tpl->tpl_vars['lguser']->value->name);?>
 ?" id="modal-share"></textarea>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="file" name="files[]" multiple class="file-post border mb-2 p-2 w-100 file-post-update">
                        </div>
                    </div>
                    <div class="row text-center post-images mb-2">

                    </div>
                    <div class="text-center">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="update-post" class="post-share-btn bg-one">GÜNCELLE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
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
<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
><?php }
}
