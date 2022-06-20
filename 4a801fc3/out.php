<?php
require_once("../3a8e4.php");

	if(isset($_COOKIE['manic_token'])){
		$token = $_COOKIE['manic_token'];

		//cara menghapus cookie adalah dengan mengubah tanggal expirednya menjadi sekarang
		$now = date("Y-m-d H:i:s");
		unset($_COOKIE['manic_token']);
		setcookie("manic_token",null,$now,"/");
			
		#jangan lupa tanggal expired di database diupdate juga, supaya session token yang sudah logout tidak dihijack
		$db->Execute("UPDATE tab_mlebet_log SET expired = '$now' WHERE token = '$token'");
		print "<script>alert('Logout Berhasil');location.href='../index.html';</script>";
	}
	else{
		print "<script>alert('Logout Berhasil');location.href='../index.html';</script>";
	}
?>