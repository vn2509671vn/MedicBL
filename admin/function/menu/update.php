<?php
require_once '../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$menu_name_vn= $_POST['menu_name_vn'];
	    $menu_name_en = $_POST['menu_name_en'];
	    $menu_descript_vn= $_POST['menu_descript_vn'];
	    $menu_descript_en = $_POST['menu_descript_en'];
	    $menu_id = $_POST['menu_id']; // menu parent
	    $menu_link= $_POST['menu_link'];
	    $menu_pos = $_POST['menu_pos'];
		$stmt = $db_con->prepare("UPDATE menu SET menu_name_vn=:m1, menu_name_en=:m2, menu_descript_vn=:m3, menu_descript_en=:m4,  menu_parent=:m5, menu_link=:m6, menu_pos=:m7 WHERE menu_id=:id");
		$stmt->bindParam(":m1", $menu_name_vn);
		$stmt->bindParam(":m2", $menu_name_en);
		$stmt->bindParam(":m3", $menu_descript_vn);
		$stmt->bindParam(":m4", $menu_descript_en);
		$stmt->bindParam(":m5", $menu_id);
		$stmt->bindParam(":m6", $menu_link);
		$stmt->bindParam(":m7", $menu_pos);
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