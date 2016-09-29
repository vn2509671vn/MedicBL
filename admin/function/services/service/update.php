<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$services_name = $_POST['services_name'];
	    $services_name_en = $_POST['services_name_en'];
	    $services_descript = $_POST['services_descript'];
	    $services_descript_en = $_POST['services_descript_en'];
	    $services_sort = $_POST['services_sort'];
		$stmt = $db_con->prepare("UPDATE services SET services_name=:s1, services_name_en=:s2, services_descript=:s3, services_descript_en=:s4, services_sort=:s5 WHERE services_id=:id");
		$stmt->bindParam(":s1", $services_name);
		$stmt->bindParam(":s2", $services_name_en);
		$stmt->bindParam(":s3", $services_descript);
		$stmt->bindParam(":s4", $services_descript_en);
		$stmt->bindParam(":s5", $services_sort);
		$stmt->bindParam(":id", $id);
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>