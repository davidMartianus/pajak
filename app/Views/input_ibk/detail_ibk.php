<!-- Begin insertion for display Table -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Detail data IBK</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/ibk">Pencarian IBK</a></li>
                    <li class="breadcrumb-item active">Detail IBK</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <!-- <form action="/InputIbk/save" id="formsIbk" data-parsley-validate novalidate method="post"> -->
            <form action="" data-parsley-validate novalidate id="formsIbk">

                <div class="row">
                    <div class="col-lg">
                        <div class="p-20">
                            <div>
                                <div class="form-group row">
                                    <label for="reffcode" class="col-lg-4 col-form-label">Nomor</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="reffcode" parsley-trigger="change" required placeholder="Nomor" class="form-control" id="reffcode" value="<?= $header['reffcode'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglSuratDjp" class="col-lg-4 col-form-label">Tanggal Surat DJP<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglSuratDjp" parsley-trigger="change" required placeholder="Tanggal Surat DJP" class="form-control tanggal" id="tglSuratDjp" autocomplete="off" data-date-end-date="0d" value="<?= $header['djp_date'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglSuratDispos" class="col-lg-4 col-form-label">Tanggal Surat Disposisi<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglSuratDispos" parsley-trigger="change" required placeholder="Tanggal Surat Disposisi" class="form-control tanggal" id="tglSuratDispos" autocomplete="off" onchange="dateHandler(event);" data-date-end-date="0d" value="<?= $header['dispos_date'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="noSuratDjp" class="col-lg-4 col-form-label">Nomor Surat DJP<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="noSuratDjp" parsley-trigger="change" required placeholder="Nomor Surat DJP" class="form-control surat" id="noSuratDjp" autocomplete="off" value="<?= $header['djp_no'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="noSuratKpp" class="col-lg-4 col-form-label">Nomor Surat KPP<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="noSuratKpp" parsley-trigger="change" required placeholder="Nomor Surat KPP" class="form-control surat" id="noSuratKpp" autocomplete="off" value="<?= $header['kpp_no'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat1" class="col-lg-4 col-form-label">Alamat 1<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="alamat1" parsley-trigger="change" required placeholder="Alamat 1" class="form-control" id="alamat1" autocomplete="off" value="<?= $header['alamat1'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat2" class="col-lg-4 col-form-label">Alamat 2</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="alamat2" parsley-trigger="change" placeholder="Alamat 2" class="form-control" id="alamat2" autocomplete="off" value="<?= $header['alamat2'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kodepos" class="col-lg-4 col-form-label">Kode Pos<span class="text-danger">*</span></label></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="kodepos" parsley-trigger="change" maxlength="5" required onkeypress="return isNumberKey(event)" placeholder="Kode Pos" class="form-control" id="kodepos" autocomplete="off" value="<?= $header['kode_pos'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglPeriksa" class="col-lg-4 col-form-label">Tanggal Pemeriksaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglPeriksa" parsley-trigger="change" alt="" required placeholder="Tanggal Pemeriksaan" class="form-control tanggal" id="tglPeriksa" onchange="dateHandler(event);" autocomplete="off" data-date-end-date="0d" value="<?= $header['check_date'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sla" class="col-lg-4 col-form-label">SLA</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="sla" parsley-trigger="change" placeholder="SLA" class="form-control" id="sla" readonly value="<?= $header['sla'] ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="JnsKantorPjk" class="col-lg-4 col-form-label">Jenis Kantor Pajak<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="custom-select mb-3" class="form-control" id="JnsKantorPjk" name="JnsKantorPjk" required disabled>
                                            <option value="<?= $header['jenis_kp'] ?>" selected><?= $header['jenis_kp'] ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kantorPjk" class="col-lg-4 col-form-label">Kantor Pajak<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control form-control-sm custom-select mb-3" name="kantorPjk" required disabled>
                                            <option value="<?= $header['kantor_pajak'] ?>" id="kantorPjk" selected><?= $header['kantor_pajak'] ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="petugas" class="col-lg-4 col-form-label">Petugas</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="petugas" parsley-trigger="change" placeholder="Petugas" class="form-control" id="petugas" value="JohnDoe" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nomorSuratJwb" class="col-lg-4 col-form-label">Nomor Surat Jawaban<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nomorSuratJwb" parsley-trigger="change" required placeholder="Nomor Surat Jawaban" class="form-control surat" id="nomorSuratJwb" autocomplete="off" value="<?= $header['surat_jwb_no'] ?>" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="periode" class="col-lg-4 col-form-label">Periode yang diminta<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control input-daterange-datepicker" type="text" required name="daterange" value="" placeholder="Periode yang diminta" autocomplete="off" value="<?= $header['periode'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Begin insertion for display Table -->
                <div class="card">
                    <!-- <div class="col-lg">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <button type="button" class="btn btn-light pull-left add-row" onclick="add('tambah')" data-target=".modal-lg"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
                            </div>
                        </div>
                    </div> -->
                    <div class="card-body">
                        <table id="inputIbkTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>No. Surat Pajak</th>
                                    <th>Tgl. Surat Pajak</th>
                                    <th>Kantor Pajak</th>
                                    <th>Nama Nasabah</th>
                                    <th>Outlet</th>
                                    <th>NIK</th>
                                    <th>NPWP</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Keterangan</th>
                                    <th>Keterangan Tambahan</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody id="tbodyIbk">
                                <?php foreach ($items as $item) : ?>
                                    <tr>
                                        <!-- <th scope="row">1</th> -->

                                        <td> <?= $item['surat_pajak']; ?></td>
                                        <td> <?= $item['surat_pajak_date']; ?></td>
                                        <td> <?= $item['kantor_pajak']; ?></td>
                                        <td> <?= $item['nasabah']; ?></td>
                                        <td> <?= $item['outlet']; ?></td>
                                        <td> <?= $item['nik']; ?></td>
                                        <td> <?= $item['npwp']; ?></td>
                                        <td> <?= $item['tempat_lahir']; ?></td>
                                        <td> <?= $item['tgl_lahir']; ?></td>
                                        <td> <?= $item['keterangan']; ?></td>
                                        <td> <?= $item['add_keterangan']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end insertion for display table -->

                <br>
                <div class="row">
                    <div class="col-lg">
                        <div class="form-group text-right m-b-0 text-center">
                            <button class="btn btn-primary waves-effect waves-light" type="button" id="printDjp" onclick="generateSuratExist('djp')">
                                Print Surat
                            </button>

                            <button class="btn btn-primary waves-effect waves-light" type="button" id="printKpp" onclick="generateSuratExist('kpp')">
                                Print Surat KPP
                            </button>

                            <button class="btn btn-primary waves-effect waves-light" type="button" id="printDirektorat" onclick="generateSuratExist('direktorat')">
                                Print Surat Direktorat
                            </button>

                            <button class="btn btn-primary waves-effect waves-light" type="button" id="printLampiran" onclick="generateSuratExist('lampiran')">
                                Print Lampiran
                            </button>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-primary waves-effect m-l-5" onclick="saveIbk();" disabled>
                            Simpan
                        </button>
                    </div>
                </div> -->
            </form>
        </div><!-- end card-box -->
    </div><!-- end col-12 -->
</div><!-- end row -->
<!-- end insertion for display table -->

<script>
    var saveData;
    var modal = $('#modalData');
    var modalCompare = $('#modalCompareData');
    var tableData = $('#inputIbkTable');
    var formData = $('#formData');
    var formHeader = $('#formsIbk');
    var modalTitle = $('#modalTitle');
    var btnSave = $('#btnSave');
    var count = 1;
    var savedFlag;

    $(document).ready(function() {
        var djp = document.getElementById('noSuratDjp').value;
        // console.log(djp);
        savedFlag = 0;
        // console.log(formHeader.serializeArray());
        // tableData.DataTable({
        //     "processing": true,
        //     "serverSide": true,
        //     "order": [],
        //     "ajax": {
        //         "url": "<?= base_url('/SearchIbk/detailItemIbk'); ?>",
        //         "type": "POST",
        //         // "data": formHeader.serializeArray(),
        //         "data": {
        //             djp_no: djp
        //         },
        //         "dataType": "JSON",
        //         dataFilter: function(response) {
        //             // this to see what exactly is being sent back
        //             console.log(response);
        //             return response
        //         },
        //         // error: function(error) {
        //         //     // to see what the error is
        //         //     console.log(error);
        //         // }
        //     },
        //     columnDefs: [{
        //         "target": [],
        //         // 'targets': "_all",
        //         "orderable": false
        //     }]
        // });

        $('#inputIbkTable').DataTable({
            'columnDefs': [{
                'targets': "_all",
                'createdCell': function(td, cellData, rowData, row, col) {
                    generateRowId(td, col);
                }
            }]
        });

        // getReffCode();

        $(function() {
            $('input[name="daterange"]').daterangepicker({
                // locale: {
                //     format: 'DD-MM-YYYY'
                // }
            });
        });
    });

    function generateSuratExist(tipe_surat) {
        var dataSurat = [];
        var header = formHeader.serializeArray(); // convert form to array;
        var item = [];
        var trs = document.querySelectorAll('#tbodyIbk tr');

        var url_print = "<?= base_url('/GenerateSurat/printSuratIbk'); ?>";
        var url_save_log = "<?= base_url('/GenerateSurat/saveSuratLog'); ?>";

        // console.log(document.getElementById('kantorPjk'));
        if (tipe_surat == 'lampiran') {
            for (let [index, tr] of trs.entries()) {
                $rowLen = index + 1;
                for (let j = 0; j < tr.childNodes.length - 1; j++) {
                    addIbkArray(dataSurat, document.getElementById('noSuratDjp').id, document.getElementById('noSuratDjp').value); //get DJP number from header

                    addIbkArray(dataSurat, tr.childNodes[j].id + index, tr.childNodes[j].innerHTML);
                }
            }
            // addIbkArray(dataSurat, 'item', item);
            addIbkArray(dataSurat, 'tipeSurat', tipe_surat);
            addIbkArray(dataSurat, 'reffcode', document.getElementById('reffcode').value);
            addIbkArray(dataSurat, 'jumlahRow', $rowLen);
        } else {
            // addIbkArray(dataSurat, 'header', header);
            // to get kantor pajak on table view
            console.log(trs);
            addIbkArray(header, trs[0].childNodes[7].id, trs[0].childNodes[7].innerHTML);
            dataSurat = header;
            addIbkArray(dataSurat, 'tipeSurat', tipe_surat);
            addIbkArray(dataSurat, 'kantorPjk', document.getElementById('kantorPjk').value);
        }
        addIbkArray(dataSurat, 'dataStatus', 'existing');
        console.log(dataSurat);
        $.ajax({
            type: 'POST',
            url: url_print,
            data: $.param(dataSurat), //formHeader.serialize(),
            dataType: 'json',
            success: function(response) {
                var $a = $("<a>");
                $a.attr("href", response.file);
                $("body").append($a);
                $a.attr("download", response.fileName);
                $a[0].click();
                $a.remove();

                console.log(response);
                // save data after print document
                if (response.save == 1) {
                    $.ajax({
                        type: 'POST',
                        url: url_save_log,
                        data: $.param(dataSurat),
                        dataType: 'json',
                        success: function(response) {

                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(xhr.status + "\n" + xhr.responseText + "\n" +
                                thrownError + "\n" + ajaxOptions);
                            // showMessage('error', thrownError, 'silahkan ulangi kembali'); //show pop up message
                        }
                    });
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError + "\n" + ajaxOptions);
                // showMessage('error', thrownError, 'silahkan ulangi kembali'); //show pop up message
            }
        });
    }

    function addIbkArray(dataIbk, name, value) {
        dataIbk.push({
            name: name,
            value: value
        });
    }

    function generateRowId(td, col) {
        if (col == 0) {
            return $(td).attr('id', 'noSuratPjkTbl');
        }

        if (col == 1) {
            return $(td).attr('id', 'tglSuratPjkTbl');
        }

        if (col == 2) {
            return $(td).attr('id', 'kantorPjkTbl');
        }

        if (col == 3) {
            return $(td).attr('id', 'nasabahTbl');
        }

        if (col == 4) {
            return $(td).attr('id', 'outletTbl');
        }

        if (col == 5) {
            return $(td).attr('id', 'nikTbl');
        }

        if (col == 6) {
            return $(td).attr('id', 'npwpTbl');
        }

        if (col == 7) {
            return $(td).attr('id', 'tmptLahirTbl');
        }

        if (col == 8) {
            return $(td).attr('id', 'tglLahirTbl');
        }

        if (col == 9) {
            return $(td).attr('id', 'keteranganTbl');
        }

        if (col == 10) {
            return $(td).attr('id', 'addKetPjkTbl');
        }
    }

    function dataKantorPajak() {

    }
</script>