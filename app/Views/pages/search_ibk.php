<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Pencarian IBK</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/Pages/searchIbk">Pencarian IBK</a></li>
                    <li class="breadcrumb-item active">List IBK</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Begin insertion for display Table -->
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter" onclick="location.href='<?php echo base_url(); ?>/InputIbk/index'">
                Tambah Data
            </button>
            <!-- dt-responsive -->
            <p class="card-text viewdata">

            </p>
        </div>
    </div><!-- end card -->
    <!-- end insertion for display table -->

</div><!-- end container-fluid -->
<script type="text/javascript">

</script>
<?= $this->endSection(); ?>