<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $department_name_vn = $_POST['department_name_vn'];
    $department_name_en = $_POST['department_name_en'];
    $department_descript_vn = $_POST['department_descript_vn'];
    $department_descript_en = $_POST['department_descript_en'];
    //$department_images = $_POST['department_images'];
    $department_images = "";
    //$department_position = $_POST['department_position'];
    $department_position = "";
    $department_type_id = $_POST['department_type_id'];
    try {

        $stmt = $db_con->prepare("INSERT INTO department(department_name_vn,department_name_en,department_descript_vn,department_descript_en,department_images,department_position,department_type_id) VALUES(:d1, :d2, :d3,:d4,:d5,:d6,:d7)");
        $stmt->bindParam(":d1", $department_name_vn);
        $stmt->bindParam(":d2", $department_name_en);
        $stmt->bindParam(":d3", $department_descript_vn);
        $stmt->bindParam(":d4", $department_descript_en);
        $stmt->bindParam(":d5", $department_images);
        $stmt->bindParam(":d6", $department_position);
        $stmt->bindParam(":d7", $department_type_id);
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