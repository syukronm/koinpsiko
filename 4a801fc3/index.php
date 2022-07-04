<?php
require_once("../3a8e4.php");
$sess_modup     = $_GET["Roiy97YthR"];
$max_size   = 1000000; // 1MB
$file_type  = array('jpg','jpeg','png','gif','bmp', 'JPG','JPEG','PNG','GIF','BMP');
$eror   = false;

//memeriksa apakah yang masuk admin
if(isset($_COOKIE['nextgen_token'])){
    $token = $_COOKIE['nextgen_token'];
    $now = date("Y-m-d H:i:s");
    $cek = $db->Execute("SELECT * FROM tab_mlebet_log WHERE token = '$token' AND expired > '$now'");
    if($cek){
        #kalau token di cookie tersebut ada, lakukan pengecekan IP dan User Agent
        $row = $cek->FetchRow();
        if($row['ip'] == $_SERVER['REMOTE_ADDR'] || $row['useragent'] == $_SERVER['HTTP_USER_AGENT']){
            //kondisi bisa disesuaikan utk kebutuhan dengan ATAU / DAN
            //kondisi DAN boleh dipakai, tapi terlalu strict.. Lebih baik pakai ATAU saja.
            $username = $row['tabi_email'];

            //kembalikan data user yg sedang login,, siapa tahu nanti ingin diolah
            $get_admin = $db->Execute("SELECT * FROM tab_mlebet WHERE tabi_email= '$username'");
            $rget = $get_admin->FetchRow();
            $tabi_fullname = $rget['tabi_fullname'];
            $sess_kodeakun = $rget['tabi_kodeakun'];                
        }
    }
}
else
{
    print "<script>location.href='../';</script>";
}


