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
//ini kalo yang login admin
case "1":
    //ini untuk ambil data diri
    //ini untuk ambil nama user dan foto
    $sql_dadir = "SELECT * FROM tab_dadir WHERE id_pegawai='$sess_iduser'";
    $rs_dadir = $db->Execute($sql_dadir);
    $row_dadir = $rs_dadir->FetchRow();
    
    $nip = $row_dadir[1];
    $no_serdos = $row_dadir[2];
    $nidn = $row_dadir[3];
    $nama_gelar = $row_dadir[7]." ".$row_dadir[4].", ".$row_dadir[8];
    $gelar_depan = $row_dadir[7];
    $gelar_belakang = $row_dadir[8];
    $jenis_kelamin = $row_dadir[5];
    $no_KTP = $row_dadir[6];
    $golongan = $row_dadir[9];
    $tmt_mulai_di_ui = $row_dadir[10];
    $tempat_lahir = $row_dadir[11];
    $tanggal_lahir = $row_dadir[12];
    $tanggal_pensiun = $row_dadir[13];
    $agama = $row_dadir[14];
    $pendidikan = $row_dadir[15];
    $jenis_pegawai = $row_dadir[16];
    $email = $row_dadir[17];
    $no_hp = $row_dadir[18];
    $no_telp = $row_dadir[19];
    $alamat = $row_dadir[20];
    $kodepos = $row_dadir[21];
    $no_npwp = $row_dadir[22];
    $efin = $row_dadir[23];
    $alamat_npwp = $row_dadir[24];
    $nama_ayah = $row_dadir[25];
    $nama_ibu = $row_dadir[26];
    $no_rek = $row_dadir[27];
    $bank = $row_dadir[28];
    $nama_direk = $row_dadir[29];
    $cabang_rek = $row_dadir[30];
    $no_BPJS_kes = $row_dadir[31];
    $no_BPJS_ktk = $row_dadir[32];
    $no_DPLK = $row_dadir[33];
    $foto = $row_dadir[34];
    $berkas_KTP = $row_dadir[35];
    $berkas_NPWP = $row_dadir[36];
    $berkas_akta_lahir = $row_dadir[37];
    $berkas_karpeg = $row_dadir[38];
    $berkas_serdos = $row_dadir[39];
    $berkas_KK = $row_dadir[40];
    $berkas_DPLK = $row_dadir[41];
    $berkas_BPJS_kes = $row_dadir[42];
    $berkas_BPJS_ktk = $row_dadir[43];    
    $berkas_ttd = $row_dadir[44];
    $asuransi_lain = $row_dadir[45];
    
    if($sess_modup=="ubahkuy")
    {
        $ekp->assign("tampilan","edit");
    }
    elseif($sess_modup=="ubahkuyok")
    {
        $nip=addslashes($_POST["nip"]);
        $no_serdos=addslashes($_POST["no_serdos"]);
        $nidn=addslashes($_POST["nidn"]);
        $namalengkap=addslashes($_POST["namalogin"]);
        $nama_gelar=addslashes($_POST["nama_gelar"]);
        $gelar_depan=addslashes($_POST["gelar_depan"]);
        $gelar_belakang=addslashes($_POST["gelar_belakang"]);
        $jenis_kelamin=addslashes($_POST["jenis_kelamin"]);
        $no_KTP=addslashes($_POST["no_KTP"]);
        $golongan=addslashes($_POST["golongan"]);
        $tmt_mulai_di_ui=addslashes($_POST["tmt_mulai_di_ui"]);
        $tempat_lahir=addslashes($_POST["tempat_lahir"]);
        $tanggal_lahir=addslashes($_POST["tanggal_lahir"]);
        $tanggal_pensiun=addslashes($_POST["tanggal_pensiun"]);
        $agama=addslashes($_POST["agama"]);
        $pendidikan=addslashes($_POST["pendidikan"]);
        $jenis_pegawai=addslashes($_POST["jenis_pegawai"]);
        $email=addslashes($_POST["email"]);
        $no_hp=addslashes($_POST["no_hp"]);
        $no_telp=addslashes($_POST["no_telp"]);
        $alamat=addslashes($_POST["alamat"]);
        $kodepos=addslashes($_POST["kodepos"]);
        $no_npwp=addslashes($_POST["no_npwp"]);
        $efin=addslashes($_POST["efin"]);
        $alamat_npwp=addslashes($_POST["alamat_npwp"]);
        $nama_ayah=addslashes($_POST["nama_ayah"]);
        $nama_ibu=addslashes($_POST["nama_ibu"]);
        $no_rek=addslashes($_POST["no_rek"]);
        $bank=addslashes($_POST["bank"]);
        $nama_direk=addslashes($_POST["nama_direk"]);
        $cabang_rek=addslashes($_POST["cabang_rek"]);
        $no_BPJS_kes=addslashes($_POST["no_BPJS_kes"]);
        $no_BPJS_ktk=addslashes($_POST["no_BPJS_ktk"]);
        $no_DPLK=addslashes($_POST["no_DPLK"]);
        

        $sql="UPDATE `tab_dadir` SET `nip`='$nip',`no_serdos`='$no_serdos',`NIDN`='$nidn',`nama`='$namalengkap',`jenis_kelamin`='$jenis_kelamin',`no_KTP`='$no_KTP',`gelar_depan`='$gelar_depan',`gelar_belakang`='$gelar_belakang',`golongan`='$golongan',`tmt_mulai_di_ui`='$tmt_mulai_di_ui',`tempat_lahir`='$tempat_lahir',`tanggal_lahir`='$tanggal_lahir',`tanggal_pensiun`='$tanggal_pensiun',`agama`='$agama',`pendidikan`='$pendidikan',`jenis_pegawai`='$jenis_pegawai',`email`='$email',`no_hp`='$no_hp',`no_telp`='$no_telp',`alamat`='$alamat',`kodepos`='$kodepos',`no_npwp`='$no_npwp',`efin`='$efin',`alamat_npwp`='$alamat_npwp',`nama_ayah`='$nama_ayah',`nama_ibu`='$nama_ibu',`no_rek`='$no_rek',`bank`='$bank',`nama_direk`= '$nama_direk',`cabang_rek`='$cabang_rek',`no_BPJS_kes`='$no_BPJS_kes',`no_BPJS_ktk`='$no_BPJS_ktk',`no_DPLK`='$no_DPLK' WHERE `id_pegawai`='$sess_iduser'";
        if($db->Execute($sql))
        {
            print "<script>alert('Data berhasil diubah');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Data gagal diubah');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuyfoto")
    {
        $file_name  = $_FILES['foto']['name'];
        $file_size  = $_FILES['foto']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_foto= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_foto))
            {
                unlink("files/".$file_foto);
            }               
            copy($_FILES["foto"]["tmp_name"],"files/".$file_foto);
            $sql="UPDATE tab_dadir SET `foto`='$file_foto' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Foto berhasil ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
        else
        {
            print "<script>alert('Foto gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuyktp")
    {
        $file_name  = $_FILES['ktp']['name'];
        $file_size  = $_FILES['ktp']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }		
        else
        {					
            $unik_time = date("Y-m-d-h-i-s");
            $file_ktp= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_ktp))
            {
                unlink("files/".$file_ktp);
            }				
            copy($_FILES["ktp"]["tmp_name"],"files/".$file_ktp);
            $sql="UPDATE tab_dadir SET `berkas_KTP`='$file_ktp' WHERE id_pegawai='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('KTP berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('KTP gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuynpwp")
    {
        $file_name  = $_FILES['npwp']['name'];
        $file_size  = $_FILES['npwp']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }		
        else
        {					
            $unik_time = date("Y-m-d-h-i-s");
            $file_npwp= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_npwp))
            {
                unlink("files/".$file_npwp);
            }				
            copy($_FILES["npwp"]["tmp_name"],"files/".$file_npwp);
            $sql="UPDATE tab_dadir SET `berkas_NPWP`='$file_npwp' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('NPWP berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('NPWP gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuyakla")
    {
        $file_name  = $_FILES['akla']['name'];
        $file_size  = $_FILES['akla']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_akla= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_akla))
            {
                unlink("files/".$file_akla);
            }               
            copy($_FILES["akla"]["tmp_name"],"files/".$file_akla);
            $sql="UPDATE tab_dadir SET `berkas_akta_lahir`='$file_akla' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Akta lahir berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Akta lahir gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuykarpeg")
    {
        $file_name  = $_FILES['karpeg']['name'];
        $file_size  = $_FILES['karpeg']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_karpeg= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_karpeg))
            {
                unlink("files/".$file_karpeg);
            }               
            copy($_FILES["karpeg"]["tmp_name"],"files/".$file_karpeg);
            $sql="UPDATE tab_dadir SET `berkas_karpeg`='$file_karpeg' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Kartu pegawai berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Kartu pegawai gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuyserdos")
    {
        $file_name  = $_FILES['serdos']['name'];
        $file_size  = $_FILES['serdos']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }		
        else
        {					
            $unik_time = date("Y-m-d-h-i-s");
            $file_serdos= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_serdos))
            {
                unlink("files/".$file_serdos);
            }				
            copy($_FILES["serdos"]["tmp_name"],"files/".$file_serdos);
            $sql="UPDATE tab_dadir SET `berkas_serdos`='$file_serdos' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas serdos berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas serdos gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuykkk")
    {
        $file_name  = $_FILES['kk']['name'];
        $file_size  = $_FILES['kk']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_kk= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_kk))
            {
                unlink("files/".$file_kk);
            }               
            copy($_FILES["kk"]["tmp_name"],"files/".$file_kk);
            $sql="UPDATE tab_dadir SET `berkas_KK`='$file_kk' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas KK berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas KK gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuydplk")
    {
        $file_name  = $_FILES['dplk']['name'];
        $file_size  = $_FILES['dplk']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_dplk= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_dplk))
            {
                unlink("files/".$file_dplk);
            }               
            copy($_FILES["dplk"]["tmp_name"],"files/".$file_dplk);
            $sql="UPDATE tab_dadir SET `berkas_DPLK`='$file_dplk' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas DPLK berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas DPLK gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuybpjskes")
    {
        $file_name  = $_FILES['bpjskes']['name'];
        $file_size  = $_FILES['bpjskes']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_bpjskes= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_bpjskes))
            {
                unlink("files/".$file_bpjskes);
            }               
            copy($_FILES["bpjskes"]["tmp_name"],"files/".$file_bpjskes);
            $sql="UPDATE tab_dadir SET `berkas_BPJS_kes`='$file_bpjskes' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas BPJS kesehatan berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas BPJS kesehatan gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuybpjsktk")
    {
        $file_name  = $_FILES['bpjsktk']['name'];
        $file_size  = $_FILES['bpjsktk']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_bpjsktk= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_bpjsktk))
            {
                unlink("files/".$file_bpjsktk);
            }               
            copy($_FILES["bpjsktk"]["tmp_name"],"files/".$file_bpjsktk);
            $sql="UPDATE tab_dadir SET `berkas_BPJS_ktk`='$file_bpjsktk' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas BPJS ketenagakerjaan berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas BPJS ketenagakerjaan gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuyscanttd")
    {
        $file_name  = $_FILES['scanttd']['name'];
        $file_size  = $_FILES['scanttd']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_scanttd= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_scanttd))
            {
                unlink("files/".$file_scanttd);
            }               
            copy($_FILES["scanttd"]["tmp_name"],"files/".$file_scanttd);
            $sql="UPDATE tab_dadir SET `berkas_ttd`='$file_scanttd' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas BPJS ketenagakerjaan berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas BPJS ketenagakerjaan gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    elseif($sess_modup=="ubahkuyasul")
    {
        $file_name  = $_FILES['asul']['name'];
        $file_size  = $_FILES['asul']['size'];
        
        //cari extensi file dengan menggunakan fungsi explode
        $explode    = explode('.',$file_name);
        $extensi    = $explode[count($explode)-1];

        //check apakah type file sudah sesuai
        if(!in_array($extensi,$file_type))
        {
            $eror   = true;
            $pesan  = 'Type file yang anda upload tidak sesuai';
        }
        if($file_size > $max_size)
        {
            $eror   = true;
            $pesan  = 'Ukuran file melebihi batas maximum';
        }
        
        if($eror == true)
        {
            print"<script>alert('$pesan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }       
        else
        {                   
            $unik_time = date("Y-m-d-h-i-s");
            $file_asul= $sess_iduser.$unik_time.substr($file_name,-4);
            if(file_exists("files/".$file_asul))
            {
                unlink("files/".$file_asul);
            }               
            copy($_FILES["asul"]["tmp_name"],"files/".$file_asul);
            $sql="UPDATE tab_dadir SET `asuransi_lain`='$file_asul' WHERE `id_pegawai`='$sess_iduser'";
        }         
        
        if($db->Execute($sql))
        {
            print "<script>alert('Berkas Asuransi lain berhasil ditambahkan');location.href='datadiri.php';</script>";
        }
        else
        {
            print "<script>alert('Berkas Asuransi lain gagal ditambahkan');location.href='datadiri.php?Roiy97YthR=ubahkuy';</script>";
        }
    }
    else
    {
        $ekp->assign("tampilan","default");
    }
    
    $ekp->assign("gelar_depan",$gelar_depan);
    $ekp->assign("gelar_belakang",$gelar_belakang);
    $ekp->assign("nama_gelar",$nama_gelar);
    $ekp->assign("nip",$nip);
    $ekp->assign("nidn",$nidn);
    $ekp->assign("no_serdos",$no_serdos);
    $ekp->assign("no_KTP",$no_KTP);
    $ekp->assign("golongan",$golongan);
    $ekp->assign("tmt_mulai_di_ui",$tmt_mulai_di_ui);
    $ekp->assign("tempat_lahir",$tempat_lahir);
    $ekp->assign("tanggal_lahir",$tanggal_lahir);
    $ekp->assign("jenis_kelamin",$jenis_kelamin);
    $ekp->assign("tanggal_pensiun",$tanggal_pensiun);
    $ekp->assign("agama",$agama);
    $ekp->assign("pendidikan",$pendidikan);
    $ekp->assign("jenis_pegawai",$jenis_pegawai);
    $ekp->assign("email",$email);
    $ekp->assign("no_hp",$no_hp);
    $ekp->assign("no_telp",$no_telp);
    $ekp->assign("alamat",$alamat);
    $ekp->assign("kodepos",$kodepos);
    $ekp->assign("no_npwp",$no_npwp);
    $ekp->assign("efin",$efin);
    $ekp->assign("alamat_npwp",$alamat_npwp);
    $ekp->assign("nama_ayah",$nama_ayah);
    $ekp->assign("nama_ibu",$nama_ibu);
    $ekp->assign("no_rek",$no_rek);
    $ekp->assign("bank",$bank);
    $ekp->assign("nama_direk",$nama_direk);
    $ekp->assign("cabang_rek",$cabang_rek);
    $ekp->assign("no_BPJS_kes",$no_BPJS_kes);
    $ekp->assign("no_BPJS_ktk",$no_BPJS_ktk);
    $ekp->assign("no_DPLK",$no_DPLK);
    $ekp->assign("foto",$foto);
    $ekp->assign("berkas_KTP",$berkas_KTP);
    $ekp->assign("berkas_NPWP",$berkas_NPWP);
    $ekp->assign("berkas_akta_lahir",$berkas_akta_lahir);
    $ekp->assign("berkas_karpeg",$berkas_karpeg);
    $ekp->assign("berkas_serdos",$berkas_serdos);
    $ekp->assign("berkas_KK",$berkas_KK);
    $ekp->assign("berkas_DPLK",$berkas_DPLK);
    $ekp->assign("berkas_BPJS_kes",$berkas_BPJS_kes);
    $ekp->assign("berkas_BPJS_ktk",$berkas_BPJS_ktk);
    $ekp->assign("berkas_ttd",$berkas_ttd);
    $ekp->assign("asuransi_lain",$asuransi_lain);
break;
//====================================================================================
//ini kosong
case "":
    print "<script>location.href='out.php';</script>";
break;
}

$koinp->assign("isi","datadiri.tpl");
$koinp->assign("namalogin",$tabi_fullname);   
$koinp->display("index.tpl");
?>