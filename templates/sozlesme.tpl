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
    <div class="container">
        <div class="bg-light mt-5 p-5">
            {foreach $conts as $c}
            <h3>{$c->title}</h3>
            <p>{$c->description}</p>
            <br>
            {/foreach}
            </div>
    </div>
</body>
</html>