<?php

$db_host = "localhost";
$db_name = "medic_bl_bk";
$db_user = "root";
$db_pass = "";

try{

	$db_con = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8",$db_user,$db_pass);
	$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}


?>	