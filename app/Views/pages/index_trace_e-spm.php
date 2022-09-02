<div class="row">
    <div class="col-xl-12">
        <div class="page-title-box">
            <h4 class="page-title float-left">Audit Log</h4>

            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url('home'); ?>">e-SPM</a></li>
                <li class="breadcrumb-item active">Audit Log</li>
            </ol>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Username</th>
                        <th>Menu</th>
                        <th>Activity</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($trace as $row) : ?>
                    <tr>
                        <td><?= $row->date ?></td>
                        <td><?= $row->username ?></td>
                        <td><?= $row->menu ?></td>
                        <td><?= $row->activity ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->