<?php
require_once("3a8e4.php");

//Cek kesalahan Login
$tgl = date("Y-m-d H:i:s");	
$ip = $_SERVER['REMOTE_ADDR'];
$useragent = $_SERVER['HTTP_USER_AGENT'];
$cek_log = "SELECT * FROM tab_mlebet_log WHERE stat = 0 AND ip='$ip'";
$rs_log=$db->Execute($cek_log);	
if($rs_log->RecordCount() >= 5)
{
	print "<script>alert('Mohon maaf Anda tidak dapat login karena kesalahan login Anda terlalu banyak. Hubungi Administrator untuk informasi lebih lanjut');location.href='index.html';</script>";
}

	//tombol $_POST['btn'] harus ditekan. kalau tidak ditekan artinya nggak ada proses apapun yang dijalankan
	if(isset($_POST['btn'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		//step 1 : cek apakah email ada di tabel 
		$cek_uname="SELECT * FROM tab_mlebet WHERE tabi_email='$email'";
		$rs_uname=$db->Execute($cek_uname);	

		if($rs_uname->RecordCount() > 0){
			//username ada, tangkap password yg ada di database
			$row_uname=$rs_uname->FetchRow();
			$password_db = $row_uname['tabi_konci'];
			#password_verify adalah fungsi PHP 5.5> yang otomatis mengecek kesamaan inputan dengan hash 
			if(password_verify($password, $password_db)){
				//password sudah cocok
				$expired = 0;
				if(isset($_POST['remember'])){
					if($_POST['remember'] = 1){
						$expired = '+1 year'; // 1 tahun
					}
				}
				#kalau remember me dicentang, login akan expired dalam waktu 1 tahun, selain itu ya akan seperti session biasa yang hilang ketika diclose

				if($expired <> 0){
					#kalau remember me dicentang, tanggal expirenya adalah 1 tahun dari sekarang.
					$expireddb = date("Y-m-d H:i:s",strtotime($expired));
				}
				else{
					#kalau remember me tidak dicentang, secara default user dapat login selama 6 jam saja.
					$expireddb = date("Y-m-d H:i:s",strtotime("+6 hours"));
				}

				$token = sha1($ip.$expireddb."string_random_apasaja".microtime()); //intinya membuat karakter acak saja
				//$token ini penting,, nantinya akan disimpan sebagai COOKIE

				//apabila ada kesalahan login sebelumnya dengan IP & user agent yang sama sebelumnya harus ditandai dulu 
				//penandaan dilakukan dengan mengubah FLAG dari 0 menjadi 9, sehingga di pengecekan selanjutnya data ini tidak akan dianggap
				$db->Execute("UPDATE tab_mlebet_log SET stat = 9 WHERE token = '' AND ip = '$ip' AND useragent = '$useragent'");

				//memasukkan data lengkap ke tb_admin_log dengan flag STAT = 1.
				$db->Execute("INSERT INTO tab_mlebet_log VALUES (NULL, '$tgl', '$expireddb', '$token', '$email', '$ip',  '$useragent', 1)");

				//simpan token ke cookie
				$expr = 0;
				if($expired <> 0){
					$expr = intval(strtotime($expired));
				}
				setcookie("nextgen_token", $token, $expr, "/");
				#kalau remember me tidak dicentang, cookie akan otomatis bertindak sebagai session
				#kalau dicentang, cookie akan terus disimpan

				print "<script>alert('Login Berhasil');location.href='4a801fc3/';</script>";
			}
			else{
				//password tidak cocok
				//memasukkan data ke tb_admin_log dengan flag STAT = 0.
				$db->execute("INSERT INTO tab_mlebet_log VALUES (NULL, '$tgl', '', '', '$email', '$ip', '$useragent', 0)");
				print "<script>alert('Username atau password tersebut salah');location.href='index.html';</script>";
			}

		}
		else{			
				//Username tidak terdaftar
				$db->execute("INSERT INTO tab_mlebet_log VALUES (NULL, '$tgl', '', '', '$email', '$ip', '$useragent', 0)");
				print "<script>alert('Username tidak terdaftar');location.href='index.html';</script>";
		}

	}
	else
	{
		print "<script>alert('Login Gagal');location.href='index.html';</script>";
	}

?>