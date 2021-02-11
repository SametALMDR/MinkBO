<section role="main" class="content-body">
    <header class="page-header">
        <h2>Kullanıcı #{$user->uid}</h2>

        <div class="right-wrapper text-right">
            <ol class="breadcrumbs mr-3">
                <li><span>Etkinlik</span></li>
                <li><span>Etkinlik Düzenle</span></li>
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
                                <h2 class="card-big-info-title">Kullanıcı Gönderileri</h2>
                                {foreach $posts as $p}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="{$ADMIN_ROOT}/post.php?pid={$p->pid}" target="_blank">{mb_substr($p->content,0,20)}...</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <a href="{$ADMIN_ROOT}/post.php?pid={$p->pid}" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>                                            </form>
                                        </div>
                                    </div>
                                    {foreachelse}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            Herhangi bir gönderi bulunamadı...
                                        </div>
                                    </div>
                                {/foreach}
                                <h2 class="card-big-info-title">Kullanıcı Grupları</h2>
                                {foreach $groups as $g}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="{$ADMIN_ROOT}/group.php?gid={$g->gid}" target="_blank">{mb_substr($g->name,0,20)}...</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <a href="{$ADMIN_ROOT}/group.php?gid={$g->gid}" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>                                            </form>
                                        </div>
                                    </div>
                                    {foreachelse}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            Herhangi bir grup bulunamadı...
                                        </div>
                                    </div>
                                {/foreach}
                                <h2 class="card-big-info-title">Kullanıcı Etkinlikleri</h2>
                                {foreach $events as $e}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            <a href="{$ADMIN_ROOT}/event.php?eid={$e->eid}" target="_blank">{mb_substr($e->name,0,20)}...</a>
                                        </div>
                                        <div class="col-md-2">
                                            <form action="" method="post">
                                                <a href="{$ADMIN_ROOT}/event.php?eid={$e->eid}" class="badge badge-primary border-0 p-2 text-white" target="_blank"><i class="fa fa-eye"></i></a>                                            </form>
                                        </div>
                                    </div>
                                    {foreachelse}
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-10">
                                            Herhangi bir etkinlik bulunamadı...
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            <div class="col-lg-3-5 col-xl-4-5">
                                <div class="d-flex justify-content-between">
                                    <h2 class="card-big-info-title m-0 custom-title">Kullanıcı Bilgileri </h2>
                                    <span class="custom-title">Son giriş : <span class="badge badge-primary">{date('d.m.Y H:i',strtotime($user->created_at))}</span></span>
                                </div>
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
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Görsel</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <img src="{$WEB_ROOT}/img/{$user->image}" width="75">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Adı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="name" value="{$user->name}" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Soyadı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <textarea type="text" class="form-control form-control-modern" name="surname" rows="5" required>{$user->surname}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-posta Adresi</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="email" class="form-control form-control-modern" name="email" value="{$user->email}" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Kullanıcı Adı</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="username" value="{$user->username}" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Parola</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="password" class="form-control form-control-modern" name="password" placeholder="Şifrenizi değiştirmek için doldurunuz...">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Doğum Günü</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <select class="form-control" name="birth1">
                                                    {for $i=1 to 31}
                                                        <option value="{$i}" {if date('d',strtotime($user->birthday)) == $i}selected{/if}>{$i}</option>
                                                    {/for}
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="birth2">
                                                    <option value="01" {if date('m',strtotime($user->birthday)) == '1'}selected{/if}>Ocak</option>
                                                    <option value="02" {if date('m',strtotime($user->birthday)) == '2'}selected{/if}>Şubat</option>
                                                    <option value="03" {if date('m',strtotime($user->birthday)) == '3'}selected{/if}>Mart</option>
                                                    <option value="04" {if date('m',strtotime($user->birthday)) == '4'}selected{/if}>Nisan</option>
                                                    <option value="05" {if date('m',strtotime($user->birthday)) == '5'}selected{/if}>Mayıs</option>
                                                    <option value="06" {if date('m',strtotime($user->birthday)) == '6'}selected{/if}>Haziran</option>
                                                    <option value="07" {if date('m',strtotime($user->birthday)) == '7'}selected{/if}>Temmuz</option>
                                                    <option value="08" {if date('m',strtotime($user->birthday)) == '8'}selected{/if}>Ağustos</option>
                                                    <option value="09" {if date('m',strtotime($user->birthday)) == '9'}selected{/if}>Eylül</option>
                                                    <option value="10" {if date('m',strtotime($user->birthday)) == '10'}selected{/if}>Ekim</option>
                                                    <option value="11" {if date('m',strtotime($user->birthday)) == '11'}selected{/if}>Kasım</option>
                                                    <option value="12" {if date('m',strtotime($user->birthday)) == '12'}selected{/if}>Aralık</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <select class="form-control" name="birth3">
                                                    {section name=i loop=date('Y')+1 max=100 step=-1}
                                                        <option value="{$smarty.section.i.index}" {if date('Y',strtotime($user->birthday)) == $smarty.section.i.index}selected{/if}>{$smarty.section.i.index}</option>
                                                    {/section}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Cinsiyet</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <select class="form-control form-control-modern" name="gender">
                                            <option value="Kadın" {if $user->gender == 'Kadın'}selected{/if}>Kadın</option>
                                            <option value="Erkek" {if $user->gender == 'Erkek'}selected{/if}>Erkek</option>
                                            <option value="Diğer" {if $user->gender == 'Diğer'}selected{/if}>Diğer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İl/ilçe</label>
                                    <div class="col-lg-4 col-xl-3">
                                        <select class="form-control form-control-modern" name="city" id="city"></select>
                                    </div>
                                    <div class="col-lg-3 col-xl-3">
                                        <select class="form-control form-control-modern" name="state" id="state"></select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Açıklama</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="description" value="{$user->description}" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">İş</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <input type="text" class="form-control form-control-modern" name="job" value="{$user->job}" required>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">E-posta Onay Durumu</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="verified" class="custom-control-input" id="customSwitch1" {if $user->email_verified}checked{/if}>
                                            <label class="custom-control-label" for="customSwitch1"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0">Hesap Durumu</label>
                                    <div class="col-lg-7 col-xl-6">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" name="status" class="custom-control-input" id="customSwitch2" {if $user->status}checked{/if}>
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-5 col-xl-3 control-label text-lg-right mb-0"></label>
                                    <div class="col-lg-7 col-xl-6">
                                        <button type="submit" name="update_user" class="btn btn-dark">Güncelle</button>
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
                    <h2 class="card-big-info-title m-0 custom-title">Kullanıcı IP Geçmişi</h2>
                    <table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>IP Adresi</th>
                            <th>Giriş Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach $history as $key => $h}
                            <tr>
                                <td>{$key+1}</td>
                                <td>{$h->ip_address}</td>
                                <td>{date('d.m.Y H:i',strtotime($h->logged_at))}</td>
                                <td class="d-flex justify-content-center">
                                    <form action="" method="post">
                                        <button name="delete-h-row" value="{$h->hid}" class="delete-row b-none" style="color: rgb(224, 6, 6);">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</section>

