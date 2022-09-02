
<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body">

            <p class="card-text viewdata"></p>
            <div class="card-title">
                <div class="mb-3 d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" onclick="location.href='<?php echo base_url(); ?>/NewBlokir/menutama'">
                        <i class="fa fa-plus-circle"></i> Input Data Baru
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function datapetugas() {
        $.ajax({
            url: "<?= site_url('NewBlokir/ambildata') ?>",
            data: "data",
            dataType: "json",
            success: function(response) {
                $('.viewdata').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError);
            }
        });
    }
    $(document).ready(function() {
        datapetugas();
    });
</script>
