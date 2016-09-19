<?php
   $dbhost = getenv('IP');
   $dbuser = getenv('C9_USER');
   $dbpass = "";
   $conn = mysql_connect($dbhost,$dbuser,$dbpass) or die("Can't connect to database!");
	mysql_select_db("medic_bl_bk",$conn) or die("Can't select database!");
	mysql_set_charset("utf8"); 
?>