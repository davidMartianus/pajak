<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Dashboard</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4  col-xl-4">
        <div class="card-box tilebox-two">
            <i class="ion-ios7-paper float-right text-info"></i>
            <h6 class="text-info text-uppercase m-b-15 m-t-10">Total Surat Pajak</h6>
            <h2 class="m-b-30"><span data-plugin="counterup">1,245</span></h2>
        </div>
    </div>

    <div class="col-md-4  col-xl-4">
        <div class="card-box tilebox-two">
            <i class="ion-ios7-paper float-right text-danger"></i>
            <h6 class="text-danger text-uppercase m-b-15 m-t-10">Total Surat IBK</h6>
            <h2 class="m-b-30"><span data-plugin="counterup">1,245</span></h2>
        </div>
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card-box tilebox-two">
            <i class="ion-ios7-paper float-right text-success"></i>
            <h6 class="text-success text-uppercase m-b-15 m-t-10">Total Surat Pemblokiran</h6>
            <h2 class="m-b-30"><span data-plugin="counterup">1,245</span></h2>
        </div>
    </div>

    <div class="col-md-4  col-xl-4">
        <div class="card-box tilebox-two">
            <i class="ion-ios7-paper float-right text-warning"></i>
            <h6 class="text-warning text-uppercase m-b-15 m-t-10">Total Telah diblokir</h6>
            <h2 class="m-b-30"><span data-plugin="counterup"><?= $totalBlocked ?> </span></h2>

        </div>
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card-box tilebox-two">
            <i class="ion-ios7-paper float-right text-info"></i>
            <h6 class="text-info text-uppercase m-b-15 m-t-10">Total Belum diblokir</h6>
            <h2 class="m-b-30"><span data-plugin="counterup"><?= $totalNotBlock ?> </span></h2>
        </div>
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card-box tilebox-two">
            <i class="ion-ios7-paper float-right text-danger"></i>
            <h6 class="text-danger text-uppercase m-b-15 m-t-10">Total Sudah Terblokir</h6>
            <h2 class="m-b-30"><span data-plugin="counterup"><?= $totalUnblocked ?> </span></h2>
        </div>
    </div>

</div>