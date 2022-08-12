<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />

    <!-- DataTables -->
    <link href="<?php base_url() ?> /plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php base_url() ?> /plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?php base_url() ?> /plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Multi Item Selection examples -->
    <link href="<?php base_url() ?> /plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Switchery css -->
    <link href="<?php base_url() ?> /plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="<?php base_url() ?> /assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="<?php base_url() ?> /assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- user defined css -->
    <link href="<?php base_url() ?> /assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    <link href="<?php base_url() ?> /assets/css/search_ibk.css" rel="stylesheet" type="text/css" />
    <link href="<?php base_url() ?> /assets/css/input_ibk.css" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="<?php base_url() ?> /assets/js/modernizr.min.js"></script>

    <!-- Include Date Range Picker -->
    <link href="<?php base_url() ?> /plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="<?php base_url() ?> /plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
    <link href="<?php base_url() ?> /plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /> -->
</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/" class="logo">
                    <img src="/assets/images/Bank_BTN_logo.svg" alt="Logo" id="img-big" />
                    <!-- style="display: none" -->
                    <img src="/assets/images/btn-logo-small.png" alt="Logo" class="img-fluid" id="img-small" />
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">
                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <!-- <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> -->
                            <img src="/assets/images/users/avatar-account.png" alt="user" class="rounded-circle" id="user-img">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect burger-menu">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="has_sub dash-menu active">
                            <a href="/" class="waves-effect userSelectedMenu" title="dashboard">
                                <i class="zmdi zmdi-view-dashboard dash-icon"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="has_sub dash-menu">
                            <a href="/searchIbk/index" class="waves-effect userSelectedMenu" title="searchIbk">
                                <i class="zmdi zmdi-search dash-icon"></i>
                                <span> Pencarian IBK </span>
                            </a>
                        </li>

                        <li class="has_sub dash-menu">
                            <a href="#" class="waves-effect userSelectedMenu" title="block">
                                <i class="zmdi zmdi-assignment-alert dash-icon"></i>
                                <span> Pengajuan Blokir </span>
                            </a>
                        </li>

                        <li class="has_sub dash-menu">
                            <a href="#" class="waves-effect userSelectedMenu" title="ublock">
                                <i class="zmdi zmdi-assignment-check dash-icon"></i>
                                <span> Pengajuan Cabut Blokir </span>
                            </a>
                        </li>

                        <li class="has_sub dash-menu">
                            <a href="#" class="waves-effect userSelectedMenu" title="inputBlock">
                                <i class="zmdi zmdi-lock-outline dash-icon"></i>
                                <span> Input Pemblokiran </span>
                            </a>
                        </li>

                        <li class="has_sub dash-menu">
                            <a href="#" class="waves-effect userSelectedMenu" title="inputUnblock">
                                <i class="zmdi zmdi-lock-open dash-icon"></i>
                                <span> Input Cabut Blokir </span>
                            </a>
                        </li>

                        <li class="has_sub dash-menu">
                            <a href="/uploadKpp/index" class="waves-effect userSelectedMenu" title="uploadKpp">
                                <i class="zmdi zmdi-lock-open dash-icon"></i>
                                <span> Upload KPP </span>
                            </a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>

        </div>
        <!-- ========== Left Sidebar End ========== -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <!-- Start render content -->
                <?= $this->renderSection('content') ?>
                <!-- End render content -->
            </div> <!-- content -->
        </div>
        <!-- ========== End content-page ========== -->
    </div>
    <!-- END wrapper -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="<?php base_url() ?> /assets/js/jquery.min.js"></script>
    <script src="<?php base_url() ?> /assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php base_url() ?> /assets/js/detect.js"></script>
    <script src="<?php base_url() ?> /assets/js/fastclick.js"></script>
    <script src="<?php base_url() ?> /assets/js/jquery.blockUI.js"></script>
    <script src="<?php base_url() ?> /assets/js/waves.js"></script>
    <script src="<?php base_url() ?> /assets/js/jquery.nicescroll.js"></script>
    <script src="<?php base_url() ?> /assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php base_url() ?> /assets/js/jquery.slimscroll.js"></script>
    <script src="<?php base_url() ?> /plugins/switchery/switchery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->

    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Jquery-Ui -->
    <script src="<?php base_url() ?> /plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- BEGIN PAGE SCRIPTS -->
    <script src="<?php base_url() ?> /plugins/moment/moment.js"></script>
    <script src='<?php base_url() ?> /plugins/fullcalendar/js/fullcalendar.min.js'></script>
    <script src="<?php base_url() ?> /assets/pages/jquery.fullcalendar.js"></script>

    <!-- Required datatable js -->
    <script src="<?php base_url() ?> /plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="<?php base_url() ?> /plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/jszip.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/pdfmake.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/vfs_fonts.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/buttons.html5.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/buttons.print.min.js"></script>

    <!-- Key Tables -->
    <script src="<?php base_url() ?> /plugins/datatables/dataTables.keyTable.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?php base_url() ?> /plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="<?php base_url() ?> /plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Selection table -->
    <script src="<?php base_url() ?> /plugins/datatables/dataTables.select.min.js"></script>

    <!-- App js -->
    <script src="<?php base_url() ?> /assets/js/jquery.core.js"></script>
    <script src="<?php base_url() ?> /assets/js/jquery.app.js"></script>

    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> -->

    <!-- user-defined js -->
    <script src="<?php base_url() ?> /assets/js/dashboard.js"></script>
    <script src="<?php base_url() ?> /assets/js/search_ibk.js"></script>
    <script src="/assets/js/input_ibk.js"></script>
    <script src="<?php base_url() ?> /assets/js/template.js"></script>

    <!-- Include Date Range Picker -->
    <script src="<?php base_url() ?> /plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php base_url() ?> /plugins/clockpicker/bootstrap-clockpicker.js"></script>
    <script src="<?php base_url() ?> /plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script> -->

    <script type="text/javascript">
        $(function() {
            // $('.datepicker').datepicker();

            $('.tanggal').datepicker({
                format: 'dd-mm-yyyy',
                uiLibrary: 'bootstrap4',
                autoclose: true,
                todayHighlight: true,
                orientation: "top auto",
                disableTouchKeyboard: false
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

        function dataIbk() {
            $.ajax({
                url: "<?= site_url('SearchIbk/getData') ?>",
                dataType: "JSON",
                success: function(response) {
                    $('.viewdata').html(response.data);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" +
                        thrownError);
                }
            });
        }

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
                    // console.log(response[0].reffcode);
                },
                error: function() {
                    console.log('Connection to database failed');
                }
            });
        }

        $(document).ready(function() {
            dataIbk();

            // getReffCode();
            // Default Datatable
            // $('#listIbkTable').DataTable();
        });
    </script>
</body>

</html>