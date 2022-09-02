<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="page-title-box">
                <h4 class="page-title float-left" id="titlePage">Audit Log</h4>
                <ol class="breadcrumb float-right">
                    <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                    <li class="breadcrumb-item active">Audit Log</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <!-- datatable-buttons  -->
            <table id="logTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Username</th>
                        <th>Menu</th>
                        <th>Activity</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end row -->

<script>
    var logTable = $('#logTable');

    $(document).ready(function() {
        logTable.DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= base_url('/AuditLog/getLog'); ?>",
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