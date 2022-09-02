<section class="signup-step-container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
                            </li>
                            <!-- <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                            </li> -->
                        </ul>
                    </div>

                    <form role="form" action="index.html" class="login-box">
                        <div class="tab-content" id="main_form">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <!-- <h4 class="text-center">Step 1</h4> -->
                                <div class="row">


                                    <div class="card-box">
                                        <div class="card-body">

                                            <p class="card-text viewdta"></p>
                                            <div class="card-title">
                                                <!-- <form action="" method="post" id="formDt"> -->
                                                <div class=" row">
                                                    <div class="col-lg-6">
                                                        <h2 class=" m-t-0 m-b-30 d-flex justify-content-center"><b>Menu Input Blokir</b></h2>

                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="reffCode" class="col-form-label"> Reffcode </label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="reffcode" name="reffcode" value="" autocomplete='off' readonly>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="nomorSuratDJP" class="col-form-label">No Surat DJP</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="nomorSuratDJP" name="nomorSuratDJP" autocomplete='off'>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="tanggalSuratDJP" class="col-form-label">Tgl Surat DJP</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="tanggalSuratDJP" name="tanggalSuratDJP" autocomplete='off'>
                                                                <script>
                                                                    $('#tanggalSuratDJP').datepicker({
                                                                        uiLibrary: 'bootstrap4',
                                                                        autoclose: true,
                                                                        todayHighlight: true,
                                                                        orientation: "top auto",
                                                                        disableTouchKeyboard: false
                                                                    });
                                                                </script>
                                                            </span>
                                                        </div>

                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="tanggalDisposisi" class="col-form-label">Tgl Disposisi</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="tanggalDisposisi" name="tanggalDisposisi" autocomplete='off'>
                                                                <script>
                                                                    $('#tanggalDisposisi').datepicker({
                                                                        uiLibrary: 'bootstrap4',
                                                                        autoclose: true,
                                                                        todayHighlight: true,
                                                                        orientation: "top auto",
                                                                        disableTouchKeyboard: false
                                                                    });
                                                                </script>
                                                            </span>
                                                        </div>


                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="alamat" class="col-form-label">Alamat</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="alamat" name="alamat" autocomplete='off'>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="kodePos" class="col-form-label">Kode Pos</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="kodePos" name="kodePos" autocomplete='off'>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="tanggalPemeriksaan" class="col-form-label">Tgl Pemeriksaan</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="tanggalPemeriksaan" name="tanggalPemeriksaan" autocomplete='off'>
                                                                <script>
                                                                    $('#tanggalPemeriksaan').datepicker({
                                                                        uiLibrary: 'bootstrap4',
                                                                        autoclose: true,
                                                                        todayHighlight: true,
                                                                        orientation: "top auto",
                                                                        disableTouchKeyboard: false
                                                                    });
                                                                </script>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="sla" class="col-form-label">SLA</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="sla" name="sla" autocomplete='off'>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="jenisKantorPajak" class="col-form-label">Jenis Kantor Pajak</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <select class="form-control text-center" id="jenisKantorPajak" name="jenisKantorPajak">
                                                                    <option>Pilih Kantor Pajak</option>
                                                                    <option>a</option>
                                                                    <option>b</option>
                                                                    <option>c</option>
                                                                    <option>d</option>
                                                                </select>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="kantorPajak" class="col-form-label">Kantor Pajak</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="kantorPajak" name="kantorPajak" autocomplete='off'>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="petugas" class="col-form-label">Petugas</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="petugas" name="petugas" autocomplete='off'>
                                                            </span>
                                                        </div>
                                                        <div class="form-group row">
                                                            <span class="col-4">
                                                                <label for="nomorSuratJawaban" class="col-form-label">No Surat Jawaban</label>
                                                            </span>
                                                            <span class="col-8 ml-auto">
                                                                <input class="form-control text-center" type="text" id="nomorSuratJawaban" name="nomorSuratJawaban" autocomplete='off'>
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Begin insertion for display Table -->
                                                <div class="card">
                                                    <!-- Header table nasabah -->
                                                    <!-- <div class=" mt-2 row"> -->
                                                    <div class="col">
                                                        <h2 class=" m-t-30 m-b-30 d-flex justify-content-center"><b>Tabel Pencarian Nasabah</b></h2>
                                                    </div>
                                                    <div class="col-lg">
                                                        <div class="row">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <br>
                                                        <button type="button" class="btn btn-light pull-left add-row" onclick="add('tambah')" data-target=".modal-lg"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text dnasabah"></p>
                                                        <div class="col-sm-12">
                                                            <table id="dntable" class="table table-sm table-striped table-bordered" style="width:100%">
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
                                                                <tbody id="tbodyIbk">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end insertion for display table -->

                                                <br>
                                                <div class="my-3 d-flex justify-content-center">
                                                    <div class="col-2">
                                                        <button class="btn btn-primary" type="button" id="printKpp" onclick="generateSurat('kpp')">Print Surat</button>
                                                    </div>
                                                    <div class="col-2">
                                                        <button class="btn btn-primary" type="button" id="printLampiran" onclick="generateSurat('lampiran')">Print Lampiran</button>
                                                    </div>
                                                </div>
                                                <div class="mb-3 d-flex justify-content-center">
                                                    <button class="btn btn-primary" type="button" onclick="saveData1()">Simpan</button>
                                                </div>
                                                <div class="mb-3 d-flex justify-content-center">
                                                    <button type="button" onclick=blok() class="btn btn-primary next-step">Perintah Proses Blokir</button>
                                                    <!-- <button type="button" class="btn btn-primary" onclick="blok('GO')">Perintah Proses Blokir</button> -->
                                                </div>
                                                <!-- </form> -->


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <!-- <h4 class="text-center">Step 2</h4> -->
                                <div class="row">
                                    <div class="card-body">
                                        <table id="rkngtble" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>No. Surat Pajak</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>NIK</th>
                                                    <th>NPWP</th>
                                                    <th>File Surat Pajak</th>
                                                    <th>Berita acara</th>
                                                    <th>Screenshot Bukti</th>
                                                    <th>Act</th>

                                                </tr>
                                            </thead>
                                            <tbody id="tbodyRkng">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <!-- <h4 class="text-center">Step 3</h4> -->
                                <!-- <div class="row"> -->
                                <div class=" row">
                                    <div class="col-lg-6">
                                        <h2 class=" m-t-0 m-b-30 d-flex justify-content-center"><b>Menu Input Blokir</b></h2>

                                        <div class="form-group row">
                                            <span class="col-4">
                                                <label for="reffCode" class="col-form-label">No. Surat Pajak </label>
                                            </span>
                                            <span class="col-8 ml-auto">
                                                <input class="form-control text-center" type="text" id="reffcode" name="reffcode" value="" autocomplete='off' readonly>
                                            </span>
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-4">
                                                <label for="nomorSuratDJP" class="col-form-label">Nama</label>
                                            </span>
                                            <span class="col-8 ml-auto">
                                                <input class="form-control text-center" type="text" id="nomorSuratDJP" name="nomorSuratDJP" autocomplete='off'>
                                            </span>
                                        </div>

                                        <div class="form-group row">
                                            <span class="col-4">
                                                <label for="alamat" class="col-form-label">Alamat</label>
                                            </span>
                                            <span class="col-8 ml-auto">
                                                <input class="form-control text-center" type="text" id="alamat" name="alamat" autocomplete='off'>
                                            </span>
                                        </div>
                                        <div class="form-group row">
                                            <span class="col-4">
                                                <label for="kodePos" class="col-form-label">NIK</label>
                                            </span>
                                            <span class="col-8 ml-auto">
                                                <input class="form-control text-center" type="text" id="kodePos" name="kodePos" autocomplete='off'>
                                            </span>
                                        </div>

                                        <div class="form-group row">
                                            <span class="col-4">
                                                <label for="sla" class="col-form-label">NPWP</label>
                                            </span>
                                            <span class="col-8 ml-auto">
                                                <input class="form-control text-center" type="text" id="sla" name="sla" autocomplete='off'>
                                            </span>
                                        </div>

                                        <div class="form-group row">
                                            <span class="col-4">
                                                <label for="sla" class="col-form-label">File Surat Pajak</label>
                                            </span>
                                            <span class="col-8 ml-auto">
                                                <input class="form-control text-center" type="text" id="sla" name="sla" autocomplete='off'>
                                            </span>
                                        </div>

                                    </div>
                                </div>

                                <table id="rkngtbles" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No. Rekening</th>
                                            <th>Nama</th>
                                            <th>Saldo</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbodyRkng">

                                    </tbody>
                                </table>


                                <!-- </div> -->
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <!-- <div class="tab-pane" role="tabpanel" id="step4">
                                <h4 class="text-center">Step 4</h4>
                                <div class="all-info-container">
                                    <div class="list-content">
                                        <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Collapse 1 <i class="fa fa-chevron-down"></i></a>
                                        <div class="collapse" id="listone">
                                            <div class="list-box">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First and Last Name *</label>
                                                            <input class="form-control" type="text" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone Number *</label>
                                                            <input class="form-control" type="text" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Collapse 2 <i class="fa fa-chevron-down"></i></a>
                                        <div class="collapse" id="listtwo">
                                            <div class="list-box">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Address 1 *</label>
                                                            <input class="form-control" type="text" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>City / Town *</label>
                                                            <input class="form-control" type="text" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Country *</label>
                                                            <select name="country2" class="form-control" id="country2" disabled="disabled">
                                                                <option value="NG" selected="selected">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="KP">North Korea</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Legal Form</label>
                                                            <select name="legalform2" class="form-control" id="legalform2" disabled="disabled">
                                                                <option value="" selected="selected">-Select an Answer-</option>
                                                                <option value="AG">Limited liability company</option>
                                                                <option value="GmbH">Public Company</option>
                                                                <option value="GbR">No minimum capital, unlimited liability of partners, non-busines</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Business Registration No.</label>
                                                            <input class="form-control" type="text" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Registered</label>
                                                            <select name="vat2" class="form-control" id="vat2" disabled="disabled">
                                                                <option value="" selected="selected">-Select an Answer-</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Seller</label>
                                                            <input class="form-control" type="text" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Company Name *</label>
                                                            <input class="form-control" type="password" name="name" placeholder="" disabled="disabled">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Collapse 3 <i class="fa fa-chevron-down"></i></a>
                                        <div class="collapse" id="listthree">
                                            <div class="list-box">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Name *</label>
                                                            <input class="form-control" type="text" name="name" placeholder="">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Number *</label>
                                                            <input class="form-control" type="text" name="name" placeholder="">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step">Finish</button></li>
                                </ul>
                            </div> -->
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



















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
                        <label for="noSuratPajak">No. Surat Pajak</label>
                        <input type="text" class="form-control" id="noSuratPajak" placeholder="Masukan nomor surat pajak" name="noSuratPajak" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggalSurat">Tgl. Surat Pajak</label>
                        <input type="text" class="form-control tanggal" id="tanggalSurat" placeholder="Masukan tanggal surat pajak" name="tanggalSurat" autocomplete="off" data-date-end-date="0d">
                        <script>
                            $('.tanggal').datepicker({
                                uiLibrary: 'bootstrap4',
                                autoclose: true,
                                todayHighlight: true,
                                orientation: "top auto",
                                disableTouchKeyboard: false
                            });
                        </script>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kantorPajak">Kantor Pajak</label>
                        <input type="text" class="form-control" id="kantorPjk" placeholder="Masukan Kantor Pajak" name="kantorPajak1" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggalDisposisi">Tanggal Disposisi</label>
                        <input type="text" class="form-control tanggalDisposisi" id="tanggalDisposisi" placeholder="Masukan tanggal Disposisi" name="tanggalDisposisi1" autocomplete="off">
                        <script>
                            $('.tanggalDisposisi').datepicker({
                                uiLibrary: 'bootstrap4',
                                autoclose: true,
                                todayHighlight: true,
                                orientation: "top auto",
                                disableTouchKeyboard: false
                            });
                        </script>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="namaNasabah">Nama Nasabah</label>
                        <!-- <input type="text" class="form-control" id="kantorPjk" placeholder="Masukan Kantor Pajak" name="kantorPajak" autocomplete="off"> -->

                        <input type="text" class="form-control" id="namaNasabah" name="namaNasabah" placeholder="Masukan Nama Nasabah" autocomplete="off">

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
                        <input type="text" class="form-control" id="tempatLahir" placeholder="Masukan tempat lahir" name="tempatLahir" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tanggalLahir">Tanggal Lahir</label>
                        <input type="text" class="form-control tanggalLahir" id="tanggalLahir" placeholder="Masukan Tanggal Lahir" name="tanggalLahir" autocomplete="off" data-date-end-date="0d">
                        <script>
                            $('.tanggalLahir').datepicker({
                                uiLibrary: 'bootstrap4',
                                autoclose: true,
                                todayHighlight: true,
                                orientation: "top auto",
                                disableTouchKeyboard: false
                            });
                        </script>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" value="" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="add_keterangan">Keterangan Tambahan</label>
                        <input type="text" class="form-control" id="add_keterangan" placeholder="Keterangan Tambahan" name="add_keterangan" value="" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="btnSave" onclick="inputToTbl()">Simpan</button>
            </div>
        </div>
    </div>
