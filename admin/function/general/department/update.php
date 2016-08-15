<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$department_name_vn = $_POST['department_name_vn'];
	    $department_name_en = $_POST['department_name_en'];
	    $department_descript_vn = $_POST['department_descript_vn'];
	    $department_descript_en = $_POST['department_descript_en'];
	    //$department_images = $_POST['department_images'];
	    $department_images = $_POST['change_department_temp'];;
	    $department_position = $_POST['change_department_position_temp'];;
	    $department_chuyenkhoa_id = $_POST['department_chuyenkhoa_id'];
	    
		$stmt = $db_con->prepare("UPDATE department SET department_name_vn=:d1,department_name_en=:d2,department_descript_vn=:d3,department_descript_en=:d4,department_images=:d5,department_position=:d6,department_chuyenkhoa_id=:d7 WHERE department_id=:id");
        $stmt->bindParam(":d1", $department_name_vn);
        $stmt->bindParam(":d2", $department_name_en);
        $stmt->bindParam(":d3", $department_descript_vn);
        $stmt->bindParam(":d4", $department_descript_en);
        $stmt->bindParam(":d5", $department_images);
        $stmt->bindParam(":d6", $department_position);
        $stmt->bindParam(":d7", $department_chuyenkhoa_id);
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