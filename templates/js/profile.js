$('.cover-change').click(function (){
    $('#cover-img').trigger('click');
})
$('.pp-change').click(function (){
    $('#pp-img').trigger('click');
})

$('#cancel-upload').click(function (){
    $("#current-cover-img").css("background-image","url("+currbg+")")
    document.getElementById('cover-img').value = ""
    $('.cover-change-btns').hide()
    $('.cover-change').show()
})

$('#cancel-pp-upload').click(function (){
    $("#current-pp-img").attr("src",currpp)
    document.getElementById('pp-img').value = ""
    $('.pp-change-btns').hide()
    $('.pp-change').show()
})
/**
 * Upload Banner Img
 */
$("#accept-upload").click(function() {
    var fd = new FormData();
    var files = $('#cover-img')[0].files;

    fd.append('profile_cover_update', '1');
    fd.append('file', files[0]);

    $.ajax({
        url: 'ajax/requests.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function (response) {
            if (response.status) {
                $('.cover-change-btns').hide()
                $('.cover-change').show()
                iziToast.show({
                    title: 'Başarılı',
                    message: 'Kapak resmi güncellendi',
                    position: 'topRight',
                    color:'green'
                });
            } else {
                alert(response.message)
            }
        },
        error: function (response) {
            alert("Bir hata oluştu. Yetkililer ile görüşün.")
        }
    });
})
/**
 * Upload PP Img
 */
$("#accept-pp-upload").click(function() {
    var fd = new FormData();
    var files = $('#pp-img')[0].files;

    fd.append('profile_pp_update', '1');
    fd.append('file',files[0]);

    $.ajax({
        url: 'ajax/requests.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response.status){
                $('.pp-change-btns').hide()
                $('.pp-change').show()
                iziToast.show({
                    title: 'Başarılı',
                    message: 'Profil resmi güncellendi',
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
        error:function (response){
            iziToast.show({
                title: 'Hata',
                message: "Bir hata oluştu. Yetkililer ile görüşün.",
                position: 'topRight',
                color:'red'
            });
        }
    });
})
/**
 * Banner Img Readed
 */
if (window.FileList && window.File && window.FileReader) {
    if(document.getElementById('cover-img') !== null){
        document.getElementById('cover-img').addEventListener('change', event => {
            const file = event.target.files[0];
            if (!file.type) {
                ee_m("Bu dosya türü tarayıcınızda desteklenmemektedir.")
                return;
            }
            if (!file.type.match('image.*')) {
                ee_m("Lütfen bir resim seçiniz.")
                return;
            }
            const reader = new FileReader();
            reader.addEventListener('load', event => {
                $("#current-cover-img").css("background-image","url("+event.target.result+")")
                $('.cover-change').hide()
                $('.cover-change-btns').show()
            });
            reader.readAsDataURL(file);
        });
    }
}
/**
 * Profile Img Readed
 */
if (window.FileList && window.File && window.FileReader) {
    if(document.getElementById('pp-img') !==null){
        document.getElementById('pp-img').addEventListener('change', event => {
            const file = event.target.files[0];
            if (!file.type) {
                ee_m("Bu dosya türü tarayıcınızda desteklenmemektedir.")
                return;
            }
            if (!file.type.match('image.*')) {
                ee_m("Lütfen bir resim seçiniz.")
                return;
            }
            const reader = new FileReader();
            reader.addEventListener('load', event => {
                $("#current-pp-img").attr('src',event.target.result)
                $('.pp-change').hide()
                $('.pp-change-btns').show()
            });
            reader.readAsDataURL(file);
        });
    }
}