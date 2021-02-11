<section role="main" class="content-body">
    <header class="page-header">
        <h2>Adminler</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Profil</span></li>
                <li><span>Profil Düzenle</span></li>
            </ol>
        </div>
    </header>

    <!-- start: page -->

    <form class="ecommerce-form action-buttons-fixed" action="" method="post">
        <div class="row">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-dollar-circle"></i>
                                <h2 class="card-big-info-title">Admin Bilgileri</h2>
                                <p class="card-big-info-desc">Tüm formları eksiksiz bir şekilde doldurunuz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
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
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İsim</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="name" value="{$manager->name}" required="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soy İsim</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="surname" value="{$manager->surname}" required="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adres</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="address" value="{$manager->address}" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 control-label text-lg-right pt-2">Telefon</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
															<span class="input-group-prepend">
																<span class="input-group-text">
																	<i class="fas fa-phone"></i>
																</span>
															</span>
                                            <input id="phone" name="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(534) 123-1234" value="{$manager->phone}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-user-circle"></i>
                                <h2 class="card-big-info-title">Hesap Bilgileri</h2>
                                <p class="card-big-info-desc">Tüm formları eksiksiz bir şekilde doldurunuz.</p>
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-mail</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="email" class="form-control form-control-modern" name="email" value="{$manager->email}" required="">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Şifre</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_profile" class="btn btn-dark">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>

    <!-- end: page -->
</section>