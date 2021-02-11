<main>
    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="{$WEB_ROOT}/img/{$user->banner}" id="current-cover-img">
            {if $me}<a class="cover-change"><i class="far fa-images"></i> Kapak Resmi Değiştir</a>
            <div class="cover-change-btns" style="display: none">
                <a class="bg-success mr-4 p-1" id="accept-upload"><i class='far fa-check'></i></a>
                <a class='bg-danger p-1' id="cancel-upload"><i class='far fa-times'></i></a>
            </div>
            <input type="file" name="cover-img" id="cover-img" style="opacity: 0;">
            {/if}
        </div>
        <div class="profile-menu-area bg-white" style="box-shadow: 0px 3px 10px 0px #e6e6e6;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a>
                                    <img src="{$WEB_ROOT}/img/{$user->image}" alt="profile picture" style="box-shadow: 0 1px 15px 0px rgba(51, 51, 51, 0.2)" width="270" id="current-pp-img">
                                </a>
                                {if $me}
                                <a class="pp-change"><i class="far fa-sync"></i></a>
                                <div class="pp-change-btns" style="display: none">
                                    <a class="bg-success mr-4 p-1" id="accept-pp-upload"><i class='far fa-check'></i></a>
                                    <a class='bg-danger p-1' id="cancel-pp-upload"><i class='far fa-times'></i></a>
                                </div>
                                <input type="file" name="pp-img" id="pp-img" style="display: none">
                                {/if}
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper" {if !$me}style="height: 30px" {/if}>
                            <div class="main-menu-inner header-top-navigation">
                                <nav class="text-center">
                                    <ul class="main-menu">
                                        {if $me}
                                        <li class="active"><a href="{$WEB_ROOT}/friends.php">Arkadaşlarım</a></li>
                                        <li class="active"><a href="{$WEB_ROOT}/groups.php">Gruplarım</a></li>
                                        <li class="active"><a href="{$WEB_ROOT}/events.php">Etkinliklerim</a></li>
                                        {/if}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 d-none d-md-block">
                        <div class="profile-edit-panel">
                            {if $me}
                                <button class="edit-btn" data-toggle="modal" data-target="#editprofile">Profilimi Düzenle</button>
                            {/if}
                            {if !$me}
                                <button class="edit-btn report-user mt-2 mb-2" data-uid="{$user->uid}">Kullanıcıyı Bildir</button>
                            {/if}
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
                            <h4 class="widget-title">{$user->name} <span class="text-uppercase">{$user->surname}</span></h4>
                            <div class="widget-body">
                                <div class="about-author">
                                    <p>{$user->description}</p>
                                    <ul class="author-into-list">
                                        <li><a><i class="bi bi-user-ID"></i>{$user->gender}</a></li>
                                        <li><a><i class="bi bi-candle"></i>{date('d.m.Y',strtotime($user->birthday))}</a></li>
                                        <li><a><i class="bi bi-office-bag"></i>{$user->job}</a></li>
                                        <li><a class="text-uppercase"><i class="bi bi-home"></i>{$user->city}/{$user->state}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    {if $me}
                    <div id="post-content">
                    <div class="card">
                        <div class="share-box-inner">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="#">
                                    <figure class="profile-thumb-middle">
                                        <img src="{$WEB_ROOT}/img/{$user->image}" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <!-- share content box start -->
                            <div class="share-content-box w-100">
                                <form class="share-text-box">
                                    <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Ne yapıyorsun, {ucfirst($user->name)} ?" data-toggle="modal" data-target="#textbox" id="email"></textarea>
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
                                                <textarea name="share" class="share-field-big custom-scroll" placeholder="Ne yapıyorsun, {ucfirst($user->name)} ?"></textarea>
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
                    {/if}
                    {foreach $posts as $post}
                    <!-- post status start -->
                    <div class="card">
                        <!-- post title start -->
                        <div class="post-title d-flex align-items-center">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a href="{$WEB_ROOT}/profile.php{if $post->uid != $lguser->uid}?uid={$post->uid}{/if}">
                                    <figure class="profile-thumb-middle">
                                        <img src="{$WEB_ROOT}/img/{$user->image}" alt="profile picture">
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
                                        <li class="save-post-btn">
                                            <button class="save-post" data-pid="{$post->pid}">Gönderiyi Kaydet</button>
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
                                                            <a class="gallery-selector" href="{$WEB_ROOT}/files/users/{$user->uid}/{$filename}">
                                                                <img src="{$WEB_ROOT}/files/users/{$user->uid}/{$filename}" alt="{$filename}">
                                                            </a>
                                                        </figure>
                                                    </div>
                                                {else}
                                                    <div class="col-12">
                                                        <figure class="post-thumb">
                                                            <div class="plyr__video-embed plyr-youtube">
                                                                <iframe src="{$WEB_ROOT}/files/users/{$user->uid}/{$filename}" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" style="width:100%;height:250px" allowfullscreen></iframe>
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
                        <div class="card text-center pointer" style="padding: 125px 0;" data-toggle="modal" data-target="#textbox">
                            <p style="font-size: 35px;color: #efece8;">Hadi hemen birşeyler paylaş!</p>
                        </div>
                    {/foreach}
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
                {if !empty($ok)}
                    <div class="alert alert-success rounded-0">
                        <a><i class="flaticon-send font-weight-bold"></i> {$ok}</a>
                    </div>
                {/if}
                {if $error}
                    <div class="alert alert-danger rounded-0">
                        <ul>
                            {foreach $errors as $e}
                                <li><i class="flaticon-cross-out font-weight-bold"></i> {$e}</li>
                            {/foreach}
                        </ul>
                    </div>
                {/if}
                <form action="" method="post" class="nice-select-none">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">İsim</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" minlength="3" maxlength="255" id="staticEmail" value="{$user->name}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Soyisim</label>
                        <div class="col-sm-10">
                            <input type="text" name="surname" class="form-control" minlength="3" maxlength="255" id="staticEmail" value="{$user->surname}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">E-posta</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="staticEmail" value="{$user->email}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kullanıcı Adı</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" minlength="3" id="staticEmail" value="{$user->username}" required>
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
                                        {for $i=1 to 31}
                                            <option value="{$i}" {if date('d',strtotime($user->birthday)) == $i}selected{/if}>{$i}</option>
                                        {/for}
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control" name="birth2">
                                        <option value="01" {if date('m',strtotime($user->birthday)) == '1'}selected{/if}>Ocak</option>
                                        <option value="02" {if date('m',strtotime($user->birthday)) == '2'}selected{/if}>Şubat</option>
                                        <option value="03" {if date('m',strtotime($user->birthday)) == '3'}selected{/if}>Mart</option>
                                        <option value="04" {if date('m',strtotime($user->birthday)) == '4'}selected{/if}>Nisan</option>
                                        <option value="05" {if date('m',strtotime($user->birthday)) == '5'}selected{/if}>Mayıs</option>
                                        <option value="06" {if date('m',strtotime($user->birthday)) == '6'}selected{/if}>Haziran</option>
                                        <option value="07" {if date('m',strtotime($user->birthday)) == '7'}selected{/if}>Temmuz</option>
                                        <option value="08" {if date('m',strtotime($user->birthday)) == '8'}selected{/if}>Ağustos</option>
                                        <option value="09" {if date('m',strtotime($user->birthday)) == '9'}selected{/if}>Eylül</option>
                                        <option value="10" {if date('m',strtotime($user->birthday)) == '10'}selected{/if}>Ekim</option>
                                        <option value="11" {if date('m',strtotime($user->birthday)) == '11'}selected{/if}>Kasım</option>
                                        <option value="12" {if date('m',strtotime($user->birthday)) == '12'}selected{/if}>Aralık</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control" name="birth3">
                                        {section name=i loop=date('Y')+1 max=100 step=-1}
                                            <option value="{$smarty.section.i.index}" {if date('Y',strtotime($user->birthday)) == $smarty.section.i.index}selected{/if}>{$smarty.section.i.index}</option>
                                        {/section}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Cinsiyet</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="gender">
                                <option value="Erkek" {if $user->gender == 'Erkek'}selected{/if}>Erkek</option>
                                <option value="Kadın" {if $user->gender == 'Kadın'}selected{/if}>Kadın</option>
                                <option value="Diğer" {if $user->gender == 'Diğer'}selected{/if}>Diğer</option>
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
                            <textarea class="form-control" name="description" id="city" rows="5">{$user->description}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Meslek</label>
                        <div class="col-sm-10">
                            <input type="text" name="job" class="form-control" id="staticEmail" value="{$user->job}">
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

<script type="text/javascript">
    const currbg = "{$WEB_ROOT}/img/{$user->banner}"
    const currpp = "{$WEB_ROOT}/img/{$user->image}"
    {if isset($post['info-update'])}
        $('#editprofile').modal('show')
    {/if}
    $.getJSON( "includes/il-ilce.json", function( data ) {
        isselectcity  = ""
        isselectstate = ""
        {if isset($user->city)}
        il  = "{$user->city}"
        {else}
        il  = "Adana"
        {/if}
        {if isset($user->state)}
        ilce  = "{$user->state}"
        {else}
        ilce  = "Aladağ"
        {/if}
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
</script>
<script src="templates/js/profile.js"></script>
