<section role="main" class="content-body">
    <header class="page-header">
        <h2>Moderatörler</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Moderatörler</b></h2>
                    <div class="ui buttons">
                        <button type="button" class="pb-2 mb-1 mt-1 mr-1 btn btn-primary" data-toggle="modal" data-target="#new">+ Yeni Moderatör Ekle</button>
                    </div>
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
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Adı</th>
                            <th>Soyadı</th>
                            <th>E-posta adresi</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $admins as $key => $a}
                            <tr>
                                <td>{$key+1}</td>
                                <td>{$a->name}</td>
                                <td>{$a->surname}</td>
                                <td>{$a->email}</td>
                                <td>{date('d.m.Y H:i',strtotime($a->created_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" style="color: rgb(0 34 128);"
                                       data-id="{$a->mid}"
                                       data-name="{$a->name}"
                                       data-surname="{$a->surname}"
                                       data-email="{$a->email}"
                                       data-address="{$a->address}"
                                       data-phone="{$a->phone}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="{$a->mid}" class="delete-row b-none" style="color: rgb(224, 6, 6);">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</section>

<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Moderatör Ekle</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="col-12">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soy İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="surname" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-mail</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="email" class="form-control form-control-modern" name="email" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Şifre</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="password" class="form-control form-control-modern" name="password" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adres</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">Telefon</label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </span>
                                    <input id="phone" name="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(534) 123-1234" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                            <button type="submit" name="new" class="btn btn-info">Ekle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Moderatör Güncelleme</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="id">
                    <div class="col-12">
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="name" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soy İsim</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="surname" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-mail</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="email" class="form-control form-control-modern" name="email" required="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Şifre</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adres</label>
                            <div class="col-lg-7 col-xl-9">
                                <input type="text" class="form-control form-control-modern" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 control-label text-lg-right pt-2">Telefon</label>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-phone"></i>
                                        </span>
                                    </span>
                                    <input id="phone" name="phone" data-plugin-masked-input="" data-input-mask="(999) 999-9999" placeholder="(534) 123-1234" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                            <button type="submit" name="update-admin" class="btn btn-info">Güncelle</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('.update-row').click(function (){
        $('#edit input[name=id]').val($(this).data('id'))
        $('#edit input[name=name]').val($(this).data('name'))
        $('#edit input[name=surname]').val($(this).data('surname'))
        $('#edit input[name=email]').val($(this).data('email'))
        $('#edit input[name=address]').val($(this).data('address'))
        $('#edit input[name=phone]').val($(this).data('phone'))
        $('#edit').modal('show')
    })
</script>