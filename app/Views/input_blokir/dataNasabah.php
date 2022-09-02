<div class="col-sm-12">
    <table id="dbnsbh" class="table table-sm table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama Nasabah</th>
                <th>NPWP</th>
                <th>No Rekening</th>
                <th>saldo</th>
                <th>Tempat lahir</th>
                <th>Tanggal Lahir</th>
                <th>alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tampil as $b) : ?>
                <tr>
                    <td><?= $b['nik']; ?></td>
                    <td><?= $b['namaNasabah']; ?></td>
                    <td><?= $b['npwp']; ?></td>
                    <td><?= $b['noRekening']; ?></td>
                    <td><?= $b['saldo']; ?></td>
                    <td><?= $b['tempatLahir']; ?></td>
                    <td><?= $b['tanggalLahir']; ?></td>
                    <td><?= $b['alamat']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script>
        $(document).ready(function() {
            $('#dbNsbh').DataTable();
        });
    </script>
</div>