<section role="main" class="content-body">
    <header class="page-header">
        <h2>Raporlanan Yorumlar</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Raporlanan Yorumlar</b></h2>
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
                            <th>Raporlayan Kullanıcı</th>
                            <th>Raporlanan Yorum</th>
                            <th>Mesaj</th>
                            <th>Rapor Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $reports as $key => $r}
                            <tr>
                                <td><span class="{if $r->unread}unreaded{else}readed{/if}">{$key+1}</span></td>
                                <td><a href="{$ADMIN_ROOT}/user.php?uid={$r->uid}" target="_blank">{$r->name} {$r->surname}</a></td>
                                <td><a class="view-comment pointer" data-cid="{$r->comment_id}" data-comment="{$r->comment}">Yorumu İncele</a></td>
                                <td>{mb_substr($r->message,0,300)}</td>
                                <td>{date('d.m.Y H:i',strtotime($r->created_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <form action="" method="post">
                                        <button name="delete-row" value="{$r->rid}" class="delete-row b-none" style="color: rgb(224, 6, 6);">
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

<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mt-0" id="exampleModalLabel">Yorum İncele</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="cid">
                    <div class="form-group row align-items-center">
                        <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Yorum</label>
                        <div class="col-lg-7 col-xl-9">
                            <textarea type="text" class="desc form-control form-control-modern" name="desc" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Kapat</button>
                        <button type="submit" class="btn btn-success" name="update-comment">Güncelle</button>
                        <button type="submit" class="btn btn-danger" name="remove-comment">Sil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('.view-comment').click(function (){
        $('input[name=cid]').val($(this).data('cid'))
        $('textarea[name=desc]').val($(this).data('comment'))
        $('#view').modal('show')
    })
</script>