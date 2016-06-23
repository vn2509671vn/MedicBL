<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		echo var_dump($_POST['chuyenkhoa_muinhon']);
		$id = $_POST['id'];
		$chuyenkhoa_name = $_POST['chuyenkhoa_name'];
		$chuyenkhoa_name_en = $_POST['chuyenkhoa_name_en'];
		$chuyenkhoa_descript = $_POST['chuyenkhoa_descript'];
		$chuyenkhoa_descript_en = $_POST['chuyenkhoa_descript_en'];
		$services_id = $_POST['services_id'];
		$chuyenkhoa_muinhon = $_POST['chuyenkhoa_muinhon'];
		$stmt = $db_con->prepare("UPDATE chuyenkhoa SET chuyenkhoa_name=:cnamev, chuyenkhoa_name_en=:cnamee, chuyenkhoa_descript=:cdesv, chuyenkhoa_descript_en=:cdese,services_id=:si,chuyenkhoa_muinhon=:cm WHERE chuyenkhoa_id=:id");
		$stmt->bindParam(":cnamev", $chuyenkhoa_name);
		$stmt->bindParam(":cnamee", $chuyenkhoa_name_en);
		$stmt->bindParam(":cdesv", $chuyenkhoa_descript);
		$stmt->bindParam(":cdese", $chuyenkhoa_descript_en);
		$stmt->bindParam(":si", $services_id);
		$stmt->bindParam(":cm", $chuyenkhoa_muinhon);
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