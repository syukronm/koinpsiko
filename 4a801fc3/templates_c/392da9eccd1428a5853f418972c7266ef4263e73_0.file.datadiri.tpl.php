<?php
/* Smarty version 4.0.0, created on 2022-07-04 18:14:43
  from 'C:\xampp\htdocs\koinpsiko\4a801fc3\templates\datadiri.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_62c311f3478432_27010397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392da9eccd1428a5853f418972c7266ef4263e73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\koinpsiko\\4a801fc3\\templates\\datadiri.tpl',
      1 => 1655917909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c311f3478432_27010397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\koinpsiko\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['tampilan']->value == "default") {?> 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="datadiri.php?Roiy97YthR=ubahkuy">Ubah data</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                    <?php if ($_smarty_tpl->tpl_vars['foto']->value == '') {?>
                        <img class="profile-user-img img-fluid img-circle"
                            src="bopeg/no-poto.jpg"
                            alt="User profile picture">
                    <?php } else { ?>
                        <img class="profile-user-img img-fluid img-circle"
                            src="files/<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
"
                            alt="User profile picture">
                    <?php }?>
                </div>

                <h3 class="profile-username text-center"><?php echo $_smarty_tpl->tpl_vars['nama_gelar']->value;?>
</h3>

                <p class="text-muted text-center"><?php echo $_smarty_tpl->tpl_vars['jenis_pegawai']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['golongan']->value;?>
</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Golongan</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['golongan']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['pendidikan']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Agama</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['agama']->value;?>
</a>
                  </li> 
                  <li class="list-group-item">
                    <b>Kota lahir</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['tempat_lahir']->value;?>
</a>
                  </li>                  
                  <li class="list-group-item">
                    <b>Tanggal lahir</b> <a class="float-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tanggal_lahir']->value,"%e %B %Y");?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Pensiun</b> <a class="float-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tanggal_pensiun']->value,"%e %B %Y");?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Nama Ibu</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['nama_ibu']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Nama Ayah</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['nama_ayah']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis kelamin</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['jenis_kelamin']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['pendidikan']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['alamat']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a>
                  </li>
                  <li class="list-group-item">
                    <b>Kode POS</b> <a class="float-right"><?php echo $_smarty_tpl->tpl_vars['kodepos']->value;?>
</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
         <div class="col-md-4">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Di UI Sejak <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tmt_mulai_di_ui']->value,"%e %B %Y");?>
</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-genderless mr-1"></i> Jenis Pegawai</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['jenis_pegawai']->value;?>
</p>
                
                <strong><i class="fas fa-genderless mr-1"></i> NIP</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['nip']->value;?>
</p>
                </p>
                <strong><i class="fas fa-genderless mr-1"></i> NIDN</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['NIDN']->value;?>
</p>
                
                <strong><i class="fas fa-genderless mr-1"></i> No Serdos</strong>

                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_serdos']->value;?>
</p>
                <strong><i class="fas fa-genderless mr-1"></i> No KTP</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_KTP']->value;?>
</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> NPWP</strong>
                <p class="text-muted">
                    No: <?php echo $_smarty_tpl->tpl_vars['no_npwp']->value;?>
 --  
                    Efin: <?php echo $_smarty_tpl->tpl_vars['efin']->value;?>
 -- 
                    Alamat Pajak: <?php echo $_smarty_tpl->tpl_vars['alamat_npwp']->value;?>

                </p>
                


                <strong><i class="fas fa-genderless mr-1"></i> No HP</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_hp']->value;?>
</p>

                <strong><i class="fas fa-genderless mr-1"></i> No Telp</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_telp']->value;?>
</p>

                <strong><i class="fas fa-genderless mr-1"></i> Rekening</strong>
                <p class="text-muted">
                    No: <?php echo $_smarty_tpl->tpl_vars['no_rek']->value;?>
 -- 
                    Nama di Rek: <?php echo $_smarty_tpl->tpl_vars['nama_direk']->value;?>
 -- 
                    Bank: <?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
 -- 
                    Cabang: <?php echo $_smarty_tpl->tpl_vars['cabang_rek']->value;?>
</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> No BPJS Kes</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_BPJS_kes']->value;?>
</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> No BPJS KTK</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_BPJS_ktk']->value;?>
</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> No DPLK</strong>
                <p class="text-muted"><?php echo $_smarty_tpl->tpl_vars['no_DPLK']->value;?>
</p>
                
                                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">File</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-credit-card mr-1"></i> KTP</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_KTP']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_KTP']->value;?>
">File KTP</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> NPWP</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_NPWP']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_NPWP']->value;?>
">File NPWP</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-sticky-note mr-1"></i> Akta Lahir</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_akta_lahir']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_akta_lahir']->value;?>
">File Akta Lahir</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Kartu Pegawai</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_karpeg']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_karpeg']->value;?>
">File Kartu Pegawai</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Serdos</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_serdos']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_serdos']->value;?>
">Files Serdos</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> KK</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_KK']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_KK']->value;?>
">File KK</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> DPLK</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_DPLK']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_DPLK']->value;?>
">File DPLK</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> BPJS Kes</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_BPJS_kes']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_BPJS_kes']->value;?>
">File BPJS Kes</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> BPJS KTK</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_BPJS_ktk']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_BPJS_ktk']->value;?>
">File BPJS KTK</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Scan TTD</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['berkas_ttd']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['berkas_ttd']->value;?>
">File Scan TTD</a><?php }?></p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Asuransi Lain</strong>
                <p class="text-muted"><?php if ($_smarty_tpl->tpl_vars['asuransi_lain']->value == '') {?><b>No File</b><?php } else { ?><a href="files/<?php echo $_smarty_tpl->tpl_vars['asuransi_lain']->value;?>
">File Asuransi Lain</a><?php }?></p>
                <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php } elseif ($_smarty_tpl->tpl_vars['tampilan']->value == "edit") {?>
<!-- Content Wrapper. Contains page content -->  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Diri</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyok" enctype="multipart/form-data" method="post">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama Lengkap</label>
                <input name="namalogin" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['namalogin']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Agama</label>
                <input name="agama" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['agama']->value;?>
">
              </div>           
              <div class="form-group">
                <label for="inputName">Tempat Lahir</label>
                <input name="tempat_lahir" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tempat_lahir']->value;?>
">
              </div>
              <div class="form-group">
                  <label>Tanggal Lahir (yyyy/mm/dd)</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                      <input name="tanggal_lahir" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?php echo $_smarty_tpl->tpl_vars['tanggal_lahir']->value;?>
">
                  </div>
                  <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="inputName">Nama Ibu</label>
                <input name="nama_ibu" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nama_ibu']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Ayah</label>
                <input name="nama_ayah" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nama_ayah']->value;?>
">
              </div>
              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                    <?php if ($_smarty_tpl->tpl_vars['jk']->value == "Laki-laki") {?>
                    <option value="Laki-laki" selected="selected">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <?php } else { ?>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan" selected="selected">Perempuan</option>   
                    <?php }?>
                  </select>
                </div>               
              <div class="form-group">
                <label for="inputName">Alamat</label>
                <input name="alamat" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alamat']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Kode POS</label>
                <input name="kodepos" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['kodepos']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input name="email" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No KTP</label>
                <input name="no_KTP" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_KTP']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No HP</label>
                <input name="no_hp" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_hp']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No Telp</label>
                <input name="no_telp" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_telp']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No. Rekening</label>
                <input name="no_rek" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_rek']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Nama di Rek</label>
                <input name="nama_direk" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nama_direk']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Bank</label>
                <input name="bank" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['bank']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Cabang</label>
                <input name="cabang_rek" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cabang_rek']->value;?>
">
              </div>              
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Info Kepegawaian</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <label>TMT Di UI</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                      <input name="tmt_mulai_di_ui" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?php echo $_smarty_tpl->tpl_vars['tmt_mulai_di_ui']->value;?>
">
                  </div>
                  <!-- /.input group -->
              </div>              
              <div class="form-group">
                <label for="inputName">Gelar Depan</label>
                <input name="gelar_depan" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['gelar_depan']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Gelar Belakang</label>
                <input name="gelar_belakang" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['gelar_belakang']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Jenis Pegawai</label>
                <input name="jenis_pegawai" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['jenis_pegawai']->value;?>
">
              </div> 
              <div class="form-group">
                <label for="inputName">NIP</label>
                <input name="nip" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nip']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">NIDN</label>
                <input name="nidn" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['nidn']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No Serdos</label>
                <input name="no_serdos" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_serdos']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Tanggal Pensiun</label>
                <input name="tanggal_pensiun" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tanggal_pensiun']->value;?>
">
              </div>              
              <div class="form-group">
                <label for="inputName">Golongan</label>
                <input name="golongan" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['golongan']->value;?>
">
              </div> 
              <div class="form-group">
                <label for="inputName">Pendidikan</label>
                <input name="pendidikan" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['pendidikan']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">NPWP</label>
                <input name="no_npwp" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_npwp']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Efin</label>
                <input name="efin" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['efin']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">Alamat Pajak</label>
                <input name="alamat_npwp" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['alamat_npwp']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No BPJS Kes</label>
                <input name="no_BPJS_kes" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_BPJS_kes']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No BPJS KTK</label>
                <input name="no_BPJS_ktk" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_BPJS_ktk']->value;?>
">
              </div>
              <div class="form-group">
                <label for="inputName">No DPLK</label>
                <input name="no_DPLK" type="text" id="inputName" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['no_DPLK']->value;?>
">
              </div>               
              <div class="form-group">
                <input type="submit" value="Simpan">
              </div>
            </form>
            </div>
            <!-- /.card-body -->
          </div>          
        </div>
      </div>     
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <table class="table">
                <tbody>
                  <tr>
                    <td>Foto</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyfoto" enctype="multipart/form-data" method="post">
                        <input type="file" name="foto" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>KTP</td>
                    <td class="text-right py-0 align-middle">
                      <div class="custom-file">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyktp" enctype="multipart/form-data" method="post">
                        <input type="file" name="ktp" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>                  
                  <tr>
                    <td>NPWP</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuynpwp" enctype="multipart/form-data" method="post">
                        <input type="file" name="npwp" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Akta Lahir</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyakla" enctype="multipart/form-data" method="post">
                        <input type="file" name="akla" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Karpeg</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuykarpeg" enctype="multipart/form-data" method="post">
                        <input type="file" name="karpeg" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Serdos</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyserdos" enctype="multipart/form-data" method="post">
                        <input type="file" name="serdos" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <table class="table">
                <tbody>
                  <tr>
                    <td>KK</td>
                    <td class="text-right py-0 align-middle">
                      <div class="custom-file">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuykkk" enctype="multipart/form-data" method="post">
                        <input type="file" name="kk" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>                  
                  <tr>
                    <td>DPLK</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuydplk" enctype="multipart/form-data" method="post">
                        <input type="file" name="dplk" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>BPJS kes</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuybpjskes" enctype="multipart/form-data" method="post">
                        <input type="file" name="bpjskes" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>BPJS Ktk</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuybpjsktk" enctype="multipart/form-data" method="post">
                        <input type="file" name="bpjsktk" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Scan TTD</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyscanttd" enctype="multipart/form-data" method="post">
                        <input type="file" name="scanttd" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Asuransi Lain</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <form role="form" action="datadiri.php?Roiy97YthR=ubahkuyasul" enctype="multipart/form-data" method="post">
                        <input type="file" name="asul" accept="image/*" />
                        <input type="submit" value="Simpan">
                        </form>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>       
    </section>    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php }
}
}
