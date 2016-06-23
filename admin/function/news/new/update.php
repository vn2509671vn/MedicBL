<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$cat_title_vn = $_POST['cat_title_vn'];
		$cat_title_en = $_POST['cat_title_en'];
		$cat_descrip_vn = $_POST['cat_descrip_vn'];
		$cat_descrip_en = $_POST['cat_descrip_en'];
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$date  = date('Y-m-d H:i:s');

		$stmt = $db_con->prepare("UPDATE category SET cat_date=:cdate, cat_title_vn=:ctitv, cat_descrip_vn=:cdesv, cat_title_en=:ctite, cat_descrip_en=:cdese WHERE cat_id=:id");
		$stmt->bindParam(":cdate", $date);
		$stmt->bindParam(":ctitv", $cat_title_vn);
		$stmt->bindParam(":cdesv", $cat_descrip_vn);
		$stmt->bindParam(":ctite", $cat_title_en);
		$stmt->bindParam(":cdese", $cat_descrip_en);
		$stmt->bindParam(":id", $id);
		if($stmt->execute())
		{
			echo "Successfully updated";
		}
		else{
			echo "Query Problem";
		}
	}

?>