<?php
require_once '../../../connect/dbconfig.php';
	if($_POST)
	{
	    $id = $_POST['id'];
	    $contact_approve=1;
	    $stmt1 = $db_con->prepare("SELECT * FROM contact where contact_id=:id");
        $stmt1->bindParam(":id", $id);
        $stmt1->execute();
        while ($row1= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        	if($row1['contact_approve']==0){
        		$contact_approve=1;
        	}
        	else{
        		$contact_approve=0;
        	}
        }
	    
	    $stmt = $db_con->prepare("UPDATE contact SET contact_approve=:c1 WHERE contact_id=:id");
		$stmt->bindParam(":c1", $contact_approve);
		$stmt->bindParam(":id", $id);
		if($stmt->execute())
		{
			echo $contact_approve;
		}
		else{
			echo "Query Problem";
		}
	}
?>