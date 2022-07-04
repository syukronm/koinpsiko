<?php
/* Smarty version 4.0.0, created on 2022-06-22 20:09:21
  from 'C:\xampp\htdocs\koinpsiko\4a801fc3\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62b35ad11478b1_91564961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '250893d7886654afbdd58d0854675e7bbfa1b710' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koinpsiko\\4a801fc3\\templates\\index.tpl',
      1 => 1655921355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b35ad11478b1_91564961 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

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
        <a href="datadiri.php" class="nav-link">Data Diri</a>
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
          <a href="#" class="d-block"><?php echo $_smarty_tpl->tpl_vars['namalogin']->value;?>
</a>
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
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['isi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
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
<?php echo '<script'; ?>
 src="../uiux/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<!-- jQuery UI 1.11.4 -->
<?php echo '<script'; ?>
 src="../uiux/plugins/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<?php echo '<script'; ?>
>
  $.widget.bridge('uibutton', $.ui.button)
<?php echo '</script'; ?>
>
<!-- Bootstrap 4 -->
<?php echo '<script'; ?>
 src="../uiux/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
<!-- ChartJS -->
<?php echo '<script'; ?>
 src="../uiux/plugins/chart.js/Chart.min.js"><?php echo '</script'; ?>
>
<!-- Sparkline -->
<?php echo '<script'; ?>
 src="../uiux/plugins/sparklines/sparkline.js"><?php echo '</script'; ?>
>
<!-- JQVMap -->
<?php echo '<script'; ?>
 src="../uiux/plugins/jqvmap/jquery.vmap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../uiux/plugins/jqvmap/maps/jquery.vmap.usa.js"><?php echo '</script'; ?>
>
<!-- jQuery Knob Chart -->
<?php echo '<script'; ?>
 src="../uiux/plugins/jquery-knob/jquery.knob.min.js"><?php echo '</script'; ?>
>
<!-- daterangepicker -->
<?php echo '<script'; ?>
 src="../uiux/plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../uiux/plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- Tempusdominus Bootstrap 4 -->
<?php echo '<script'; ?>
 src="../uiux/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"><?php echo '</script'; ?>
>
<!-- Summernote -->
<?php echo '<script'; ?>
 src="../uiux/plugins/summernote/summernote-bs4.min.js"><?php echo '</script'; ?>
>
<!-- overlayScrollbars -->
<?php echo '<script'; ?>
 src="../uiux/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="../uiux/dist/js/adminlte.js"><?php echo '</script'; ?>
>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php echo '<script'; ?>
 src="../uiux/dist/js/pages/dashboard.js"><?php echo '</script'; ?>
>
<!-- DataTables -->
<?php echo '<script'; ?>
 src="../uiux/plugins/datatables/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../uiux/plugins/datatables-bs4/js/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<!-- <?php echo '<script'; ?>
 src="dist/js/adminlte.min.js"><?php echo '</script'; ?>
>-->
<!-- InputMask -->
<?php echo '<script'; ?>
 src="../uiux/plugins/moment/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../uiux/plugins/inputmask/min/jquery.inputmask.bundle.min.js"><?php echo '</script'; ?>
>
<!-- date-range-picker -->
<?php echo '<script'; ?>
 src="../uiux/plugins/daterangepicker/daterangepicker.js"><?php echo '</script'; ?>
>
<!-- page script -->
<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
<!-- Page script -->
</body>
</html><?php }
}
