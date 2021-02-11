<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kayıt Ol - MinkBo</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templates/assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="templates/assets/css/vendor/bicon.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="templates/assets/css/vendor/flaticon.css">
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="templates/assets/css/plugins/plyr.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="templates/assets/css/plugins/slick.min.css">
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="templates/assets/css/plugins/nice-select.css">
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="templates/assets/css/plugins/perfect-scrollbar.css">
    <!-- light gallery css -->
    <link rel="stylesheet" href="templates/assets/css/plugins/lightgallery.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="templates/assets/css/style.css">
    <link rel="stylesheet" href="templates/css/animate.min.css">
    <link rel="stylesheet" href="templates/css/custom.css">
    <style>
        .timeline-bg-content {
            height: 100vh;
            box-shadow: 7px 0 12px 0 #adadad;
        }
    </style>
</head>

<body class="bg-transparent">

<main>
    <div class="main-wrapper pb-0 mb-0">
        <div class="timeline-wrapper">
            <div class="timeline-page-wrapper">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6 order-2 order-lg-1 login-left-side">
                            <div class="timeline-bg-content bg-img" data-bg="templates/assets/images/login-bg.jpg">
                                <h3 class="timeline-bg-title"><span class="mink-text">MinkBO</span>
                                    <br>
                                    <span class="mink-text-desc">Bugünlerde tanışmak istediğin kişilerle iletişim kur ve hayatında olup bitenleri herkesle paylaş...</span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 d-flex align-items-center justify-content-center login-right-bg">
                            <div class="signup-form-wrapper">
                                <div class="signup-inner text-center">
                                    <h3 class="title">Yeni kullanıcı hesabınızı hemen aktif edin...</h3>
                                    {if $error}
                                        <div class="alert alert-danger mb-0 rounded-0">
                                            <ul>
                                                {foreach $errors as $e}
                                                    <li><i class="flaticon-cross-out font-weight-bold"></i> {$e}</li>
                                                {/foreach}
                                            </ul>
                                        </div>
                                    {/if}
                                    <form class="signup-inner--form" method="post" action="">
                                        <div class="row">
                                            <div class="col-6">
                                                <input type="text" name="name" class="single-field" placeholder="İsim" minlength="3" maxlength="255" value="{if isset($post['name'])}{$post['name']}{/if}" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="text" name="surname" class="single-field" placeholder="Soyisim" minlength="3" maxlength="255" value="{if isset($post['surname'])}{$post['surname']}{/if}" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="email" name="email" class="single-field" placeholder="E-posta adresi" value="{if isset($post['email'])}{$post['email']}{/if}" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" name="username" class="single-field" placeholder="Kullanıcı Adı" minlength="3" value="{if isset($post['username'])}{$post['username']}{/if}" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="password" class="single-field" minlength="6" placeholder="Parola" required>
                                            </div>
                                            <div class="col-6">
                                                <input type="password" name="re-password" class="single-field" minlength="6" placeholder="Parola Tekrar" required>
                                            </div>
                                            <div class="col-4">
                                                <select class="nice-select" name="birth1">
                                                    {for $i=1 to 31}
                                                        <option {if $i<=9}value="0{$i}"{else}value="{$i}"{/if} {if isset($post['birth1'])}{if $i==$post['birth1']}selected{/if}{elseif $i == date('d')}selected{/if}>{$i}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <select class="nice-select" name="birth2">
                                                    <option value="01" {if isset($post['birth2'])}{if $post['birth2'] == "01"}selected{/if}{elseif date('m') == '1'}selected{/if}>Ocak</option>
                                                    <option value="02" {if isset($post['birth2'])}{if $post['birth2'] == "02"}selected{/if}{elseif date('m') == '2'}selected{/if}>Şubat</option>
                                                    <option value="03" {if isset($post['birth2'])}{if $post['birth2'] == "03"}selected{/if}{elseif date('m') == '3'}selected{/if}>Mart</option>
                                                    <option value="04" {if isset($post['birth2'])}{if $post['birth2'] == "04"}selected{/if}{elseif date('m') == '4'}selected{/if}>Nisan</option>
                                                    <option value="05" {if isset($post['birth2'])}{if $post['birth2'] == "05"}selected{/if}{elseif date('m') == '5'}selected{/if}>Mayıs</option>
                                                    <option value="06" {if isset($post['birth2'])}{if $post['birth2'] == "06"}selected{/if}{elseif date('m') == '6'}selected{/if}>Haziran</option>
                                                    <option value="07" {if isset($post['birth2'])}{if $post['birth2'] == "07"}selected{/if}{elseif date('m') == '7'}selected{/if}>Temmuz</option>
                                                    <option value="08" {if isset($post['birth2'])}{if $post['birth2'] == "08"}selected{/if}{elseif date('m') == '8'}selected{/if}>Ağustos</option>
                                                    <option value="09" {if isset($post['birth2'])}{if $post['birth2'] == "09"}selected{/if}{elseif date('m') == '9'}selected{/if}>Eylül</option>
                                                    <option value="10" {if isset($post['birth2'])}{if $post['birth2'] == "10"}selected{/if}{elseif date('m') == '10'}selected{/if}>Ekim</option>
                                                    <option value="11" {if isset($post['birth2'])}{if $post['birth2'] == "11"}selected{/if}{elseif date('m') == '11'}selected{/if}>Kasım</option>
                                                    <option value="12" {if isset($post['birth2'])}{if $post['birth2'] == "12"}selected{/if}{elseif date('m') == '12'}selected{/if}>Aralık</option>
                                                </select>
                                            </div><div class="col-4">
                                                <select class="nice-select" name="birth3">
                                                    {section name=i loop=date('Y')+1 max=100 step=-1}
                                                        <option value="{$smarty.section.i.index}" {if isset($post['birth3'])}{if $post['birth3'] == $smarty.section.i.index}selected{/if}{elseif date('Y') == $smarty.section.i.index}selected{/if}>{$smarty.section.i.index}</option>
                                                    {/section}
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <select class="nice-select" name="gender">
                                                    <option value="Erkek" {if isset($post['gender'])}{if $post['gender'] == "Erkek"}selected{/if}{/if}>Erkek</option>
                                                    <option value="Kadın" {if isset($post['gender'])}{if $post['gender'] == "Kadın"}selected{/if}{/if}>Kadın</option>
                                                    <option value="Diğer" {if isset($post['gender'])}{if $post['gender'] == "Diğer"}selected{/if}{/if}>Diğer</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select class="nice-select" name="city" id="city"></select>
                                            </div>
                                            <div class="col-6">
                                                <select class="nice-select" name="state" id="state"></select>
                                            </div>
                                            <div class="col-12 text-left mb-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="agree" class="custom-control-input" id="customCheck1" {if isset($post['agree'])}checked{/if} required>
                                                    <label class="custom-control-label" for="customCheck1">Kullanıcı <a target="_blank" href="sozlesme.php">sözleşmesini</a> okudum ve onayladım.</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="log-btn-custom shadow-lg submit-btn mt-0" name="register">Kayıt Ol</button>
                                                <h6 class="terms-condition pt-3 font-weight-italic font-weight-light">
                                                    <a href="{$WEB_ROOT}/login.php" class="text-dark">Zaten hesabınız var mı? Giriş Yap...</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="templates/assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="templates/assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Popper JS -->
