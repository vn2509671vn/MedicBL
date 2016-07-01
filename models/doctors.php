<?php 
    function getdotors_bychuyenkhoaID($chuyenkhoa_id, $lang){
        if($lang == 'en'){
            $query = "select dt.doctor_id, dt.doctor_name_en as name, dt.doctor_image as image ";
        }
        else {
            $query = "select dt.doctor_id, dt.doctor_name_vn as name, dt.doctor_image as image ";
        }
        $query .= "from doctors as dt, chuyenkhoa as ck ";
        $query .= "where dt.chuyenkhoa_id = ck.chuyenkhoa_id and ck.chuyenkhoa_id = $chuyenkhoa_id";
        return mysql_query($query);
    }
?>