<!doctype html>
<html class="fixed">
<head>
    <meta charset="UTF-8">
    <title>MinkBO - Yönetim</title>
    <meta name="keywords" content="Min" />
    <meta name="description" content="MinkBO - Yönetim">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,800,900|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/animate/animate.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/button.min.css" integrity="sha512-OD0ScwZAE5PCg4nATXnm8pdWi0Uk0Pp2XFsFz1xbZ7xcXvapzjvcxxHPeTZKfMjvlwwl4sGOvgJghWF2GRZZDw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/skins/default.css" />
    <link rel="stylesheet" href="css/custom.css">
    <script src="vendor/modernizr/modernizr.js"></script>
    <!-- Vendor -->
    <script src="vendor/jquery/jquery.js"></script>
</head>
<body>
<section class="body">

    <!-- start: header -->
    <header class="header">
        <div class="logo-container">
            <a href="{$ADMIN_ROOT}" class="logo">
                <img src="{$WEB_ROOT}/templates/img/logo2.png" width="120" alt="Porto Admin" />
            </a>
            <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
            </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">

            <span class="separator"></span>

            <div id="userbox" class="userbox">
                <a href="#" data-toggle="dropdown">
                    <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                        <span class="name">{$manager->name} {$manager->surname}</span>
                        <span class="role">{if isset($session['admin'])}Admin{else}Moderatör{/if}</span>
                    </div>

                    <i class="fa custom-caret"></i>
                </a>

                <div class="dropdown-menu">
                    <ul class="list-unstyled mb-2">
                        <li class="divider"></li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="profile.php"><i class="fas fa-user"></i> Profilim</a>
                        </li>
                        <li>
                            <a role="menuitem" tabindex="-1" href="logout.php"><i class="fas fa-power-off"></i> Çıkış Yap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end: search & user box -->
    </header>
    <!-- end: header -->

    <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">

            <div class="sidebar-header">
                <div class="sidebar-title">
                    NAVIGASYON
                </div>
                <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                    <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <div class="nano">
                <div class="nano-content">
                    <nav id="menu" class="nav-main" role="navigation">

                        <ul class="nav nav-main">
                            <li>
                                <a class="nav-link" href="{$ADMIN_ROOT}">
                                    <i class="fas fa-home" aria-hidden="true"></i>
                                    <span>AnaSayfa</span>
                                </a>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fas fas fa-user" aria-hidden="true"></i>
                                    <span>Kullanıcı Yönetimi</span>
                                </a>
                                <ul class="nav nav-children">
                                    {if isset($session['admin'])}
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/admins.php">
                                            Adminler
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/moderators.php">
                                            Moderatörler
                                        </a>
                                    </li>
                                    {/if}
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/users.php">
                                            Kullanıcılar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-copy" aria-hidden="true"></i>
                                    <span>Gönderi Yönetimi</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/posts.php">
                                            Gönderiler
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-users" aria-hidden="true"></i>
                                    <span>Grup Yönetimi</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/groups.php">
                                            Gruplar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                    <span>Etkinlik Yönetimi</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/events.php">
                                            Etkinlikler
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    <span>Rapor (Şikayet) Yönetimi
                                    {if $total_unread_count>0}
                                        <span class="badge badge-danger m-0">{$total_unread_count}</span>
                                    {/if}
                                    </span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/reports-users.php">
                                            Raporlanan Kullanıcılar
                                            {if $unread_report_user_count>0}
                                                <span class="badge badge-danger m-0">{$unread_report_user_count}</span>
                                            {/if}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/reports-posts.php">
                                            Raporlanan Gönderiler
                                            {if $unread_report_post_count>0}
                                                <span class="badge badge-danger m-0">{$unread_report_post_count}</span>
                                            {/if}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/reports-groups.php">
                                            Raporlanan Gruplar
                                            {if $unread_report_group_count>0}
                                                <span class="badge badge-danger m-0">{$unread_report_group_count}</span>
                                            {/if}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/reports-events.php">
                                            Raporlanan Etkinlikler
                                            {if $unread_report_event_count>0}
                                                <span class="badge badge-danger m-0">{$unread_report_event_count}</span>
                                            {/if}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/reports-comments.php">
                                            Raporlanan Yorumlar
                                            {if $unread_report_comment_count>0}
                                                <span class="badge badge-danger m-0">{$unread_report_comment_count}</span>
                                            {/if}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {if isset($session['admin'])}
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-ad" aria-hidden="true"></i>
                                    <span>Reklam Yönetimi</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/advertisements.php">
                                            Reklamlar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-file-signature" aria-hidden="true"></i>
                                    <span>Sözleşme Yönetimi</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/contracts.php">
                                            Sözleşmeler
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-parent">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-cog" aria-hidden="true"></i>
                                    <span>Sistem Ayarları</span>
                                </a>
                                <ul class="nav nav-children">
                                    <li>
                                        <a class="nav-link" href="{$ADMIN_ROOT}/settings.php">
                                            Genel Ayarlar
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            {/if}
                        </ul>
                    </nav>

                    <hr class="separator" />
                </div>

                <script>
                    // Maintain Scroll Position
                    if (typeof localStorage !== 'undefined') {
                        if (localStorage.getItem('sidebar-left-position') !== null) {
                            var initialPosition = localStorage.getItem('sidebar-left-position'),
                                sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                            sidebarLeft.scrollTop = initialPosition;
                        }
                    }
                </script>


            </div>

        </aside>
        <!-- end: sidebar -->