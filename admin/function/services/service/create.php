<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $services_name = $_POST['services_name'];
    $services_name_en = $_POST['services_name_en'];
    $services_descript = $_POST['services_descript'];
    $services_descript_en = $_POST['services_descript_en'];
    $services_sort = $_POST['services_sort'];
    try {

        $stmt = $db_con->prepare("INSERT INTO services(services_name,services_name_en,services_descript,services_descript_en, services_sort) VALUES(:sn, :se, :sd,:sde,:ss)");

        $stmt->bindParam(":sn", $services_name);
        $stmt->bindParam(":se", $services_name_en);
        $stmt->bindParam(":sd", $services_descript);
        $stmt->bindParam(":sde", $services_descript_en);
        $stmt->bindParam(":ss", $services_sort);
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