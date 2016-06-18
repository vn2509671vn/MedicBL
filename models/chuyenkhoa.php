<?php 
    function getchuyenkhoa(){
        $query = "SELECT ck.* , serv.services_name, serv.services_name_en FROM chuyenkhoa AS ck, services AS serv WHERE ck.services_id = serv.services_id";
        return mysql_query($query);
    }
?>
