<?php
session_start();

// include "library/liblogin.php";
// if (!ceklogin()) {
//   header("location:login.php");
// }

// cek_timout();
?>

<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="dist/js/adminlte.js">
    <link rel="stylesheet" href="dist/js/adminlte.js.map">
    <link rel="stylesheet" href="dist/js/adminlte.min.js">
    <link rel="stylesheet" href="dist/js/adminlte.min.map">
    <link rel="stylesheet" href="dist/js/demo.js">


    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="aset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style>
      .tekstebal {
        font-weight: bold;
      }
    </style>
  </head>

  <body class="hold-transition sidebar-mini text-md">

    <div class="col ml-auto">
      <!-- Navbar -->
      <nav class="navbar navbar-expand navbar-dark navbar-light sticky-top">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav navbar-dark navbar-light ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <img src="dist/img/user2-160x160.jpg" height="40" width="40" class="img-circle elevation-2" alt="User Image">
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fa fa-user"> Ahmadi</i>
              <!-- <?php echo $_SESSION['namaadmin'] ?> -->
              <p class="float-right text-muted">
                <!-- <?php echo '  - (' . $_SESSION['level'] . ')' ?> </p> -->
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-user-md"></i> - Profile
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fa fa-power-off"></i> - Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
    </div>


    <!-- Site wrapper -->
    <div class="wrapper">

      <!-- Navbar -->


      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-indigo ">
        <!-- Brand Logo -->
        <!-- <a href="index.php" class="brand-link">
          <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">CRUD Rizaru</span>
        </a> -->

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="index.php?halaman=dashboard.php" class="d-block"><?php echo $_SESSION['namaadmin']
                                                                          // ."<br>"
                                                                        ;
                                                                        echo ' (' . $_SESSION['level'] . ')' ?></a>
            </div>
          </div> -->

          <!-- SidebarSearch Form -->
          <div class="form-inline">
            <!-- <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div> -->
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="index.php?halaman=dashboard" class="nav-link bg-danger">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>

              </li>

              <!-- navbar user -->
              <li class="nav-header bg-primary">User</li>
              <li class="nav-item">
                <a href="index.php?halaman=admin" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=pembeli" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Pembeli</p>
                </a>
              </li>

              <!-- navbar barang -->
              <li class="nav-header bg-primary">BARANG</li>
              <li class="nav-item">
                <a href="index.php?halaman=barang" class="nav-link">
                  <i class="nav-icon far fa-circle text-success"></i>
                  <p class="text">Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=kategori" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Suplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Merk</p>
                </a>
              </li>

              <!-- navbar penjualan -->
              <li class="nav-header bg-primary">PENJUALAN</li>
              <li class="nav-item">
                <a href="index.php?halaman=barang" class="nav-link">
                  <i class="nav-icon far fa-circle text-dark"></i>
                  <p class="text">Penjualan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=kategori" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p class="text">Rekap</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Diskon</p>
                </a>
              </li>


            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header-sm mt-3">
          <h3>
            <marquee style='color:black; font-size:20px' behavior='alternate' scrolldelay='2'>
              <b><i class="fa fa-shopping-cart"></i> - Muslim's Computer (APK-POS) - Aplikasi Penjualan Toko Komputer Bang Muslim</b>
            </marquee>
            <br>
          </h3>

          <div class="container-fluid">

        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row " style=" margin-left: 10px; font-family:Arial, Helvetica, sans-serif;">


          </div>


          <?php

          if (isset($_GET['halaman'])) {
            switch ($_GET['halaman']) {

                // bagian admin
              case "admin";
                include("views/admin/admin.php");
                break;
              case "tambahadmin";
                include("views/admin/tambahadmin.php");
                break;
              case "editadmin";
                include("views/admin/editadmin.php");
                break;

                // bagian pembeli
              case "pembeli";
                include("views/pembeli/pembeli.php");
                break;
              case "tambahpembeli";
                include("views/pembeli/tambahpembeli.php");
                break;
              case "editpembeli";
                include("views/pembeli/editpembeli.php");
                break;


                // bagian suplier
              case "suplier";
                include("views/suplier/suplier.php");
                break;
              case "tambahsuplier";
                include("views/suplier/tambahsuplier.php");
                break;
              case "editsuplier";
                include("views/suplier/editsuplier.php");
                break;

                // bagian kategori
              case "kategori";
                include("views/kategori/kategori.php");
                break;
              case "tambahkategori";
                include("views/kategori/tambahkategori.php");
                break;
              case "editkategori";
                include("views/kategori/editkategori.php");
                break;


                // bagian barang
              case "barang";
                include("views/barang/barang.php");
                break;
              case "tambahbarang";
                include("views/barang/tambahbarang.php");
                break;
              case "editbarang";
                include("views/barang/editbarang.php");
                break;

                // bagian penjualan
              case "penjualan";
                include("views/penjualan/penjualan.php");
                break;
              case "tambahpenjualan";
                include("views/penjualan/tambahpenjualan.php");
                break;
              case "editpenjualan";
                include("views/penjualan/editpenjualan.php");
                break;
              case "login";
                include("views/login.php");
                break;

              case "dashboard";
                include("views/dashboard.php");
                break;
              case "home";
                include("views/dashboard.php");
                break;
              case "default";
                include("views/notfound.php");
            }
          } else {
            include("views/notfound.php");
          }



          ?>


        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
          <b>AdminLTE</b> Version 3.2.0
        </div>
        <strong>Copyright &copy; 2014-2021 <a href="#">Ahmadi Muslim</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js"></script> -->

    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>

    <script>
      $(function() {
        $("#example1").DataTable({
          "responsive": true,
          "lengthChange": false,
          "autoWidth": false,
          "buttons": ["excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
  </body>

  </html>