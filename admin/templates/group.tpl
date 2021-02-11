<section role="main" class="content-body">
    <header class="page-header">
        <h2>Grup #{$gr->name}</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Grup</span></li>
                <li><span>Grup Düzenle</span></li>
            </ol>
        </div>
    </header>

    <!-- start: page -->

    <form class="ecommerce-form action-buttons-fixed pb-3" action="" method="post">
        <div class="row">
            <div class="col">
                <section class="card card-modern card-big-info">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2-5 col-xl-1-5">
                                <i class="card-big-info-icon bx bx-dollar-circle"></i>
                                <h2 class="card-big-info-title">Grup Katılımcıları</h2>
                                {if !empty($ok_at)}
                                    <div class="alert alert-success mb-3 rounded-0">
                                        <p class="mb-0"><i class="fa fa-check-circle"></i> {$ok_at}</p>
                                    </div>
                                {/if}
                                {if $error_at}
                                    <div class="alert alert-danger mb-3 rounded-0">
                                        <ul class="list-unstyled mb-0">
                                            {foreach $errors_at as $e}
                                                <li><i class="fa fa-times font-weight-bold"></i> {$e}</li>
                                            {/foreach}
                                        </ul>
                                    </div>
                                {/if}
                                {foreach $gr->attends as $a}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="{$ADMIN_ROOT}/user.php?uid={$a[0]->uid}" target="_blank">{$a[0]->name} {$a[0]->surname}</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <button name="remove_user" value="{$a[0]->uid}" class="badge badge-danger border-0 p-2"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <h2 class="card-big-info-title m-0 custom-title">Grup Bilgileri</h2>
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
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Grup Adı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="name" value="{$gr->name}" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Grup Açıklaması</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <textarea type="text" class="form-control form-control-modern" name="description" rows="5" required>{$gr->description}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_group" class="btn btn-dark">Güncelle</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>
    <section class="card card-modern card-big-info">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="card-big-info-title m-0 custom-title">Grup Gönderileri</h2>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Gönderi Sahibi</th>
                            <th>Gönderi İçeriği</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $posts as $key => $p}
                            <tr>
                                <td>{$key+1}</td>
                                <td><a href="{$ADMIN_ROOT}/user.php?uid={$p->uid}" target="_blank">{$p->uname} {$p->surname}</a></td>
                                <td>{mb_substr($p->content,0,100)}...</td>
                                <td>{date('d.m.Y H:i',strtotime($p->created_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <a class="update-row mr-3 pointer" href="{$ADMIN_ROOT}/post.php?pid={$p->pid}" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</section>
