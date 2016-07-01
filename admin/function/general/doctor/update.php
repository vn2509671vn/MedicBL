<?php
require_once '../../../../connect/dbconfig.php';
include("../../../process.php");

	if($_POST)
	{
		$id = $_POST['id'];
		$doctor_name_vn = $_POST['doctor_name_vn'];
        $doctor_name_en = changeTitle($doctor_name_vn);
        $doctor_porn = $_POST['doctor_porn'];
        $doctor_speciality_id = $_POST['speciality_id'];
        $doctor_image = $_POST['doctor_temp'];
        $doctor_experience_vn = $_POST['doctor_experience_vn'];
        $doctor_experience_en = $_POST['doctor_experience_en'];
        $doctor_call = $_POST['doctor_call'];
        $doctor_qualification_vn = $_POST['doctor_qualification_vn'];
        $doctor_qualification_en = $_POST['doctor_qualification_en'];
        $doctor_chuyenkhoa_id = $_POST['chuyenkhoa_id'];
		$stmt = $db_con->prepare("UPDATE doctors SET doctor_name_vn=:d1,doctor_name_en=:d2,doctor_born=:d3,doctor_speciality_id=:d4,doctor_image=:d5,doctor_experience_vn=:d6,doctor_experience_en=:d7,doctor_call=:d8,doctor_qualification_vn=:d9,doctor_qualification_en=:d10,chuyenkhoa_id=:d11 WHERE doctor_id=:id");
		$stmt->bindParam(":d1", $doctor_name_vn);
        $stmt->bindParam(":d2", $doctor_name_en);
        $stmt->bindParam(":d3", $doctor_porn);
        $stmt->bindParam(":d4", $doctor_speciality_id);
        $stmt->bindParam(":d5", $doctor_image);
        $stmt->bindParam(":d6", $doctor_experience_vn);
        $stmt->bindParam(":d7", $doctor_experience_en);
        $stmt->bindParam(":d8", $doctor_call);
        $stmt->bindParam(":d9", $doctor_qualification_vn);
        $stmt->bindParam(":d10", $doctor_qualification_en);
        $stmt->bindParam(":d11", $doctor_chuyenkhoa_id);
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