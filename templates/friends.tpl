<style>
    .author a:hover {
        color: white !important;
    }
</style>
<main>
    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="{$WEB_ROOT}/img/{$user->banner}" id="current-cover-img">
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
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
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
                            <a class="edit-btn text-white pointer" href="{$WEB_ROOT}/profile.php{if isset($get['uid'])}?uid={$get['uid']}{/if}">Profil{if $me}im{else}i Görüntüle{/if}</a>
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
                                <button class="active clr-main">Arkadaşlar ({count($RealFriends)})</button>
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
                                {foreach $RealFriends as $f}
                                    <div class="col-lg-3 col-sm-6 recently request">
                                        <div class="friend-list-view" style="    word-break: break-word;">
                                            <div class="profile-thumb">
                                                <a href="{$WEB_ROOT}/profile.php?uid={$f[2]}">
                                                    <figure class="profile-thumb-middle">
                                                        <img src="{$WEB_ROOT}/img/{$f[1]}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="posted-author">
                                                <h6 class="author"><a href="{$WEB_ROOT}/profile.php?uid={$f[2]}">{$f[0]}</a></h6>
                                                {if $me}<button class="del-frnd" data-uid="{$f[2]}">Arkadaşlıktan çıkar</button>{/if}
                                            </div>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        </div>
                    </div>
                    {if !count($RealFriends)}
                        <div class="col-12">
                            <div class="card text-center" style="padding: 125px 0;">
                                <p style="font-size: 35px;color: #efece8;">Herhangi bir arkadaşınız bulunmamaktadır...</p>
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</main>

<script>
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
</script>