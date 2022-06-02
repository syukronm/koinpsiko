<?php
require_once ('smarty/libs/Smarty.class.php');
require_once ('adodb/adodb.inc.php');
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$db=NewADOConnection('mysqli');
$db -> Connect('localhost','root','','nextgen_inven');

$ekp = new Smarty;

?>
