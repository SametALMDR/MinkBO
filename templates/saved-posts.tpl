<main>
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                {include file='sidebar.tpl'}
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- share box start -->
                    <div class="card">
                        <div class="row justify-content-between align-items-center ml-0 mr-0">
                            <h5>Kayıt Edilen Gönderiler</h5>
                            <img src="{$WEB_ROOT}/templates/img/kayit.svg" alt="profile picture" width="25">
                        </div>
                    </div>
                    <!-- share box end -->

                    {foreach $posts as $post}
                        <!-- post status start -->
                        <div class="card">
                            <!-- post title start -->
                            <div class="post-title d-flex align-items-center">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="{$WEB_ROOT}/profile.php{if $post->uid != $lguser->uid}?uid={$post->uid}{/if}">
                                        <figure class="profile-thumb-middle">
                                            <img src="{$WEB_ROOT}/img/{$post->image}" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <div class="posted-author">
                                    <h6 class="author">
                                        <a href="{$WEB_ROOT}/profile.php{if $post->uid != $lguser->uid}?uid={$post->uid}{/if}">
                                            {$post->name} <span class="text-uppercase">{$post->surname}</span>
                                        </a>
                                    </h6>
                                    <span class="post-time">{$post->created_at}</span>
                                </div>

                                <div class="post-settings-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <div class="post-settings arrow-shape">
                                        <ul>
                                            {if $post->uid == $lguser->uid}
                                                <li>
                                                    <button class="update-post" data-uid="{$post->uid}" data-pid="{$post->pid}" data-content="{$post->content}" data-attachments="{str_replace('"',"'",json_encode($post->attachments))}">Gönderiyi Güncelle</button>
                                                </li>
                                            {/if}
                                            {if $post->uid != $lguser->uid}
                                                <li class="report-post-btn">
                                                    <button class="report-post" data-pid="{$post->pid}">Gönderiyi Bildir</button>
                                                </li>
                                            {/if}
                                            <li class="remove-saved-post-btn">
                                                <button class="remove-saved-post" data-pid="{$post->pid}">Gönderiyi Kaldır</button>
                                            </li>
                                            {if $post->uid == $lguser->uid}
                                                <li class="del-post-btn">
                                                    <button class="del-post" data-pid="{$post->pid}">Gönderiyi Sil</button>
                                                </li>
                                            {/if}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- post title start -->
                            <div class="post-content">
                                {if !empty($post->content)}
                                    <p class="post-desc">
                                        {$post->content}
                                    </p>
                                {/if}
                                {if count($post->attachments)}
                                    <div class="post-thumb-gallery img-gallery">
                                        <div class="row text-center no-gutters your-class">
                                            {foreach $post->attachments as $single}
                                                {foreach $single as $type => $filename}
                                                    {if $type == 'image'}
                                                        <div class="col-12">
                                                            <figure class="post-thumb">
                                                                <a class="gallery-selector" href="{$WEB_ROOT}/files/users/{$post->uid}/{$filename}">
                                                                    <img src="{$WEB_ROOT}/files/users/{$post->uid}/{$filename}" alt="{$filename}">
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    {else}
                                                        <div class="col-12">
                                                            <figure class="post-thumb">
                                                                <div class="plyr__video-embed plyr-youtube">
                                                                    <iframe src="{$WEB_ROOT}/files/users/{$post->uid}/{$filename}" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:250px" allowfullscreen></iframe>
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    {/if}
                                                {/foreach}
                                            {/foreach}
                                        </div>
                                    </div>
                                {/if}
                                <div class="post-meta">
                                    <button class="d-inline-flex post-meta-like {if $post->liked}post-dislike clr-red{else}post-like{/if}" data-pid="{$post->pid}" data-like="{$post->likes}">
                                        <i class="bi bi-like"></i>
                                        <span class="desc">{$post->likes} kişi bunu beğendi</span>
                                    </button>
                                    <ul class="comment-share-meta">
                                        <li>
                                            <button class="post-share share-a-post" data-pid="{$post->pid}" data-uid="{$post->uid}">
                                                <i class="bi bi-share"></i>
                                                <span>Paylaş</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comments">
                                    {foreach $post->comments as $comment}
                                        <div class="share-box-inner mb-1">
                                            <div class="profile-thumb">
                                                <a href="{$WEB_ROOT}/profile.php{if $lguser->uid != $comment->uid}?uid={$comment->uid}{/if}">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{$WEB_ROOT}/img/{$comment->image}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="share-content-box w-100">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="pl-3">
                                                            <p class="comment-bg">
                                                            <span class="d-flex justify-content-between">
                                                                <a href="{$WEB_ROOT}/profile.php{if $lguser->uid != $comment->uid}?uid={$comment->uid}{/if}" class="text-capitalize comment-user">
                                                                    {$comment->name} {$comment->surname}
                                                                </a>
                                                                <span class="fs-12">{$comment->created_at}</span>
                                                            </span>
                                                                <span class="d-block">
                                                                {$comment->comment}
                                                            </span>
                                                            </p>
                                                            <div class="d-flex justify-content-between comment-btns">
                                                                <span class="pointer font-weight-bold fs-12 mr-2 clr-main reply-comment" data-pid="{$comment->pid}" data-cid="{$comment->comment_id}"><i class="fal fa-reply"></i> Yanıtla</span>
                                                                {if $lguser->uid != $comment->uid}
                                                                    <span class="pointer font-weight-bold fs-12 clr-main report-comment" data-cid="{$comment->comment_id}"><i class="fal fa-exclamation-triangle"></i> Bildir!</span>
                                                                {/if}
                                                            </div>

                                                            {foreach $comment->subcomments as $s}
                                                                <div class="share-box-inner mt-2 mb-3">
                                                                    <div class="profile-thumb">
                                                                        <a href="{$WEB_ROOT}/profile.php{if $lguser->uid != $s->uid}?uid={$s->uid}{/if}">
                                                                            <figure class="profile-thumb-middle">
                                                                                <img src="{$WEB_ROOT}/img/{$s->image}" alt="profile picture">
                                                                            </figure>
                                                                        </a>
                                                                    </div>
                                                                    <div class="share-content-box w-100">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="pl-3">
                                                                                    <p class="comment-bg">
                                                                                    <span class="d-flex justify-content-between">
                                                                                        <a href="{$WEB_ROOT}/profile.php{if $lguser->uid != $s->uid}?uid={$s->uid}{/if}" class="text-capitalize comment-user">
                                                                                            {$s->name} {$s->surname}
                                                                                        </a>
                                                                                        <span class="fs-12">{$s->created_at}</span>
                                                                                    </span>
                                                                                        <span class="d-block">
                                                                                        {$s->comment}
                                                                                    </span>
                                                                                    </p>
                                                                                    <div class="d-flex justify-content-between comment-btns">
                                                                                        {if $lguser->uid != $s->uid}
                                                                                            <span class="pointer font-weight-bold fs-12 clr-main report-comment" data-cid="{$s->comment_id}"><i class="fal fa-exclamation-triangle"></i> Bildir!</span>
                                                                                        {/if}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            {/foreach}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}
                                    <!-- Comment box -->
                                    <div class="share-box-inner">
                                        <div class="profile-thumb">
                                            <a href="{$WEB_ROOT}/profile.php">
                                                <figure class="profile-thumb-middle">
                                                    <img src="{$WEB_ROOT}/img/{$lguser->image}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="share-content-box w-100">
                                            <form class="share-text-box send-comment" action="">
                                                <input type="hidden" name="new-comment" value="1">
                                                <input type="hidden" name="pid" value="{$post->pid}">
                                                <input name="comment" class="share-text-field" aria-disabled="true" placeholder="Yorum yaz..." style="padding-right: 20px;">
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Comment box end -->
                                </div>
                            </div>
                        </div>
                        <!-- post status end -->
                        {foreachelse}
                        <div class="card text-center pointer" style="padding: 125px 0;">
                            <p style="font-size: 35px;color: #efece8;">Gönderi Bulunamadı...</p>
                        </div>
                    {/foreach}

                </div>
            </div>
        </div>
    </div>
</main>