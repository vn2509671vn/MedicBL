<?php
require_once '../../../../connect/dbconfig.php';
include("../../../process.php");

if ($_POST) {
    try {
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
        $stmt = $db_con->prepare("
        INSERT INTO doctors(doctor_name_vn,doctor_name_en,doctor_born,doctor_speciality_id,doctor_image,doctor_experience_vn,doctor_experience_en,doctor_call,doctor_qualification_vn,doctor_qualification_en,chuyenkhoa_id) 
        VALUES(:d1, :d2, :d3,:d4,:d5, :d6, :d7,:d8, :d9, :d10,:d11)");

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
        if ($stmt->execute()) {
            echo "Successfully Added";
        } else {
            echo "Query Problem";
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>