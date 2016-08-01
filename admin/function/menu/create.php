<?php
require_once '../../../connect/dbconfig.php';


if ($_POST) {
    $menu_name_vn= $_POST['menu_name_vn'];
    $menu_name_en = $_POST['menu_name_en'];
    $menu_descript_vn= $_POST['menu_descript_vn'];
    $menu_descript_en = $_POST['menu_descript_en'];
    $menu_id = $_POST['menu_id']; // menu parent
    $menu_link= $_POST['menu_link'];
    $menu_pos = $_POST['menu_pos'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:s');
    try {
        $stmt = $db_con->prepare("INSERT INTO menu(menu_name_vn,menu_name_en,menu_descript_vn,menu_descript_en,menu_parent,menu_link,menu_pos) VALUES(:m1, :m2, :m3,:m4,:m5,:m6,:m7)");

        $stmt->bindParam(":m1", $menu_name_vn);
        $stmt->bindParam(":m2", $menu_name_en);
        $stmt->bindParam(":m3", $menu_descript_vn);
        $stmt->bindParam(":m4", $menu_descript_en);
        $stmt->bindParam(":m5", $menu_id);
        $stmt->bindParam(":m6", $menu_link);
        $stmt->bindParam(":m7", $menu_pos);
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