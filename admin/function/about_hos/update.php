<?php
require_once '../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
	    $infor_name = $_POST['infor_name'];
	    $infor_name_en = $_POST['infor_name_en'];
	    $infor_address = $_POST['infor_address'];
	    $infor_address_en = $_POST['infor_address_en'];
	    $infor_phone = $_POST['infor_phone'];
	    $infor_email = $_POST['infor_email'];
	    $infor_fax = $_POST['infor_fax'];
	    $logo = $_POST['logo_temp'];
	    $advertise1 = $_POST['advertise1_temp'];
	    $advertise3 = $_POST['advertise2_temp'];
	    $advertise3 = $_POST['advertise3_temp'];
		try{
            $stmt = $db_con->prepare("UPDATE infor_hos SET 
            infor_name=:i1
            , infor_name_en=:i2
            , infor_address=:i3
            , infor_address_en =:i4
            , infor_phone =:i5
            , infor_fax =:i6
            , infor_email =:i7
            , infor_image =:i8
            , infor_advertise1 =:i9
            , infor_advertise3 =:i10
            , infor_advertise3 =:i11
            
            WHERE infor_id=:id");
            $stmt->bindParam(":i1", $infor_name);
            $stmt->bindParam(":i2", $infor_name_en);
            $stmt->bindParam(":i3", $infor_address);
            $stmt->bindParam(":i4", $infor_address_en);
            $stmt->bindParam(":i5", $infor_phone);
            $stmt->bindParam(":i6", $infor_fax);
            $stmt->bindParam(":i7", $infor_email);
            $stmt->bindParam(":i8", $logo);
            $stmt->bindParam(":i9", $advertise1);
            $stmt->bindParam(":i10", $advertise3);
            $stmt->bindParam(":i10", $advertise3);
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