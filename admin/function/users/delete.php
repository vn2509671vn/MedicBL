<?php
include_once '../../../connect/dbconfig.php';

if($_POST['id'])
{
	$id = $_POST['cat_id'];
	$stmt=$db_con->prepare("DELETE FROM categogy WHERE cat_id=:id");
	$stmt->execute(array(':id'=>$id));	
}
?>