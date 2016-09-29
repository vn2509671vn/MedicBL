
<?php
    session_start();
    if(!isset($_SESSION['ses_name'])){
        header("location:login.php");
    }   
    require_once("connect/config.php");
        $name = "";
        $pass = "";
        if($_POST['user_name'] == ""){
            echo 1;
        }
        else if($_POST['user_pass'] == ""){
            echo 2;
        }
        else if($_POST['user_name'] != "" && $_POST['user_pass'] != "") {
            $name = $_POST['user_name'];
            $pass = $_POST['user_pass'];
            $pass = md5($pass);
            $sql = "select * from user where user_username = '".$name."' and user_password = '".$pass."'";
            $result = mysql_query($sql);
            $numrow = mysql_num_rows($result);
            if($numrow > 0){ // Đúng username và password
                $data = mysql_fetch_assoc($result);
                $_SESSION['ses_id'] = $data['user_id'];
                $_SESSION['ses_name'] = $data['user_username'];
                echo 0;
            }
        }   
?>
