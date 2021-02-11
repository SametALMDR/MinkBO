<main>
    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="{$WEB_ROOT}/img/{$user->banner}" id="current-cover-img">
        </div>
        <div class="profile-menu-area bg-white" style="box-shadow: 0px 3px 10px 0px #e6e6e6;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 offset-lg-3">
                        <div class="profile-menu-wrapper" {if !$me}style="height: 30px" {/if}>
                            <div class="main-menu-inner header-top-navigation">
                                <nav class="text-center">
                                    <ul class="main-menu">
                                        <li class="active"><a> Hesap Ayarları & IP Geçmişi</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area profile-sidebar" style="height: 100%;margin-top: 0px;">
                        <!-- widget single item start -->
                        <div class="card widget-item" style="position: -webkit-sticky;position: sticky;">
                            <h4 class="widget-title">Genel Ayarlar</h4>
                            <div class="widget-body">
                                <div class="about-author">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="be_secret">
                                        <label class="custom-control-label" for="be_secret">Derdini anlat'ta gizli hesap kullan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div id="post-content">
                        <div class="card">
                            <h4 class="widget-title">Kullanıcı IP Geçmişi</h4>
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">IP Adresi</th>
                                    <th scope="col">Giriş Zamanı</th>
                                </tr>
                                </thead>
                                <tbody>
                                {foreach $history as $key => $h}
                                    <tr>
                                        <th scope="row">{$key+1}</th>
                                        <td>{$h->ip_address}</td>
                                        <td>{date('d.m.Y H:i',strtotime($h->logged_at))}</td>
                                    </tr>
                                {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<script type="text/javascript">
    const currbg = "{$WEB_ROOT}/img/{$user->banner}"
    const currpp = "{$WEB_ROOT}/img/{$user->image}"
</script>
<script src="templates/js/profile.js"></script>

<script>
    $('#be_secret').change(function (e){
        let opt_val;
        if($(this).prop('checked')){
            opt_val = 1
        }else{
            opt_val = 0
        }
        $.ajax({
            url: 'ajax/requests.php',
            type: 'post',
            data: {
                change_secret: "1",
                opt: opt_val
            },
            success: function (response) {
                if(response.status){
                    ss_m('Ayar güncellendi.')
                }else{
                    ee_m(response.message)
                }
            },
            error: function (response) {
                sys_err()
            }
        });
    })
</script>