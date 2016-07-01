<?php
    require('../config.php');
    $id = $_POST['chuyenkhoa_id'];
    $output = '';
    if(isset($_SESSION['lang'])){
        if($_SESSION['lang'] == 'en'){
            $query = "select doctor_id, doctor_name_en as name from doctors where chuyenkhoa_id = $id";
        }
        else {
            $query = "select doctor_id, doctor_name_vn as name from doctors where chuyenkhoa_id = $id";
        }
    }
    else {
        $query = "select doctor_id, doctor_name_vn as name from doctors where chuyenkhoa_id = $id";
    }
    
    $result = mysql_query($query);
    if(mysql_num_rows($result) == 0){
        return;
    }
    $output .= "<select class='form-control' id='doctor_id'>";
    $output .= "<option value='Null'>Chọn bác sĩ</option>";
    while($doctor = mysql_fetch_array($result)){
        $output .= "<option value='".$doctor['doctor_id']."'>".$doctor['name']."</option>";
    }
    $output .= "</select>";
    echo $output;
?>