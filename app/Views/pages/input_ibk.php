<!-- Begin insertion for display Table -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Tambah data IBK</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/searchIbk/index">Pencarian IBK</a></li>
                    <li class="breadcrumb-item active">Input IBK</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <!-- <form action="/InputIbk/save" data-parsley-validate novalidate method="post"> -->
            <form action="" data-parsley-validate novalidate id="formsIbk">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-lg">
                        <div class="p-20">
                            <div>
                                <div class="form-group row">
                                    <label for="reffcode" class="col-lg-4 col-form-label">Nomor</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="reffcode" parsley-trigger="change" required placeholder="Nomor" class="form-control" id="reffcode" value="" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglSuratDjp" class="col-lg-4 col-form-label">Tanggal Surat DJP<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglSuratDjp" parsley-trigger="change" required placeholder="Tanggal Surat DJP" class="form-control tanggal" id="tglSuratDjp" autocomplete="off" data-date-end-date="0d">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglSuratDispos" class="col-lg-4 col-form-label">Tanggal Surat Disposisi<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglSuratDispos" parsley-trigger="change" required placeholder="Tanggal Surat Disposisi" class="form-control tanggal" id="tglSuratDispos" autocomplete="off" onchange="dateHandler(event);" data-date-end-date="0d">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="noSuratDjp" class="col-lg-4 col-form-label">Nomor Surat DJP<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="noSuratDjp" parsley-trigger="change" required placeholder="Nomor Surat DJP" class="form-control surat" id="noSuratDjp" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="noSuratKpp" class="col-lg-4 col-form-label">Nomor Surat KPP<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="noSuratKpp" parsley-trigger="change" required placeholder="Nomor Surat KPP" class="form-control surat" id="noSuratKpp" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat1" class="col-lg-4 col-form-label">Alamat 1<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="alamat1" parsley-trigger="change" required placeholder="Alamat 1" class="form-control" id="alamat1" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat2" class="col-lg-4 col-form-label">Alamat 2</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="alamat2" parsley-trigger="change" placeholder="Alamat 2" class="form-control" id="alamat2" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kodepos" class="col-lg-4 col-form-label">Kode Pos<span class="text-danger">*</span></label></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="kodepos" parsley-trigger="change" maxlength="5" required onkeypress="return isNumberKey(event)" placeholder="Kode Pos" class="form-control" id="kodepos" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglPeriksa" class="col-lg-4 col-form-label">Tanggal Pemeriksaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglPeriksa" parsley-trigger="change" alt="" required placeholder="Tanggal Pemeriksaan" class="form-control tanggal" id="tglPeriksa" onchange="dateHandler(event);" autocomplete="off" data-date-end-date="0d">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sla" class="col-lg-4 col-form-label">SLA</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="sla" parsley-trigger="change" placeholder="SLA" class="form-control" id="sla" value="" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="JnsKantorPjk" class="col-lg-4 col-form-label">Jenis Kantor Pajak<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="custom-select mb-3" class="form-control" id="JnsKantorPjk" name="JnsKantorPjk" required>
                                            <option selected>Pilih Jenis Kantor Pajak</option>
                                            <option value="Kanwil">Kanwil</option>
                                            <option value="Pratama">Pratama</option>
                                            <option value="Madya">Madya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kantorPjk" class="col-lg-4 col-form-label">Kantor Pajak<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control form-control-sm custom-select mb-3" id="kantorPjk" name="kantorPjk" required>
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
                                        <input type="text" name="nomorSuratJwb" parsley-trigger="change" required placeholder="Nomor Surat Jawaban" class="form-control surat" id="nomorSuratJwb" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="periode" class="col-lg-4 col-form-label">Periode yang diminta<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control input-daterange-datepicker" type="text" required name="daterange" value="" placeholder="Periode yang diminta" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Begin insertion for display Table -->
                <div class="card">
                    <div class="col-lg">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <button type="button" class="btn btn-light pull-left add-row" onclick="add('tambah')" data-target=".modal-lg"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="inputIbkTable" class="table table-striped table-bordered" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end insertion for display table -->

                <br>
                <div class="row">
                    <div class="col-lg">
                        <div class="form-group text-right m-b-0 text-center">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Print Surat DJP
                            </button>

                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Print Surat KPP
                            </button>

                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Print Surat Direktorat
                            </button>

                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Print Lampiran
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-primary waves-effect m-l-5" onclick="saveIbk();">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div><!-- end card-box -->
    </div><!-- end col-12 -->
