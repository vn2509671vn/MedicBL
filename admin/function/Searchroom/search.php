// <?php
// $dbHost = 'localhost';
// $dbUsername = 'root';
// $dbPassword = '';
// $dbName = 'codexworld';
// //connect with the database
// $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
// //get search term
// $searchTerm = $_GET['term'];
// //get matched data from skills table
// $query = $db->query("SELECT * FROM skills WHERE skill LIKE '%".$searchTerm."%' ORDER BY skill ASC");
// while ($row = $query->fetch_assoc()) {
//     $data[] = $row['skill'];
// }
// //return json data
// echo json_encode($data);
// ?>
<?php
require_once '../../../connect/dbconfig.php';
$keyword = '%'.$_GET['term'].'%';
$sql = "SELECT * FROM doctors WHERE doctor_name_vn LIKE (:keyword) ORDER BY doctor_id ASC LIMIT 0, 10";
$query = $db_con->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $data[] = $row['doctor_name_vn'];
}
echo json_encode($data);
?>