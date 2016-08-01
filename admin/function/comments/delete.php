<?php
include_once '../../../connect/dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];
	$stmt=$db_con->prepare("DELETE FROM camnghi_kh WHERE camnghi_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>