</div><!-- end row -->
<!-- end insertion for display table -->

<!-- Modal -->
<!-- tabindex="-1" -->
<div class="modal fade" id="modalData" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="" id="formData">
                    <input type="hidden" id="id" name="id" value="">
                    <div class="form-group">
                        <label for="pajakNo">No. Surat Pajak</label>
                        <input type="text" class="form-control" id="pajakNo" placeholder="Masukan nomor surat pajak" name="pajakNo" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pajakDate">Tgl. Surat Pajak</label>
                        <input type="text" class="form-control tanggal" id="pajakDate" placeholder="Masukan tanggal surat pajak" name="pajakDate" autocomplete="off" data-date-end-date="0d">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kantorPajak">Kantor Pajak</label>
                        <!-- <input type="text" class="form-control" id="kantorPjk" placeholder="Masukan Kantor Pajak" name="kantorPajak" autocomplete="off"> -->

                        <select class="form-control form-control-sm" id="kantorPajak" name="kantorPajak">
                        </select>

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nasabah">Nama Nasabah</label>
                        <input type="text" class="form-control" id="nasabah" placeholder="Masukan Nama Nasabah" name="nasabah" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="outlet">Outlet</label>
                        <!-- <input type="text" class="form-control" id="outlet" placeholder="Masukan Outlet" name="outlet"> -->
                        <div>
                            <select class="custom-select mb-3" autocomplete="off" id="outlet" name="outlet">
                                <option value="" disabled selected>Pilih Jenis Outlet</option>
                                <option value="KC">KC</option>
                                <option value="KCP">KCP</option>
                                <option value="Kankas">Kankas</option>
                                <option value="KCS">KCS</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" onkeypress="return isNumberKey(event)" placeholder="Masukan NIK" name="nik" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" onkeypress="return isNumberKey(event)" placeholder="Masukan NPWP" name="npwp" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempatLahir" placeholder="Masukan Nomor Handphone" name="tempatLahir" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="text" class="form-control tanggal" id="tanggalLahir" placeholder="Masukan Tanggal Lahir" name="tanggalLahir" autocomplete="off" data-date-end-date="0d">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group" style="display: none;">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" readonly value="" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addKeterangan">Keterangan Tambahan</label>
                        <input type="text" class="form-control" id="addKeterangan" placeholder="Keterangan Tambahan" name="addKeterangan" value="" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="btnSave" onclick="inputToTbl()">Simpan</button>
                <!--  -->
            </div>
        </div>
    </div>
</div>

