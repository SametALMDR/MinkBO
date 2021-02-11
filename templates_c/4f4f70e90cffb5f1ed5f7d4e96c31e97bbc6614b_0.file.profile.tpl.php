<?php
/* Smarty version 3.1.36, created on 2021-01-12 20:19:47
  from 'C:\xampp\htdocs\MinkBo\templates\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffdda333beb60_22170736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f4f70e90cffb5f1ed5f7d4e96c31e97bbc6614b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MinkBo\\templates\\profile.tpl',
      1 => 1610471985,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffdda333beb60_22170736 (Smarty_Internal_Template $_smarty_tpl) {
?><main>
    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->banner;?>
" id="current-cover-img">
            <?php if ($_smarty_tpl->tpl_vars['me']->value) {?><a class="cover-change"><i class="far fa-images"></i> Kapak Resmi Değiştir</a>
            <div class="cover-change-btns" style="display: none">
                <a class="bg-success mr-4 p-1" id="accept-upload"><i class='far fa-check'></i></a>
                <a class='bg-danger p-1' id="cancel-upload"><i class='far fa-times'></i></a>
            </div>
            <input type="file" name="cover-img" id="cover-img" style="opacity: 0;">
            <?php }?>
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
                                <?php if ($_smarty_tpl->tpl_vars['me']->value) {?>
                                <a class="pp-change"><i class="far fa-sync"></i></a>
                                <div class="pp-change-btns" style="display: none">
                                    <a class="bg-success mr-4 p-1" id="accept-pp-upload"><i class='far fa-check'></i></a>
                                    <a class='bg-danger p-1' id="cancel-pp-upload"><i class='far fa-times'></i></a>
                                </div>
                                <input type="file" name="pp-img" id="pp-img" style="display: none">
                                <?php }?>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper" <?php if (!$_smarty_tpl->tpl_vars['me']->value) {?>style="height: 30px" <?php }?>>
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
                            <?php if ($_smarty_tpl->tpl_vars['me']->value) {?>
                                <button class="edit-btn" data-toggle="modal" data-target="#editprofile">Profilimi Düzenle</button>
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['me']->value) {?>
                                <button class="edit-btn report-user mt-2 mb-2" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
">Kullanıcıyı Bildir</button>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area profile-sidebar" style="height: 100%">
                        <!-- widget single item start -->
                        <div class="card widget-item" style="position: -webkit-sticky;position: sticky;top: 70px;">
                            <h4 class="widget-title"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
 <span class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
</span></h4>
                            <div class="widget-body">
                                <div class="about-author">
                                    <p><?php echo $_smarty_tpl->tpl_vars['user']->value->description;?>
</p>
                                    <ul class="author-into-list">
                                        <li><a><i class="bi bi-user-ID"></i><?php echo $_smarty_tpl->tpl_vars['user']->value->gender;?>
</a></li>
                                        <li><a><i class="bi bi-candle"></i><?php echo date('d.m.Y',strtotime($_smarty_tpl->tpl_vars['user']->value->birthday));?>
</a></li>
                                        <li><a><i class="bi bi-office-bag"></i><?php echo $_smarty_tpl->tpl_vars['user']->value->job;?>
</a></li>
                                        <li><a class="text-uppercase"><i class="bi bi-home"></i><?php echo $_smarty_tpl->tpl_vars['user']->value->city;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->state;?>
</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <?php if ($_smarty_tpl->tpl_vars['me']->value) {?>
                    <div id="post-content">
                    <div class="card">
                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box">
                                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Ne yapıyorsun, <?php echo ucfirst($_smarty_tpl->tpl_vars['user']->value->name);?>
 ?" data-toggle="modal" data-target="#textbox" id="email"></textarea>
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
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Ne yapıyorsun, <?php echo ucfirst($_smarty_tpl->tpl_vars['user']->value->name);?>
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
                    <?php }?>
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
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
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
/files/users/<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/files/users/<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
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
/files/users/<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
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
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profili Düzenle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if (!empty($_smarty_tpl->tpl_vars['ok']->value)) {?>
                    <div class="alert alert-success rounded-0">
                        <a><i class="flaticon-send font-weight-bold"></i> <?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</a>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                    <div class="alert alert-danger rounded-0">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                                <li><i class="flaticon-cross-out font-weight-bold"></i> <?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                <?php }?>
                <form action="" method="post" class="nice-select-none">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">İsim</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" minlength="3" maxlength="255" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Soyisim</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname" class="form-control" minlength="3" maxlength="255" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">E-posta</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" minlength="3" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Şifre</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="staticEmail" placeholder="Şifrenizi değiştirmek için doldurun...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Doğum Tarihi</label>
                        <div class="col-sm-10">
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
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Cinsiyet</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender">
                                <option value="Erkek" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 'Erkek') {?>selected<?php }?>>Erkek</option>
                                <option value="Kadın" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 'Kadın') {?>selected<?php }?>>Kadın</option>
                                <option value="Diğer" <?php if ($_smarty_tpl->tpl_vars['user']->value->gender == 'Diğer') {?>selected<?php }?>>Diğer</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">İl / İlçe</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="form-control" name="city" id="city"></select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="state" id="state"></select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kişisel Açıklama</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" id="city" rows="5"><?php echo $_smarty_tpl->tpl_vars['user']->value->description;?>
</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Meslek</label>
                        <div class="col-sm-10">
                            <input type="text" name="job" class="form-control" id="staticEmail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->job;?>
">
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-custom btn-sm p-2 pl-3 pr-3 text-white" name="info-update"><i class="fa fa-sync"></i> Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    const currbg = "<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->banner;?>
"
    const currpp = "<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['user']->value->image;?>
"
    <?php if ((isset($_smarty_tpl->tpl_vars['post']->value['info-update']))) {?>
        $('#editprofile').modal('show')
    <?php }?>
    $.getJSON( "includes/il-ilce.json", function( data ) {
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
>
<?php echo '<script'; ?>
 src="templates/js/profile.js"><?php echo '</script'; ?>
>
<?php }
}
