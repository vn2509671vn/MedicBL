<?php
require_once '../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$user_name = $_POST['user_name'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		if (isset($_POST['user_admin'])) {
			$user_admin = 1;
		} else {
			$user_admin = 0;
		}
		$stmt = $db_con->prepare("UPDATE user SET user_username=:uusername, user_password=:upassword, user_admin=:uadmin, user_name=:uname WHERE user_id=:id");
		$stmt->bindParam(":uusername", $user_username);
		$stmt->bindParam(":upassword", $user_password);
		$stmt->bindParam(":uadmin", $user_admin);
		$stmt->bindParam(":uname", $user_name);
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