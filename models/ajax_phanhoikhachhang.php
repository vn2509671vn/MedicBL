<?php   
require('../config.php');
session_start();
    $txtCap = $_POST['txtCapcha'];
    $email = $_POST['email'];
    $benhnhan_hoten = $_POST['benhnhan_hoten'];
    $benhnhan_address = $_POST['benhnhan_address'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $nhanphanhoi = $_POST['nhanphanhoi'];
    $loaithacmac = $_POST['loaithacmac'];
    $maso = $_POST['maso'];
    $ngaysinh = $_POST['ngaysinh'];
    $output = 0;
    if($txtCap == NULL){
        $output = 2;
        echo $output;
        exit();
    }
    else{
        if($_SESSION['security_code'] != $txtCap){
            $output = 2;
            echo $output;
            exit();
        }
    }
    $sql = "Insert into contact(
            contact_user_name,
            contact_ngaysinh, 
            contact_user_mail,
        	contact_loaithacmac, 
        	contact_maso_bn,
            contact_user_content,
            contact_user_title,
            contact_user_phone,
            contact_user_address,
            contact_date,
            contact_lienlac) 
            value(
            '". $benhnhan_hoten ."',
            '". $ngaysinh ."',
            '". $email ."',
            '". $loaithacmac ."',
            '". $maso ."',
            '". $content ."',
            '". $title ."',
            '". $phone ."',
            '". $benhnhan_address ."',
            '". $date ."',
            '". $nhanphanhoi ."'
            )";
    
    $result = mysql_query($sql);
    if($result == false){
        $output = 0;
    }else{
        $output = 1;
    }
    echo $output;
 ?>