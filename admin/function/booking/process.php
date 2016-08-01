<?php
require_once '../../../connect/dbconfig.php';

	
	if($_POST)
	{
	    $id = $_POST['id'];
	    $booking_approve=1;
	    $stmt1 = $db_con->prepare("SELECT * FROM booking where booking_id=:id");
        $stmt1->bindParam(":id", $id);
        $stmt1->execute();
        while ($row1= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        	if($row1['booking_approve']==0){
        		$booking_approve=1;
        	}
        	else{
        		$booking_approve=0;
        	}
        }
	    
	    $stmt = $db_con->prepare("UPDATE booking SET booking_approve=:c1 WHERE booking_id=:id");
		$stmt->bindParam(":c1", $booking_approve);
		$stmt->bindParam(":id", $id);
		if($stmt->execute())
		{
			echo $booking_approve;
		}
		else{
			echo "Query Problem";
		}
	}
?>