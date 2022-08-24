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
                <!-- <form action="/InputIbk/save" id="formsIbk" data-parsley-validate novalidate method="post"> -->
                <form action="" data-parsley-validate novalidate id="formsIbk">

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
                                                <option value="" disabled selected>--Pilih Jenis Kantor Pajak--</option>
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
                            <table id="inputIbkTable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <tbody id="tbodyIbk">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end insertion for display table -->

                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group text-right m-b-0 text-center">
                                <button class="btn btn-primary waves-effect waves-light" type="button" id="printDjp" onclick="generateSurat('djp')">
                                    Print Surat
                                </button>

                                <!-- <a class="btn btn-primary waves-effect waves-light" type="button" id="printDjp" href="<?= base_url() . "/generate" ?>">
                                    Print Surat DJP POST
                                </a> -->

                                <button class="btn btn-primary waves-effect waves-light" type="submit" id="printKpp" onclick="generateSurat('kpp')">
                                    Print Surat KPP
                                </button>

                                <button class="btn btn-primary waves-effect waves-light" type="submit" id="printDirektorat" onclick="generateSurat('direktorat')">
                                    Print Surat Direktorat
                                </button>

                                <button class="btn btn-primary waves-effect waves-light" type="submit" id="printLampiran" onclick="generateSurat('lampiran')">
                                    Print Lampiran
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg text-center">
                            <!--  -->
                            <button type="button" class="btn btn-primary waves-effect m-l-5" onclick="saveIbk();">
                                <!-- <button type="submit" class="btn btn-primary waves-effect m-l-5" formaction="<?= base_url('/InputIbk/save') ?>"> -->
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div><!-- end card-box -->
        </div><!-- end col-12 -->
    </div><!-- end row -->
    <!-- end insertion for display table -->

    <!-- Modal insert surat pajak nasabah-->
    <!-- tabindex="-1" -->
    <div class="modal fade" id="modalData" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
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
                                    <option value="" disabled selected>--Pilih Outlet--</option>
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

                        <div class="form-group">
                            <label for="npwp">NPWP</label>
                            <input type="text" class="form-control" id="npwp" onkeypress="return isNumberKey(event)" placeholder="Masukan NPWP" name="npwp" autocomplete="off">

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
    <!-- end insertion for modal surat pajak nasabah -->

    <!-- Modal compare-->
    <div class="modal fade" id="modalCompareData" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body form">
                    <form action="" id="formData">
                        <h4>Data Lampiran IBK</h4>
                        <input type="hidden" id="id" name="id" value="">
                        <div class="form-group">
                            <label for="nasabahCompare">Nama Nasabah</label>
                            <input type="text" class="form-control" id="nasabahCompare" placeholder="Masukan Nama Nasabah" name="nasabahCompare" autocomplete="off" readonly>

                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempatLahirCompare">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatLahirCompare" placeholder="Masukan Nomor Handphone" name="tempatLahirCompare" autocomplete="off" readonly>

                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahirCompare">Tanggal Lahir</label>
                            <input type="text" class="form-control tanggal" id="tanggalLahirCompare" placeholder="Masukan Tanggal Lahir" name="tanggalLahirCompare" autocomplete="off" data-date-end-date="0d" readonly>

                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nikCompare">NIK</label>
                            <input type="text" class="form-control" id="nikCompare" onkeypress="return isNumberKey(event)" placeholder="Masukan NIK" name="nikCompare" autocomplete="off" readonly>

                            <div class="invalid-feedback">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="npwpCompare">NPWP</label>
                            <input type="text" class="form-control" id="npwpCompare" onkeypress="return isNumberKey(event)" placeholder="Masukan NPWP" name="npwpCompare" autocomplete="off" readonly>

                            <div class="invalid-feedback">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <!-- <button type="button" class="btn btn-primary" id="btnSave" onclick="inputToTbl()">Simpan</button> -->
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
    <!-- end insertion for modal compare -->

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

            // $("#printDjp").click(function() {
            //     $.ajax({
            //         'url': 'GenerateSurat/printSuratDjp', //URL of the request
            //         'type': 'POST', //POST method
            //         'success': function() { //execute when successful
            //             console.log("masuk ajax")
            //             // btnAdd.attr('disabled', 'true'); //disable the button
            //             // btnAdd.val('sending ...'); //change the button text value
            //         }
            //     });
            // });

            $('#inputIbkTable').DataTable({
                'columnDefs': [{
                    'targets': "_all",
                    'createdCell': function(td, cellData, rowData, row, col) {
                        generateRowId(td, col);
                    }
                }]
            });

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

        function addIbkArray(dataIbk, name, value) {
            dataIbk.push({
                name: name,
                value: value
            });
        }

        // function to save data to database table
        function saveIbk() {
            url_header = "<?= base_url('/InputIbk/save_header'); ?>";
            url_item = "<?= base_url('/InputIbk/save_item'); ?>";

            var dataIbk = formHeader.serializeArray(); // convert form to array;
            var itemIbk = [];
            var status_insert;

            // console.log(dataIbk);

            // var dataTbl = document.querySelectorAll('#tbodyIbk tr');
            // var itemIbk = [{}];
            // itemIbk.push({});

            // for (let [index, tr] of dataTbl.entries()) {
            //     var td = tr.getElementsByTagName('td');
            //     // let td_array = Array.from(td); // convert HTMLCollection to an Array

            //     // td_array = td_array.map(tag => tag.innerText); // get the text of each element
            //     // itemIbk.push(td_array);

            //     for (let j = 0; j < tr.childNodes.length - 1; j++) {
            //         // addIbkArray(itemIbk, td_array.map(tag => tag.id), td_array.map(tag => tag.innerText));

            //         // addIbkArray(itemIbk, document.getElementById('noSuratDjp').id, document.getElementById('noSuratDjp').value);
            //         addIbkArray(itemIbk, tr.childNodes[j].id, tr.childNodes[j].innerHTML);
            //         // itemIbk[index][document.getElementById('noSuratDjp').id] = document.getElementById('noSuratDjp').value;
            //         // itemIbk[index][tr.childNodes[j].id] = tr.childNodes[j].innerHTML;
            //     }
            // }

            // addIbkArray(dataIbk, "item", itemIbk);

            // console.log(itemIbk);

            // addIbkArray(itemIbk, "noSuratPjkTbl", document.getElementById('noSuratPjkTbl').innerHTML);
            // addIbkArray(itemIbk, "tglSuratPjkTbl", document.getElementById('tglSuratPjkTbl').innerHTML);
            // addIbkArray(itemIbk, "kantorPjkTbl", document.getElementById('kantorPjkTbl').innerHTML);
            // addIbkArray(itemIbk, "nasabahTbl", document.getElementById('nasabahTbl').innerHTML);
            // addIbkArray(itemIbk, "outletTbl", document.getElementById('outletTbl').innerHTML);
            // addIbkArray(itemIbk, "nikTbl", document.getElementById('nikTbl').innerHTML);
            // addIbkArray(itemIbk, "npwpTbl", document.getElementById('npwpTbl').innerHTML);
            // addIbkArray(itemIbk, "tmptLahirTbl", document.getElementById('tmptLahirTbl').innerHTML);
            // addIbkArray(itemIbk, "tglLahirTbl", document.getElementById('tglLahirTbl').innerHTML);
            // addIbkArray(itemIbk, "keteranganTbl", document.getElementById('keteranganTbl').innerHTML);
            // addIbkArray(itemIbk, "addKetPjkTbl", document.getElementById('addKetPjkTbl').innerHTML);

            // console.log(header);
            // var dataTbl = document.querySelectorAll('#tbodyIbk tr');
            // for (let [index, tr] of dataTbl.entries()) {
            //     // var td = tr.getElementsByTagName('td');
            //     // let td_array = Array.from(td); // convert HTMLCollection to an Array

            //     for (let j = 0; j < tr.childNodes.length - 1; j++) {
            //         addIbkArray(itemIbk, document.getElementById('noSuratDjp').id, document.getElementById('noSuratDjp').value); //get DJP number from header

            //         addIbkArray(itemIbk, tr.childNodes[j].id, tr.childNodes[j].innerHTML);

            //         // td_id = td_array.map(tag => tag.id); // get the id of each element
            //         // td_value = td_array.map(tag => tag.innerText); // get the text of each element

            //     }



            //     console.log(itemIbk);
            // }

            $.ajax({
                type: "POST",
                url: url_header,
                data: formHeader.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response.status == 1) { //success
                        var dataTbl = document.querySelectorAll('#tbodyIbk tr');

                        for (let [index, tr] of dataTbl.entries()) {
                            for (let j = 0; j < tr.childNodes.length - 1; j++) {
                                addIbkArray(itemIbk, document.getElementById('noSuratDjp').id, document.getElementById('noSuratDjp').value); //get DJP number from header

                                addIbkArray(itemIbk, tr.childNodes[j].id, tr.childNodes[j].innerHTML);
                            }

                            if (itemIbk) {
                                $.ajax({
                                    type: "POST",
                                    url: url_item,
                                    data: $.param(itemIbk),
                                    dataType: "JSON",
                                    success: function(response) {
                                        if (response.status == 1) {
                                            // status_insert = response.status;
                                            // showMessage('success', 'Tambah Data IBK', 'Data berhasil ditambahkan'); //show pop up message
                                            // console.log(response);
                                        } else {
                                            // status_insert = response.status;
                                            // showMessage('error', 'Tambah Data IBK', 'Data gagal ditambahkan'); //show pop up message
                                        }
                                    },
                                    error: function() {
                                        showMessage('error', 'Server Gangguan', 'silahkan ulangi kembali'); //show pop up message
                                    }
                                });
                            }
                        }

                        if (response.status == 1) {
                            showMessage('success', 'Tambah Data IBK', 'Data berhasil ditambahkan'); //show pop up message
                        } else if (response.status == 0) {
                            showMessage('error', 'Tambah Data IBK', 'Data gagal ditambahkan'); //show pop up message
                        }
                    } else { //failed
                        status_insert = response.status;
                        // looping to display mandatory field message
                        for (let i = 0; i < response.inputerror.length; i++) {
                            $('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
                            $('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);
                            showMessage('error', 'Tambah Data IBK', 'Harap isi field mandatory'); //show pop up message
                        }
                    }
                },
                error: function() {
                    showMessage('error', 'Server header Gangguan', 'silahkan ulangi kembali'); //show pop up message
                }
            });
        }

        // function to display pop up message
        function showMessage(icon, title, text) {
            Swal.fire({
                icon: icon,
                title: title,
                text: text,
                showConfirmButton: true,
                showCancelButton: false,
                timerProgressBar: true
            }).then(function() {
                // redirect
                if (icon == 'success') {
                    window.location.href = "<?= site_url('/searchIbk/index'); ?>";
                }
            });
        }

        // function to display modal for data insertion to datatable
        function add(btnType) {
            if (btnType == 'tambah') {
                formData[0].reset(); //clear form field every time Tambah Data button is pressed
                saveData = 'tambah'; //store value to variable saveData for further use
            } else {
                saveData = 'edit'; //store value to variable saveData for further use
            }
            modal.modal('show'); //display modal
            modalTitle.text('Tambah Data'); //modal title

            btnSave.attr('disabled', false); //enable button
            btnSave.text('Simpan'); //text on button
        }

        // function to insert data to datatable, this function called on button simpan on modal
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
            // var btnType = $('input[name="actionType"').val();

            if (saveData == 'tambah') {
                // console.log('add');
                tableData.DataTable().row.add([pajakNo, pajakDate, kantorPajak, nasabah, outlet, nik, npwp, tempatLahir, tanggalLahir, keterangan, addKeterangan,
                    '<button type="button" title="edit" class="btn waves-effect waves-light btn-warning btn-sm col-sm" onclick="add(\'edit\')" style="margin: 2px"><i class="zmdi zmdi-edit"></i></button>' +
                    '<button type="button" title="delete" class="btn waves-effect waves-light btn-danger btn-sm col-sm" onclick="deleteRow(event);" style="margin: 2px"><i class="zmdi zmdi-delete"></i></button>' +
                    '<button type="button" title="compare" class="btn waves-effect waves-light btn-success btn-sm col-sm" onclick="compare(event)" style="margin: 2px"><i class="zmdi zmdi-compare"></i></button>'
                ]).draw(false);
            } else {
                var dataTbl = document.querySelectorAll('#tbodyIbk tr');
                for (let [index, tr] of dataTbl.entries()) {
                    console.log(tr);
                    for (let j = 0; j < tr.childNodes.length - 1; j++) {
                        // console.log(tr.childNodes[j].id);
                        var td_id = tr.childNodes[j].id;
                        if (td_id == 'noSuratPjkTbl') {
                            tr.childNodes[j].innerHTML = pajakNo;
                        }

                        if (td_id == 'tglSuratPjkTbl') {
                            tr.childNodes[j].innerHTML = pajakDate;
                        }

                        if (td_id == 'kantorPjkTbl') {
                            tr.childNodes[j].innerHTML = kantorPajak;
                        }

                        if (td_id == 'nasabahTbl') {
                            tr.childNodes[j].innerHTML = nasabah;
                        }

                        if (td_id == 'nikTbl') {
                            tr.childNodes[j].innerHTML = nik;
                        }

                        if (td_id == 'npwpTbl') {
                            tr.childNodes[j].innerHTML = npwp;
                        }

                        if (td_id == 'tmptLahirTbl') {
                            tr.childNodes[j].innerHTML = tempatLahir;
                        }

                        if (td_id == 'tglLahirTbl') {
                            tr.childNodes[j].innerHTML = tanggalLahir;
                        }

                        if (td_id == 'addKetPjkTbl') {
                            tr.childNodes[j].innerHTML = addKeterangan;
                        }
                    }
                }
                // console.log('edit');
                // $(tableData.DataTable().row).edit();
                // var row = $(this).closest("tr");
                // var tds = row.find("td").not(':first').not(':last');
                // var tds = row.find("td");
                // console.log(row);
                // console.log(pajakNo);

                // document.getElementById
                // $(tableData).DataTable().row($(row)).data([pajakNo, pajakDate, kantorPajak, nasabah, outlet, nik, npwp, tempatLahir, tanggalLahir, keterangan, addKeterangan]).draw(false);

                // $.each(tds, function(i, el) {
                //     console.log(el);
                //     var txt = $(this).find('input[name="pajakNo').val();
                //     $(this).html(txt);

                //     //This is where I update the cell data with the new value
                //     console.log(table.cell(this).data(txt));
                // });
            }

            modal.modal('hide'); //hide modal
        }

        // function to generate id on <td> in input IBK datatable, this function will be called everytime data inserted to datatable
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

        // function to delete row from datatable
        function deleteRow(e) {
            deleteQuestion(e); //call function pop up delete confirmation
        }

        // pop up delete confirmation using Sweet Alert   
        function deleteQuestion(e) {
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
                    var tr = $(e.target).closest('tr');

                    $(tableData).DataTable().row($(tr)).remove().draw(false);
                }
            })
        }

        // function to ensure phone number only can be filled with number
        function isNumberKey(e) {
            var charCode = (e.which) ? e.which : event.keyCode

            // charcode 48-57 is for 0-9
            if (charCode >= 48 && charCode <= 57) {
                return true;
            }
            return false;
        }

        // function calculate SLA based on 'Tanggal Pemeriksaan' and 'Tanggal Disposisi'
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

        // function to force Uppercase
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

        // function to compare data
        function compare(e) {
            var nasabahTbl;
            var tmptLahirTbl;
            var tglLahirTbl;
            var nikTbl;
            var npwpTbl;

            var tr = $(e.target).closest('tr');
            var childLen = tr[0].childNodes.length;
            // console.log(tr[0].childNodes);
            for (let i = 0; i < childLen - 1; i++) {
                if (tr[0].childNodes[i].id == 'nasabahTbl') {
                    var nasabahTbl = tr[0].childNodes[i].innerHTML;
                }

                if (tr[0].childNodes[i].id == 'tmptLahirTbl') {
                    var tmptLahirTbl = tr[0].childNodes[i].innerHTML;
                }

                if (tr[0].childNodes[i].id == 'tglLahirTbl') {
                    var tglLahirTbl = tr[0].childNodes[i].innerHTML;
                }

                if (tr[0].childNodes[i].id == 'nikTbl') {
                    var nikTbl = tr[0].childNodes[i].innerHTML;
                }

                if (tr[0].childNodes[i].id == 'npwpTbl') {
                    var npwpTbl = tr[0].childNodes[i].innerHTML;
                }
            }
            // for (tr of trs) {
            //     console.log(tr);
            // }

            // console.log(tr);
            // console.log(document.getElementById('noSuratPjkTbl').innerHTML);
            // document.getElementById('nasabaCompare').innerHTML = document.getElementById('noSuratPjkTbl').innerHTML;

            // console.log(tr[0].innerHTML);
            modalCompare.modal('show'); //display modal
            modalTitle.text('Compare Data'); //modal title

            // document.getElementById('nasabahCompare').value = document.getElementById('nasabahTbl').innerHTML;
            // document.getElementById('tempatLahirCompare').value = document.getElementById('tmptLahirTbl').innerHTML;
            // document.getElementById('tanggalLahirCompare').value = document.getElementById('tglLahirTbl').innerHTML;
            // document.getElementById('nikCompare').value = document.getElementById('nikTbl').innerHTML;
            // document.getElementById('npwpCompare').value = document.getElementById('npwpTbl').innerHTML;

            document.getElementById('nasabahCompare').value = nasabahTbl;
            document.getElementById('tempatLahirCompare').value = tmptLahirTbl;
            document.getElementById('tanggalLahirCompare').value = tglLahirTbl;
            document.getElementById('nikCompare').value = nikTbl;
            document.getElementById('npwpCompare').value = npwpTbl;
        }

        function generateSurat(tipe_surat) {
            if (tipe_surat == 'djp') {
                var url_print = "<?= base_url('/GenerateSurat/printSuratDjp'); ?>";
            } else if (tipe_surat == 'kpp') {
                var url_print = "<?= base_url('/GenerateSurat/printSuratKpp'); ?>";
            } else if (tipe_surat == 'direktorat') {
                var url_print = "<?= base_url('/GenerateSurat/printSuratDirektorat'); ?>";
            } else if (tipe_surat == 'lampiran') {
                var url_print = "<?= base_url('/GenerateSurat/printSuratLampiran'); ?>";
            }

            // location.href = url_suratDjp;

            $.ajax({
                type: 'POST',
                url: url_print,
                data: formHeader.serialize(),
                dataType: 'json',
                success: function(response) {
                    var $a = $("<a>");
                    $a.attr("href", response.file);
                    $("body").append($a);
                    $a.attr("download", response.fileName);
                    $a[0].click();
                    $a.remove();
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" +
                        thrownError + "\n" + ajaxOptions);
                    // showMessage('error', thrownError, 'silahkan ulangi kembali'); //show pop up message
                }
            });
        }
    </script>