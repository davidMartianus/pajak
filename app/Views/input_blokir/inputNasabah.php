<!-- Query form -->
<div class="card-box">
    <div class="card-body">

        <p class="card-text viewdta"></p>
        <div class="card-title">
            <form action="/InputNas/save" method="post">
                <div class=" row">
                    <div class="col-lg-6">
                        <h2 class=" m-t-0 m-b-30 d-flex justify-content-center"><b>Menu Input Blokir</b></h2>

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



                <!-- Query for table bootstrap 4 -->
                <div class=" mt-2 row">
                    <div class="col">
                        <h2 class=" m-t-30 m-b-30 d-flex justify-content-center"><b>Tabel Pencarian Nasabah</b></h2>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header text-center">
                                <h4 class="modal-title">Input Informasi Pencarian Nasabah </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group row">
                                        <label for="noSuratPajak" class="col-lg-4 col-form-label">Nomor Surat Pajak</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" id="noSuratPajak" name="noSuratPajak" autocomplete='off'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggalSurat" class="col-lg-4 col-form-label">Tanggal Surat</label>
                                        <div class="col-lg-8">
                                            <input class="form-control tanggal" type="text" id="tanggalSurat" name="tanggalSurat" autocomplete='off' />
                                            <script>
                                                $('.tanggal').datepicker({
                                                    uiLibrary: 'bootstrap4',
                                                    autoclose: true,
                                                    todayHighlight: true,
                                                    orientation: "top auto",
                                                    disableTouchKeyboard: false
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kantorPajak" class="col-lg-4 col-form-label">Kantor Pajak</label>
                                        <div class="col-lg-8 ">
                                            <select class="form-control" id="kantorPajak" name="kantorPajak">
                                                <option>Pilih Kantor Pajak</option>
                                                <option>a</option>
                                                <option>b</option>
                                                <option>c</option>
                                                <option>d</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggalDisposisi" class="col-lg-4 col-form-label">Tanggal Disposisi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control tanggalDisposisi" type="text" id="tanggalDisposisi" name="tanggalDisposisi" autocomplete='off' />
                                            <script>
                                                $('.tanggalDisposisi').datepicker({
                                                    uiLibrary: 'bootstrap4',
                                                    autoclose: true,
                                                    todayHighlight: true,
                                                    orientation: "top auto",
                                                    disableTouchKeyboard: false
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="namaNasabah" class="col-lg-4 col-form-label">Nama Nasabah</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" id="namaNasabah" name="namaNasabah" autocomplete='off'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="outlet" class="col-lg-4 col-form-label">Outlet</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" id="outlet" name="outlet" autocomplete='off'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nik" class="col-lg-4 col-form-label">NIK</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" id="nik" name="nik" autocomplete='off'>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="npwp" class="col-lg-4 col-form-label">NPWP</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" id="npwp" name="npwp" autocomplete='off'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tempatLahir" class="col-lg-4 col-form-label">Tempat Lahir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" type="text" id="tempatLahir" name="tempatLahir" autocomplete='off'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggalLahir" class="col-lg-4 col-form-label">Tanggal Lahir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control tanggalLahir" type="text" id="tanggalLahir" name="tanggalLahir" autocomplete='off' />
                                            <script>
                                                $('.tanggalLahir').datepicker({
                                                    uiLibrary: 'bootstrap4',
                                                    autoclose: true,
                                                    todayHighlight: true,
                                                    orientation: "top auto",
                                                    disableTouchKeyboard: false
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="/InputNas/saved" class="btn btn-success">Simpan</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary m-b-20" data-toggle="modal" data-target="#myModal">
                    + Add Nasabah
                </button>

                <table id="example" class="table table-striped table-bordered" style="width:100%">
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

                        <?php foreach ($tapen as $t) : ?>
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



                <div class="mb-3 d-flex justify-content-center">
                    <div class="mb-3 d-flex justify-content-center">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-center">
                    <button class="btn btn-primary">Perintah Proses Blokir</button>
                </div>

            </form>

        </div>
    </div>
</div>
</div>