<script src="templates/assets/js/vendor/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="templates/assets/js/vendor/bootstrap.min.js"></script>
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

<script>
    $.getJSON( "includes/il-ilce.json", function( data ) {
        isselectcity  = ""
        isselectstate = ""
        {if isset($post['city'])}
            il  = "{$post['city']}"
        {else}
            il  = "Adana"
        {/if}
        {if isset($post['state'])}
        ilce  = "{$post['state']}"
        {else}
        ilce  = "Aladağ"
        {/if}
        $.each( data, function( key, val ) {
            $.each(val, function (key2 , val2) {
                val2.il_adi === il ? isselectcity = "selected":isselectcity = ""
                $('#city').append('<option value="'+val2.il_adi+'">'+val2.il_adi+'</option>')
                $('#city').next().children('.current').html(il)
                $('#city').next().children('.list').append('<li data-value="'+val2.il_adi+'" class="option '+isselectcity+'">'+val2.il_adi+'</li>')

                if(val2.il_adi === il){
                    $.each(val2.ilceler, function (key3,val3) {
                        val3.ilce_adi === ilce ? isselectstate = "selected":isselectstate = ""
                        $('#state').append('<option value="'+val3.ilce_adi+'">'+val3.ilce_adi+'</option>')
                        $('#state').next().children('.current').html(ilce)
                        $('#state').next().children('.list').append('<li data-value="'+val3.ilce_adi+'" class="option '+isselectstate+'">'+val3.ilce_adi+'</li>')
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

</body>
</html>