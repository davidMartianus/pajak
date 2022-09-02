<div class="card-box">
    <!-- <div class="card-body"> -->

    <p class="card-text viewdta"></p>
    <div class="card-title">
        <form action="" method="post" id="formDt">
            <!-- <div class=" row"> -->
            <div class="col-lg-6">
                <h1 class="m-b-30 d-flex justify-content-center"><b>Menu Input Blokir</b></h1>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="reffCode" class="col-form-label"> Reffcode </label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="reffcode" name="reffcode" value="<?= $header['reffcode']; ?>" autocomplete='off' readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="nomorSuratDJP" class="col-form-label">No Surat DJP</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="nomorSuratDJP" name="nomorSuratDJP" value="<?= $header['nomorSuratDJP']; ?>" readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="tanggalSuratDJP" class="col-form-label">Tgl Surat DJP</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="tanggalSuratDJP" name="tanggalSuratDJP" value="<?= $header['tanggalSuratDJP']; ?>" readonly>

                    </span>
                </div>

                <div class="form-group row">
                    <span class="col-4">
                        <label for="tanggalDisposisi" class="col-form-label">Tgl Disposisi</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="tanggalDisposisi" name="tanggalDisposisi" value="<?= $header['tanggalDisposisi']; ?>" readonly>
                    </span>
                </div>


                <div class="form-group row">
                    <span class="col-4">
                        <label for="alamat" class="col-form-label">Alamat</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="alamat" name="alamat" value="<?= $header['alamat']; ?>" readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="kodePos" class="col-form-label">Kode Pos</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="kodePos" name="kodePos" value="<?= $header['kodePos']; ?>" readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="tanggalPemeriksaan" class="col-form-label">Tgl Pemeriksaan</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="tanggalPemeriksaan" name="tanggalPemeriksaan" value="<?= $header['tanggalPemeriksaan']; ?>" readonly>

                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="sla" class="col-form-label">SLA</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="sla" name="sla" value="<?= $header['sla']; ?>" readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="jenisKantorPajak" class="col-form-label">Jenis Kantor Pajak</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="jenisKantorPajak" name="jenisKantorPajak" value="<?= $header['jenisKantorPajak']; ?>" readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="kantorPajak" class="col-form-label">Kantor Pajak</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="kantorPjkTbl" name="kantorPjkTbl" value="<?= $header['kantorPajak']; ?>" readonly>
                    </span>
                </div>
                <div class="form-group row">
                    <span class="col-4">
                        <label for="petugas" class="col-form-label">Petugas</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="petugas" name="petugas" value="<?= $header['petugas']; ?>" readonly>
                    </span>
                </div>
                <div class=" form-group row">
                    <span class="col-4">
                        <label for="nomorSuratJawaban" class="col-form-label">No Surat Jawaban</label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="text" id="nomorSuratJawaban" name="nomorSuratJawaban" value="<?= $header['nomorSuratJawaban']; ?>" readonly>
                    </span>
                </div>
                <div class=" form-group row">
                    <span class="col-4">
                        <label for="nomorSuratJawaban" class="col-form-label"></label>
                    </span>
                    <span class="col-8 ml-auto">
                        <input class="form-control text-center" type="hidden" id="created_at" name="created_at" value="<?= $header['created_at']; ?>" readonly>
                    </span>
                </div>


            </div>

            <!-- Begin insertion for display Table -->
            <div class=" card">
                <!-- Header table nasabah -->
                <!-- <div class=" mt-2 row"> -->
                <div class="card-body">
                    <div class="col">
                        <h2 class=" m-t-10 m-b-30 d-flex justify-content-center"><b>Tabel Pencarian Nasabah</b></h2>
                    </div>
                    <table id="dataritbl" class="table table-sm table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No Surat Pajak</th>
                                <th class="text-center">Tgl Surat</th>
                                <th class="text-center">Kantor Pajak</th>
                                <th class="text-center">Tgl Disposisi</th>
                                <th class="text-center">Nama Nasabah</th>
                                <th class="text-center">Outlet</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center">NPWP</th>
                                <th class="text-center">Tempat Lahir</th>
                                <th class="text-center">Tgl Lahir</th>
                                <th class="text-center">Ket</th>
                                <th class="text-center">Ket TambahanQ</th>
                                <th class="text-center">St. Blokir</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyIbk">

                            <?php foreach ($items as $t) : ?>
                                <tr>

                                    <td class="text-center" id="noSuratPjkTbl"><?= $t['noSuratPajak']; ?></td>
                                    <td class="text-center" id="tglSuratPjkTbl"><?= $t['tanggalSurat']; ?></td>
                                    <td class="text-center" id="kantorPjkTbl"><?= $t['kantorPajak']; ?></td>
                                    <td class="text-center" id="tglDisposisiTbl"><?= $t['tanggalDisposisi']; ?></td>
                                    <td class="text-center" id="nasabahTbl"><?= $t['namaNasabah']; ?></td>
                                    <td class="text-center" id="outletTbl"><?= $t['outlet']; ?></td>
                                    <td class="text-center" id="nikTbl"><?= $t['nik']; ?></td>
                                    <td class="text-center" id="npwpTbl"><?= $t['npwp']; ?></td>
                                    <td class="text-center" id="tmptLahirTbl"><?= $t['tempatLahir']; ?></td>
                                    <td class="text-center" id="tglLahirTbl"><?= $t['tanggalLahir']; ?></td>
                                    <td class="text-center" id="keteranganTbl"><?= $t['keterangan']; ?></td>
                                    <td class="text-center" id="addKetPjkTbl"><?= $t['add_keterangan']; ?></td>
                                    <td class="text-center">s</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end insertion for display table -->

            <br>
        </form>


    </div>
    <div class="col">
        <div class="my-3 d-flex justify-content-center">
            <div class="col-2">
                <button class="btn btn-primary" type="button" onclick="generateSurat('kpp')">Print Surat</button>
            </div>
            <button class="btn btn-primary" type="button" onclick="generateSurat('lampiran')">Print Lampiran</button>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <button class="btn btn-primary" type="button" onclick="location.href='<?php echo base_url(); ?>/NewBlokir'">Kembali</button>
        </div>
    </div>
