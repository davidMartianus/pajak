</div>
</div>
<!-- ========== End content-page ========== -->
</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- Jquery-Ui -->
<script src="<?php base_url() ?> /plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- BEGIN PAGE SCRIPTS -->
<script src="<?php base_url() ?> /plugins/moment/moment.js"></script>
<script src='<?php base_url() ?> /plugins/fullcalendar/js/fullcalendar.min.js'></script>
<script src="<?php base_url() ?> /assets/pages/jquery.fullcalendar.js"></script>

<!-- App js -->
<script src="<?php base_url() ?> /assets/js/jquery.core.js"></script>
<script src="<?php base_url() ?> /assets/js/jquery.app.js"></script>

<!-- Include Date Range Picker -->
<script src="<?php base_url() ?> /plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php base_url() ?> /plugins/clockpicker/bootstrap-clockpicker.js"></script>
<script src="<?php base_url() ?> /plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- user-defined js -->
<script src="<?php base_url() ?> /assets/js/dashboard.js"></script>
<script src="<?php base_url() ?> /assets/js/search_ibk.js"></script>
<script src="<?php base_url() ?> /assets/js/input_ibk.js"></script>
<script src="<?php base_url() ?> /assets/js/template.js"></script>
<script src="<?php base_url() ?> /assets/js/select2.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('.tanggal').datepicker({
            uiLibrary: 'bootstrap4',
            autoclose: true,
            // format: "dd-mm-yyyy",
            orientation: "top auto",
            disableTouchKeyboard: false,
            beforeShow: function() {
                $(".ui-datepicker").css('font-size', 10)
            }
        });
    });

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        lengthChange: false,
        buttons: ['copy', 'excel', 'pdf']
    });

    // Key Tables

    $('#key-table').DataTable({
        keys: true
    });

    // Multi Selection Datatable
    $('#selection-datatable').DataTable({
        select: {
            style: 'multi'
        }
    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');

    // function dataIbk() {
    //     $.ajax({
    //         url: "<?= site_url('SearchIbk/getData') ?>",
    //         dataType: "JSON",
    //         success: function(response) {
    //             $('.viewdata').html(response.data);
    //         },
    //         error: function(xhr, ajaxOptions, thrownError) {
    //             alert(xhr.status + "\n" + xhr.responseText + "\n" +
    //                 thrownError);
    //         }
    //     });
    // }

    function getReffCode() {
        $.ajax({
            type: "GET",
            url: "<?= site_url('InputIbk/getReffCode'); ?>",
            dataType: "JSON",
            success: function(response) {
                if (response[0].reffcode !== '') {
                    document.getElementById("reffcode").value = response[0].reffcode + 1;
                } else {
                    document.getElementById("reffcode").value = 1;
                }
            },
            error: function() {
                console.log('Connection to database failed');
            }
        });
    }

    function dataKantorPajak() {
        $('#kantorPjk').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: '--Pilih Kantor Pajak--',
            ajax: {
                dataType: 'json',
                url: "<?= site_url('InputIbk/getKantorPajak') ?>",
                delay: 500,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function(data, page) {
                    return {
                        results: data
                    }
                }
            }
        });
    }

    function inputKantorPajak() {
        $('#kantorPajak').select2({
            minimumInputLength: 3,
            allowClear: true,
            placeholder: 'Pilih Kantor Pajak',
            ajax: {
                dataType: 'json',
                url: "<?= site_url('InputIbk/getKantorPajak') ?>",
                delay: 500,
                data: function(params) {
                    return {
                        search: params.term
                    }
                },
                processResults: function(data, page) {
                    return {
                        results: data
                    }
                }
            }
        });
    }

    $(document).ready(function() {
        dataKantorPajak();
        inputKantorPajak();
    });
</script>
</body>

</html>