<?php   
require('../config.php');
    $name = $_POST['name'];
    $message = $_POST['message'];
    $image = basename($_FILES["fileToUpload"]["name"]);
    $date = date('Y-m-d');
    $output = false;
    if($image == ""){
        $image_name = "camnghikhachhang.jpg";
    }
    else {
        $target_dir = "../admin/upload/camnghi_khachhang/";
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
        $image_name = basename( $_FILES["fileToUpload"]["name"]);
    }
    $sql = "Insert into camnghi_kh(
        camnghi_author, 
        camnghi_image, 
        camnghi_content, 
        camnghi_date) 
        value(
        '". $name ."',
        '". $image_name ."',
        '". $message ."',
        '". $date ."'
        )";
    $result = mysql_query($sql);
    if($result == false){
        $output = '<script type="text/javascript">alert("THẤT BẠI");</script>';
    }else{
        $output = '<script type="text/javascript">alert("GỬI CẢM NGHĨ THÀNH CÔNG! CẢM ƠN BẠN ĐÃ ĐÓNG GÓP: '.$image.'");window.location.href = "../views/camnghi_kh.php";</script>';
    }
    echo $output;
 ?>  