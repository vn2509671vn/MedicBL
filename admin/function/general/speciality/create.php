<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $speciality_name = $_POST['speciality_name'];
    $speciality_name_en = $_POST['speciality_name_en'];
    $speciality_descript = $_POST['speciality_descript'];
    $speciality_descript_en = $_POST['speciality_descript_en'];

    try {

        $stmt = $db_con->prepare("INSERT INTO specialities(speciality_name,speciality_name_en,speciality_descript,speciality_descript_en) VALUES(:sn, :se, :sd,:sde)");

        $stmt->bindParam(":sn", $speciality_name);
        $stmt->bindParam(":se", $speciality_name_en);
        $stmt->bindParam(":sd", $speciality_descript);
        $stmt->bindParam(":sde", $speciality_descript_en);
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