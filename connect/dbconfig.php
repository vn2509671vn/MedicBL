<?php

	$db_host = "localhost";
	$db_name = "medic_bl_bk";
	$db_user = "thangtgm";
	$db_pass = "";
	
	try{
		
		$db_con = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8",$db_user,$db_pass);
		$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db_con->exec("set names utf8");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}


?>