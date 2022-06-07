<?php
require_once("3a8e4.php");

//Cek data akun, apakah email sudah terdaftar di database
$fullname = addslashes($_REQUEST["fullname"]);
$email = addslashes($_REQUEST["email"]);
$password = addslashes($_REQUEST["password"]);
$rpassword = addslashes($_REQUEST["rpassword"]);
$tabi_kodeakun = addslashes($_REQUEST["sebagai"]);

$cek_akun = "SELECT * FROM tab_mlebet WHERE tabi_email='$email'";
$rs_akun=$db->Execute($cek_akun);	
if($rs_akun->RecordCount() > 0)
{
	print "<script>alert('Akun anda telah terdaftar');location.href='index.html';</script>";
}

	//tombol $_POST['btn'] harus ditekan. kalau tidak ditekan artinya nggak ada proses apapun yang dijalankan
	if(isset($_POST['btn'])){
		$password_ok = password_hash($password, PASSWORD_DEFAULT);

		if($password==$rpassword){
			$db->Execute("INSERT INTO `tab_mlebet`(`tabi_email`, `tabi_konci`, `tabi_fullname`, `tabi_kodeakun`) VALUES ('$email', '$password_ok', '$fullname', '$tabi_kodeakun')");
			print "<script>alert('Akun berhasil didaftarkan, silahkan login');location.href='index.html';</script>";
		}
		else{
			print "<script>alert('Password dan konfirmasi password tidak sama');location.href='register.html';</script>";
		}

	}
?>