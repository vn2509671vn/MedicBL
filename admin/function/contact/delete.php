<?php
include_once '../../../connect/dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['del_id'];
	$stmt=$db_con->prepare("DELETE FROM contact WHERE contact_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>