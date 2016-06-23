<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$speciality_name = $_POST['speciality_name'];
	    $speciality_name_en = $_POST['speciality_name_en'];
	    $speciality_descript = $_POST['speciality_descript'];
	    $speciality_descript_en = $_POST['speciality_descript_en'];
		$stmt = $db_con->prepare("UPDATE specialities SET speciality_name=:s1,speciality_name_en=:s2,speciality_descript=:s3,speciality_descript_en=:s4 WHERE speciality_id=:id");
		$stmt->bindParam(":s1", $speciality_name);
		$stmt->bindParam(":s2", $speciality_name_en);
		$stmt->bindParam(":s3", $speciality_descript);
		$stmt->bindParam(":s4", $speciality_descript_en);
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