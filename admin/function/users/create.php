<?php
require_once '../../../connect/dbconfig.php';


if ($_POST) {
    $user_name = $_POST['user_name'];
    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];
    $user_password = md5($user_password);
    $user_admin = $_POST['user_admin'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    try {

        $stmt = $db_con->prepare("INSERT INTO user(user_name,user_username,user_password,user_admin,user_last_datetime) VALUES(:uname, :uusername, :upassword,:uadmin,:udate)");

        $stmt->bindParam(":uname", $user_name);
        $stmt->bindParam(":uusername", $user_username);
        $stmt->bindParam(":upassword", $user_password);
        $stmt->bindParam(":uadmin", $user_admin);
        $stmt->bindParam(":udate", $date);
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