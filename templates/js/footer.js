/**
 * Notification Friend Read
 */
$('.read-now').click(function (){
    if($(this).find('.read-status').hasClass('unreaded')){
        $(this).find('.read-status').removeClass('unreaded')
        $(this).find('.read-status').addClass('readed')
        if($(this).data('type') === 'not'){
            $.ajax({
                url: 'ajax/NotificationController.php',
                type: 'post',
                data: {
                    read_not_notification: "1",
                    nid: $(this).find('.read-status').data('nid'),
                },
                success: function (response) {
                    if(response.status){
                        notification_count -= 1
                        $('.count-readed').html(notification_count)
                        if(notification_count===0){
                            $('.count-readed').remove()
                        }
                    }else{
                        console.log(response.message)
                    }
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }else{
            $.ajax({
                url: 'ajax/NotificationController.php',
                type: 'post',
                data: {
                    read_fr_notification: "1",
                    rid: $(this).find('.read-status').data('rid'),
                },
                success: function (response) {
                    if(response.status){
                        notification_count -= 1
                        $('.count-readed').html(notification_count)
                        if(notification_count===0){
                            $('.count-readed').remove()
                        }
                    }else{
                        console.log(response.message)
                    }
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }
    }
});
/**
 * Accept Friend Request
 */
$('.accept-friend-request').click(function (){
    var t = $(this)
    $.ajax({
        url: 'ajax/requests.php',
        type: 'post',
        data: {
            accept_friend_request: "1",
            rid: $(this).data('rid'),
        },
        success: function (response) {
            if(response.status){
                ss_m('Arkadaşlık isteği kabul edildi.')
                t.closest('.a-d-buttons').remove()
            }else{
                ee_m(response.message)
            }
        },
        error: function (response) {
            sys_err()
        }
    });
})
/**
 * Decline Friend Request
 */
$('.delete-friend-request').click(function (){
    var t = $(this)
    $.ajax({
        url: 'ajax/requests.php',
        type: 'post',
        data: {
            remove_friend_request: "1",
            rid: $(this).data('rid'),
        },
        success: function (response) {
            if(response.status){
                ss_m('Arkadaşlık isteği reddedildi.')
                t.closest('.a-d-buttons').remove()
            }else{
                ee_m(response.message)
            }
        },
        error: function (response) {
            sys_err()
        }
    });
})

$('.read-as-all').click(function (){
    $.ajax({
        url: 'ajax/NotificationController.php',
        type: 'post',
        data: {
            set_all_readed: "1"
        },
        success: function (response) {
            if(response.status){
                var t = $('.read-status')
                t.removeClass('unreaded')
                t.addClass('readed')
                $('.count-readed').remove()
                ss_m('Bütün bildirimler okundu olarak işaretlendi.')
            }else{
                ee_m(response.message)
            }
        },
        error: function (response) {
            sys_err()
        }
    });
})

$('.your-class').slick({
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 2,
    prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" aria-disabled="false"><i class="far fa-arrow-circle-left"></i></button>',
    nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style="" aria-disabled="false"><i class="far fa-arrow-circle-right"></i></button>'
});

$(document).ready(function(){
    /**
     * Delete a post
     */
    $(document).on('click', '.del-post', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                remove_a_post: "1",
                pid: $(this).data('pid')
            },
            success: function (response) {
                if(response.status === 1){
                    t.closest('.del-post-btn').remove()
                    ss_m(response.message+" Yenileniyor..")
                    setTimeout(function(){
                        location.href= $(location).attr('href')
                    } , 1000);
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
                console.log(response)
            }
        });
    })

    /**
     * Share any post
     */
    $(document).on('click', '.share-a-post', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                share_a_post: "1",
                pid: $(this).data('pid'),
                uid: $(this).data('uid')
            },
            success: function (response) {
                if(response.status === 1){
                    t.closest('.report-post-btn').remove()
                    ss_m(response.message+" Yenileniyor..")
                    setTimeout(function(){
                        location.href= $(location).attr('href')
                    } , 1000);
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
                console.log(response)
            }
        });
    })

    /**
     * Report a Post
     */
    $(document).on('click', '.report-post', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/ReportController.php',
            type: 'post',
            data: {
                report_post: "1",
                pid: $(this).data('pid'),
            },
            success: function (response) {
                t.closest('.report-post-btn').remove()
                ss_m(response.message)
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Report a Comment
     */
    $(document).on('click', '.report-comment', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/ReportController.php',
            type: 'post',
            data: {
                report_comment: "1",
                cid: $(this).data('cid'),
            },
            success: function (response) {
                t.remove()
                ss_m(response.message)
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Report a User
     */
    $(document).on('click', '.report-user', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/ReportController.php',
            type: 'post',
            data: {
                report_user: "1",
                uid: $(this).data('uid'),
            },
            success: function (response) {
                ss_m(response.message)
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Report a Group
     */
    $(document).on('click', '.report-group', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/ReportController.php',
            type: 'post',
            data: {
                report_group: "1",
                gid: $(this).data('gid'),
            },
            success: function (response) {
                ss_m(response.message)
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Report an Event
     */
    $(document).on('click', '.report-event', function(e) {
        var t = $(this)
        $.ajax({
            url: 'ajax/ReportController.php',
            type: 'post',
            data: {
                report_event: "1",
                eid: $(this).data('eid'),
            },
            success: function (response) {
                ss_m(response.message)
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Reply Comment Box
     */
    $(document).on('click', '.reply-comment', function(event) {
        let PostType = $(this).data('type');
        let PostCommentImage = lguserpp;
        let PostStyle = '';
        let PostFormType = '';
        let PostRound = ''
        if(PostType === 'secret' && issecret){
            PostCommentImage = root+'/img/unknown-user.png'
            PostStyle = 'style="opacity: 0.3;"'
            PostFormType = 'data-type="secret"'
            PostRound = 'rounded-0'
        }
        $('.sub-comment-box').remove()
        var pid = $(this).data('pid')
        var cid = $(this).data('cid')
        $(this).closest('.comment-btns').parent().append('<div class="share-box-inner sub-comment-box mt-2 mb-3">\n' +
            '                                <div class="profile-thumb">\n' +
            '                                    <a href="#">\n' +
            '                                        <figure class="profile-thumb-middle '+PostRound+'">\n' +
            '                                            <img src="'+PostCommentImage+'" alt="profile picture" '+PostStyle+'>\n' +
            '                                        </figure>\n' +
            '                                    </a>\n' +
            '                                </div>\n' +
            '                                <div class="share-content-box w-100">\n' +
            '                                    <form class="share-text-box send-comment" action="" '+PostFormType+'>\n' +
            '                                        <input type="hidden" name="new-comment" value="1">\n' +
            '                                        <input type="hidden" name="pid" value="'+pid+'">\n' +
            '                                        <input type="hidden" name="parent" value="'+cid+'">\n' +
            '                                        <input name="comment" class="share-text-field" aria-disabled="true" placeholder="Yanıt yaz..." style="padding-right: 20px;">\n' +
            '                                    </form>\n' +
            '                                </div>\n' +
            '                            </div>')
    })

    /**
     * Reply Comment Form
     */
    $(document).on('click', '.send-comment', function(event) {
        var t = $(this)
        let PostType = $(this).data('type');
        let PostCommentImage = lguserpp;
        let PostNameSurname = lgusernamesurname
        let PostStyle = '';
        let PostFormDataType = '';
        let PostRound = ''
        if(PostType === 'secret' && issecret){
            PostCommentImage = root+'/img/unknown-user.png'
            PostStyle = 'style="opacity: 0.3;"'
            PostNameSurname = 'anonymous user (Sen)'
            PostFormDataType = 'data-type="secret"'
            PostRound = 'rounded-0'
        }
        $('.send-comment').ajaxForm({
            url:     'ajax/PostController.php',
            type: 'post',
            success: function(response) {
                ss_m('Yorum gönderildi.')
                var replyy = ''
                if(response.data.comment_parent === 0){
                    replyy = '<span class="pointer font-weight-bold fs-12 mr-2 clr-main reply-comment" '+PostFormDataType+' data-pid="'+response.data.pid+'" data-cid="'+response.data.comment_id+'"><i class="fal fa-reply"></i> Yanıtla</span>'
                }
                t.closest('.share-box-inner').before('<div class="share-box-inner mt-2 mb-3">\n' +
                    '                                        <div class="profile-thumb">\n' +
                    '                                            <a href="'+root+'/profile.php">\n' +
                    '                                                <figure class="profile-thumb-middle '+PostRound+'">\n' +
                    '                                                    <img src="'+PostCommentImage+'" alt="profile picture" '+PostStyle+'>\n' +
                    '                                                </figure>\n' +
                    '                                            </a>\n' +
                    '                                        </div>\n' +
                    '                                        <div class="share-content-box w-100">\n' +
                    '                                            <div class="row">\n' +
                    '                                                <div class="col-12">\n' +
                    '                                                    <div class="pl-3">\n' +
                    '                                                        <p class="comment-bg">\n' +
                    '                                                            <span class="d-flex justify-content-between">\n' +
                    '                                                                <a href="'+lguserpp+'/profile.php" class="text-capitalize comment-user">\n' +
                    '                                                                    '+PostNameSurname+'\n' +
                    '                                                                </a>\n' +
                    '                                                                <span class="fs-12">'+response.data.created_at+'</span>\n' +
                    '                                                            </span>\n' +
                    '                                                            <span class="d-block">\n' +
                    '                                                                '+response.data.comment+'\n' +
                    '                                                            </span>\n' +
                    '                                                        </p>\n' +
                    '                                                        <div class="d-flex justify-content-between comment-btns">\n' +replyy+
                    '                                                                                                                    </div>\n' +
                    '\n' +
                    '                                                                                                            </div>\n' +
                    '                                                </div>\n' +
                    '                                            </div>\n' +
                    '                                        </div>\n' +
                    '                                    </div>')
                if(response.data.comment_parent === 0){
                    $('.share-text-field').val('');
                }else{
                    $('.share-text-field').val('');
                }
            },
            error: function (response){
                sys_err()
            }
        });
    });

    /**
     * Like a post
     */
    $(document).on('click', '.post-like', function(e){
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                like_post: "1",
                pid: $(this).data('pid'),
            },
            success: function (response) {
                if(response.status){
                    t.data('like',t.data('like')+1)
                    t.children('.desc').html(t.data('like')+' kişi bunu beğendi')
                    t.addClass('clr-red')
                    t.removeClass('post-like')
                    t.addClass('post-dislike')
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })
    /**
     * Like back post
     */
    $(document).on('click', '.post-dislike', function(e){
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                dislike_post: "1",
                pid: $(this).data('pid'),
            },
            success: function (response) {
                if(response.status){
                    t.data('like',t.data('like')-1)
                    t.children('.desc').html(t.data('like')+' kişi bunu beğendi')
                    t.removeClass('clr-red')
                    t.addClass('post-like')
                    t.removeClass('post-dislike')
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Update a post
     */
    $('.update-post').click(function (){
        var PostUID         = $(this).data('uid')
        var UserFilesDir    = root+"/files/users/"+PostUID+"/"
        var PostID          = $(this).data('pid')
        var PostContent     = $(this).data('content')
        var PostAttachments = $(this).data('attachments')
        $('#modal-share').before('<input type="hidden" name="postid" value="'+PostID+'">')
        $('#modal-share').val(PostContent)
        $('.post-images').html("")
        if(typeof PostAttachments === 'string'){
            PostAttachments = JSON.parse(PostAttachments.replaceAll("'",'"'))
            PostAttachments.forEach(function (val) {
                if(Object.keys(val)[0] === "image"){
                    $('.post-images').append("<div class='col-md-6'><img src='"+UserFilesDir+Object.values(val)[0]+"'>" +
                        "<a class='remove-post-file d-block w-100 pointer' data-pid='"+PostID+"' data-filename='"+Object.values(val)[0]+"'>" +
                        "<i class='btn-danger fa-times far mt-2 p-2'>" +
                        "</a></div>")
                }else{
                    $('.post-images').append("<div class='col-md-6'>" +
                        "<video src='"+UserFilesDir+Object.values(val)[0]+"' style='width:100%;height:130px'></video>"+
                        "<a class='remove-post-file d-block w-100 pointer' data-pid='"+PostID+"' data-filename='"+Object.values(val)[0]+"'>" +
                        "<i class='btn-danger fa-times far mt-2 p-2'>" +
                        "</a></div>")
                }
            })
        }
        $('#edit-post-modal').modal('show')
    })

    /**
     * Remove a file from a post
     */
    $(document).on("click", ".remove-post-file", function () {
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                remove_post_file: "1",
                pid: $(this).data('pid'),
                filename: $(this).data('filename')
            },
            success: function (response) {
                if(response.status){
                    t.parent().remove()
                    iziToast.show({
                        title: 'Başarılı',
                        message: 'Dosya gönderiden kaldırıldı',
                        position: 'topRight',
                        color:'green'
                    });
                }else{
                    iziToast.show({
                        title: 'Hata',
                        message: response.message,
                        position: 'topRight',
                        color:'red'
                    });
                }
            },
            error: function (response) {
                iziToast.show({
                    title: 'Hata',
                    message: "Bir hata oluştu. Yetkililer ile görüşün.",
                    position: 'topRight',
                    color:'red'
                });
            }
        });
    });

    /**
     *  New Post File Type Checker
     */
    const fileSelector = document.querySelector('.file-post');
    fileSelector.addEventListener('change', (event) => {
        var fileList = Array.from(event.target.files);
        var i=0
        var err = false
        for (const file of fileList) {
            const type = file.type ? file.type : 'NOT SUPPORTED';
            if(type.includes('image') || type.includes('audio') || type.includes('video')) {
                console.log(file, name, type);
            }else{
                err = true
                fileList.splice(i,1)
            }
            i +=1
        }
        if(err){
            ee_m('*İzin verilen dosya türleri: resim,video,ses')
            fileSelector.value = ""
        }
    });

    /**
     *  Update Post File Type Checker
     */
    const fileSelector2 = document.querySelector('.file-post-update');
    fileSelector2.addEventListener('change', (event) => {
        var fileList = Array.from(event.target.files);
        var i=0
        var err = false
        for (const file of fileList) {
            const type = file.type ? file.type : 'NOT SUPPORTED';
            if(type.includes('image') || type.includes('audio') || type.includes('video')) {
                console.log(file, name, type);
            }else{
                err = true
                fileList.splice(i,1)
            }
            i +=1
        }
        if(err){
            ee_m('*İzin verilen dosya türleri: resim,video,ses')
            fileSelector2.value = ""
        }
    });

    /**
     * Report an error
     */
    $('#new-report-form').ajaxForm({
        url: 'ajax/ReportController.php',
        type: 'post',
        success: function (response) {
            if(response.status){
                $('#newreport').modal('hide')
                $('.report-text').val('')
                ss_m('Hata bildirildi.')
            }else{
                ee_m(response.message)
            }
        },
        error: function (response) {
            sys_err()
        }
    })

    /**
     * Save a post
     */
    $(document).on('click', '.save-post', function(e){
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                save_post: "1",
                pid: $(this).data('pid'),
            },
            success: function (response) {
                if(response.status){
                    ss_m('Gönderi kayıt edildi.')
                    t.closest('save-post-btn').remove()
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    /**
     * Remove Saved post
     */
    $(document).on('click', '.remove-saved-post', function(e){
        var t = $(this)
        $.ajax({
            url: 'ajax/PostController.php',
            type: 'post',
            data: {
                remove_save_post: "1",
                pid: $(this).data('pid'),
            },
            success: function (response) {
                if(response.status){
                    ss_m('Gönderi kayıt edilenlerden kaldırıldı.')
                    setTimeout(function(){
                        location.href= $(location).attr('href')
                    } , 1000);
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })


    /**
     * Footer ChatBox
     */

    $(document).on('submit','#chat-search-friend',function (e){
        e.preventDefault();
    });

    setInterval(function(){
        $.ajax({
            url: 'ajax/MessageController.php',
            type: 'post',
            data: {
                scan_messages: "1",
                receiver_id: lguid
            },
            success: function (response) {
                if(response.status){
                    if(response.data.length){
                        if(!$('.friend-search-list').hasClass('show')){
                            $('.friend-search-list').addClass('show')
                        }
                        $('.open-message-box').each(function (i,v){
                            let mbox = $(this);
                            response.data.forEach(function (val,ind){
                                if(mbox.data('uid') === val.sender_uid){
                                    if(!mbox.hasClass('alertPulse-css')){
                                        mbox.addClass('alertPulse-css')
                                    }
                                    if ($('title').html().indexOf("1") <= 0){
                                        $('title').html($('title').html() + ' ('+1+')')
                                    }
                                }
                            })
                        })
                    }
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    },3000);

    /**
     * Open message box
     */
    $(document).on('click','.open-message-box',function (){
        let t = $(this)
        let LiveUID = t.data('uid')
        let LiveUfullname = t.data('fullname')
        let LiveUImage = t.data('image')
        let LiveUStatus = t.data('status')

        /**
         * Read all messages
         */
        $.ajax({
            url: 'ajax/MessageController.php',
            type: 'post',
            data: {
                read_message: "1",
                sender_uid: LiveUID,
            },
            success: function (response) {
                if(t.hasClass('alertPulse-css')){
                    t.removeClass('alertPulse-css')
                    $('title').html($('title').html().slice(0,-3))
                }
            },
            error: function (response) {
                sys_err()
            }
        });



        $('.live-user-name').html(LiveUfullname)
        $('.live-user-name').attr('href',root+"/profile.php?uid="+LiveUID)
        $('.live-user-image').attr('src',root+'/img/'+LiveUImage)
        if(LiveUStatus === 'cevrimdisi'){
            $('.live-status').html('Çevrimdışı')
            $('.live-user-status').removeClass('active')
            $('.live-user-status').addClass('passive')
        }else{
            $('.live-status').html('Çevrimiçi')
            $('.live-user-status').removeClass('passive')
            $('.live-user-status').addClass('active')
        }
        $('.chat-output-box').addClass('show')
        $('.live-chat-field').removeAttr('disabled')
        $('.live-chat-field').css('cursor','')
        $('.chat-message-send').attr('data-receiver',LiveUID)

        $('.message-list').html('')
        $.ajax({
            url: 'ajax/MessageController.php',
            type: 'post',
            data: {
                get_messages: "1",
                sender: lguid,
                receiver: LiveUID,
            },
            success: function (response) {
                if(response.status){
                    response.data.forEach(function (v,i){
                        if(v.sender_uid == lguid){
                            $('.message-list').append('<li class="text-author">\n' +
                                '                                                <p>'+v.message+'</p>\n' +
                                '                                                <div class="message-time">'+timeDiff(new Date(),new Date(v.created_at))+'</div>\n' +
                                '                                            </li>')
                        }else{
                            $('.message-list').append('<li class="text-friends">\n' +
                                '                                                <p>'+v.message+'</p>\n' +
                                '                                                <div class="message-time">'+timeDiff(new Date(),new Date(v.created_at))+'</div>\n' +
                                '                                            </li>');
                        }
                        $(".kayy").scrollTop($(".kayy").prop("scrollHeight"));
                    })
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
        $('.chat-output-box').addClass('show')
    })

    /**
     * Search friend
     */
    $(document).on('keyup','.search-friend-input',function (){
        let searched = $(this).val();
        searched = searched.toLowerCase();
        $('.user-list-1 .chat-username').each(function (i,v){
            if($(this).text().toLowerCase().search(searched) === -1){
                $(this).closest('.open-message-box').addClass('force-hide')
            }else{
                $(this).closest('.open-message-box').removeClass('force-hide')
            }
        })
    })

    /**
     * Message send
     */
    $(document).on('click','.chat-message-send',function (){
        if($('#live-chat-boxx').val() ===""){
            return false;
        }
        $.ajax({
            url: 'ajax/MessageController.php',
            type: 'post',
            data: {
                send_message: "1",
                sender: lguid,
                receiver: $(this).data('receiver'),
                message: $('#live-chat-boxx').val()
            },
            success: function (response) {
                if(response.status){
                    $('.message-list').append('<li class="text-author">\n' +
                        '                                                <p>'+$('#live-chat-boxx').val()+'</p>\n' +
                        '                                                <div class="message-time">1 saniye önce</div>\n' +
                        '                                            </li>')
                    $('#live-chat-boxx').val("")
                    $(".kayy").scrollTop($(".kayy").prop("scrollHeight"));
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })

    function timeDiff(curr, prev) {
        var ms_Min = 60 * 1000; // milliseconds in Minute
        var ms_Hour = ms_Min * 60; // milliseconds in Hour
        var ms_Day = ms_Hour * 24; // milliseconds in day
        var ms_Mon = ms_Day * 30; // milliseconds in Month
        var ms_Yr = ms_Day * 365; // milliseconds in Year
        var diff = curr - prev; //difference between dates.
        // If the diff is less then milliseconds in a minute
        if (diff < ms_Min) {
            return Math.round(diff / 1000) + ' saniye önce';

            // If the diff is less then milliseconds in a Hour
        } else if (diff < ms_Hour) {
            return Math.round(diff / ms_Min) + ' dakika önce';

            // If the diff is less then milliseconds in a day
        } else if (diff < ms_Day) {
            return Math.round(diff / ms_Hour) + ' saat önce';

            // If the diff is less then milliseconds in a Month
        } else if (diff < ms_Mon) {
            return 'Around ' + Math.round(diff / ms_Day) + ' gün önce';

            // If the diff is less then milliseconds in a year
        } else if (diff < ms_Yr) {
            return 'Around ' + Math.round(diff / ms_Mon) + ' ay önce';
        } else {
            return 'Around ' + Math.round(diff / ms_Yr) + ' yıl önce';
        }
    }

    $('.openn-message-box').click(function (){
        if($('.friend-search-list').hasClass('show')){
            $('.friend-search-list').removeClass('show')
        }else{
            $('.friend-search-list').addClass('show')
        }
    })


})