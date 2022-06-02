<?php
/* Smarty version 4.0.0, created on 2022-05-30 09:03:25
  from 'C:\xampp\htdocs\judisium\templates\riwayat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62946c3d26eb48_44905021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc4d9c74e7453c416675f88d10d49d3e4e75d883' => 
    array (
      0 => 'C:\\xampp\\htdocs\\judisium\\templates\\riwayat.tpl',
      1 => 1653887580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62946c3d26eb48_44905021 (Smarty_Internal_Template $_smarty_tpl) {
?><body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">          
          <?php if ($_smarty_tpl->tpl_vars['manip']->value == "tambah") {?>
          <div class="col-sm-6">
            <h1>Tambah Data CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad">Batal Tambah Data</a></li>
            </ol>
          </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['manip']->value == "ubah") {?>
          <div class="col-sm-6">
            <h1>Ubah Data CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad">Batal Ubah Data</a></li>
            </ol>
          </div>
          <?php } elseif ($_smarty_tpl->tpl_vars['manip']->value == "awal") {?>
          <div class="col-sm-6">
            <h1>Data CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad&kuy=t">Tambah Data</a></li>
            </ol>
          </div> 
          <?php } elseif ($_smarty_tpl->tpl_vars['manip']->value == "lihat") {?>
          <div class="col-sm-6">
            <h1>Data Detail CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad">Kembali Data</a></li>
            </ol>
          </div>    
          <?php }?>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php if ($_smarty_tpl->tpl_vars['manip']->value == "awal") {?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Pemilik</th>
                  <th>Unit</th>
                  <th>PC Name</th>
                  <th>Tahun</th>
                  <th>kondisi</th>
                  <th>Manipulasi</th>
                </tr>
                </thead>
                <tbody>
                <?php
$__section_cpu_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['view']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cpu_0_total = $__section_cpu_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cpu'] = new Smarty_Variable(array());
if ($__section_cpu_0_total !== 0) {
for ($__section_cpu_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] = 0; $__section_cpu_0_iteration <= $__section_cpu_0_total; $__section_cpu_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']++){
?>    
                <tr> 
                    <td><?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['pemilik'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['unit'];?>
</td>
                    <td><a href="users.php?Roiy97YthR=upcatad&kuy=l&i=<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['id_cpu'];?>
"><?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['pcname'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['tahun'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['kondisi'];?>
</td>
                    <td> 
                      <a href="users.php?Roiy97YthR=upcatad&kuy=u&i=<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['id_cpu'];?>
">Ubah</a>&nbsp;|&nbsp;<a href="users.php?Roiy97YthR=upcatad&kuy=h&i=<?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['id_cpu'];?>
" onclick ="return confirm ('Yakin akan menghapus?');">Hapus</a>
                    <?php echo $_smarty_tpl->tpl_vars['view']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cpu']->value['index'] : null)]['tabi_nip'];?>

                    </td>
                </tr>
                <?php
}
}
?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Pemilik</th>
                  <th>Unit</th>
                  <th>PC Name</th>
                  <th>Tahun</th>
                  <th>kondisi</th>
                  <th>Manipulasi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <?php } elseif ($_smarty_tpl->tpl_vars['manip']->value == "tambah") {?>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data CPU</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form role="form" action="users.php?Roiy97YthR=upcatad&kuy=tok" enctype="multipart/form-data" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Kode Barang</label>
                <input name="kode_barang" type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Pemilik</label>
                <input name="pemilik" type="text" id="inputName" class="form-control" required="">
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
                    <?php
$__section_x_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tahun']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_1_total = $__section_x_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_1_total !== 0) {
for ($__section_x_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_1_iteration <= $__section_x_1_total; $__section_x_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['tahun']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['tahun']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>
</option>
                    <?php
}
}
?>    
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
              <h3 class="card-title">Spesifikasi CPU</h3>

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
    </section> 
    <?php } elseif ($_smarty_tpl->tpl_vars['manip']->value == "ubah") {?>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Data CPU</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form role="form" action="users.php?Roiy97YthR=upcatad&kuy=uok" enctype="multipart/form-data" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Kode Barang</label>
                <input name="kode_barang" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['kode_barang']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Pemilik</label>
                <input name="pemilik" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['pemilik']->value;?>
">
              </div>           
              <div class="form-group">
                <label for="inputName">Unit</label>
                <input name="unit" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Komputer</label>
                <input name="pcname" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['pcname']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Tahun</label>
                  <select name="tahun" required>
                      <option value="">- Tahun CPU -</option>
                    <?php
$__section_x_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tahunn']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_2_total = $__section_x_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_2_total !== 0) {
for ($__section_x_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_2_iteration <= $__section_x_2_total; $__section_x_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
?>
                      <?php if ($_smarty_tpl->tpl_vars['tahun']->value == $_smarty_tpl->tpl_vars['tahunn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]) {?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['tahunn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>
" selected><?php echo $_smarty_tpl->tpl_vars['tahunn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>
</option>
                      <?php } else { ?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['tahunn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>
"><?php echo $_smarty_tpl->tpl_vars['tahunn']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)];?>
</option>
                      <?php }?>
                    <?php
}
}
?>    
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">Brand CPU</label>
                <input name="brand_cpu" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['brand_cpu']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Operating System</label>
                <input name="os" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['os']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Kondisi</label>
                <input name="kondisi" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['kondisi']->value;?>
">
              </div>                
              <div class="form-group">
                <label for="inputName">Keterangan</label>
                <input name="ket" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ket']->value;?>
">
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
              <h3 class="card-title">Spesifikasi CPU</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">                        
              <div class="form-group">
                <label for="inputName">Tipe Hardisk</label>
                <select name="hdd_tipe" required>
                    <?php if ($_smarty_tpl->tpl_vars['hdd_tipe']->value == "IDE") {?>
                      <option value="IDE" selected> IDE </option>
                      <option value="SATA"> SATA </option>
                      <option value="SSD"> SSD </option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['hdd_tipe']->value == "SATA") {?>
                      <option value="IDE"> IDE </option>
                      <option value="SATA" selected> SATA </option>
                      <option value="SSD"> SSD </option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['hdd_tipe']->value == "SSD") {?>
                      <option value="IDE"> IDE </option>
                      <option value="SATA"> SATA </option>
                      <option value="SSD" selected> SSD </option>
                    <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Hardisk</label>
                <input name="ukuran_hdd" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['ukuran_hdd']->value;?>
">
              </div>              
              <div class="form-group">
                <label for="inputName">Tipe RAM</label>
                <input name="tipe_ram" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['tipe_ram']->value;?>
">
              </div> 
              <div class="form-group">
                <label for="inputName">Ukuran RAM</label>
                <input name="ukuran_ram" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['ukuran_ram']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Prossesor</label>
                <input name="prossesor" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['prossesor']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Ada LAN</label>
                  <select name="ada_lan">
                    <?php if ($_smarty_tpl->tpl_vars['ada_lan']->value == "1") {?>
                      <option value="1" selected>- Ada -</option>
                      <option value="0">Tidak Ada</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ada_lan']->value == "0") {?>
                      <option value="1">- Ada -</option>
                      <option value="0" selected>Tidak Ada</option>
                    <?php }?>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">IP LAN</label>
                <input name="ip_lan" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ip_lan']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Ada Wifi</label>
                  <select name="ada_wifi">
                    <?php if ($_smarty_tpl->tpl_vars['ada_wifi']->value == "1") {?>
                      <option value="1" selected>- Ada -</option>
                      <option value="0">Tidak Ada</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['ada_wifi']->value == "0") {?>
                      <option value="1">- Ada -</option>
                      <option value="0" selected>Tidak Ada</option>
                    <?php }?>
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">Brand Monitor</label>
                <input name="brand_monitor" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['brand_monitor']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Monitor</label>
                <input name="ukuran_monitor" type="text" id="inputName" class="form-control" required="" value="<?php echo $_smarty_tpl->tpl_vars['ukuran_monitor']->value;?>
">
              </div>
              <div class="form-group">
                <input name="index_data" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['index_data']->value;?>
">
                <input type="submit" value="Simpan">
              </div>            
            </div>
            </form>
            <!-- /.card-body -->
          </div>
        </div>
      </div>           
    </section>
    <?php } elseif ($_smarty_tpl->tpl_vars['manip']->value == "lihat") {?>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data CPU</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="datadiri">
                    <!-- Post -->
                    <ul class="list-group list-group-unbordered mb-3">                        
                      <li class="list-group-item">
                        <b>Kode Barang</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['kode_barang']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Unit</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['unit']->value;?>
</a>
                      </li> 
                      <li class="list-group-item">
                        <b>Nama Komputer</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['pcname']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Tahun CPU</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['tahun']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Brand CPU</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['brand_cpu']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Operating System</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Kondisi</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['kondisi']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Foto</b>
                        <img src="files/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
" height="50%" width="50%">
                      </li> 
                    </ul>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Spesifikasi CPU</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">  
              <div class="tab-content">
                  <div class="active tab-pane" id="datadiri">
                    <!-- Post -->
                    <ul class="list-group list-group-unbordered mb-3">                        
                      <li class="list-group-item">
                        <b>Ukuran Hardisk</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['ukuran_hdd']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Tipe RAM</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['tipe_ram']->value;?>
</a>
                      </li> 
                      <li class="list-group-item">
                        <b>Ukuran RAM</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['ukuran_ram']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Prossesor</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['prossesor']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Ada LAN</b> <a class="float-right"><?php if ($_smarty_tpl->tpl_vars['ada_lan']->value == "1") {?>- Ada -<?php } elseif ($_smarty_tpl->tpl_vars['ada_lan']->value == "0") {?>- Tidak Ada -<?php }?></a>
                      </li>
                      <li class="list-group-item">
                        <b>IP LAN</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['ip_lan']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Ada Wifi</b> <a class="float-right"><?php if ($_smarty_tpl->tpl_vars['ada_wifi']->value == "1") {?>- Ada -<?php } elseif ($_smarty_tpl->tpl_vars['ada_wifi']->value == "0") {?>- Tidak Ada -<?php }?></a>
                      </li>
                      <li class="list-group-item">
                        <b>Brand Monitor</b><a class="float-right"><?php echo $_smarty_tpl->tpl_vars['brand_monitor']->value;?>
</a>
                      </li>
                      <li class="list-group-item">
                        <b>Brand Monitor</b><a class="float-right"><?php echo $_smarty_tpl->tpl_vars['brand_monitor']->value;?>
</a>
                      </li> 
                      <li class="list-group-item">
                        <b>Ukuran Monitor</b><a class="float-right"><?php echo $_smarty_tpl->tpl_vars['ukuran_monitor']->value;?>
</a>
                      </li> 
                    </ul>
                  </div>
                </div>                       
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>           
    </section>
    <?php }?>
  </div>
  <!-- /.content-wrapper -->
</div><?php }
}
