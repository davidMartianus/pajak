<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <h4 class="m-t-0 header-title">List Approve Blokir Nasabah</h4>
            <p class="text-muted font-14 m-b-30">
                Daftar list nasabah telah diblokir cabang dan perlu validasi blokir.
            </p>

            <table id="blockApproveDataTable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
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
                        <th>Berita Acara Blokir</th>
                        <th>Screenshot Bukti Blokir</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php /* print_r($data_blokir); ?>
                    <?php echo $data_blokir[0]->no_surat; */ ?>
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
                            <td><?php echo $result->berita_acara ?></td>
                            <td><?php echo $result->screenshot ?></td>
                            <td>
                                <a href="<?= base_url("/block-approve-input/" . $result->id) ?>">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                        Validasi
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?= $pager->links('default', 'pagination_block'); ?>
        </div>
    </div>
</div>

<script>
    $('#blockApproveDataTable').DataTable({
        searching: false,
        paging: false,
        info: false
    });
</script>