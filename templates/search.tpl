<style>
    .friends-list {
        height: initial !important;
    }
    .recently.request{
        position: initial !important;
        top: initial !important;
        left: initial !important;
    }
    .friend-list-view:hover .author a {
        text-decoration: none;
    }
    .friends-section .content-box.friends-zone .friend-list-view:hover {
        background-color: #4c596d;
    }
</style>
<main>
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {if !empty($ok)}
                        <div class="alert alert-success">
                            <p class="mb-0">{$ok}</p>
                        </div>
                    {/if}
                    {if $error}
                        <div class="alert alert-danger">
                            {foreach $errors as $e}
                                <div>{$e}</div>
                            {/foreach}
                        </div>
                    {/if}
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="friends-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="font-weight-bold mb-3">
                                            Kişiler
                                        </h3>
                                    </div>
                                    <div class="col-12">
                                        <div class="content-box friends-zone">
                                            <div class="row mt--20 friends-list">
                                                {foreach $users as $user}
                                                <div class="col-lg-3 col-sm-6 recently request">
                                                    <div class="friend-list-view">
                                                        <!-- profile picture end -->
                                                        <div class="profile-thumb">
                                                            <a href="{$WEB_ROOT}/profile.php?uid={$user->uid}">
                                                                <figure class="profile-thumb-middle">
                                                                    <img src="{$WEB_ROOT}/img/{$user->image}" alt="profile picture">
                                                                </figure>
                                                            </a>
                                                        </div>
                                                        <!-- profile picture end -->

                                                        <div class="posted-author">
                                                            <h6 class="author"><a href="{$WEB_ROOT}/profile.php?uid={$user->uid}">{$user->name} {$user->surname} ({$user->username})</a></h6>
                                                            {if in_array($user->uid,$AllFriendRequests)}
                                                                <button class="del-frnd" data-uid="{$user->uid}"><i class="fa fa-times-circle text-danger"></i> İptal Et</button>
                                                            {else}
                                                                <button class="add-frnd" data-uid="{$user->uid}">Arkadaş Ekle</button>
                                                            {/if}
                                                        </div>
                                                    </div>
                                                </div>
                                                {foreachelse}
                                                    <p class="pl-3 pt-2">Herhangi bir sonuç bulunamadı..</p>
                                                {/foreach}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="friends-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="font-weight-bold mb-3">
                                           Etkinlikler
                                        </h3>
                                    </div>
                                    <!-- share box end -->
                                    {foreach $events as $event}
                                        <div class="col-md-4 mb-4">
                                            <div class="card">
                                                <div class="event text-center">
                                                    <img src="{$WEB_ROOT}/templates/img/etkin.svg" alt="profile picture" width="25">
                                                    <h5 class="text-uppercase mb-0 pt-2 mb-2">
                                                        {$event->name}
                                                    </h5>
                                                    <a class="mt-4 text-truncate" target="_blank" href="{$WEB_ROOT}/profile.php{if $event->owner_uid != $lguser->uid}?uid={$event->owner_uid}{/if}">Oluşturan: {$event->uname} {$event->surname}
                                                        {if $event->owner_uid == $lguser->uid}(Sen){/if}
                                                    </a>
                                                    <p class="pt-2 mb-0">Toplam Katılımcı : {$event->total}</p>
                                                    <p class="pt-2">Vakit: {date('d.m.Y H:i',strtotime($event->event_time))}</p>
                                                    <a class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 editnow"
                                                       data-name="{$event->name}"
                                                            {if $event->owner_uid == $lguser->uid}
                                                                data-own="1"
                                                            {else}
                                                                data-own="0"
                                                            {/if}
                                                       data-description="{$event->description}"
                                                       data-location="{$event->location}"
                                                       data-date="{date('Y-m-d',strtotime($event->event_time))}"
                                                       data-time="{date('H:i',strtotime($event->event_time))}"
                                                       data-eid="{$event->eid}">İncele</a>
                                                    {if $event->owner_uid != $lguser->uid}
                                                        <a class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 join-event" data-eid="{$event->eid}" style="background: #a5a5a5 !important;">Katıl</a>
                                                        <button class="btn btn-custom report-event fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;" data-eid="{$event->eid}">Bildir</button>
                                                    {else}
                                                        <form action="" method="post" class="d-inline-block">
                                                            <input type="hidden" name="eid" value="{$event->eid}">
                                                            <button  type="submit" name="cancel" class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;">İptal Et</button>
                                                        </form>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                        {foreachelse}
                                        <p class="pl-3">Herhangi bir sonuç bulunamadı..</p>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="friends-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="font-weight-bold mb-3">
                                            Gruplar
                                        </h3>
                                    </div>
                                    <!-- share box end -->
                                    {foreach $groups as $event}
                                        <div class="col-md-4 mb-4">
                                            <div class="card">
                                                <div class="event text-center">
                                                    <img src="{$WEB_ROOT}/templates/img/grup.svg" alt="profile picture" width="45">
                                                    <h5 class="text-uppercase mb-0 pt-2 mb-2">
                                                        {$event->name}
                                                    </h5>
                                                    <a class="mt-4 text-truncate" target="_blank" href="{$WEB_ROOT}/profile.php{if $event->owner_uid != $lguser->uid}?uid={$event->owner_uid}{/if}">Oluşturan: {$event->uname} {$event->surname}
                                                        {if $event->owner_uid == $lguser->uid}(Sen){/if}
                                                    </a>
                                                    <p class="pt-2 mb-0">Toplam Katılımcı : {$event->total}</p>
                                                    {if $event->owner_uid != $lguser->uid}
                                                        <a class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2 join-group" data-gid="{$event->gid}" style="background: #a5a5a5 !important;">Katıl</a>
                                                        <button class="btn btn-custom report-group fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #b30909 !important;" data-gid="{$event->gid}">Bildir</button>
                                                    {/if}
                                                </div>
                                            </div>
                                        </div>
                                        {foreachelse}
                                        <p class="pl-3">Herhangi bir sonuç bulunamadı..</p>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal start -->
