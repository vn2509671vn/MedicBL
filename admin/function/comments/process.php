<?php
require_once '../../../connect/dbconfig.php';

	
	if($_POST)
	{
	    $id = $_POST['id'];
	    $camnghi_approved=1;
	    $stmt1 = $db_con->prepare("SELECT * FROM camnghi_kh where camnghi_id=:id");
        $stmt1->bindParam(":id", $id);
        $stmt1->execute();
        while ($row1= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        	if($row1['camnghi_approved']==0){
        		$camnghi_approved=1;
        	}
        	else{
        		$camnghi_approved=0;
        	}
        }
	    
	    $stmt = $db_con->prepare("UPDATE camnghi_kh SET camnghi_approved=:c1 WHERE camnghi_id=:id");
		$stmt->bindParam(":c1", $camnghi_approved);
		$stmt->bindParam(":id", $id);
		if($stmt->execute())
		{
			echo $camnghi_approved;
		}
		else{
			echo "Query Problem";
		}
	}
?>