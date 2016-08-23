<?php

require_once '../../../connect/dbconfig.php';

    
if($_POST)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date  = date('Y-m-d H:i:s');
    $vanban_name_vn = $_POST['vanban_name_vn'];
    $vanban_name_en = $_POST['vanban_name_en'];
    $vanban_link = $_POST['vanban_temp'];
    $vanban_type = $_POST['vanban_type'];
        try{
            $stmt = $db_con->prepare("INSERT INTO `vanban`(`vanban_name_vn`, `vanban_name_en`, `vanban_link`, `vanban_type`, `vanban_date`) 
        VALUES(:v1,:v2,:v3,:v4,:v5)");

            $stmt->bindParam(":v1", $vanban_name_vn);
            $stmt->bindParam(":v2", $vanban_name_en);
            $stmt->bindParam(":v3", $vanban_link);
            $stmt->bindParam(":v4", $vanban_type);
            $stmt->bindParam(":v5", $date);
            if ($stmt->execute()) {
                echo "Successfully Added";
            } else {
                echo "Query Problem";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
else{
    echo "Dont create";
}
?>