</div>
</div>


<script>
    var formHeader = $('#formDt');
    // var tr = $(e.target).closest('tr');
    // var childLen = tr[0].childNodes.length;


    $(document).ready(function() {
        // $('#dntable').DataTable();

        $('#dataritbl').DataTable({
            'columnDefs': [{
                'targets': "_all",
                'createdCell': function(td, cellData, rowData, row, col) {
                    generateRowId(td, col);
                }
            }]
        });
    });


    function addIbkArray(dataIbk, name, value) {
        dataIbk.push({
            name: name,
            value: value
        });
    }

    function generateSurat(tipe_surat) {
        var dataSurat = [];
        var header = formHeader.serializeArray(); // convert form to array;
        var item = [];
        var trs = document.querySelectorAll('#tbodyIbk tr');

        var url_print = "<?= base_url('/BikinSurat/printSuratIbk'); ?>";

        if (tipe_surat == 'lampiran') {
            for (let [index, tr] of trs.entries()) {
                $rowLen = index + 1;
                for (let j = 1; j < tr.childNodes.length; j += 2) {
                    addIbkArray(dataSurat, tr.childNodes[j].id + index, tr.childNodes[j].innerHTML);
                }
                addIbkArray(dataSurat, document.getElementById('nomorSuratDJP').id, document.getElementById('nomorSuratDJP').value); //get DJP number from header
                addIbkArray(dataSurat, document.getElementById('created_at').id, document.getElementById('created_at').value); //get DJP number from header
            }
            // addIbkArray(dataSurat, 'item', item);
            addIbkArray(dataSurat, 'tipeSurat', tipe_surat);
            addIbkArray(dataSurat, 'reffcode', document.getElementById('reffcode').value);
            addIbkArray(dataSurat, 'jumlahRow', $rowLen);

        } else if (tipe_surat == 'kpp') {
            // addIbkArray(dataSurat, 'header', header);
            addIbkArray(header, trs[0].childNodes[5].id, trs[0].childNodes[5].innerHTML);
            dataSurat = header;
            addIbkArray(dataSurat, 'tipeSurat', tipe_surat);
        }

        console.log(dataSurat);
        console.log(trs);
        // if (savedFlag == 1) {
        $.ajax({
            type: 'POST',
            url: url_print,
            data: $.param(dataSurat), //formHeader.serialize(),
            dataType: 'json',
            success: function(response) {
                console.log(response);
                var $a = $("<a>");
                $a.attr("href", response.file);
                $("body").append($a);
                $a.attr("download", response.fileName);
                $a[0].click();
                $a.remove();

                console.log(response);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError + "\n" + ajaxOptions);
                // showMessage('error', thrownError, 'silahkan ulangi kembali'); //show pop up message
            }
        });
        // } else {
        // showMessage('error', 'Gagal Print Surat', 'silahkan simpan data terlebih dahulu'); //show pop up message
        // }
    }

    // function generateRowId(td, col) {
    //     if (col == 0) {
    //         return $(td).attr('id', 'noSuratPjkTbl');
    //     }

    //     if (col == 1) {
    //         return $(td).attr('id', 'tglSuratPjkTbl');
    //     }

    //     if (col == 2) {
    //         return $(td).attr('id', 'kantorPjkTbl');
    //     }
    //     if (col == 3) {
    //         return $(td).attr('id', 'tglDisposisiTbl');
    //     }

    //     if (col == 4) {
    //         return $(td).attr('id', 'nasabahTbl');
    //     }

    //     if (col == 5) {
    //         return $(td).attr('id', 'outletTbl');
    //     }

    //     if (col == 6) {
    //         return $(td).attr('id', 'nikTbl');
    //     }

    //     if (col == 7) {
    //         return $(td).attr('id', 'npwpTbl');
    //     }

    //     if (col == 8) {
    //         return $(td).attr('id', 'tmptLahirTbl');
    //     }

    //     if (col == 9) {
    //         return $(td).attr('id', 'tglLahirTbl');
    //     }

    //     if (col == 10) {
    //         return $(td).attr('id', 'keteranganTbl');
    //     }

    //     if (col == 11) {
    //         return $(td).attr('id', 'addKetPjkTbl');
    //     }
    // }
</script>