<div class="col-sm-12">
    <div class="card m-b-30">
        <div class="card-body">

            <p class="card-text kompar"></p>
            <div class="card-title">
                <div class="mb-3 d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" onclick="location.href='<?php echo base_url(); ?>/InputNas'">
                        <i class="fa fa-plus-circle"></i> Input Nasabah
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function kompaire() {
        $.ajax({
            url: "<?= site_url('Komparasi/ambildata3') ?>",
            data: "data",
            dataType: "json",
            success: function(response) {
                $('.kompar').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" +
                    thrownError);
            }
        });
    }
    $(document).ready(function() {
        kompaire();
    });
</script>