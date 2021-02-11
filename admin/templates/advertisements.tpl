<section role="main" class="content-body">
    <header class="page-header">
        <h2>Reklamlar</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Reklamlar</b></h2>
                    <div class="ui buttons">
                        <button type="button" class="pb-2 mb-1 mt-1 mr-1 btn btn-primary" data-toggle="modal" data-target="#new">+ Yeni Reklam Ekle</button>
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
                            <th>Açıklama</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Güncellenme Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $advs as $key => $a}
                            <tr>
                                <td>{$key+1}</td>
                                <td>{mb_substr($a->description,0,300)}...</td>
                                <td>{date('d.m.Y H:i',strtotime($a->created_at))}</td>
                                <td>{date('d.m.Y H:i',strtotime($a->updated_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" style="color: rgb(0 34 128);"
                                       data-aid="{$a->aid}"
                                       data-desc="{$a->description}"
                                       data-status="{$a->status}"
                                       data-img="{$a->img}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="{$a->aid}" class="delete-row b-none" style="color: rgb(224, 6, 6);">
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
                <h4 class="modal-title mt-0" id="exampleModalLabel">Reklam Ekle</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Açıklama</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="desc form-control form-control-modern" name="desc" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Görsel</label>
                        <div class="col-lg-7 col-xl-9">
                            <input type="file" name="img">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Durum</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="status custom-control-input" name="status" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1">Kullanıcılar tarafından görülebilir</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" name="new" class="btn btn-info">Ekle</button>
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
                <h4 class="modal-title mt-0" id="exampleModalLabel">Reklam Güncelleme</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İçerik</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="edit-desc form-control form-control-modern" name="desc" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Görsel</label>
                        <div class="col-lg-7 col-xl-9">
                            <input type="file" name="img">
                            <span class="d-block mt-2 fs-12">Görseli değiştirmek için yükleyiniz..</span>
                            <img src="" class="curr-img w-50">
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Durum</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="edit-status custom-control-input" name="status" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Kullanıcılar tarafından görülebilir</label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" name="update-cont" class="btn btn-success">Güncelle</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('.update-row').click(function (){
        $('button[name=update-cont]').attr('value',$(this).data('aid'))
        $('.edit-desc').val($(this).data('desc'))
        $('.curr-img').attr('src',"../img/advertisements/"+$(this).data('img'))
        if($(this).data('img') === ''){
            $('.curr-img').hide()
        }else{
            $('.curr-img').show()
        }
        if($(this).data('status')){
            $('.edit-status').prop('checked',true)
        }else{
            $('.edit-status').prop('checked',false)
        }
        $('#edit').modal('show')
    })
</script>