<?php   
/* output: 
        0: Success
        1: Sai thong tin benh nhan
        2: Sai capcha        
*/
require('../config.php');
session_start();
    $txtCap = $_POST['code'];
    $datetime = $_POST['datetime'];
    $date = date_create($datetime);
    $date = date_format($date, 'Y-m-d H:i:s');
    $sid = $_POST['sid'];
    $output = 0;
    if($_SESSION['security_code'] != $txtCap){
        $output = 2;
        echo $output;
        exit();
    }
    $sql = "select * from patient_info where mabenhnhan = '".$sid."' and ngaychidinh = '".$date."'";
    $query = mysql_query($sql);
    if($query){
        $row = mysql_num_rows($query);
        if($row == 0){
            $output = 1;
        }
    }
    else {
        $output = 1;
    }
    echo $output;
?>