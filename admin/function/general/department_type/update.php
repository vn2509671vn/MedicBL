<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$department_type_name_vn = $_POST['department_type_name_vn'];
		$department_type_name_en = $_POST['department_type_name_en'];
		$department_type_descript_vn = $_POST['department_type_descript_vn'];
		$department_type_descript_en = $_POST['department_type_descript_en'];
		$stmt = $db_con->prepare("UPDATE department_type SET department_type_name_vn=:d1, department_type_name_en=:d2, department_type_descript_vn=:d3, department_type_descript_en=:d4 WHERE department_type_id=:id");
		$stmt->bindParam(":d1", $department_type_name_vn);
		$stmt->bindParam(":d2", $department_type_name_en);
		$stmt->bindParam(":d3", $department_type_descript_vn);
		$stmt->bindParam(":d4", $department_type_descript_en);
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