<?php
require_once '../../../connect/dbconfig.php';
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM doctors WHERE doctor_name_vn LIKE (:keyword) ORDER BY doctor_id ASC LIMIT 0, 10";
$query = $db_con->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['doctor_name_vn']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['doctor_name_vn']).'\')">'.$country_name.'</li>';
}
?>