<?php
require_once("3a8e4.php");
$sess_modup = $_GET["Roiy97YthR"];
$max_size   = 10000000; // 10MB
						
$eror   = false;

$prodi = addslashes($_REQUEST["prodi"]);

switch($prodi)
{
case "1":
$namaprodi = "Prodi Psikologi Program Sarjana";

break;
//======================================================================
case "2":
$namaprodi = "Prodi Psikologi Program Magister";
	
break;
//======================================================================
case "3":
$namaprodi = "Prodi Psikologi Profesi Program Magister";
	
break;
//======================================================================
case "4":
$namaprodi = "Prodi Psikologi Terapan Program Magister";
	
break;
//======================================================================
case "5":
$namaprodi = "Prodi Psikologi Program Doktor";
	
break;
//======================================================================
}

$ekp->assign("namaprodi", $namaprodi);
$ekp->display("index.tpl");
?>