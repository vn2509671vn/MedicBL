<?php
require_once '../../../connect/dbconfig.php';
	if($_POST)
	{
		$id = $_POST['id'];
	    $vanban_name_vn = $_POST['vanban_name_vn'];
        $vanban_name_en = $_POST['vanban_name_en'];
        $vanban_link = $_POST['vanban_update_temp'];
        $vanban_type = $_POST['vanban_type'];
		try{
            $stmt = $db_con->prepare("UPDATE vanban SET 
            vanban_name_vn=:v1
            , vanban_name_en=:v2
            , vanban_link=:v3
            , vanban_type =:v4
            WHERE vanban_id=:id");
            $stmt->bindParam(":v1", $vanban_name_vn);
            $stmt->bindParam(":v2", $vanban_name_en);
            $stmt->bindParam(":v3", $vanban_link);
            $stmt->bindParam(":v4", $vanban_type);
            $stmt->bindParam(":id", $id);
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