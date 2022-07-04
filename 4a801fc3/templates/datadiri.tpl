{if $tampilan eq "default"} 
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
                    {if $foto eq ""}
                        <img class="profile-user-img img-fluid img-circle"
                            src="bopeg/no-poto.jpg"
                            alt="User profile picture">
                    {else}
                        <img class="profile-user-img img-fluid img-circle"
                            src="files/{$foto}"
                            alt="User profile picture">
                    {/if}
                </div>

                <h3 class="profile-username text-center">{$nama_gelar}</h3>

                <p class="text-muted text-center">{$jenis_pegawai} - {$golongan}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Golongan</b> <a class="float-right">{$golongan}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right">{$pendidikan}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Agama</b> <a class="float-right">{$agama}</a>
                  </li> 
                  <li class="list-group-item">
                    <b>Kota lahir</b> <a class="float-right">{$tempat_lahir}</a>
                  </li>                  
                  <li class="list-group-item">
                    <b>Tanggal lahir</b> <a class="float-right">{$tanggal_lahir|date_format:"%e %B %Y"}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Pensiun</b> <a class="float-right">{$tanggal_pensiun|date_format:"%e %B %Y"}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Nama Ibu</b> <a class="float-right">{$nama_ibu}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Nama Ayah</b> <a class="float-right">{$nama_ayah}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Jenis kelamin</b> <a class="float-right">{$jenis_kelamin}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Pendidikan</b> <a class="float-right">{$pendidikan}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{$alamat}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{$email}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Kode POS</b> <a class="float-right">{$kodepos}</a>
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
                <h3 class="card-title">Di UI Sejak {$tmt_mulai_di_ui|date_format:"%e %B %Y"}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-genderless mr-1"></i> Jenis Pegawai</strong>
                <p class="text-muted">{$jenis_pegawai}</p>
                
                <strong><i class="fas fa-genderless mr-1"></i> NIP</strong>
                <p class="text-muted">{$nip}</p>
                </p>
                <strong><i class="fas fa-genderless mr-1"></i> NIDN</strong>
                <p class="text-muted">{$NIDN}</p>
                
                <strong><i class="fas fa-genderless mr-1"></i> No Serdos</strong>

                <p class="text-muted">{$no_serdos}</p>
                <strong><i class="fas fa-genderless mr-1"></i> No KTP</strong>
                <p class="text-muted">{$no_KTP}</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> NPWP</strong>
                <p class="text-muted">
                    No: {$no_npwp} --  
                    Efin: {$efin} -- 
                    Alamat Pajak: {$alamat_npwp}
                </p>
                


                <strong><i class="fas fa-genderless mr-1"></i> No HP</strong>
                <p class="text-muted">{$no_hp}</p>

                <strong><i class="fas fa-genderless mr-1"></i> No Telp</strong>
                <p class="text-muted">{$no_telp}</p>

                <strong><i class="fas fa-genderless mr-1"></i> Rekening</strong>
                <p class="text-muted">
                    No: {$no_rek} -- 
                    Nama di Rek: {$nama_direk} -- 
                    Bank: {$bank} -- 
                    Cabang: {$cabang_rek}</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> No BPJS Kes</strong>
                <p class="text-muted">{$no_BPJS_kes}</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> No BPJS KTK</strong>
                <p class="text-muted">{$no_BPJS_ktk}</p>
                

                <strong><i class="fas fa-genderless mr-1"></i> No DPLK</strong>
                <p class="text-muted">{$no_DPLK}</p>
                
                                
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
                <p class="text-muted">{if $berkas_KTP eq ""}<b>No File</b>{else}<a href="files/{$berkas_KTP}">File KTP</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> NPWP</strong>
                <p class="text-muted">{if $berkas_NPWP eq ""}<b>No File</b>{else}<a href="files/{$berkas_NPWP}">File NPWP</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-sticky-note mr-1"></i> Akta Lahir</strong>
                <p class="text-muted">{if $berkas_akta_lahir eq ""}<b>No File</b>{else}<a href="files/{$berkas_akta_lahir}">File Akta Lahir</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Kartu Pegawai</strong>
                <p class="text-muted">{if $berkas_karpeg eq ""}<b>No File</b>{else}<a href="files/{$berkas_karpeg}">File Kartu Pegawai</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Serdos</strong>
                <p class="text-muted">{if $berkas_serdos eq ""}<b>No File</b>{else}<a href="files/{$berkas_serdos}">Files Serdos</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> KK</strong>
                <p class="text-muted">{if $berkas_KK eq ""}<b>No File</b>{else}<a href="files/{$berkas_KK}">File KK</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> DPLK</strong>
                <p class="text-muted">{if $berkas_DPLK eq ""}<b>No File</b>{else}<a href="files/{$berkas_DPLK}">File DPLK</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> BPJS Kes</strong>
                <p class="text-muted">{if $berkas_BPJS_kes eq ""}<b>No File</b>{else}<a href="files/{$berkas_BPJS_kes}">File BPJS Kes</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> BPJS KTK</strong>
                <p class="text-muted">{if $berkas_BPJS_ktk eq ""}<b>No File</b>{else}<a href="files/{$berkas_BPJS_ktk}">File BPJS KTK</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Scan TTD</strong>
                <p class="text-muted">{if $berkas_ttd eq ""}<b>No File</b>{else}<a href="files/{$berkas_ttd}">File Scan TTD</a>{/if}</p>
                <hr>

                <strong><i class="fas fa-credit-card mr-1"></i> Asuransi Lain</strong>
                <p class="text-muted">{if $asuransi_lain eq ""}<b>No File</b>{else}<a href="files/{$asuransi_lain}">File Asuransi Lain</a>{/if}</p>
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
{elseif $tampilan eq "edit"}
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
                <input name="namalogin" type="text" id="inputName" class="form-control" value="{$namalogin}">
              </div>
              <div class="form-group">
                <label for="inputName">Agama</label>
                <input name="agama" type="text" id="inputName" class="form-control" value="{$agama}">
              </div>           
              <div class="form-group">
                <label for="inputName">Tempat Lahir</label>
                <input name="tempat_lahir" type="text" id="inputName" class="form-control" value="{$tempat_lahir}">
              </div>
              <div class="form-group">
                  <label>Tanggal Lahir (yyyy/mm/dd)</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                      <input name="tanggal_lahir" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask value="{$tanggal_lahir}">
                  </div>
                  <!-- /.input group -->
              </div>
              <div class="form-group">
                <label for="inputName">Nama Ibu</label>
                <input name="nama_ibu" type="text" id="inputName" class="form-control" value="{$nama_ibu}">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Ayah</label>
                <input name="nama_ayah" type="text" id="inputName" class="form-control" value="{$nama_ayah}">
              </div>
              <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_kelamin">
                    {if $jk eq "Laki-laki"}
                    <option value="Laki-laki" selected="selected">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    {else}
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan" selected="selected">Perempuan</option>   
                    {/if}
                  </select>
                </div>               
              <div class="form-group">
                <label for="inputName">Alamat</label>
                <input name="alamat" type="text" id="inputName" class="form-control" value="{$alamat}">
              </div>
              <div class="form-group">
                <label for="inputName">Kode POS</label>
                <input name="kodepos" type="text" id="inputName" class="form-control" value="{$kodepos}">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input name="email" type="text" id="inputName" class="form-control" value="{$email}">
              </div>
              <div class="form-group">
                <label for="inputName">No KTP</label>
                <input name="no_KTP" type="text" id="inputName" class="form-control" value="{$no_KTP}">
              </div>
              <div class="form-group">
                <label for="inputName">No HP</label>
                <input name="no_hp" type="text" id="inputName" class="form-control" value="{$no_hp}">
              </div>
              <div class="form-group">
                <label for="inputName">No Telp</label>
                <input name="no_telp" type="text" id="inputName" class="form-control" value="{$no_telp}">
              </div>
              <div class="form-group">
                <label for="inputName">No. Rekening</label>
                <input name="no_rek" type="text" id="inputName" class="form-control" value="{$no_rek}">
              </div>
              <div class="form-group">
                <label for="inputName">Nama di Rek</label>
                <input name="nama_direk" type="text" id="inputName" class="form-control" value="{$nama_direk}">
              </div>
              <div class="form-group">
                <label for="inputName">Bank</label>
                <input name="bank" type="text" id="inputName" class="form-control" value="{$bank}">
              </div>
              <div class="form-group">
                <label for="inputName">Cabang</label>
                <input name="cabang_rek" type="text" id="inputName" class="form-control" value="{$cabang_rek}">
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
                      <input name="tmt_mulai_di_ui" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask value="{$tmt_mulai_di_ui}">
                  </div>
                  <!-- /.input group -->
              </div>              
              <div class="form-group">
                <label for="inputName">Gelar Depan</label>
                <input name="gelar_depan" type="text" id="inputName" class="form-control" value="{$gelar_depan}">
              </div>
              <div class="form-group">
                <label for="inputName">Gelar Belakang</label>
                <input name="gelar_belakang" type="text" id="inputName" class="form-control" value="{$gelar_belakang}">
              </div>
              <div class="form-group">
                <label for="inputName">Jenis Pegawai</label>
                <input name="jenis_pegawai" type="text" id="inputName" class="form-control" value="{$jenis_pegawai}">
              </div> 
              <div class="form-group">
                <label for="inputName">NIP</label>
                <input name="nip" type="text" id="inputName" class="form-control" value="{$nip}">
              </div>
              <div class="form-group">
                <label for="inputName">NIDN</label>
                <input name="nidn" type="text" id="inputName" class="form-control" value="{$nidn}">
              </div>
              <div class="form-group">
                <label for="inputName">No Serdos</label>
                <input name="no_serdos" type="text" id="inputName" class="form-control" value="{$no_serdos}">
              </div>
              <div class="form-group">
                <label for="inputName">Tanggal Pensiun</label>
                <input name="tanggal_pensiun" type="text" id="inputName" class="form-control" value="{$tanggal_pensiun}">
              </div>              
              <div class="form-group">
                <label for="inputName">Golongan</label>
                <input name="golongan" type="text" id="inputName" class="form-control" value="{$golongan}">
              </div> 
              <div class="form-group">
                <label for="inputName">Pendidikan</label>
                <input name="pendidikan" type="text" id="inputName" class="form-control" value="{$pendidikan}">
              </div>
              <div class="form-group">
                <label for="inputName">NPWP</label>
                <input name="no_npwp" type="text" id="inputName" class="form-control" value="{$no_npwp}">
              </div>
              <div class="form-group">
                <label for="inputName">Efin</label>
                <input name="efin" type="text" id="inputName" class="form-control" value="{$efin}">
              </div>
              <div class="form-group">
                <label for="inputName">Alamat Pajak</label>
                <input name="alamat_npwp" type="text" id="inputName" class="form-control" value="{$alamat_npwp}">
              </div>
              <div class="form-group">
                <label for="inputName">No BPJS Kes</label>
                <input name="no_BPJS_kes" type="text" id="inputName" class="form-control" value="{$no_BPJS_kes}">
              </div>
              <div class="form-group">
                <label for="inputName">No BPJS KTK</label>
                <input name="no_BPJS_ktk" type="text" id="inputName" class="form-control" value="{$no_BPJS_ktk}">
              </div>
              <div class="form-group">
                <label for="inputName">No DPLK</label>
                <input name="no_DPLK" type="text" id="inputName" class="form-control" value="{$no_DPLK}">
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
{/if}