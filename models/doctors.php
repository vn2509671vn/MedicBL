<?php 
    function getdotors_bychuyenkhoaID($chuyenkhoa_id){
        $query = "select dt.doctor_id, dt.doctor_name, dt.doctor_image as iamge ";
        $query .= "from doctors as dt, chuyenkhoa as ck ";
        $query .= "where dt.chuyenkhoa_id = ck.chuyenkhoa_id and ck.chuyenkhoa_id = $chuyenkhoa_id";
        
        return mysql_query($query);
    }
?>