</div>





<!-- Modal compare-->
<div class="modal fade" id="MD" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="compareTitle"></h5>

            </div>
            <div class="modal-body form">
                <form action="" id="formData">
                    <div class="row">
                        <div class="col-12">

                            <div class="row">
                                <!-- section lampiran IBK -->
                                <div class="col-lg-6">
                                    <h4>Data Lampiran IBK</h4>
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="namacompare">Nama Nasabah</label>
                                        <input type="text" class="form-control" id="namacompare" placeholder="namacompare" name="namacompare" autocomplete="off" disabled>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahirCompare">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempatLahirCompare" placeholder="Masukan Tempat Lahir" name="tempatLahirCompare" autocomplete="off" disabled>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalLahirCompare">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="tanggalLahirCompare" placeholder="Masukan Tanggal Lahir" name="tanggalLahirCompare" autocomplete="off" disabled>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nikCompare">NIK</label>
                                        <input type="text" class="form-control" id="nikCompare" onkeypress="return isNumberKey(event)" placeholder="Masukan NIK" name="nikCompare" autocomplete="off" disabled>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="npwpCompare">NPWP</label>
                                        <input type="text" class="form-control" id="npwpCompare" onkeypress="return isNumberKey(event)" placeholder="Masukan NPWP" name="npwpCompare" autocomplete="off" disabled>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <!-- section Data BTN -->
                                <div class="col-lg-6">
                                    <h4>Data BTN</h4>
                                    <input type="hidden" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="nasabahCompare">Nama Nasabah</label>
                                        <input type="text" class="form-control" id="nasabahCompare" placeholder="" name="nasabahCompare" autocomplete="off" readonly>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempatLahirCompare">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempatLahirCompare" placeholder="" name="tempatLahirCompare" autocomplete="off" readonly>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggalLahirCompare">Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="tanggalLahirCompare" placeholder="" name="tanggalLahirCompare" autocomplete="off" data-date-end-date="0d" readonly>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nikCompare">NIK</label>
                                        <input type="text" class="form-control" id="nikCompare" onkeypress="return isNumberKey(event)" placeholder="" name="nikCompare" autocomplete="off" readonly>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="npwpCompare">NPWP</label>
                                        <input type="text" class="form-control" id="npwpCompare" onkeypress="return isNumberKey(event)" placeholder="" name="npwpCompare" autocomplete="off" readonly>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatCompare">Alamat</label>
                                        <input type="text" class="form-control" id="alamatCompare" onkeypress="return isNumberKey(event)" placeholder="" name="alamatCompare" autocomplete="off" readonly>

                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- table rekening -->
                    <div class="card-body">
                        <table id="rekeningTable" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Saldo</th>
                                    <th>No. Rekening</th>
                                    <th>Close Date</th>
                                    <th>Tanggal Blokir</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyRekening">

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <!-- <button type="button" class="btn btn-primary" id="btnSave" onclick="inputToTbl()">Simpan</button> -->
            </div>
        </div>
    </div>
