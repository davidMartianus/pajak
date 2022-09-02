<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Daftar List blokir Nasabah</h4>
            <!-- <p class="text-muted font-14 m-b-30">
                Menu Input Pemblokiran Kantor Cabang
            </p> -->

            <div class="row">
                <div class="col-lg-4">
                    <form action="<?= base_url("/block-upload") ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data_blokir->id ?>">
                        <div class="form-group">
                            <label for="document">Berita Acara</label>
                            <input type="file" name="document" parsley-trigger="change" class="form-control" id="document" required>
                        </div>
                        <div class="form-group">
                            <label for="screenshot">Screenshot Bukti</label>
                            <input type="file" name="screenshot" parsley-trigger="change" class="form-control" id="screenshot" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Nama</label>
                            <input type="text" value="<?= $data_blokir->nama ?>" name="nama" parsley-trigger="change" class="form-control" id="nama" disabled>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat</label>
                            <input type="text" value="<?= $data_blokir->alamat ?>" name="address" parsley-trigger="change" required placeholder="Masukkan Alamat" class="form-control" id="address" disabled>
                        </div>
                        <div class="form-group">
                            <label for="noNik">Nomor NIK</label>
                            <input type="text" value="<?= $data_blokir->id_nik ?>" name="noNik" parsley-trigger="change" required placeholder="Masukkan Nomor NIK" class="form-control" id="noNik" disabled>
                        </div>
                        <div class="form-group">
                            <label for="noNpwp">Nomor NPWP</label>
                            <input type="text" value="<?= $data_blokir->id_npwp ?>" name="noNpwp" parsley-trigger="change" required placeholder="Masukkan Nomor NPWP" class="form-control" id="noNpwp" disabled>
                        </div>
                        <div class="form-group">
                            <label for="noRek">Nomor Rekening</label>
                            <input type="text" value="<?= $data_blokir->no_rek ?>" name="noRek" parsley-trigger="change" required placeholder="Masukkan Nomor Rekening" class="form-control" id="noRek" disabled>
                        </div>
                        <div class="form-group">
                            <label for="filePajak">File Surat Pajak</label>
                            <input type="text" value="<?= $data_blokir->file_pajak ?>" name="filePajak" parsley-trigger="change" class="form-control" id="filePajak" disabled>
                        </div>
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="reset">
                                Reset
                            </button>
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end row -->