<?php
session_start();
?>
<?php
	include("../connect/config.php");
	$name = $_SESSION['ses_name'];
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date  = date('Y-m-d H:i:s');
	$time = "update user set user_last_datetime ='" . $date  . "' where user_username='" . $name . "'";
	mysql_query($time);
	session_destroy();
	header("location:../login.php");

?>