switch($sess_kodeakun)
{
case "1"://superadmin
    if($_GET['kuy']=="")//awal
    {
        
    }
    elseif($_GET['kuy']=="t")//tambah
    {   
        for ($x = 2000; $x <= 2050; $x++) 
        {
          $tahun[]=$x;
        }   
        $koinp->assign("manip", "tambah");
        $koinp->assign("tahun", $tahun);
    }
    elseif($_GET['kuy']=="tok")//tambah_ok
    {       
        $kode_barang = addslashes($_REQUEST["kode_barang"]);
        $pemilik = addslashes($_REQUEST["pemilik"]);
        $unit = addslashes($_REQUEST["unit"]);
        $pcname = addslashes($_REQUEST["pcname"]);
        $tahun = addslashes($_REQUEST["tahun"]);
        $brand_cpu = addslashes($_REQUEST["brand_cpu"]);
        $hdd_tipe = addslashes($_REQUEST["hdd_tipe"]);
        $ukuran_hdd = addslashes($_REQUEST["ukuran_hdd"]);
        $tipe_ram = addslashes($_REQUEST["tipe_ram"]);
        $ukuran_ram = addslashes($_REQUEST["ukuran_ram"]);
        $prossesor = addslashes($_REQUEST["prossesor"]);
        $os = addslashes($_REQUEST["os"]);
        $ada_lan = addslashes($_REQUEST["ada_lan"]);
        $ip_lan = addslashes($_REQUEST["ip_lan"]);
        $ada_wifi = addslashes($_REQUEST["ada_wifi"]);
        $brand_monitor = addslashes($_REQUEST["brand_monitor"]);
        $ukuran_monitor = addslashes($_REQUEST["ukuran_monitor"]);
        $kondisi = addslashes($_REQUEST["kondisi"]);
        $foto= addslashes($_FILES["foto"]["name"]);
        $ket = addslashes($_REQUEST["ket"]);
                
        //Mulai memorises data
        $file_name  = $_FILES['foto']['name'];
        $file_size  = $_FILES['foto']['size'];
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];
     
        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type)){
            $eror   = true;
            $pesan  = '- Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size){
            $eror   = true;
            $pesan  = '- Ukuran file melebihi batas maximum';
        }
        //check ukuran file apakah sudah sesuai
            
        if($eror == true){
            print"<script>alert('$pesan');</script>";
        }
        else
        {   
            $unik_time = date("Y-m-d-h-i-s");
            $ganti_nama_file= $pendidikan.$unik_time.substr($foto,-4);
            if(file_exists("files/".$ganti_nama_file))
            {
                unlink("files/".$ganti_nama_file);
            }
            copy($_FILES["foto"]["tmp_name"],"files/".$ganti_nama_file);
            $sql="INSERT INTO `tab_cpu`(`id_cpu`, `kode_barang`, `pemilik`, `unit`, `pcname`, `tahun`, `brand_cpu`, `hdd_tipe`, `ukuran_hdd`, `tipe_ram`, `ukuran_ram`, `prossesor`, `os`, `ada_lan`, `ip_lan`, `ada_wifi`, `brand_monitor`, `ukuran_monitor`, `kondisi`, `foto`, `ket`) VALUES ('', '$kode_barang', '$pemilik', '$unit', '$pcname', '$tahun', '$brand_cpu', '$hdd_tipe', '$ukuran_hdd', '$tipe_ram', '$ukuran_ram', '$prossesor', '$os', '$ada_lan', '$ip_lan', '$ada_wifi', '$brand_monitor', '$ukuran_monitor', '$kondisi', '$ganti_nama_file', '$ket')";
            if($db->Execute($sql))
            {
                print "<script>alert('Data CPU berhasil ditambahkan');location.href='users.php?Roiy97YthR=upcatad';</script>";
            }
            else
            {
                print "<script>alert('Data CPU gagal ditambahkan');location.href='users.php?Roiy97YthR=upcatad&kuy=t';</script>";
            }
        }
    }
    elseif($_GET['kuy']=="u")//ubah
    {
        $index_data = $_GET['i'];
        $sql_cpuk= "SELECT * FROM tab_cpu WHERE `id_cpu`='$index_data'";
        $rs_cpuk = $db->Execute($sql_cpuk);
        $row_cpuk = $rs_cpuk->FetchRow();
        
        $kode_barang = $row_cpuk[1];
        $pemilik = $row_cpuk[2];
        $unit = $row_cpuk[3];
        $pcname = $row_cpuk[4];
        $tahun = $row_cpuk[5];
        $brand_cpu = $row_cpuk[6];
        $hdd_tipe = $row_cpuk[7];
        $ukuran_hdd = $row_cpuk[8];
        $tipe_ram = $row_cpuk[9];
        $ukuran_ram = $row_cpuk[10];
        $prossesor = $row_cpuk[11];
        $os = $row_cpuk[12];
        $ada_lan = $row_cpuk[13];
        $ip_lan = $row_cpuk[14];
        $ada_wifi = $row_cpuk[15];
        $brand_monitor = $row_cpuk[16];
        $ukuran_monitor = $row_cpuk[17];
        $kondisi = $row_cpuk[18];
        $foto= $row_cpuk[19];
        $ket = $row_cpuk[20];

        for ($x = 2000; $x <= 2050; $x++) 
        {
          $tahunn[]=$x;
        }

        $koinp->assign("index_data", $index_data);
        $koinp->assign("tahunn", $tahunn);
        $koinp->assign("kode_barang", $kode_barang);
        $koinp->assign("pemilik", $pemilik);
        $koinp->assign("unit", $unit);
        $koinp->assign("pcname", $pcname);
        $koinp->assign("tahun", $tahun);
        $koinp->assign("brand_cpu", $brand_cpu);
        $koinp->assign("hdd_tipe", $hdd_tipe);
        $koinp->assign("ukuran_hdd", $ukuran_hdd);
        $koinp->assign("tipe_ram", $tipe_ram);
        $koinp->assign("ukuran_ram", $ukuran_ram);
        $koinp->assign("prossesor", $prossesor);
        $koinp->assign("os", $os);
        $koinp->assign("ada_lan", $ada_lan);
        $koinp->assign("ip_lan", $ip_lan);
        $koinp->assign("ada_wifi", $ada_wifi);
        $koinp->assign("brand_monitor", $brand_monitor);
        $koinp->assign("ukuran_monitor", $ukuran_monitor);
        $koinp->assign("kondisi", $kondisi);
        $koinp->assign("foto", $foto);
        $koinp->assign("ket", $ket);
        $koinp->assign("manip", "ubah");
    }
    elseif($_GET['kuy']=="uok")//ubah_ok
    {       
        $index_data = addslashes($_REQUEST["index_data"]);
        $kode_barang = addslashes($_REQUEST["kode_barang"]);
        $pemilik = addslashes($_REQUEST["pemilik"]);
        $unit = addslashes($_REQUEST["unit"]);
        $pcname = addslashes($_REQUEST["pcname"]);
        $tahun = addslashes($_REQUEST["tahun"]);
        $brand_cpu = addslashes($_REQUEST["brand_cpu"]);
        $hdd_tipe = addslashes($_REQUEST["hdd_tipe"]);
        $ukuran_hdd = addslashes($_REQUEST["ukuran_hdd"]);
        $tipe_ram = addslashes($_REQUEST["tipe_ram"]);
        $ukuran_ram = addslashes($_REQUEST["ukuran_ram"]);
        $prossesor = addslashes($_REQUEST["prossesor"]);
        $os = addslashes($_REQUEST["os"]);
        $ada_lan = addslashes($_REQUEST["ada_lan"]);
        $ip_lan = addslashes($_REQUEST["ip_lan"]);
        $ada_wifi = addslashes($_REQUEST["ada_wifi"]);
        $brand_monitor = addslashes($_REQUEST["brand_monitor"]);
        $ukuran_monitor = addslashes($_REQUEST["ukuran_monitor"]);
        $kondisi = addslashes($_REQUEST["kondisi"]);
        $foto= addslashes($_FILES["foto"]["name"]);
        $ket = addslashes($_REQUEST["ket"]);
                
        //Mulai memorises data
        $file_name  = $_FILES['foto']['name'];
        $file_size  = $_FILES['foto']['size'];
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];
                
        if($foto=="")
        {
            $sql="UPDATE `tab_cpu` SET `kode_barang`='$kode_barang',`pemilik`='$pemilik',`unit`='$unit',`pcname`='$pcname',`tahun`='$tahun',`brand_cpu`='$brand_cpu',`hdd_tipe`='$hdd_tipe',`ukuran_hdd`='$ukuran_hdd',`tipe_ram`='$tipe_ram',`ukuran_ram`='$ukuran_ram',`prossesor`='$prossesor',`os`='$os',`ada_lan`='$ada_lan',`ip_lan`='$ip_lan',`ada_wifi`='$ada_wifi',`brand_monitor`='$brand_monitor',`ukuran_monitor`='$ukuran_monitor',`kondisi`='$kondisi',`ket`='$ket' WHERE `id_cpu`='$index_data'";
            if($db->Execute($sql))
            {
                print "<script>alert('Data CPU berhasil diubah');location.href='users.php?Roiy97YthR=upcatad';</script>";
            }
            else
            {
                print "<script>alert('Data Pendidikan gagal diubah');location.href='users.php?Roiy97YthR=pendkkn&kuy=u&i=$index_data';</script>";
            }
        }
        else
        {
            //check apakah type file sudah sesuai
            if(!in_array($extensi,$file_type)){
                $eror   = true;
                $pesan  = '- Type file yang anda upload tidak sesuai';
            }
            if($file_size > $max_size){
                $eror   = true;
                $pesan  = '- Ukuran file melebihi batas maximum';
            }
            //check ukuran file apakah sudah sesuai
                
            if($eror == true){
                print"<script>alert('$pesan');</script>";
            }
            else
            {   
                $unik_time = date("Y-m-d-h-i-s");
                $ganti_nama_file= $pendidikan.$unik_time.substr($foto,-4);
                if(file_exists("files/".$ganti_nama_file))
                {
                    unlink("files/".$ganti_nama_file);
                }
                copy($_FILES["foto"]["tmp_name"],"files/".$ganti_nama_file);
                $sql="UPDATE `tab_cpu` SET `kode_barang`='$kode_barang',`pemilik`='$pemilik',`unit`='$unit',`pcname`='$pcname',`tahun`='$tahun',`brand_cpu`='$brand_cpu',`hdd_tipe`='$hdd_tipe',`ukuran_hdd`='$ukuran_hdd',`tipe_ram`='$tipe_ram',`ukuran_ram`='$ukuran_ram',`prossesor`='$prossesor',`os`='$os',`ada_lan`='$ada_lan',`ip_lan`='$ip_lan',`ada_wifi`='$ada_wifi',`brand_monitor`='$brand_monitor',`ukuran_monitor`='$ukuran_monitor',`kondisi`='$kondisi',`foto`='$ganti_nama_file' ,`ket`='$ket' WHERE `id_cpu`='$index_data'";
                if($db->Execute($sql))
                {
                    print "<script>alert('Data CPU berhasil diubah');location.href='users.php?Roiy97YthR=upcatad';</script>";
                }
                else
                {
                    print "<script>alert('Data Pendidikan gagal diubah');location.href='users.php?Roiy97YthR=pendkkn&kuy=u&i=$index_data';</script>";
                }
            }
        }
    }
    elseif($_GET['kuy']=="h")//hapus
    {
        $index_data = $_GET['i'];
        $sql= "DELETE FROM `tab_cpu` WHERE `id_cpu`='$index_data'";
        $rs=$db->Execute($sql); 
        
        if($db->Execute($sql))
        {
           print "<script>alert('Data CPU berhasil diubah');location.href='users.php?Roiy97YthR=upcatad';</script>";
        }
        else
        {
            print "<script>alert('Data CPU gagal diubah');location.href='users.php?Roiy97YthR=upcatad';</script>";
        }
    }
    elseif($_GET['kuy']=="l")//lihat
    {
        $index_data = $_GET['i'];
        $sql_cpuk= "SELECT * FROM tab_cpu WHERE `id_cpu`='$index_data'";
        $rs_cpuk = $db->Execute($sql_cpuk);
        $row_cpuk = $rs_cpuk->FetchRow();
        
        $kode_barang = $row_cpuk[1];
        $pemilik = $row_cpuk[2];
        $unit = $row_cpuk[3];
        $pcname = $row_cpuk[4];
        $tahun = $row_cpuk[5];
        $brand_cpu = $row_cpuk[6];
        $hdd_tipe = $row_cpuk[7];
        $ukuran_hdd = $row_cpuk[8];
        $tipe_ram = $row_cpuk[9];
        $ukuran_ram = $row_cpuk[10];
        $prossesor = $row_cpuk[11];
        $os = $row_cpuk[12];
        $ada_lan = $row_cpuk[13];
        $ip_lan = $row_cpuk[14];
        $ada_wifi = $row_cpuk[15];
        $brand_monitor = $row_cpuk[16];
        $ukuran_monitor = $row_cpuk[17];
        $kondisi = $row_cpuk[18];
        $foto= $row_cpuk[19];
        $ket = $row_cpuk[20];

        $koinp->assign("kode_barang", $kode_barang);
        $koinp->assign("pemilik", $pemilik);
        $koinp->assign("unit", $unit);
        $koinp->assign("pcname", $pcname);
        $koinp->assign("tahun", $tahun);
        $koinp->assign("brand_cpu", $brand_cpu);
        $koinp->assign("hdd_tipe", $hdd_tipe);
        $koinp->assign("ukuran_hdd", $ukuran_hdd);
        $koinp->assign("tipe_ram", $tipe_ram);
        $koinp->assign("ukuran_ram", $ukuran_ram);
        $koinp->assign("prossesor", $prossesor);
        $koinp->assign("os", $os);
        $koinp->assign("ada_lan", $ada_lan);
        $koinp->assign("ip_lan", $ip_lan);
        $koinp->assign("ada_wifi", $ada_wifi);
        $koinp->assign("brand_monitor", $brand_monitor);
        $koinp->assign("ukuran_monitor", $ukuran_monitor);
        $koinp->assign("kondisi", $kondisi);
        $koinp->assign("foto", $foto);
        $koinp->assign("ket", $ket);
        $koinp->assign("manip", "lihat");
    }
    elseif($_GET['kuy']=="ahis1")//lihat
    {
        $index_data = $_GET['i'];
        $sql_cpuk= "SELECT * FROM tab_cpu WHERE `id_cpu`='$index_data'";
        $rs_cpuk = $db->Execute($sql_cpuk);
        $row_cpuk = $rs_cpuk->FetchRow();
        
        $kode_barang = $row_cpuk[1];
        $pemilik = $row_cpuk[2];
        $unit = $row_cpuk[3];
        $pcname = $row_cpuk[4];
        $tahun = $row_cpuk[5];
        $brand_cpu = $row_cpuk[6];
        $hdd_tipe = $row_cpuk[7];
        $ukuran_hdd = $row_cpuk[8];
        $tipe_ram = $row_cpuk[9];
        $ukuran_ram = $row_cpuk[10];
        $prossesor = $row_cpuk[11];
        $os = $row_cpuk[12];
        $ada_lan = $row_cpuk[13];
        $ip_lan = $row_cpuk[14];
        $ada_wifi = $row_cpuk[15];
        $brand_monitor = $row_cpuk[16];
        $ukuran_monitor = $row_cpuk[17];
        $kondisi = $row_cpuk[18];
        $foto= $row_cpuk[19];
        $ket = $row_cpuk[20];

        $koinp->assign("kode_barang", $kode_barang);
        $koinp->assign("pemilik", $pemilik);
        $koinp->assign("unit", $unit);
        $koinp->assign("pcname", $pcname);
        $koinp->assign("tahun", $tahun);
        $koinp->assign("brand_cpu", $brand_cpu);
        $koinp->assign("hdd_tipe", $hdd_tipe);
        $koinp->assign("ukuran_hdd", $ukuran_hdd);
        $koinp->assign("tipe_ram", $tipe_ram);
        $koinp->assign("ukuran_ram", $ukuran_ram);
        $koinp->assign("prossesor", $prossesor);
        $koinp->assign("os", $os);
        $koinp->assign("ada_lan", $ada_lan);
        $koinp->assign("ip_lan", $ip_lan);
        $koinp->assign("ada_wifi", $ada_wifi);
        $koinp->assign("brand_monitor", $brand_monitor);
        $koinp->assign("ukuran_monitor", $ukuran_monitor);
        $koinp->assign("kondisi", $kondisi);
        $koinp->assign("foto", $foto);
        $koinp->assign("ket", $ket);
        $koinp->assign("manip", "lihat");
    }
    $koinp->assign("isi","beranda.tpl");
