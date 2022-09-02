<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Kantor Pajak</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">Parameter Kantor Pajak</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">

            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <h5 class="card-title">Upload Data Kantor Pajak</h5>
                    </div>
                    <p>
                        <?= form_open_multipart('uploadKpp/upload')  ?>
                        <?php
                        $session = \Config\Services::session();
                        if (!empty($session->getFlashdata('pesan'))) {
                            echo '<div class="alert alert-light" role="alert">
                    ' . $session->getFlashdata('pesan') . '
                  </div>';
                        }
                        ?>
                    <div class="form-group row">
                        <label for="exampleFormControlFile1">File input</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control-file" name="fileimport" id="exampleFormControlFile1">
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- <div class="col-sm-4"> -->
                        <input type="submit" class="btn btn-success" name="fileimport" id="exampleFormControlFile1">
                        <!-- </div> -->
                    </div>
                    <?= form_close(); ?>

                    <div class="form-group row">
                        <!-- <div class="col-sm-4"> -->
                        <a href="/UploadKpp/downloadTemplateXls">Download Template Upload (.xlsx)</a>
                        <!-- </div> -->
                    </div>
                    </p>
                </div>
            </div>
            <br />
            <div class="card">
                <div class="card-body">
                    <!-- datatable-buttons  -->
                    <table id="kppTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Kantor Pajak</th>
                                <th>Alamat 1</th>
                                <th>Alamat 2</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var kppTable = $('#kppTable');

    $(document).ready(function() {
        kppTable.DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('/ParKantorPajak/getData'); ?>",
                "type": "POST",
                dataFilter: function(response) {
                    // this to see what exactly is being sent back
                    console.log(response);
                    return response
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" +
                        thrownError + "\n" + ajaxOptions);
                }
            },
            columnDefs: [{
                "target": [],
                "orderable": false
            }, ]
        });

        // dataIbk();
    });
</script>