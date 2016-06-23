<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $chuyenkhoa_name = $_POST['chuyenkhoa_name'];
    $chuyenkhoa_name_en = $_POST['chuyenkhoa_name_en'];
    $chuyenkhoa_descript = $_POST['chuyenkhoa_descript'];
    $chuyenkhoa_descript_en = $_POST['chuyenkhoa_descript_en'];
    $service_id = $_POST['services_id'];
    $chuyenkhoa_muinhon = $_POST['chuyenkhoa_muinhon'];
    try {

        $stmt = $db_con->prepare("INSERT INTO chuyenkhoa(chuyenkhoa_name,chuyenkhoa_name_en,chuyenkhoa_descript,chuyenkhoa_descript_en,services_id,chuyenkhoa_muinhon) VALUES(:cnamev, :cnamee, :cdesv,:cdese,:si,:cm)");

        $stmt->bindParam(":cnamev", $chuyenkhoa_name);
        $stmt->bindParam(":cnamee", $chuyenkhoa_name_en);
        $stmt->bindParam(":cdesv", $chuyenkhoa_descript);
        $stmt->bindParam(":cdese", $chuyenkhoa_descript_en);
        $stmt->bindParam(":si", $service_id);
        $stmt->bindParam(":cm", $chuyenkhoa_muinhon);
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