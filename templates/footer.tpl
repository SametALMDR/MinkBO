<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="bi bi-finger-index"></i>
</div>
<!-- Scroll to Top End -->

<!-- footer area start -->
<footer class="d-none d-lg-block">
    <div class="footer-area reveal-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="footer-wrapper">
                        <div class="footer-card position-relative">
                            <div class="friends-search">
                                <form class="search-box" id="chat-search-friend">
                                    <input type="text" placeholder="Arkadaşını Ara..." class="search-field search-friend-input">
                                    <button class="search-btn"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="friend-search-list">
                                <div class="frnd-search-title">
                                    <p>Arkadaşlarım</p>
                                    <button class="close-btn" data-close="friend-search-list"><i class="flaticon-cross-out"></i></button>
                                </div>
                                <div class="frnd-search-inner custom-scroll">
                                    <ul class="user-list-1">
                                        {foreach $LGUserFriends as $f}
                                        <li class="d-flex align-items-center open-message-box"
                                            data-uid="{$f[0]->uid}"
                                            data-fullname="{$f[0]->name} {$f[0]->surname}"
                                            data-image="{$f[0]->image}"
                                            data-status="{$f[0]->session_status}">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb {if $f[0]->session_status == 'cevrimici'}active{else}passive{/if}">
                                                <a href="{$WEB_ROOT}/profile.php?uid={$f[0]->uid}" target="_blank"
                                                    <figure class="profile-thumb-small">
                                                        <img src="{$WEB_ROOT}/img/{$f[0]->image}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="posted-author">
                                                <h6 class="author chat-username">{$f[0]->name} {$f[0]->surname}</h6>
                                                <p class="session-status">{if $f[0]->session_status == 'cevrimici'}Çevrimiçi{else}Çevrimdışı{/if}</p>
                                            </div>
                                        </li>
                                            {foreachelse}
                                           <div style="text-align: center;padding-top: 70px;opacity: 0.6;">Herhangi bir arkadaşınız bulunmamaktadır.</div>
                                        {/foreach}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card card-small mb-0 active-profile-wrapper">
                            <div class="active-profiles-wrapper">
                                <div class="active-profile-carousel slick-row-20 slick-arrow-style">
                                    {foreach $LGUserFriends as $f}
                                    <!-- profile picture end -->
                                    <div class="single-slide">
                                        <div class="profile-thumb {if $f[0]->session_status == 'cevrimici'}active{else}passive{/if}">
                                            <a href="{$WEB_ROOT}/profile.php?uid={$f[0]->uid}">
                                                <figure class="profile-thumb-small">
                                                    <img src="{$WEB_ROOT}/img/{$f[0]->image}" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- profile picture end -->
                                        {foreachelse}
                                        <div style="opacity: 0.6;"><i class="fal fa-empty-set fa-3x" style="opacity: 0.6"></i></div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                        <div class="footer-card position-relative">
                            <div class="live-chat-inner">
                                <div class="chat-text-field">
                                    <textarea class="live-chat-field custom-scroll" id="live-chat-boxx" style="cursor: not-allowed" placeholder="Mesaj Yaz..." disabled></textarea>
                                    <button class="chat-message-send" type="submit" value="submit">
                                        <img src="{$WEB_ROOT}/templates/assets/images/icons/plane.png" alt="">
                                    </button>
                                </div>
                                <div class="chat-output-box">
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
    </div>
</footer>
<!-- footer area end -->
<!-- footer area start -->
<footer class="d-block d-lg-none">
    <div class="footer-area reveal-footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-footer-inner d-flex">
                        <div class="mob-frnd-search-inner">
                            <form class="mob-frnd-search-box d-flex">
                                <input type="text" placeholder="Arkadaşını Ara..." class="mob-frnd-search-field">
                            </form>
                        </div>
                        <div class="card card-small mb-0 active-profile-mob-wrapper">
                            <div class="active-profiles-mob-wrapper slick-row-10">
                                <div class="active-profile-mobile">
                                    {foreach $LGUserFriends as $f}
                                        <!-- profile picture end -->
                                        <div class="single-slide">
                                            <div class="profile-thumb {if $f[0]->session_status == 'cevrimici'}active{else}passive{/if}">
                                                <a href="{$WEB_ROOT}/profile.php?uid={$f[0]->uid}">
                                                    <figure class="profile-thumb-small">
                                                        <img src="{$WEB_ROOT}/img/{$f[0]->image}" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- profile picture end -->
                                        {foreachelse}
                                        <div style="opacity: 0.6;"><i class="fal fa-empty-set fa-3x" style="opacity: 0.6"></i></div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->
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
                    <textarea name="share" class="share-field-big custom-scroll" placeholder="Ne yapıyorsun, {ucfirst($lguser->name)} ?" id="modal-share"></textarea>
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
                    <textarea name="message" class="share-field-big custom-scroll report-text" placeholder="Lütfen karşılaşmış olduğunuz hatayı detaylı bir şekilde ifade ediniz..." minlength="10"></textarea>
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

<!-- JS
============================================ -->

<!-- Slick Slider JS -->
<script src="templates/assets/js/plugins/slick.min.js"></script>
<!-- nice select JS -->
<script src="templates/assets/js/plugins/nice-select.min.js"></script>
<!-- audio video player JS -->
<script src="templates/assets/js/plugins/plyr.min.js"></script>
<!-- perfect scrollbar js -->
<script src="templates/assets/js/plugins/perfect-scrollbar.min.js"></script>
<!-- light gallery js -->
<script src="templates/assets/js/plugins/lightgallery-all.min.js"></script>
<!-- image loaded js -->
<script src="templates/assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<!-- isotope filter js -->
<script src="templates/assets/js/plugins/isotope.pkgd.min.js"></script>
<!-- Main JS -->
<script src="templates/assets/js/main.js"></script>

<script src="templates/js/footer.js"></script>
<script>
{if !empty($NewPost)}
    ss_m('Yeni gönderi oluşturuldu.')
{/if}
{if !empty($UpdatePost)}
    ss_m('Gönderi güncellendi.')
{/if}
</script>
</body>
</html>