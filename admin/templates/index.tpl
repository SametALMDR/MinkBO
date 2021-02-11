<style>
    .widget-summary .widget-summary-col {
        vertical-align: middle;
    }
</style>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Genel Bilgiler</h2>
    </header>

    <!-- start: page -->

    <div class="row">
        <div class="col">
            <section class="card">
                <header class="card-header d-flex align-items-center justify-content-between bg-default">
                    <h2 class="card-title text-dark"><b>Genel Bilgiler</b></h2>
                </header>
                <div class="card-body">
                    <div class="col-lg-12">
                        <div class="row mb-3">
							{if isset($session['admin'])}
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-primary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Adminler</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalAdmin}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-secondary">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-secondary">
                                                    <i class="fas fa-user-tie"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Moderatörler</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalAdmin}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
							{/if}
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-tertiary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-tertiary">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Kullanıcılar</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalUser}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-quaternary">
                                                    <i class="fas fa-copy"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Gönderiler</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalPost}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Gruplar</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalGroup}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-secondary">
                                                    <i class="fas fa-calendar-alt"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Etkinlikler</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalEvent}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-tertiary">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Raporlar</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalReport}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
							{if isset($session['admin'])}
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary mb-3">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-quaternary">
                                                    <i class="fas fa-ad"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Reklamlar</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalAdv}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-xl-4">
                                <section class="card card-featured-left card-featured-quaternary">
                                    <div class="card-body">
                                        <div class="widget-summary">
                                            <div class="widget-summary-col widget-summary-col-icon">
                                                <div class="summary-icon bg-primary">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="widget-summary-col">
                                                <div class="summary">
                                                    <h4 class="title">Sözleşmeler</h4>
                                                    <div class="info">
                                                        <strong class="amount">{$TotalCont}</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
							{/if}
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- end: page -->
</section>
</div>
