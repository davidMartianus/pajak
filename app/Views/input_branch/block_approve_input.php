<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Approve Blokir Nasabah</h4>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="document">Berita Acara</label>
                        <input type="text" value="<?= $data_blokir->berita_acara ?>" name="document" parsley-trigger="change" class="form-control" id="document" disabled>
                    </div>
                    <div class="form-group">
                        <label for="screenshot">Screenshot Bukti</label>
                        <input type="text" value="<?= $data_blokir->screenshot ?>" name="screenshot" parsley-trigger="change" class="form-control" id="screenshot" disabled>
                    </div>
                    <div class="form-group">
                        <label for="address">Nama</label>
                        <input type="text" value="<?= $data_blokir->nama ?>" name="nama" parsley-trigger="change" class="form-control" id="nama" disabled>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" value="<?= $data_blokir->alamat ?>" name="address" parsley-trigger="change" class="form-control" id="address" disabled>
                    </div>
                    <div class="form-group">
                        <label for="noNik">Nomor NIK</label>
                        <input type="text" value="<?= $data_blokir->id_nik ?>" name="noNik" parsley-trigger="change" class="form-control" id="noNik" disabled>
                    </div>
                    <div class="form-group">
                        <label for="noNpwp">Nomor NPWP</label>
                        <input type="text" value="<?= $data_blokir->id_npwp ?>" name="noNpwp" parsley-trigger="change" class="form-control" id="noNpwp" disabled>
                    </div>
                    <div class="form-group">
                        <label for="noRek">Nomor Rekening</label>
                        <input type="text" value="<?= $data_blokir->no_rek ?>" name="noRek" parsley-trigger="change" class="form-control" id="noRek" disabled>
                    </div>
                    <div class="form-group">
                        <label for="filePajak">File Surat Pajak</label>
                        <input type="text" value="<?= $data_blokir->file_pajak ?>" name="filePajak" parsley-trigger="change" class="form-control" id="filePajak" disabled>
                    </div>
                    <div class="form-group text-right m-b-0">
                        <button class="btn btn-primary waves-effect waves-light" onclick="action('Block Rejected', 'Block Rejected')">
                            Reject
                        </button>
                        <button class="btn btn-primary waves-effect waves-light" onclick="action('Blocked', 'Block Approved')">
                            Approve
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end row -->


<script>
    function action(statusRequest, swalTittle) {
        $.post("<?= base_url("/block-approve-input/" . $data_blokir->id) ?>", {
                status: statusRequest
            },
            function(data, status) {
                if (data.success === true) {
                    Swal.fire({
                        icon: 'success',
                        title: swalTittle,
                        text: data.message
                    }).then((response) => {
                        if (response.isConfirmed) {
                            window.location.href = "<?= base_url("block-approve-list") ?>";
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: swalTittle,
                        text: data.message
                    });
                }
            }, "json");
    };
</script>