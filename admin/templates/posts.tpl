<section role="main" class="content-body">
    <header class="page-header">
        <h2>Gönderiler</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Gönderiler</b></h2>
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
                            <th>Gönderi Sahibi</th>
                            <th>Gönderi Açıklaması</th>
                            <th>Gönderi Tipi</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $posts as $key => $p}
                            <tr>
                                <td>{$key+1}</td>
                                <td>
                                    <a {if $p->type !='secret'}href="{$ADMIN_ROOT}/user.php?uid={$p->uid}" target="_blank"{/if}>
                                        {if $p->type =='secret'}
                                            Anonim Kullanıcı
                                        {else}
                                            {$p->name} {$p->surname}
                                        {/if}
                                    </a>
                                </td>
                                <td>{mb_substr($p->content,0,100)}</td>
                                <td>{if $p->type =='secret'}gizli{else}normal{/if}</td>
                                <td>{date('d.m.y H:i',strtotime($p->created_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- <a class="view-row mr-3 pointer" style="color: rgb(134 134 134);"><i class="far fa-eye"></i></a> -->
                                    <a class="update-row mr-3 pointer" href="{$ADMIN_ROOT}/post.php?pid={$p->pid}" style="color: rgb(0 34 128);">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="" method="post">
                                        <button name="delete-row" value="{$p->pid}" class="delete-row b-none" style="color: rgb(224, 6, 6);">
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