<div class="modal fade" id="editevent" aria-labelledby="editevent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Etkinlik Detay</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form method="post" class="update-post-form">
                    <input type="hidden" name="eid">
                    <input type="text" name="name" placeholder="Etkinlik adı ..." class="form-control mb-3" required>
                    <textarea name="description" class="share-field-big custom-scroll report-text" placeholder="Etkinlik ile ilgili kısa bilgiler...." minlength="25"></textarea>
                    <input type="text" name="location" placeholder="Etkinlik lokasyonu..." class="form-control mb-3">
                    <input type="datetime-local" name="time" class="form-control mb-3">
                    <div class="text-center your-event">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="update_event" class="post-share-btn update-event bg-one">GÜNCELLE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<script>
    $(document).on('click', '.add-frnd', function(e){
        var t = $(this);
        $.post( "ajax/requests.php", { friend_request: "1", uid: {$lguser->uid}, fid: $(this).data('uid')})
            .done(function( data ) {
                if(data.status){
                    t.html('<i class="fa fa-times-circle text-danger"></i> İptal Et')
                    t.removeClass('add-frnd')
                    t.addClass('del-frnd')
                }else{
                    alert(data.message)
                }
            })
            .fail(function() {
                alert("Bir hata oluştu");
            });
    })
    $(document).on('click', '.del-frnd', function(e){
        var t = $(this);
        $.post( "ajax/requests.php", { del_friend_request: "1", uid: {$lguser->uid}, fid: $(this).data('uid')})
            .done(function( data ) {
                if(data.status){
                    t.html('Arkadaş Ekle')
                    t.removeClass('del-frnd')
                    t.addClass('add-frnd')
                }else{
                    alert(data.message)
                }
            })
            .fail(function(data) {
                alert("Bir hata oluştu");
            });
    })
</script>
<script>
    $(document).on('click','.editnow',function (){
        let eid = $(this).data('eid');
        let own = $(this).data('own');
        let name = $(this).data('name');
        let description = $(this).data('description');
        let location = $(this).data('location');
        let date = $(this).data('date');
        let time = $(this).data('time');

        $('#editevent input[name=eid]').val(eid)
        if(own === 0){
            $('#editevent input[name=name]').val(name).attr('disabled','disabled')
            $('#editevent textarea[name=description]').val(description).attr('disabled','disabled')
            $('#editevent input[name=location]').val(location).attr('disabled','disabled')
            $('#editevent input[name=time]').val(date+"T"+time).attr('disabled','disabled')
            $('.your-event').hide()
        }else{
            $('#editevent input[name=name]').val(name).removeAttr('disabled')
            $('#editevent textarea[name=description]').val(description).removeAttr('disabled')
            $('#editevent input[name=location]').val(location).removeAttr('disabled')
            $('#editevent input[name=time]').val(date+"T"+time).removeAttr('disabled')
            $('.your-event').show()
        }

        $('#editevent').modal('show')
    })
    $(document).on('click','.join-event',function (){
        var t = $(this)
        $.ajax({
            url: 'ajax/EventController.php',
            type: 'post',
            data: {
                join_event: "1",
                eid: $(this).data('eid'),
            },
            success: function (response) {
                if(response.status){
                    ss_m('Etkinliğe katıldınız.')
                    t.remove()
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })
    $(document).on('click','.join-group',function (){
        var t = $(this)
        $.ajax({
            url: 'ajax/GroupController.php',
            type: 'post',
            data: {
                join_group: "1",
                gid: $(this).data('gid'),
            },
            success: function (response) {
                if(response.status){
                    ss_m('Gruba katıldınız.')
                    t.remove()
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