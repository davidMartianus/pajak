<div class="col-sm-12">
    <table id="" class="table table-sm table-striped table-bordered" style="width:100%">
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
                <th>Ket Tambahan</th>
                <th>St. Blokir</th>
                <th>Act</th>
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
                    <td><select class="form-control" id="kantorPajak" name="kantorPajak">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select></td>
                    <td><select class="form-control" id="kantorPajak" name="kantorPajak">
                            <option></option>
                            <option>a</option>
                            <option>b</option>
                            <option>c</option>
                            <option>d</option>
                        </select></td>
                    <td>s</td>
                    <td><a href="" class="btn btn-success">Compare</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


    <script>
        $(document).ready(function() {
            $('#').DataTable();
        });
    </script>

</div>