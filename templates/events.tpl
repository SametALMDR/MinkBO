<main>
    <div class="main-wrapper pt-80">
        <div class="container">
            <div class="row">
                {include file='sidebar.tpl'}
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- share box start -->
                    <div class="card">
                        <div class="row justify-content-between align-items-center ml-0 mr-0">
                            <h5>Etkinliklerim</h5>
                            <div>
                                <span class="btn btn-custom btn-sm text-white mr-2" style="padding:5px 10px" data-target="#newevent" data-toggle="modal"><i class="fal fa-plus-circle"></i> Yeni Etkinlik Oluştur</span>
                                <img src="{$WEB_ROOT}/templates/img/etkin.svg" alt="profile picture" width="25">
                            </div>
                        </div>
                    </div>
                    {if !empty($event_ok)}
                    <div class="alert alert-success">
                        <p class="mb-0">{$event_ok}</p>
                    </div>
                    {/if}
                    {if $event_error}
                        <div class="alert alert-danger">
                        {foreach $event_errors as $e}
                            <div>{$e}</div>
                        {/foreach}
                        </div>
                    {/if}
                    {if !empty($event_up_ok)}
                        <div class="alert alert-success">
                            <p class="mb-0">{$event_up_ok}</p>
                        </div>
                    {/if}
                    {if $event_up_error}
                        <div class="alert alert-danger">
                            {foreach $event_up_errors as $e}
                                <div>{$e}</div>
                            {/foreach}
                        </div>
                    {/if}
                    {if !empty($event_del_ok)}
                        <div class="alert alert-success">
                            <p class="mb-0">{$event_del_ok}</p>
                        </div>
                    {/if}
                    {if $event_del_error}
                        <div class="alert alert-danger">
                            {foreach $event_del_errors as $e}
                                <div>{$e}</div>
                            {/foreach}
                        </div>
                    {/if}
                    <div class="row">
                    <!-- share box end -->
                    {foreach $events as $event}
                        <div class="col-md-6 mb-4">
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
                                        <form action="" method="post" class="d-inline-block">
                                            <input type="hidden" name="eid" value="{$event->eid}">
                                            <button  type="submit" name="logout" class="btn btn-custom fs-14 pb-2 pl-3 pr-3 pt-2 text-white mb-2" style="background: #a5a5a5 !important;">Çık</button>
                                        </form>
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
                    {/foreach}
                    </div>
                    {if !count($events)}
                        <div class="card text-center pointer" style="padding: 125px 0;" data-toggle="modal" data-target="#textbox">
                            <p style="font-size: 35px;color: #efece8;">Etkinlik Bulunamadı...</p>
                        </div>
                    {/if}
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
<!-- Modal start -->
<div class="modal fade" id="newevent" aria-labelledby="newevent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Etkinlik Oluştur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body custom-scroll">
                <form method="post" class="update-post-form" id="new-report-form">
                    <input type="text" name="name" placeholder="Etkinlik adı ..." class="form-control mb-3" required>
                    <textarea name="description" class="share-field-big custom-scroll report-text" placeholder="Etkinlik ile ilgili kısa bilgiler...." minlength="25" required></textarea>
                    <input type="text" name="location" placeholder="Etkinlik lokasyonu..." class="form-control mb-3" required>
                    <input type="datetime-local" name="time" class="form-control mb-3" required>
                    <div class="text-center">
                        <button type="button" class="post-share-btn bg-secondary" data-dismiss="modal">İPTAL ET</button>
                        <button type="submit" name="new_event" class="post-share-btn new-report-btn bg-one">OLUŞTUR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
<!-- Modal start -->
<div class="modal fade" id="editevent" aria-labelledby="editevent">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Etkinlik Detayları</h5>
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
</script>