<?php
include_once '../../../../connect/dbconfig.php';

if($_POST['del_id'])
{
	$id = $_POST['chuyenkhoa_id'];
	$stmt=$db_con->prepare("DELETE FROM chuyenkhoa WHERE chuyenkhoa_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>