<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KP | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Shortcut Icon" type="image/x-icon" href="../gambars/icon.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../uiux/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="Shortcut Icon" type="image/x-icon" href="../gambars/logo.png" />
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../uiux/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../uiux/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  
  <link rel="stylesheet" href="../uiux/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../uiux/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../uiux/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../uiux/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../uiux/plugins/summernote/summernote-bs4.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../uiux/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Menu di atas -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Beranda</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="gapas.php" class="nav-link">Ganti Password</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="out.php" class="nav-link">Keluar</a>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../gambars/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{$namalogin}</a>
        </div>
      </div>

      <!-- Menu Kiri -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->        
          <li class="nav-item has-treeview">
            <a href="users.php?Roiy97YthR=upcatad" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>Data CPU</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="users.php?Roiy97YthR=potlap" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Laptop</p>
            </a>
          </li>       
          <li class="nav-item has-treeview">
            <a href="users.php?Roiy97YthR=retnirp" class="nav-link">
              <i class="nav-icon fas fa-trophy"></i>
              <p>Data Printer</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="users.php?Roiy97YthR=nangiraj" class="nav-link">
              <i class="nav-icon fas fa-suitcase"></i>
              <p>Perangkat Jaringan</p>
            </a>
          </li>                                      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /.navbar mahasiswa--> 
  
  <!-- Content Wrapper. Contains page content -->
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        {include file = $isi}
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="#">ITP</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../uiux/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../uiux/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../uiux/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../uiux/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../uiux/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../uiux/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../uiux/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../uiux/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../uiux/plugins/moment/moment.min.js"></script>
<script src="../uiux/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../uiux/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../uiux/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../uiux/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../uiux/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../uiux/dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="../uiux/plugins/datatables/jquery.dataTables.js"></script>
<script src="../uiux/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script>-->
<!-- InputMask -->
<script src="../uiux/plugins/moment/moment.min.js"></script>
<script src="../uiux/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="../uiux/plugins/daterangepicker/daterangepicker.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
    
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
  });
</script>
<!-- Page script -->
</body>
</html>