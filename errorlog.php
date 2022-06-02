<?php
session_start();
session_unset();
session_destroy();

	print "<script>alert('Login Gagal');location.href='index.php';</script>";	

?>