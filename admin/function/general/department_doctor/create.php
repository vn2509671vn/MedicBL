<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $department_id = $_POST['deparment_temp'];
    try {
        foreach($_POST['doctor'] as $doctor){
        $stmt = $db_con->prepare("INSERT INTO department_doctor(department_id,doctor_id) VALUES(:depart, :doctor)");

        $stmt->bindParam(":depart", $department_id);
        $stmt->bindParam(":doctor", $doctor);
        if ($stmt->execute()) {
            echo "Successfully Added ";
        } else {
            echo "Query Problem";
        }
        }   

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>