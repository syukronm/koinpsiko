<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">          
          {if $manip eq "tambah"}
          <div class="col-sm-6">
            <h1>Tambah Data CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad">Batal Tambah Data</a></li>
            </ol>
          </div>
          {elseif $manip eq "ubah"}
          <div class="col-sm-6">
            <h1>Ubah Data CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad">Batal Ubah Data</a></li>
            </ol>
          </div>
          {elseif $manip eq "awal"}
          <div class="col-sm-6">
            <h1>Data CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad&kuy=t">Tambah Data</a></li>
            </ol>
          </div> 
          {elseif $manip eq "lihat"}
          <div class="col-sm-6">
            <h1>Data Detail CPU</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="users.php?Roiy97YthR=upcatad">Kembali Data</a></li>
            </ol>
          </div>    
          {/if}
        </div>
      </div><!-- /.container-fluid -->
    </section>
    {if $manip eq "awal"}
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
                {section name=cpu loop=$view}    
                <tr> 
                    <td>{$view[cpu].pemilik}</td>
                    <td>{$view[cpu].unit}</td>
                    <td><a href="users.php?Roiy97YthR=upcatad&kuy=l&i={$view[cpu].id_cpu}">{$view[cpu].pcname}</a></td>
                    <td>{$view[cpu].tahun}</td>
                    <td>{$view[cpu].kondisi}</td>
                    <td> 
                      <a href="users.php?Roiy97YthR=upcatad&kuy=u&i={$view[cpu].id_cpu}">Ubah</a>&nbsp;|&nbsp;<a href="users.php?Roiy97YthR=upcatad&kuy=h&i={$view[cpu].id_cpu}" onclick ="return confirm ('Yakin akan menghapus?');">Hapus</a>
                    {$view[cpu].tabi_nip}
                    </td>
                </tr>
                {/section}
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
    {elseif $manip eq "tambah"}
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
                <input name="kode_barang" type="text" id="inputName" class="form-control" required="">
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
                <input name="ket" type="text" id="inputName" class="form-control" required="">
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
                <input name="ip_lan" type="text" id="inputName" class="form-control" required="">
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
    {elseif $manip eq "ubah"}
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
                <input name="kode_barang" type="text" id="inputName" class="form-control" required="" value="{$kode_barang}">
              </div>
              <div class="form-group">
                <label for="inputName">Pemilik</label>
                <input name="pemilik" type="text" id="inputName" class="form-control" required="" value="{$pemilik}">
              </div>           
              <div class="form-group">
                <label for="inputName">Unit</label>
                <input name="unit" type="text" id="inputName" class="form-control" required="" value="{$unit}">
              </div>
              <div class="form-group">
                <label for="inputName">Nama Komputer</label>
                <input name="pcname" type="text" id="inputName" class="form-control" required="" value="{$pcname}">
              </div>
              <div class="form-group">
                <label for="inputName">Tahun</label>
                  <select name="tahun" required>
                      <option value="">- Tahun CPU -</option>
                    {section name=x loop=$tahunn}
                      {if $tahun eq $tahunn[x]}
                      <option value="{$tahunn[x]}" selected>{$tahunn[x]}</option>
                      {else}
                      <option value="{$tahunn[x]}">{$tahunn[x]}</option>
                      {/if}
                    {/section}    
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">Brand CPU</label>
                <input name="brand_cpu" type="text" id="inputName" class="form-control" required="" value="{$brand_cpu}">
              </div>
              <div class="form-group">
                <label for="inputName">Operating System</label>
                <input name="os" type="text" id="inputName" class="form-control" required="" value="{$os}">
              </div>
              <div class="form-group">
                <label for="inputName">Kondisi</label>
                <input name="kondisi" type="text" id="inputName" class="form-control" required="" value="{$kondisi}">
              </div>                
              <div class="form-group">
                <label for="inputName">Keterangan</label>
                <input name="ket" type="text" id="inputName" class="form-control" required="" value="{$ket}">
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
                    {if $hdd_tipe eq "IDE"}
                      <option value="IDE" selected> IDE </option>
                      <option value="SATA"> SATA </option>
                      <option value="SSD"> SSD </option>
                    {elseif $hdd_tipe eq "SATA"}
                      <option value="IDE"> IDE </option>
                      <option value="SATA" selected> SATA </option>
                      <option value="SSD"> SSD </option>
                    {elseif $hdd_tipe eq "SSD"}
                      <option value="IDE"> IDE </option>
                      <option value="SATA"> SATA </option>
                      <option value="SSD" selected> SSD </option>
                    {/if}
                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Hardisk</label>
                <input name="ukuran_hdd" type="text" id="inputName" class="form-control" required="" value="{$ukuran_hdd}">
              </div>              
              <div class="form-group">
                <label for="inputName">Tipe RAM</label>
                <input name="tipe_ram" type="text" id="inputName" class="form-control" required="" value="{$tipe_ram}">
              </div> 
              <div class="form-group">
                <label for="inputName">Ukuran RAM</label>
                <input name="ukuran_ram" type="text" id="inputName" class="form-control" required="" value="{$ukuran_ram}">
              </div>
              <div class="form-group">
                <label for="inputName">Prossesor</label>
                <input name="prossesor" type="text" id="inputName" class="form-control" required="" value="{$prossesor}">
              </div>
              <div class="form-group">
                <label for="inputName">Ada LAN</label>
                  <select name="ada_lan" required>
                    {if $ada_lan eq "1"}
                      <option value="1" selected>- Ada -</option>
                      <option value="0">Tidak Ada</option>
                    {elseif $ada_lan eq "0"}
                      <option value="1">- Ada -</option>
                      <option value="0" selected>Tidak Ada</option>
                    {/if}
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">IP LAN</label>
                <input name="ip_lan" type="text" id="inputName" class="form-control" required="" value="{$ip_lan}">
              </div>
              <div class="form-group">
                <label for="inputName">Ada Wifi</label>
                  <select name="ada_wifi" required>
                    {if $ada_wifi eq "1"}
                      <option value="1" selected>- Ada -</option>
                      <option value="0">Tidak Ada</option>
                    {elseif $ada_wifi eq "0"}
                      <option value="1">- Ada -</option>
                      <option value="0" selected>Tidak Ada</option>
                    {/if}
                  </select>
              </div>
              <div class="form-group">
                <label for="inputName">Brand Monitor</label>
                <input name="brand_monitor" type="text" id="inputName" class="form-control" required="" value="{$brand_monitor}">
              </div>
              <div class="form-group">
                <label for="inputName">Ukuran Monitor</label>
                <input name="ukuran_monitor" type="text" id="inputName" class="form-control" required="" value="{$ukuran_monitor}">
              </div>
              <div class="form-group">
                <input name="index_data" type="hidden" value="{$index_data}">
                <input type="submit" value="Simpan">
              </div>            
            </div>
            </form>
            <!-- /.card-body -->
          </div>
        </div>
      </div>           
    </section>
    {elseif $manip eq "lihat"}
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
                        <b>Kode Barang</b> <a class="float-right">{$kode_barang}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Unit</b> <a class="float-right">{$unit}</a>
                      </li> 
                      <li class="list-group-item">
                        <b>Nama Komputer</b> <a class="float-right">{$pcname}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Tahun CPU</b> <a class="float-right">{$tahun}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Brand CPU</b> <a class="float-right">{$brand_cpu}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Operating System</b> <a class="float-right">{$os}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Kondisi</b> <a class="float-right">{$kondisi}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Foto</b>
                        <img src="files/{$foto}" height="50%" width="50%">
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
                        <b>Ukuran Hardisk</b> <a class="float-right">{$ukuran_hdd}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Tipe RAM</b> <a class="float-right">{$tipe_ram}</a>
                      </li> 
                      <li class="list-group-item">
                        <b>Ukuran RAM</b> <a class="float-right">{$ukuran_ram}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Prossesor</b> <a class="float-right">{$prossesor}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Ada LAN</b> <a class="float-right">{if $ada_lan eq "1"}- Ada -{elseif $ada_lan eq "0"}- Tidak Ada -{/if}</a>
                      </li>
                      <li class="list-group-item">
                        <b>IP LAN</b> <a class="float-right">{$ip_lan}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Ada Wifi</b> <a class="float-right">{if $ada_wifi eq "1"}- Ada -{elseif $ada_wifi eq "0"}- Tidak Ada -{/if}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Brand Monitor</b><a class="float-right">{$brand_monitor}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Brand Monitor</b><a class="float-right">{$brand_monitor}</a>
                      </li> 
                      <li class="list-group-item">
                        <b>Ukuran Monitor</b><a class="float-right">{$ukuran_monitor}</a>
                      </li>
                      <li class="list-group-item"></li>
                      <li class="list-group-item">
                        <b></b><a href="users.php?Roiy97YthR=upcatad&kuy=ahis1" class="float-right">Add History</a>
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

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Rekap histori perbaikan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                  <th>Keluhan</th>
                  <th>Solusi</th>
                  <th>Pemeriksa</th>
                </tr>
                </thead>
                <tbody>
                {section name=cpu loop=$view}    
                <tr> 
                    <td></td>
                    <td></td>                    
                    <td></td>
                    <td></td>
                </tr>
                {/section}
                </tbody>
                <tfoot>
                <tr>
                  <th>Tanggal</th>
                  <th>Keluhan</th>
                  <th>Solusi</th>
                  <th>Pemeriksa</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>           
    </section>
    {/if}
  </div>
  <!-- /.content-wrapper -->
</div>