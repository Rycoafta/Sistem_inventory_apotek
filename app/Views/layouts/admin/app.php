<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | <?= $this->renderSection('title') ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('plugins/daterangepicker/daterangepicker.css') ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">
    <script src="https://kit.fontawesome.com/2a99f4df77.js" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/favicon/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/favicon/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/favicon/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/favicon/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/favicon/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/favicon/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/favicon/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/favicon/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light" style="background-color : blue;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <?php if(session()->get('role')== 1) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Admin</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 2) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">General Manager</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 3) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Manager</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 4) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Supervisor</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 5) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">General Manager Business & Development</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 6) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Manager Business & Development</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 7) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Supervisor Business & Development</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 8) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Staff Warehouse</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>

            <?php if(session()->get('role')== 9) { ?>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="user-panel d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets/img/default.png') ?>" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block text-white">Staff</a>
                        </div>
                    </div>
                </li>
            </ul>
            <?php } ?>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link text-center" style="background-color : grey">
            <img class="w-100" src="<?= base_url('assets/img/logo_cni.png') ?>" alt="">
        </a>

        <!-- Sidebar -->
        <div class="sidebar bg-dark">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 d-flex">
                <div class="info d-block">
                    <h3>MENU</h3>
                </div>
            </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link text-white">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                            <?php if(session()->get('role')== 1) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/alat" class="nav-link text-white">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Inventory
                                </p>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>
                        <?php if(session()->get('role')== 2) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>
                        <?php if(session()->get('role')== 3) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>
                        <?php if(session()->get('role')== 4) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>

                        <?php if(session()->get('role')== 5) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>

                        <?php if(session()->get('role')== 6) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>

                        <?php if(session()->get('role')== 7) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>

                        <?php if(session()->get('role')== 8) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                            <li class="nav-item">
                            <a href="/alat" class="nav-link text-white">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                    Inventory
                                </p>
                            </a>
                            </li>
                            <li class="nav-item">
                            <a href="/history" class="nav-link text-white">
                                <i class="nav-icon fas fa-clock-rotate-left"></i>
                                <p>
                                    History
                                </p>
                            </a>
                            </li>
                        </li>
                        <?php } ?>

                        <?php if(session()->get('role')== 9) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white">
                            <i class="nav-icon fas fa-pen-to-square"></i>
                            <p>
                                Form 
                                <i class="right fas fa-angle-left"></i>
                            </p>
                            </a>
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fpb" class="nav-link">
                                <i class="nav-icon fas fa-toolbox"></i>
                                <p>FPB</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fpp" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-shop"></i>
                                <p>FPP</p>
                                </a>
                            </li>
                            </ul>
                        </li>
                        <?php } ?>
                    
                        <li class="nav-item">
                            <a href="/logout" class="nav-link text-white">
                                <i class="nav-icon fas fa-sign-out"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
    </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $this->renderSection('title') ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid mb-5">
                    <?= $this->renderSection('content') ?>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <footer class="main-footer fixed-bottom text-center">
            <strong>Copyright &copy; 2023 <a href="#">SDL</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('plugins/sparklines/sparkline.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
    <script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('plugins/moment/moment.min.js') ?>"></script>
    <script src="<?= base_url('plugins/daterangepicker/daterangepicker.js') ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
    <!-- Summernote -->
    <script src="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.js') ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url('dist/js/pages/dashboard.js') ?>"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <?= $this->renderSection('script') ?>
</body>

</html>