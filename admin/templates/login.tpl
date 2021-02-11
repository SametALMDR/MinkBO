<!doctype html>
<html class="fixed">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="MinkBO-Admin" />
    <meta name="description" content="MinkBO-Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/custom.css">
    <title>Minkbo Yönetim</title>
    <script src="vendor/modernizr/modernizr.js"></script>
    <script src="master/style-switcher/style.switcher.localstorage.js"></script>
</head>
<body>

<section class="body-sign">
    <div class="center-sign">
        <div class="panel card-sign">
            <div class="card-body">
                {if $error}
                    <div class="alert alert-danger mb-3 rounded-0">
                        <ul class="list-unstyled mb-0">
                            {foreach $errors as $e}
                                <li><i class="fa fa-times font-weight-bold"></i> {$e}</li>
                            {/foreach}
                        </ul>
                    </div>
                {/if}
                <form action="" method="post">
                    <h1 class="text-center mt-0 mb-2 p-0">MinkBO Yönetim</h1>
                    <div class="form-group mb-3">
                        <label>E-posta adresi</label>
                        <input name="email" type="email" class="form-control form-control-lg fs-14" value="{if isset($post['email'])}{$post['email']}{/if}"/>
                    </div>
                    <div class="form-group mb-3" style="border:0;padding-top: 0;">
                        <label>Parola</label>
                        <input name="password" type="password" class="form-control form-control-lg fs-14" />
                    </div>
                    <div class="text-center">
                        <button type="submit" name="login" class="btn btn-primary mt-2">Giriş Yap</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
<script src="vendor/popper/umd/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.js"></script>
<script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendor/common/common.js"></script>
<script src="vendor/nanoscroller/nanoscroller.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/jquery-placeholder/jquery.placeholder.js"></script>

<script src="js/theme.js"></script>
<script src="js/custom.js"></script>
<script src="js/theme.init.js"></script>

</body>
</html>