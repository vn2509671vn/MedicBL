<?php   
require('../config.php');
session_start();
    $txtCap = $_POST['txtCapcha'];
    $email = $_POST['email'];
    $benhnhan_hoten = $_POST['benhnhan_hoten'];
    $nguoithan_hoten = $_POST['nguoithan_hoten'];
    $phone = $_POST['phone'];
    $gioitinh = $_POST['gioitinh'];
    $dotuoi = $_POST['dotuoi'];
    $chuyenkhoa = $_POST['chuyenkhoa'];
    $doctor = $_POST['doctor'];
    $date = $_POST['date'];
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
    if($chuyenkhoa == "Null"){
        $sql = "Insert into booking(
        booking_name_relatives, 
        booking_name, 
        booking_cellphone,
        booking_gender,
        booking_age,
        booking_email,
        booking_date
        ) 
        value(
        '". $nguoithan_hoten ."',
        '". $benhnhan_hoten ."',
        '". $phone ."',
        '". $gioitinh ."',
        '". $dotuoi ."',
        '". $email ."',
        '". $date ."'
        )";
    }
    else if($doctor == "Null" || $doctor == ""){
        $sql = "Insert into booking(
        booking_name_relatives, 
        booking_name, 
        booking_cellphone,
        booking_gender,
        booking_age,
        booking_email,
        booking_date,
        booking_chuyenkhoa_id
        ) 
        value(
        '". $nguoithan_hoten ."',
        '". $benhnhan_hoten ."',
        '". $phone ."',
        '". $gioitinh ."',
        '". $dotuoi ."',
        '". $email ."',
        '". $date ."',
        '". $chuyenkhoa ."'
        )";
    }
    else {
        $sql = "Insert into booking(
        booking_name_relatives, 
        booking_name, 
        booking_cellphone,
        booking_gender,
        booking_age,
        booking_email,
        booking_date,
        booking_chuyenkhoa_id,
        booking_doctor_id) 
        value(
        '". $nguoithan_hoten ."',
        '". $benhnhan_hoten ."',
        '". $phone ."',
        '". $gioitinh ."',
        '". $dotuoi ."',
        '". $email ."',
        '". $date ."',
        '". $chuyenkhoa ."',
        '". $doctor ."'
        )";
    }
    $result = mysql_query($sql);
    echo $result;
 ?>  