break;
//======================================================================
case "2"://Designer
    if($_GET['kuy']=="")//awal
    {
        $sql= "SELECT * FROM tab_kerier WHERE id_pegawai='$sess_iduser'";
        $rs=$db->Execute($sql); 
        
        while($row=$rs->FetchRow())
        {
            $view[]=$row;
        }   
        
        $koinp->assign("view", $view);
        $koinp->assign("manip", "awal");
    }
    elseif($_GET['kuy']=="t")//tambah
    {       
        $koinp->assign("manip", "tambah");
    }
    elseif($_GET['kuy']=="tok")//tambah_ok
    {       
        $pendidikan = addslashes($_REQUEST["pendidikan"]);
        $lembaga = addslashes($_REQUEST["lembaga"]);
        $lokasi = addslashes($_REQUEST["lokasi"]);
        $prodi = addslashes($_REQUEST["prodi"]);
        $no_ijazah = addslashes($_REQUEST["no_ijazah"]);
        $ijazah= addslashes($_FILES["file"]["name"]);
        $tgl_lulus = addslashes($_REQUEST["tgl_lulus"]);
                
        //Mulai memorises data
        $file_name  = $_FILES['ijazah']['name'];
        $file_size  = $_FILES['ijazah']['size'];
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];
     
        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type)){
            $eror   = true;
            $pesan  = '- Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size){
            $eror   = true;
            $pesan  = '- Ukuran file melebihi batas maximum';
        }
        //check ukuran file apakah sudah sesuai
            
        if($eror == true){
            print"<script>alert('$pesan');</script>";
        }
        else
        {   
            $unik_time = date("Y-m-d-h-i-s");
            $ganti_nama_file= $pendidikan.$unik_time.substr($ijazah,-4);
            if(file_exists("files/".$ganti_nama_file))
            {
                unlink("files/".$ganti_nama_file);
            }
            copy($_FILES["ijazah"]["tmp_name"],"files/".$ganti_nama_file);
            $sql="INSERT INTO tab_cpu VALUES('','$sess_iduser','$pendidikan','$lembaga','$lokasi','$prodi','$tgl_lulus','$no_ijazah','$ganti_nama_file')";
            if($db->Execute($sql))
            {
                print "<script>alert('Data Pendidikan berhasil ditambahkan');location.href='users.php?Roiy97YthR=pendkkn';</script>";
            }
            else
            {
                print "<script>alert('Data Pendidikan gagal ditambahkan');location.href='users.php?Roiy97YthR=pendkkn&kuy=t';</script>";
            }
        }
    }
    elseif($_GET['kuy']=="u")//ubah
    {
        $index_data = $_GET['i'];
        $sql_cpuk= "SELECT * FROM tab_cpu WHERE `id_cpu`='$index_data'";
        $rs_cpuk = $db->Execute($sql_cpuk);
        $row_cpuk = $rs_cpuk->FetchRow();
        
        $pendidikan = $row_cpuk[2];
        $nama_lembaga = $row_cpuk[3];
        $lokasi = $row_cpuk[4];
        $program_studi  = $row_cpuk[5];
        $tgl_lulus = $row_cpuk[6];
        $no_ijazah = $row_cpuk[7];

        $koinp->assign("pendidikan", $pendidikan);
        $koinp->assign("nama_lembaga", $nama_lembaga);
        $koinp->assign("lokasi", $lokasi);
        $koinp->assign("program_studi", $program_studi);
        $koinp->assign("tgl_lulus", $tgl_lulus);
        $koinp->assign("no_ijazah", $no_ijazah);
        $koinp->assign("index_data", $index_data);
        $koinp->assign("manip", "ubah");
    }
    elseif($_GET['kuy']=="uok")//ubah_ok
    {       
        $pendidikan = addslashes($_REQUEST["pendidikan"]);
        $lembaga = addslashes($_REQUEST["lembaga"]);
        $lokasi = addslashes($_REQUEST["lokasi"]);
        $prodi = addslashes($_REQUEST["prodi"]);
        $no_ijazah = addslashes($_REQUEST["no_ijazah"]);
        $ijazah= addslashes($_FILES["file"]["name"]);
        $tgl_lulus = addslashes($_REQUEST["tgl_lulus"]);
        $index_data = addslashes($_REQUEST["index_data"]);
                
        if($ijazah=="")
        {
            $sql="UPDATE `tab_cpu` SET `pendidikan`='$pendidikan',`nama_lembaga`='$lembaga',`lokasi`='$lokasi',`program_studi`='$prodi',`tgl_lulus`='$tgl_lulus',`no_ijazah`='$no_ijazah' WHERE `id_cpu`='$index_data'";
            if($db->Execute($sql))
            {
                print "<script>alert('Data Pendidikan berhasil diubah');location.href='users.php?Roiy97YthR=pendkkn';</script>";
            }
            else
            {
                print "<script>alert('Data Pendidikan gagal diubah');location.href='users.php?Roiy97YthR=pendkkn&kuy=u&i=$index_data';</script>";
            }
        }
        else
        {
            //Mulai memorises data
            $file_name  = $_FILES['ijazah']['name'];
            $file_size  = $_FILES['ijazah']['size'];
            //cari extensi file dengan menggunakan fungsi explode
            $explode    = explode('.',$file_name);
            $extensi    = $explode[count($explode)-1];
         
            //check apakah type file sudah sesuai
            if(!in_array($extensi,$file_type)){
                $eror   = true;
                $pesan  = '- Type file yang anda upload tidak sesuai';
            }
            if($file_size > $max_size){
                $eror   = true;
                $pesan  = '- Ukuran file melebihi batas maximum';
            }
            //check ukuran file apakah sudah sesuai
                
            if($eror == true){
                print"<script>alert('$pesan');</script>";
            }
            else
            {   
                $unik_time = date("Y-m-d-h-i-s");
                $ganti_nama_file= $pendidikan.$unik_time.substr($ijazah,-4);
                if(file_exists("files/".$ganti_nama_file))
                {
                    unlink("files/".$ganti_nama_file);
                }
                copy($_FILES["ijazah"]["tmp_name"],"files/".$ganti_nama_file);
                echo $sql="UPDATE `tab_cpu` SET `pendidikan`='$pendidikan',`nama_lembaga`='$lembaga',`lokasi`='$lokasi',`program_studi`='$prodi',`tgl_lulus`='$tgl_lulus',`no_ijazah`='$no_ijazah',`file_ijazah`='$ganti_nama_file' WHERE `id_cpu`='$index_data'";
                /*if($db->Execute($sql))
                {
                    print "<script>alert('Data Pendidikan berhasil diubah');location.href='users.php?Roiy97YthR=pendkkn';</script>";
                }
                else
                {
                    print "<script>alert('Data Pendidikan gagal diubah');location.href='users.php?Roiy97YthR=pendkkn&kuy=u&i=$index_data';</script>";
                }*/
            }
        }
    }
    elseif($_GET['kuy']=="h")//hapus
    {
        $index_data = $_GET['i'];
        $sql= "DELETE FROM `tab_cpu` WHERE `id_cpu`='$index_data'";
        $rs=$db->Execute($sql); 
        
        if($db->Execute($sql))
        {
           print "<script>alert('Data Pendidikan berhasil dihapus');location.href='users.php?Roiy97YthR=pendkkn';</script>";
        }
        else
        {
            print "<script>alert('Data Pendidikan dihapus');location.href='users.php?Roiy97YthR=pendkkn';</script>";
        }
    }
    $koinp->assign("isi","riwayat_karier.tpl");
