<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FPJ | FPsi</title>
  <link rel="Shortcut Icon" type="image/x-icon" href="gambars/logo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="uiux/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="uiux/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="uiux/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="uiux/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="uiux/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="uiux/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="uiux/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="uiux/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="uiux/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="uiux/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="uiux/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="uiux/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="uiux/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <i class="nav-icon fas fa-graduation-cap"></i>
        <span class="brand-text font-weight-light">Beranda</span>
      </a>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="breadcrumb float-sm-left"><b>F</b>ormulir &nbsp;<b> P</b>endaftaran &nbsp; <b> J</b>udisium&nbsp;</p></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <h1 class="breadcrumb float-sm-right"> {$namaprodi}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Input</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form role="form" action="users.php?Roiy97YthR=upcatad&kuy=tok" enctype="multipart/form-data" method="post">
            <div class="card-body">
              <div class="form-group">
                  <label>Date and time:</label>
                    <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                        <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>           
              <div class="form-group">
                <label for="inputName">Unit</label>
                <input name="unit" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Komputer</label>
                <input name="pcname" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Tahun</label>
                  <select name="tahun" required>
                      <option value="">- Tahun CPU -</option>
                    {section name=x loop=$tahun}
                      <option value="{$tahun[x]}">{$tahun[x]}</option>
                    {/section}    
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">Brand CPU</label>
                <input name="brand_cpu" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Operating System</label>
                <input name="os" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Kondisi</label>
                <input name="kondisi" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Keterangan</label>
                <input name="ket" type="text" id="inputName" class="form-control">
              </div>     
              <div class="custom-file">
                <label for="inputName">Foto</label>
                <input type="file" name="foto" accept="image/*" >
              </div>                  
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Pilih dan Upload</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">                        
              <div class="form-group">
                <label for="inputName">Tipe Hardisk</label>
                <select name="hdd_tipe" required>
                      <option value="IDE"> IDE </option>
                      <option value="SATA"> SATA </option>
                      <option value="SSD"> SSD </option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Hardisk</label>
                <input name="ukuran_hdd" type="text" id="inputName" class="form-control" required="">
              </div>              
              <div class="form-group">
                <label for="inputName">Tipe RAM</label>
                <input name="tipe_ram" type="text" id="inputName" class="form-control" required="">
              </div> 
              <div class="form-group">
                <label for="inputName">Ukuran RAM</label>
                <input name="ukuran_ram" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Prossesor</label>
                <input name="prossesor" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Ada LAN</label>
                  <select name="ada_lan" required>
                      <option value="1">- Ada -</option>
                      <option value="0">Tidak Ada</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">IP LAN</label>
                <input name="ip_lan" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Ada Wifi</label>
                  <select name="ada_wifi" required>
                      <option value="1">- Ada -</option>
                      <option value="0">Tidak Ada</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">Brand Monitor</label>
                <input name="brand_monitor" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Monitor</label>
                <input name="ukuran_monitor" type="text" id="inputName" class="form-control" required="">
              </div>
              <div class="form-group">
                <input type="submit" value="Simpan">
              </div>            
            </div>
            </form>
            <!-- /.card-body -->
          </div>
        </div>
      </div> 
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="uiux/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="uiux/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="uiux/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="uiux/dist/js/demo.js"></script>
<!-- jQuery -->
<script src="uiux/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="uiux/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="uiux/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="uiux/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="uiux/plugins/moment/moment.min.js"></script>
<script src="uiux/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="uiux/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="uiux/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="uiux/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="uiux/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="uiux/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="uiux/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="uiux/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="uiux/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
