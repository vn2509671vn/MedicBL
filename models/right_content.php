<?php 
    function getchuyenkhoa_muinhon($lang){
        if ($lang == 'en') {
            $query = "SELECT chuyenkhoa_id, chuyenkhoa_name_en as 'name' FROM chuyenkhoa WHERE chuyenkhoa_muinhon = '1'";
        }
        else {
            $query = "SELECT chuyenkhoa_id, chuyenkhoa_name as 'name' FROM chuyenkhoa WHERE chuyenkhoa_muinhon = '1'";
        }
        return mysql_query($query);
    }
    function getinfor_advertise(){
        $query = "select infor_advertise1, infor_advertise2, infor_advertise3 from infor_hos";
        return mysql_query($query);
    }
?>