<script>
    $.getJSON( "../includes/il-ilce.json", function( data ) {
        isselectcity  = ""
        isselectstate = ""
        {if isset($user->city)}
        il  = "{$user->city}"
        {else}
        il  = "Adana"
        {/if}
        {if isset($user->state)}
        ilce  = "{$user->state}"
        {else}
        ilce  = "Aladağ"
        {/if}
        $.each( data, function( key, val ) {
            $.each(val, function (key2 , val2) {
                val2.il_adi === il ? isselectcity = "selected":isselectcity = ""
                $('#city').append('<option value="'+val2.il_adi+'" '+isselectcity+'>'+val2.il_adi+'</option>')

                if(val2.il_adi === il){
                    $.each(val2.ilceler, function (key3,val3) {
                        val3.ilce_adi === ilce ? isselectstate = "selected":isselectstate = ""
                        $('#state').append('<option value="'+val3.ilce_adi+'" '+isselectstate+'>'+val3.ilce_adi+'</option>')
                    })
                }
            })
        });

        $('#city').change(function () {
            $('#state').html("")
            $('#state').next().children('.current').html("")
            $('#state').next().children('.list').html("")
            city = this.value
            $.each( data, function( key, val ) {
                $.each(val, function (key2 , val2) {
                    if(val2.il_adi === city){
                        $.each(val2.ilceler, function (key3,val3) {
                            key3 === 0 ? isselectstate = "selected":isselectstate = ""
                            $('#state').append('<option value="'+val3.ilce_adi+'">'+val3.ilce_adi+'</option>')
                            if(key3 === 0){
                                $('#state').next().children('.current').html(val3.ilce_adi)
                            }
                            $('#state').next().children('.list').append('<li data-value="'+val3.ilce_adi+'" class="option '+isselectstate+'">'+val3.ilce_adi+'</li>')
                        })
                    }
                })
            });
        })
    });
</script>