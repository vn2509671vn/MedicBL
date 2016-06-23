<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $department_type_name_vn = $_POST['department_type_name_vn'];
    $department_type_name_en = $_POST['department_type_name_en'];
    $department_type_descript_vn = $_POST['department_type_descript_vn'];
    $department_type_descript_en = $_POST['department_type_descript_en'];

    try {

        $stmt = $db_con->prepare("INSERT INTO department_type(department_type_name_vn,department_type_name_en,department_type_descript_vn,department_type_descript_en) VALUES(:sn, :se, :sd,:sde)");

        $stmt->bindParam(":sn", $department_type_name_vn);
        $stmt->bindParam(":se", $department_type_name_en);
        $stmt->bindParam(":sd", $department_type_descript_vn);
        $stmt->bindParam(":sde", $department_type_descript_en);
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