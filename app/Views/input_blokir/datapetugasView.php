<div class="col-sm-12">
    <table id="tabelpetugas" class="table table-sm table-striped table-bordered" style="width:100%">
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
                <th>Act</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($tampil as $d) : ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td id="nomorSuratDJP"><?= $d['nomorSuratDJP']; ?></td>
                    <td><?= $d['tanggalSuratDJP']; ?></td>
                    <td><?= $d['tanggalDisposisi']; ?></td>
                    <td><?= $d['alamat']; ?></td>
                    <td><?= $d['kodePos']; ?></td>
                    <td><?= $d['tanggalPemeriksaan']; ?></td>
                    <td><?= $d['sla']; ?></td>
                    <td><?= $d['jenisKantorPajak']; ?></td>
                    <td><?= $d['kantorPajak']; ?></td>
                    <td><?= $d['petugas']; ?></td>
                    <td><?= $d['nomorSuratJawaban']; ?></td>
                    <td><button type="button" class="btn btn-primary" id="detail1">Detail</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>





    <script>
        $(document).ready(function() {
            $('#tabelpetugas').DataTable();
        });




        $(document).ready(function() {

            // code to read selected table row cell data (values).
            $("#tabelpetugas").on('click', '#detail1', function() {
                // get the current row
                var currentRow = $(this).closest("tr");
                var col1 = currentRow.find("td:eq(0)").html();
                window.location.href = "<?= ('/NewBlokir/detail/'); ?>" + col1;
            });
        });
    </script>

</div>