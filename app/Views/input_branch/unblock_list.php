<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Pencarian Nasabah</h4>
            <form action="<?= base_url("unblock-list"); ?>" method="get" id="search">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="nik">No. NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="npwp">No. NPWP</label>
                        <input type="text" class="form-control" id="npwp" name="npwp">
                    </div>

                    <!-- <div class="form-group col-md-3">
                        <label for="status">Status</label>
                        <select id="status" class="form-control" name="status">
                            <option value="Blocked">Blocked</option> 
                        </select>
                    </div> -->
                </div>
                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                        Cari Data
                    </button>
                    <button class="btn btn-primary waves-effect waves-light" type="reset">
                        Reset
                    </button>
                </div>
            </form>
        </div>

        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">Menu List cabut blokir cabang</h4>
            <p class="text-muted font-14 m-b-30">
                Daftar list nasabah yang akan di cabut blokir.
            </p>

            <!-- <table id="datatable" class="table table-bordered table-bordered dt-responsive" cellspacing="0" width="100%"> -->
            <table id="unblockListDataTable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nomor Surat pajak</th>
                        <th>Status Blokir</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>NIK</th>
                        <th>NPWP</th>
                        <th>No. Rek</th>
                        <th>File Surat Pajak</th>
                        <th>Berita Acara Cabut Blokir</th>
                        <th>Screenshot Bukti Cabut Blokir</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data_blokir as $result) : ?>
                        <tr>
                            <td><?php echo $result->no_surat ?></td>
                            <td><?php echo $result->status_blokir ?></td>
                            <td><?php echo $result->nama ?></td>
                            <td><?php echo $result->alamat ?></td>
                            <td><?php echo $result->id_nik ?></td>
                            <td><?php echo $result->id_npwp ?></td>
                            <td><?php echo $result->no_rek ?></td>
                            <td><?php echo $result->file_pajak ?></td>
                            <td><?php echo $result->berita_acara_unblock ?></td>
                            <td><?php echo $result->screenshot_unblock ?></td>
                            <td>
                                <a href="<?= base_url("/unblock-input/" . $result->id) ?>">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Detail
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?= $pager->links('default', 'pagination_block'); ?>
        </div>
    </div>
</div> <!-- end row -->

<script>
    $('#unblockListDataTable').DataTable({
        searching: false,
        paging: false,
        info: false
    });
</script>