</div>
<!-- end insertion for modal compare -->

<div class="modal fade" id="modalblok" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modTitle">Pengajuan Blokir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- table rekening -->
                <div class="card-body">
                    <table id="rkngtble" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No. Surat Pajak</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>NIK</th>
                                <th>NPWP</th>
                                <th>No. Rek</th>
                                <th>File Surat Pajak</th>
                                <th>Berita acara</th>
                                <th>Screenshot Bukti</th>
                                <th>Act</th>

                            </tr>
                        </thead>
                        <tbody id="tbodyRkng">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="btnNsave">Simpan</button>
            </div>
        </div>
    </div>
</div>











<script>
    // ------------step-wizard-------------
    $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });
</script>

<script>
    var modalTitle = $('#modalTitle');
    var modalblok = $('#modalblok');
    var btnSave = $('#btnSave');
    var saveData;
    var modal = $('#modalData');
    var tableData = $('#dntable');
    var tableData1 = $('#rkngtble');
    var tableData2 = $('#rkngtbles');
    var formData = $('#formData');
    // var formHeader = $('#formDt');
    var formHeader = $('.formDt');
    // var formHeader = $('#basic-form');
    var count = 1;
    var MoD = $('#MD');



    function cnth() {


        event.preventDefault();

    }


    $(document).ready(function() {
        $('#rekeningTable').DataTable();
        $('#rkngtble').DataTable();
        $('#rkngtbles').DataTable();
        $('#dntable').DataTable({
            'columnDefs': [{
                'targets': "_all",
                'createdCell': function(td, cellData, rowData, row, col) {
                    generateRowId(td, col);
                }
            }]
        });
        getReffCode();
    });

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
            return $(td).attr('id', 'tglDisposisiTbl');
        }

        if (col == 4) {
            return $(td).attr('id', 'nasabahTbl');
        }

        if (col == 5) {
            return $(td).attr('id', 'outletTbl');
        }

        if (col == 6) {
            return $(td).attr('id', 'nikTbl');
        }

        if (col == 7) {
            return $(td).attr('id', 'npwpTbl');
        }

        if (col == 8) {
            return $(td).attr('id', 'tmptLahirTbl');
        }

        if (col == 9) {
            return $(td).attr('id', 'tglLahirTbl');
        }

        if (col == 10) {
            return $(td).attr('id', 'keteranganTbl');
        }

        if (col == 11) {
            return $(td).attr('id', 'addKetPjkTbl');
        }
    }



    function compare(e) {


        var nasabahTbl;
        var tmptLahirTbl;
        var tglLahirTbl;
        var nikTbl;
        var npwpTbl;

        var tr = $(e.target).closest('tr');
        var childLen = tr[0].childNodes.length;

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



        // console.log(tr[0].innerHTML);
        MoD.modal('show'); //display modal
        // modalTitle.text('Compare Data'); //modal title

        document.getElementById('namacompare').value = nasabahTbl;
        document.getElementById('tempatLahirCompare').value = tmptLahirTbl;
        document.getElementById('tanggalLahirCompare').value = tglLahirTbl;
        document.getElementById('nikCompare').value = nikTbl;
        document.getElementById('npwpCompare').value = npwpTbl;
    }



    function addIbkArray(dataIbk, name, value) {
        dataIbk.push({
            name: name,
            value: value
        });
    }


    function blok() {
        // $(modalblok).modal('show'); //display modal

        // var jumlah = 0;
        var trs = document.querySelectorAll('#tbodyIbk tr');
        // var dataProsesBlokir = [];
        document.getElementById('namacompare').value = nasabahTbl;
        // var k = trs[0].childNodes[5].id
        // for (let [index, tr] of trs.entries()) {
        //     for (let j = 0; j < tr.childNodes.length - 1; j++) {
        //         addIbkArray(dataProsesBlokir, tr.childNodes[j].id + index, tr.childNodes[j].innerHTML);
        //     }
        // }




        for (let [index, tr] of trs.entries()) {
            var noSuratPajak = trs[index].childNodes[0].innerHTML;
            var namaNasabah = trs[index].childNodes[4].innerHTML;
            // var noSuratPajak = trs[index].childNodes[10].innerHTML;
            var nik = trs[index].childNodes[6].innerHTML;
            var npwp = trs[index].childNodes[7].innerHTML;
            if (trs[index].childNodes[10].innerHTML == 'ditemukan') {
                tableData1.DataTable().row.add([noSuratPajak, namaNasabah, "alamat", nik, npwp, '<input type="file"/>', "BA", "SS",
                    '<button type="button" class="btn btn-primary btn-sm " id="" onclick="compare(event);" data-toggle="modal">Detail</button>'
                ]).draw(false);


            }
        }
    }
    // <input type="file" class="custom-file-input" id="customFile">
    // for (let i = 0; i < childLen - 1; i++) {
    //     if (tr[0].childNodes[i].id == 'nasabahTbl') {
    //         var nasabahTbl = tr[0].childNodes[i].innerHTML;
    //     }



    // }












    function add(btnType) {
        $(modal).modal('show'); //display modal
        // modalTitle.text('Tambah Data'); //modal title

        saveData = 'tambah'; //store value to variable saveData for further use

        btnSave.attr('disabled', false); //enable button
        btnSave.text('Simpan'); //text on button
    }

    function inputToTbl() {
        var noSuratPajak = $('input[name="noSuratPajak"').val();
        var tanggalSurat = $('input[name="tanggalSurat"').val();
        var kantorPajak = $('input[name="kantorPajak1"').val();
        var tanggalDisposisi = $('input[name="tanggalDisposisi1"').val();
        var namaNasabah = $('input[name="namaNasabah"').val();
        var outlet = $('select[name="outlet"').val();
        var nik = $('input[name="nik"').val();
        var npwp = $('input[name="npwp"').val();
        var tempatLahir = $('input[name="tempatLahir"').val();
        var tanggalLahir = $('input[name="tanggalLahir"').val();
        var keterangan = 'ditemukan';
        var addKeterangan = $('input[name="add_keterangan"').val();
        var statusBlokir = 's';

        tableData.DataTable().row.add([noSuratPajak, tanggalSurat, kantorPajak, tanggalDisposisi, namaNasabah, outlet, nik, npwp, tempatLahir, tanggalLahir, keterangan, addKeterangan, statusBlokir,
            '<button type="button" class="btn btn-warning btn-sm" onclick="add(\'edit\') ">Edit</button>' +
            '<button type="button" class="btn btn-danger btn-sm" onclick="deleteRow(event);">Delete</button>' +
            '<button type="button" class="btn btn-primary btn-sm " id="" onclick="compare(event);" data-toggle="modal">Compare</button>'
        ]).draw(false);

        // if (keterangan = "ditemukan") {
        //     tableData1.DataTable().row.add([noSuratPajak, namaNasabah, "alamat", nik, npwp, "No rek", "file sp", "BA", "SS",
        //         '<button type="button" class="btn btn-primary btn-sm " id="" onclick="compare(event);" data-toggle="modal">Detail</button>'
        //     ]).draw(false);

        // }
        modal.modal('hide'); //hide modal
    }













    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode

        // charcode 48-57 is for 0-9
        if (charCode >= 48 && charCode <= 57) {
            return true;
        }
        return false;
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




    function saveData1() {
        url_header = "<?= base_url('/NewBlokir/save_header'); ?>";
        url_item = "<?= base_url('/NewBlokir/save_item'); ?>";

        var dataIbk = formHeader.serializeArray(); // convert form to array;
        var itemIbk = [];
        var status_insert;
        console.log(formHeader.serialize());

        $.ajax({
            type: "POST",
            url: url_header,
            data: formHeader.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response.status == 1) { //success
                    // console.log(response);
                    var dataTbl = document.querySelectorAll('#tbodyIbk tr');

                    console.log(dataTbl);


                    for (let [index, tr] of dataTbl.entries()) {
                        console.log(tr);
                        for (let j = 0; j < tr.childNodes.length - 1; j++) {

                            console.log(tr.childNodes[j].innerHTML);

                            addIbkArray(itemIbk, document.getElementById('nomorSuratDJP').id, document.getElementById('nomorSuratDJP').value); //get DJP number from header

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
                    console.log(response);
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
                window.location.href = "<?= site_url('/NewBlokir/index'); ?>";
            }
        });
    }



    function generateSurat(tipe_surat) {
        var dataSurat = [];
        var header = formHeader.serializeArray(); // convert form to array;
        var item = [];
        var trs = document.querySelectorAll('#tbodyIbk tr');

        var url_print = "<?= base_url('/BikinSurat/printSuratIbk'); ?>";
        console.log(header);

        if (tipe_surat == 'lampiran') {
            for (let [index, tr] of trs.entries()) {
                $rowLen = index + 1;
                for (let j = 0; j < tr.childNodes.length - 1; j++) {
                    addIbkArray(dataSurat, document.getElementById('nomorSuratDJP').id, document.getElementById('nomorSuratDJP').value); //get DJP number from header
                    addIbkArray(dataSurat, tr.childNodes[j].id + index, tr.childNodes[j].innerHTML);
                }
            }
            // addIbkArray(dataSurat, 'item', item);
            addIbkArray(dataSurat, 'tipeSurat', tipe_surat);
            addIbkArray(dataSurat, 'reffcode', document.getElementById('reffcode').value);
            addIbkArray(dataSurat, 'jumlahRow', $rowLen);
        } else {
            // addIbkArray(dataSurat, 'header', header);
            addIbkArray(header, trs[0].childNodes[2].id, trs[0].childNodes[2].innerHTML);
            dataSurat = header;
            addIbkArray(dataSurat, 'tipeSurat', tipe_surat);
        }

        //console.log(dataSurat);


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

                // console.log(response);
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
</script>