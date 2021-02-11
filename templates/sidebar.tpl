<div class="col-lg-3 order-2 order-lg-1">
    <aside class="widget-area">
        <!-- widget single item start -->
        <div class="card widget-item">
            <div class="widget-body left-widget">
                <ul class="like-page-list-wrapper">
                    <li class="unorder-list pointer" onclick="location.href='{$WEB_ROOT}/profile.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small">
                                    <img src="{$WEB_ROOT}/img/{$lguser->image}" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">{$lguser->name}</span>
                                    <span class="text-uppercase">{$lguser->surname}</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='{$WEB_ROOT}/talk.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/anlat.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Derdini Anlat!</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='{$WEB_ROOT}/friends.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/ark.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Arkadaşlarım</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer"  onclick="location.href='{$WEB_ROOT}/groups.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/grup.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Gruplarım</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='{$WEB_ROOT}/trends.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/trend.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Trend Paylaşımlar</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='{$WEB_ROOT}/events.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/etkin.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Etkinliklerim</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" onclick="location.href='{$WEB_ROOT}/saved-posts.php'">
                        <a class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/kayit.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Kaydedilenler</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                    <li class="unorder-list pointer" data-toggle="modal" data-target="#newreport">
                        <a data-toggle="modal" data-target="#newreport" class="d-flex">
                            <div class="profile-thumb">
                                <figure class="profile-thumb-small rounded-0">
                                    <img src="{$WEB_ROOT}/templates/img/report.svg" alt="profile picture">
                                </figure>
                            </div>
                            <div class="unorder-list-info box-center">
                                <h3 class="list-title">
                                    <span class="text-capitalize">Bildir</span>
                                </h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- widget single item end -->

        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Yaklaşan Etkinlikler</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    {foreach $upcoming_events as $e}
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a>
                                    <figure class="profile-thumb-small">
                                        <img src="{$WEB_ROOT}/templates/img/etkin.svg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="unorder-list-info">
                                <h3 class="list-title"><a href="{$WEB_ROOT}/search.php?q={$e->name}" class="text-uppercase">{$e->name}</a></h3>
                                <p class="list-subtitle"><a>{date('d.m.Y H:i',strtotime($e->event_time))}</a></p>
                            </div>
                        </li>
                        {foreachelse}
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a style="opacity: 0.5;">
                                    Yakınlarda herhangi bir etkinlik bulunmamaktadır.
                                </a>
                            </div>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <!-- widget single item end -->

        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Önerilen Gruplar</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    {foreach $suggested_groups as $g}
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a>
                                    <figure class="profile-thumb-small rounded-0">
                                        <img src="{$WEB_ROOT}/templates/img/grup.svg" alt="profile picture">
                                    </figure>
                                </a>
                            </div>
                            <!-- profile picture end -->

                            <div class="align-items-center d-flex unorder-list-info">
                                <h3 class="list-title"><a href="{$WEB_ROOT}/search.php?q={$g->name}" class="text-uppercase">{$g->name}</a></h3>
                            </div>
                        </li>
                        {foreachelse}
                        <li class="unorder-list">
                            <!-- profile picture end -->
                            <div class="profile-thumb">
                                <a style="opacity: 0.5;">
                                    Önerilebilecek herhangi bir grup bulunmamaktadır.
                                </a>
                            </div>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <!-- widget single item end -->
        {if count($Advertisements)}
        <!-- widget single item start -->
        <div class="card widget-item">
            <h4 class="widget-title">Reklam</h4>
            <div class="widget-body">
                <ul class="like-page-list-wrapper">
                    {foreach $Advertisements as $a}
                        <li class="d-block">
                            {if !empty($a->img)}
                                <img src="{$WEB_ROOT}/img/advertisements/{$a->img}">
                            {/if}
                            <p class="mt-2">{$a->description}</p>
                        </li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <!-- widget single item end -->
        {/if}
    </aside>
</div>