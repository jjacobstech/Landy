<?php
function activate_menu($controller)
{
    $CI = get_instance();
    $last = $CI->uri->total_segments();
    $seg = $CI->uri->segment($last);
    if (is_numeric($seg)) {
        $seg = $CI->uri->segment($last - 1);
    }
    if (in_array($controller, array($seg))) {
        return 'active';
    } else {
        return '';
    }
}
if (!isset($this->session->userdata['session_data'])) {
    $url = base_url() . 'login';
    header("location: $url");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php
            $data = sitedata();
            $total_segments = $this->uri->total_segments();
            echo ucwords(str_replace('_', ' ', $this->uri->segment(1))) . ' | ' . output($data['s_companyname']) ?>
    </title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/plugins/toast/toast.min.css" />
    <script src="<?= base_url(); ?>assets/plugins/toast/toast.min.js"></script>
    <!-- styling for add reminder button -->
    <style>
    .btn.btn-dark.float-right {
        background-color: black;
        border-color: black;
    }

    .btn.btn-dark.float-right:hover {
        background-color: white;
        color: black;
        border-color: black;
    }

    .btn.btn-primary,
    .btn.btn-info,
    .btn,
    input[type='checkbox'] {
        background-color: black;
        border-color: black;
        color: white;

    }

    .custom-control.custom-checkbox:checked {
        background-color: black;
        border-color: black;
    }

    .btn.btn-primary:hover,
    .btn.btn-info:hover,
    .btn:hover {
        background-color: white;
        color: black;
        border-color: black;
    }

    .breadcrumb-item a {
        color: black;
    }

    input:hover,
    select:hover,
    textarea:hover,
    optgroup:hover,
    option:hover {
        border-color: black;
    }

    .breadcrumb-item a:hover {
        color: gray;
    }


    .btn.btn-block.btn-outline-info.btn-sm {
        background-color: black;
        border-color: black;
        color: white;
    }

    .btn.btn-block.btn-outline-info.btn-sm:hover {
        background-color: white;
        color: black;
        border-color: black;
    }

    .btn.btn-block.btn-outline-info.btn-sm::after {
        background-color: white;
        color: black;
        border-color: black;
    }

    .main-footer {
        display: none;
    }

    .fa.fa-edit {
        color: black;
    }

    .fa.fa-edit:hover {
        color: gray;
    }

    a.page-link {
        background-color: black !important;
        color: white !important;
        border-color: black !important;
    }

    a.page-link:hover {
        background-color: white !important;
        color: black !important;
        border-color: white !important;

    }

    /* li.paginate_button.page-item.active {
        background-color: black !important;
    } */
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div id=" main">
        <div class=" wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark " style="background-color: black;">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>
                <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>login/logout">
                            <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            inp