<script>
    var saveData;
    var modal = $('#modalData');
    var tableData = $('#inputIbkTable');
    var formData = $('#formData');
    var formHeader = $('#formsIbk');
    var modalTitle = $('#modalTitle');
    var btnSave = $('#btnSave');
    var count = 1;

    $(document).ready(function() {
        // tableData.DataTable({
        //     "processing": true,
        //     "serverSide": true,
        //     "order": [],
        //     "ajax": {
        //         "url": "<?= base_url('InputIbk/getData'); ?>",
        //         "type": "POST"
        //     },
        //     columnDefs: [{
        //         "target": [-1],
        //         "orderable": false
        //     }]
        // });

        $('#inputIbkTable').DataTable();

        getReffCode();

        $(function() {
            $('input[name="daterange"]').daterangepicker({
                // locale: {
                //     format: 'DD-MM-YYYY'
                // }
            });
        });
        // $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
        //     $(this).val(picker.startDate.format('DD-MM-YYYY') + ' - ' + picker.endDate.format('DD-MM-YYYY'));
        // });
    });

    function saveIbk() {
        url = "<?= base_url('/InputIbk/save'); ?>"

        $.ajax({
            type: "POST",
            url: url,
            data: formHeader.serialize(),
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                if (response.status == 1) { //success
                    showMessage('success', 'Tambah Data IBK', 'Data berhasil ditambahkan'); //show pop up message
                    console.log(response.created_at);
                } else { //failed
                    // looping to display mandatory field message
                    console.log(response);
                    for (let i = 0; i < response.inputerror.length; i++) {
                        $('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
                        $('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);
                        showMessage('error', 'Tambah Data IBK', 'Harap isi field mandatory'); //show pop up message
                    }
                }
                // redirect
            },
            error: function() {
                showMessage('error', 'Server Gangguan', 'silahkan ulangi kembali'); //show pop up message
            }
        });
    }

    function showMessage(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text,
            showConfirmButton: false,
            showCancelButton: false,
            timer: 2000,
            timerProgressBar: true
        });
    }

    function add(btnType) {
        if (btnType == 'tambah') {
            formData[0].reset(); //clear form field every time Tambah Data button is pressed
        }
        console.log(btnType);
        modal.modal('show'); //display modal
        modalTitle.text('Tambah Data'); //modal title

        saveData = 'tambah'; //store value to variable saveData for further use

        btnSave.attr('disabled', false); //enable button
        btnSave.text('Simpan'); //text on button
    }

    function inputToTbl() {
        var pajakNo = $('input[name="pajakNo"').val();
        var pajakDate = $('input[name="pajakDate"').val();
        var kantorPajak = $('select[name="kantorPajak"').val();
        var nasabah = $('input[name="nasabah"').val();
        var outlet = $('select[name="outlet"').val();
        var nik = $('input[name="nik"').val();
        var npwp = $('input[name="npwp"').val();
        var tempatLahir = $('input[name="tempatLahir"').val();
        var tanggalLahir = $('input[name="tanggalLahir"').val();
        var keterangan = $('input[name="keterangan"').val();
        var addKeterangan = $('input[name="addKeterangan"').val();

        tableData.DataTable().row.add([pajakNo, pajakDate, kantorPajak, nasabah, outlet, nik, npwp, tempatLahir, tanggalLahir, keterangan, addKeterangan,
            '<button type="button" class="btn btn-warning btn-sm" onclick="add(\'edit\') ">Edit</button>' +
            '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(event);">Delete</button>' +
            '<button type="button" class="btn btn-success btn-sm">Compare</button>'
        ]).draw(false);

        modal.modal('hide'); //hide modal
    }

    function deleteRow(row) {
        deleteQuestion(row); //call function pop up delete confirmation
    }

    // pop up delete confirmation using Sweet Alert   
    function deleteQuestion(row) {
        Swal.fire({
            title: 'Anda yakin akan menghapus ?',
            text: "Setelah terhapus, data tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
                // if button 'Ya, hapus data!' is pressed then call function deleteData()
                var tr = $(row.target).closest('tr');
                $(tableData).DataTable().row($(tr)).remove().draw(false);
            }
        })
    }

    // function to ensure phone number only can be filled with number
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode

        // charcode 48-57 is for 0-9
        if (charCode >= 48 && charCode <= 57) {
            return true;
        }
        return false;
    }

    function dateHandler(e) {
        var checkDate = document.getElementById('tglPeriksa').value;
        // convert date to format mm/dd/yyyy
        var splitCheckDate = checkDate.split("-");
        var checkDateConvert = splitCheckDate[1] + '/' + splitCheckDate[0] + '/' + splitCheckDate[2];

        var disposDate = document.getElementById('tglSuratDispos').value;
        // convert date to format mm/dd/yyyy
        var splitDisposDate = disposDate.split("-");
        var disposDateConvert = splitDisposDate[1] + '/' + splitDisposDate[0] + '/' + splitDisposDate[2];

        if (checkDate && disposDate) {
            // var diffInTime = new Date(checkDateConvert).getTime() - new Date(disposDateConvert).getTime();
            var diffInTime = new Date(checkDate).getTime() - new Date(disposDate).getTime();
            var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24));

            document.getElementById("sla").value = diffInDays;
        }
    }

    function forceKeyPressUppercase(e) {
        var charInput = e.keyCode;
        if ((charInput >= 97) && (charInput <= 122)) { // lowercase
            if (!e.ctrlKey && !e.metaKey && !e.altKey) { // no modifier key
                var newChar = charInput - 32;
                var start = e.target.selectionStart;
                var end = e.target.selectionEnd;
                e.target.value = e.target.value.substring(0, start) + String.fromCharCode(newChar) + e.target.value.substring(end);
                e.target.setSelectionRange(start + 1, start + 1);
                e.preventDefault();
            }
        }
    }

    document.getElementById("nomorSuratJwb").addEventListener("keypress", forceKeyPressUppercase, false);
    document.getElementById("noSuratDjp").addEventListener("keypress", forceKeyPressUppercase, false);
    document.getElementById("noSuratKpp").addEventListener("keypress", forceKeyPressUppercase, false);
    document.getElementById("pajakNo").addEventListener("keypress", forceKeyPressUppercase, false);
</script>
<!-- end insertion for modal -->