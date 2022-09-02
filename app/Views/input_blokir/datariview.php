<div class="col-sm-12">
    <table id="dataritbl" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No Surat Pajak</th>
                <th>Tgl Surat</th>
                <th>Kantor Pajak</th>
                <th>Tgl Disposisi</th>
                <th>Nama Nasabah</th>
                <th>Outlet</th>
                <th>NIK</th>
                <th>NPWP</th>
                <th>Tempat Lahir</th>
                <th>Tgl Lahir</th>
                <th>Ket</th>
                <th>Ket TambahanQ</th>
                <th>St. Blokir</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($tampil as $t) : ?>
                <tr>

                    <td><?= $t['noSuratPajak']; ?></td>
                    <td><?= $t['tanggalSurat']; ?></td>
                    <td><?= $t['kantorPajak']; ?></td>
                    <td><?= $t['tanggalDisposisi']; ?></td>
                    <td><?= $t['namaNasabah']; ?></td>
                    <td><?= $t['outlet']; ?></td>
                    <td><?= $t['nik']; ?></td>
                    <td><?= $t['npwp']; ?></td>
                    <td><?= $t['tempatLahir']; ?></td>
                    <td><?= $t['tanggalLahir']; ?></td>
                    <td><?= $t['keterangan']; ?></td>
                    <td><?= $t['add_keterangan']; ?></td>
                    <td>s</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script>
        $(document).ready(function() {
            $('#dataritbl').DataTable({

            })
        });
    </script>

</div>