break;
//=====================================================================
case "3"://user
    $tampil = 50;
    $sql = "SELECT
                tbl_pegawai.id_pegawai, 
                tbl_pegawai.gelar_depan,
                tbl_pegawai.nama, 
                tbl_pegawai.gelar_belakang,
                tbl_pegawai.nip, 
                tbl_departemen.departemen,
                tbl_pegawai.tempat_lahir,
                tbl_pegawai.tanggal_lahir,
                tbl_pegawai.foto,
                tbl_ket_golongan.golongan
            FROM
                tbl_pegawai
            INNER JOIN 
                tbl_departemen ON tbl_pegawai.id_departemen = tbl_departemen.id_departemen 
            INNER JOIN 
                tbl_ket_golongan ON tbl_pegawai.id_ket_golongan = tbl_ket_golongan.id_ket_golongan 
            WHERE tbl_pegawai.tipe=4 ORDER BY tbl_pegawai.nama ASC";
    $rs=$db->Execute($sql);
        
    $totaldata=$rs->RecordCount();
    $totalhalaman=ceil($totaldata/$tampil);
    $halaman = (isset($_GET['halaman']))?$_GET['halaman']:1;
    if (($halaman>$totalhalaman) or ($halaman<1))
    {
        $halaman=1;
    }
    $batas_bawah = 3;
    $batas_atas = 3;
    $range = $batas_bawah+$batas_atas;
    $barisan_angka = $halaman - $batas_bawah;
    if ($barisan_angka < 1) 
    {
        $barisan_angka = 1;
    };
    $mulai = (($halaman - 1) * $tampil);
    $sql = $sql . " LIMIT $mulai,$tampil";
    $rs=$db->Execute($sql);
    $jml = $rs->RecordCount();
    // Tampilan Sebelumnya 
    if ($halaman != 1)
    {
        $navigasi = "<a href='pegawai.php?action=dosenluar&halaman=".($halaman-1)."'>&laquo; Prev</a> ";
    }
    // Tampilan Halaman
    for ($i=0;$i<=$range;$i++)
    {
        if ($barisan_angka <= $totalhalaman)
        {
            if ($barisan_angka == $halaman)
            {
                $navigasi .= " <b>$barisan_angka</b> ";
            }else{
                $navigasi .= "<a href='pegawai.php?action=dosenluar&halaman=$barisan_angka'>$barisan_angka</a>";
                $navigasi .= " ";
            }
                $barisan_angka++;
        }
        else break;     
    }
    // Tampilan Selanjutnya 
    if (($halaman != $totalhalaman) and ($jml!= 0))
    {
        $navigasi .= " <a href='pegawai.php?action=dosenluar&halaman=".($halaman+1)."'>Next &raquo;</a>";
    }
    while($row=$rs->FetchRow())
    {
        $view[]=$row;
    }

    $koinp->assign("view", $view);
    $koinp->assign("hal", $navigasi);
    $koinp->assign("jml_data", "Jumlah data Dosen = " . $totaldata);
    $koinp->assign("isi","pegawai.tpl");
break;
}

$koinp->assign("namalogin",$tabi_fullname);   
$koinp->display("index.tpl");
?>