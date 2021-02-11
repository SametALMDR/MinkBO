function ss_m(mes){
    iziToast.show({
        title: 'Başarılı',
        message: mes,
        position: 'topRight',
        color:'green'
    });
}
function ee_m(mes){
    iziToast.show({
        title: 'Hata',
        message: mes,
        position: 'topRight',
        color:'red'
    });
}
function sys_err(){
    iziToast.show({
        title: 'Hata',
        message: "Bir hata oluştu. Lütfen yetkililere bildirin.",
        position: 'topRight',
        color:'red'
    });
}