<?php 
    function getchuyenkhoa($lang){
        if($lang == 'en'){
            $query = "select chuyenkhoa.chuyenkhoa_id, chuyenkhoa.chuyenkhoa_name_en as name ";
            $query .= "from chuyenkhoa";
        }
        else {
            $query = "select chuyenkhoa.chuyenkhoa_id, chuyenkhoa.chuyenkhoa_name as name ";
            $query .= "from chuyenkhoa";
        }
        return mysql_query($query);
    }

    function getservices($lang){
        if ($lang == 'en') {
            $query = "select services_id, services_name_en as name, services_descript_en as descript, services_sort from services";
        }
        else {
            $query = "select services_id, services_name as name, services_descript as descript, services_sort from services";
        }
        $query .= " ORDER BY services_sort ASC";
        return mysql_query($query);
    }
    function getchuyenkhoa_byID($service_id, $lang){
        if($lang == 'en'){
            $query = "SELECT ck.chuyenkhoa_id, ck.chuyenkhoa_name_en as name, ck.chuyenkhoa_descript_en as descript FROM chuyenkhoa AS ck, services AS serv WHERE ck.services_id = serv.services_id and serv.services_id = $service_id ORDER BY ck.chuyenkhoa_name ASC";
        }
        else {
            $query = "SELECT ck.chuyenkhoa_id, ck.chuyenkhoa_name as name, ck.chuyenkhoa_descript as descript FROM chuyenkhoa AS ck, services AS serv WHERE ck.services_id = serv.services_id and serv.services_id = $service_id ORDER BY ck.chuyenkhoa_name ASC";
        }
        return mysql_query($query);
    }
    
    function getchuyenkhoa_detail($chuyenkhoa_id, $lang){
        if($lang == 'en'){
            $query = "select ck.chuyenkhoa_id, ck.chuyenkhoa_name_en as name, ck.chuyenkhoa_descript_en as descript, ck.services_id ";
            $query .= "from chuyenkhoa as ck ";
            $query .= "where ck.chuyenkhoa_id = $chuyenkhoa_id";
        }
        else {
            $query = "select ck.chuyenkhoa_id, ck.chuyenkhoa_name as name, ck.chuyenkhoa_descript as descript, ck.services_id ";
            $query .= "from chuyenkhoa as ck ";
            $query .= "where ck.chuyenkhoa_id = $chuyenkhoa_id";
        }
        return mysql_query($query);
    }
?>
