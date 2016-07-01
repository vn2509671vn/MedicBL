<?php
include_once '../../../../connect/dbconfig.php';

if($_POST['del_id'])
{
	try{
		$id = $_POST['del_id'];	
		$stmt=$db_con->prepare("DELETE FROM doctors WHERE doctor_id=:id");
		if ($stmt->execute(array(':id'=>$id))) {
            echo "Successfully Added";
        } else {
            echo "Query Problem";
        }
	}
	 catch (PDOException $e) {
        echo $e->getMessage();
    }

}
?>