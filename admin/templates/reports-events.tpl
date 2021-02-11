<section role="main" class="content-body">
    <header class="page-header">
        <h2>Raporlanan Etkinlikler</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Raporlanan Etkinlikler</b></h2>
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
                            <th>Raporlanan Etkinlik</th>
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
                                <td><a href="{$ADMIN_ROOT}/event.php?eid={$r->reported_eid}" target="_blank">Etkinliği İncele</a></td>
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