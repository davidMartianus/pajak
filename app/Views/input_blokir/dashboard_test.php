<section class="signup-step-container">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
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
                            <li role="presentation" class="disabled">
                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Step 4</i></a>
                            </li>
                        </ul>
                    </div>

                    <form role="form" action="index.html" class="login-box">
                        <div class="tab-content" id="main_form">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h4 class="text-center">Step 1</h4>
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
                                                    <!-- <button class="btn btn-primary" onclick="blok(e)">Perintah Proses Blokir</button> -->
                                                    <!-- <button type="button" class="btn btn-primary" onclick="blok('GO')">Perintah Proses Blokir</button> -->
                                                    <a href="#next" type="button" class="btn btn-primary next-step">Perintah Proses Blokir</a>
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
                                <h4 class="text-center">Step 2</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address 1 *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City / Town *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country *</label>
                                            <select name="country" class="form-control" id="country">
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
                                            <label>Registration No.</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>


                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <h4 class="text-center">Step 3</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Account Name *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Demo</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Inout</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Information</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Select file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Number *</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Input Number</label>
                                            <input class="form-control" type="text" name="name" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step4">
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
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



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