<?php
    if(isset($_SESSION['ses_name'])){
        header("location:admin/index.php");
    }
?>
<?php
    if(isset($_POST['ok'])){
        $name = "";
        $pass = "";
        if($_POST['user_name'] == ""){
            echo "Please enter your name!";
            header("location:./login.php");
        }else{
            $name = $_POST['user_name'];
        }
        if($_POST['user_pass'] == ""){
            echo "Please enter your pass!";
            header("location:./login.php");
        }else{
            $pass = $_POST['user_pass'];
            $pass = md5($pass);
        }
        $sql = "select * from user where user_username = '".$name."' and user_password = '".$pass."'";
        $result = mysql_query($sql);
        $numrow = mysql_num_rows($result);
        if($numrow > 0){ // Đúng username và password
            $data = mysql_fetch_assoc($result);
            $_SESSION['ses_id'] = $data['user_id'];
            $_SESSION['ses_name'] = $data['user_username'];
            
            header("location:admin/index.php");
            exit();
        }else{
            echo "Wrong username or password!";
            die();
        }
    }
?>
