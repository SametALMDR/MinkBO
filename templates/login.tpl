<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giriş Yap - MinkBo</title>
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
                                    <h3 class="title">Hesabınıza giriş yapın...</h3>
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
                                            <div class="col-12">
                                                <input type="text" name="uoremail" class="single-field" value="{if isset($post['uoremail'])}{$post['uoremail']}{/if}" placeholder="E-posta adresi veya Kullanıcı Adı" required>
                                            </div>
                                            <div class="col-12">
                                                <input type="password" name="password" class="single-field" placeholder="Parola" required>
                                            </div>
                                            <div class="col-12">
                                                <button class="log-btn-custom shadow-lg submit-btn mt-0" name="login">Giriş Yap</button>
                                                <h6 class="terms-condition pt-3 font-weight-italic font-weight-light"><a class="text-dark">veya</a></h6>
                                                <a class="bg-secondary shadow-lg submit-btn mt-3" href="register.php">Yeni Hesap Oluştur</a>
                                            </div>
                                        </div>
                                        <h6 class="terms-condition"><a href="pwreset.php" class="text-dark">Şifremi Unuttum ?</a></h6>
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

</body>

</html>