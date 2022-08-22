<div class="card">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>

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
            <label for="exampleFormControlFile1">Example file input</label>
            <div class="col-sm-4">
                <input type="file" class="form-control-file" name="fileimport" id="exampleFormControlFile1">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4">
                <input type="submit" class="btn btn-success" name="fileimport" id="exampleFormControlFile1">
            </div>
        </div>
        <?= form_close(); ?>
        </p>
    </div>
</div>