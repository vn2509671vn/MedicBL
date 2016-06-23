<?php
require_once '../../../../connect/dbconfig.php';


if ($_POST) {
    $cat_title_vn = $_POST['cat_title_vn'];
    $cat_title_en = $_POST['cat_title_en'];
    $cat_descrip_vn = $_POST['cat_descrip_vn'];
    $cat_descrip_en = $_POST['cat_descrip_en'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date  = date('Y-m-d H:i:s');

    try {

        $stmt = $db_con->prepare("INSERT INTO category(cat_date,cat_title_vn,cat_descrip_vn,cat_title_en,cat_descrip_en) VALUES (:cdate, :ctitv, :cdesv, :ctite, :cdese)");
        $stmt->bindParam(":cdate", $date);
        $stmt->bindParam(":ctitv", $cat_title_vn);
        $stmt->bindParam(":cdesv", $cat_descrip_vn);
        $stmt->bindParam(":ctite", $cat_title_en);
        $stmt->bindParam(":cdese", $cat_descrip_en);
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