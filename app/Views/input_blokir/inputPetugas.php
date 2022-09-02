<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body">
            <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat DJP</th>
                        <th>Tgl Surat DJP</th>
                        <th>Tgl Disposisi</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>Tgl Periksa</th>
                        <th>SLA</th>
                        <th>Jenis Kantor Pajak</th>
                        <th>Kantor Pajak</th>
                        <th>Petugas</th>
                        <th>No Surat Jawaban</th>
                        <th>St. Blokir</th>
                        <th>Act</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="mb-3 d-flex justify-content-center">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" onclick="location.href='<?php echo base_url(); ?>/NewBlokir/menutama'">
                    <i class="fa fa-plus-circle"></i> Input Data Baru
                </button>
            </div>

        </div>
    </div>
</div>

<script>
    var tableData = $('#myTable');
    // var tableData = $('#myTable');

    $(document).ready(function() {
        tableData.DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('NewBlokir/getData'); ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false
            }]
        });
    });

    function reloadTable() {
        tableData.DataTable().ajax.reload();
    }
</script>