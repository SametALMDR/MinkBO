<section role="main" class="content-body">
    <header class="page-header">
        <h2>Genel Ayarlar</h2>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>SMTP Mail Ayarları</b></h2>
                </header>
                <div class="card-body">
                    {if !empty($ok)}
                        <div class="alert alert-success mb-3 rounded-0">
                            <p class="mb-0"><i class="fa fa-check-circle"></i> {$ok}</p>
                        </div>
                    {/if}
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
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Host</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="host" value="{$host}" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Port</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="port" value="{$port}" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Kullanıcı Adı</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="username" value="{$username}" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Şifre</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="password" class="form-control form-control-modern" name="password" value="{$password}" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Gönderen Adı</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="text" class="form-control form-control-modern" name="sender" value="{$sender}" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">SMTP Gönderen E-posta Adresi</label>
                            <div class="col-lg-7 col-xl-6">
                                <input type="email" class="form-control form-control-modern" name="email" value="{$email}" required="">
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-dark" name="update">Güncelle</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <!-- end: page -->
</section>
</div>
