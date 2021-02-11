<section role="main" class="content-body">
    <header class="page-header">
        <h2>Kullanıcılar</h2>
    </header>
    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Kullanıcılar</b></h2>
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
                            <th>Kullanıcı Adı</th>
                            <th>E-posta adresi</th>
                            <th>Hesap Durum</th>
                            <th>Oluşturulma Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $users as $key => $u}
                            <tr>
                                <td>{$key+1}</td>
                                <td>{$u->name}</td>
                                <td>{$u->surname}</td>
                                <td>{$u->username}</td>
                                <td>{$u->email}</td>
                                <td>{if $u->status}Aktif{else}Pasif{/if}</td>
                                <td>{date('d.m.Y H:i',strtotime($u->created_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <a class="update-row mr-3 pointer" href="{$ADMIN_ROOT}/user.php?uid={$u->uid}" style="color: rgb(0 34 128);">
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