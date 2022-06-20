<?php
require_once("../3a8e4.php");
$sess_modup     = $_GET["Roiy97YthR"];
$max_size   = 10000000; // 10MB
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
            $username = $row['tabi_uname'];

            //kembalikan data user yg sedang login,, siapa tahu nanti ingin diolah
            $get_admin = $db->Execute("SELECT * FROM tab_mlebet WHERE tabi_uname = '$username'");
            $rget = $get_admin->FetchRow();
            $sess_iduser = $rget['tabi_iduser'];
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
    if($sess_modup=="gapaskuy")
    {
        $pl=addslashes($_POST['pass_lama']);
    	$pb=addslashes($_POST["pass_baru"]);
    	$c_pb=addslashes($_POST["c_pass_baru"]);
    		
    	$pb_ok = password_hash($pb, PASSWORD_DEFAULT);
    	
    	$sql="SELECT tabi_konci FROM tab_mlebet WHERE tabi_iduser='$sess_iduser'";
    	$rs=$db->Execute($sql);
    	$row=$rs->FetchRow();
    	
    	$pass_db=$row[0];	
	
        if(password_verify($pl, $pass_db) and $pb==$c_pb)
        {
            $sql_update="UPDATE tab_mlebet SET tabi_konci='$pb_ok' WHERE tabi_iduser='$sess_iduser'";
            if($db->Execute($sql_update))
            {
                print "<script>alert('Password berhasil diganti, anda akan dibawa kehalaman login');location.href='out.php';</script>";
            }
            else
            {
                print "<script>alert('Password gagal diganti');location.href='gapas.php';</script>";
            }
        }
        else
        {
            print "<script>alert('Password gagal diganti');location.href='gapas.php';</script>";
        }
    }
break;
}

//ini untuk ambil nama user dan foto
    $sql_namalogin = "SELECT `tabi_uname` FROM `tab_mlebet` WHERE tabi_iduser='$sess_iduser'";
    $rs_namalogin = $db->Execute($sql_namalogin);
    $row_namalogin = $rs_namalogin->FetchRow();
    $namalogin = $row_namalogin[0];

$ekp->assign("isi","gapas.tpl");
$ekp->assign("namalogin",$namalogin);   
$ekp->display("index.tpl");
?>