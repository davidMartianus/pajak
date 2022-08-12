<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Begin insertion for display Table -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Tambah data IBK</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/pages/searchIbk">Pencarian IBK</a></li>
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
            <form action="" data-parsley-validate novalidate method="post" id="formsIbk">
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
                                    <label for="kodepos" class="col-lg-4 col-form-label">Kode Pos</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="kodepos" parsley-trigger="change" maxlength="5" onkeypress="return isNumberKey(event)" placeholder="Kode Pos" class="form-control" id="kodepos" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tglPeriksa" class="col-lg-4 col-form-label">Tanggal Pemeriksaan<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" name="tglPeriksa" parsley-trigger="change" required placeholder="Tanggal Pemeriksaan" class="form-control tanggal" id="tglPeriksa" onchange="dateHandler(event);" autocomplete="off" data-date-end-date="0d">
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
                                        <select class="custom-select mb-3" class="form-control" id="JnsKantorPjk" name="JnsKantorPjk">
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
                                        <select class="custom-select mb-3" class="form-control" id="kantorPjk" name="kantorPjk">
                                            <option selected>Pilih Kantor Pajak</option>
                                            <option value="0">Kantor Pajak 1</option>
                                            <option value="1">Kantor Pajak 2</option>
                                            <option value="2">Kantor Pajak 3</option>
                                            <option value="3">Kantor Pajak 4</option>
                                            <option value="4">Kantor Pajak 5</option>
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
                                        <input type="text" name="nomorSuratJwb" parsley-trigger="change" placeholder="Nomor Surat Jawaban" class="form-control surat" id="nomorSuratJwb" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="periode" class="col-lg-4 col-form-label">Periode yang diminta<span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="" placeholder="Periode yang diminta" autocomplete="off">
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
                                <button class="btn btn-light pull-left add-row" onclick="add('tambah')"><i class="fa fa-plus"></i>&nbsp;&nbsp; Add Row</button>
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
                        <button type="submit" class="btn btn-primary waves-effect m-l-5" formaction="<?= base_url('/InputIbk/save') ?>">
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
<div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="formData">
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
                        <input type="text" class="form-control" id="kantorPajak" placeholder="Masukan Kantor Pajak" name="kantorPajak" autocomplete="off">

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
                                <option selected>Pilih Jenis Outlet</option>
                                <option value="0">KC</option>
                                <option value="1">KCP</option>
                                <option value="2">Kankas</option>
                                <option value="3">KCS</option>
                            </select>
                        </div>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="npwp">NPWP</label>
                        <input type="text" class="form-control" id="npwp" placeholder="Masukan NPWP" name="npwp" autocomplete="off">

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
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" placeholder="Keterangan" name="keterangan" readonly value="keterangan" autocomplete="off">

                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addKeterangan">Keterangan Tambahan</label>
                        <input type="text" class="form-control" id="addKeterangan" placeholder="Keterangan Tambahan" name="addKeterangan" value="1" autocomplete="off">

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
<!-- end insertion for modal -->

<?= $this->endSection(); ?>