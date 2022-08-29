<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Pencarian IBK</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/ibk">Pencarian IBK</a></li>
                    <li class="breadcrumb-item active">List IBK</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Begin insertion for display Table -->
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter" onclick="location.href='<?php echo base_url(); ?>/inputIbk'">
                Tambah Data
            </button>
            <p class="card-text viewdata">
            <table id="listIbkTable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <!-- <th>Reff Code</th> -->
                        <th>No. Surat DJP</th>
                        <th>Tgl. Surat DJP</th>
                        <th>No. Surat KPP</th>
                        <th>Tgl. Disposisi</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>Tgl. Pemeriksaan</th>
                        <th>SLA</th>
                        <th>Jenis Kantor Pajak</th>
                        <th>Kantor Pajak</th>
                        <th>Petugas</th>
                        <th>No. Surat Jawaban</th>
                        <th>Periode</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>
            </table>
            </p>
        </div>
    </div><!-- end card -->
    <!-- end insertion for display table -->

</div><!-- end container-fluid -->
<script type="text/javascript">
    var saveData;
    var modal = $('#modalData');
    var listTableData = $('#listIbkTable');
    var formData = $('#formData');
    var modalTitle = $('#modalTitle');
    var btnSave = $('#btnSave');

    $(document).ready(function() {
        listTableData.DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('SearchIbk/listIbk'); ?>",
                "type": "POST",
                dataFilter: function(response) {
                    // this to see what exactly is being sent back
                    console.log(response);
                    return response
                },
                // error: function(response) {
                //     // to see what the error is
                //     console.log(response);
                //     return response
                //     console.log(response.y);
                // }
            },
            columnDefs: [{
                "target": [],
                "orderable": false
            }, ]
        });

        // dataIbk();
    });

    function dataIbk() {
        $.ajax({
            url: "<?= site_url('SearchIbk/getData') ?>",
            dataType: "JSON",
            success: function(response) {
                $('.viewdata').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError);
            }
        });
    }
</script>