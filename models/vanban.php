<?php
    function getdocument($lang){
        if($lang == 'en'){
            $query = "select vanban_id, vanban_name_en as name, vanban_link, vanban_type, vanban_date from vanban";
        }
        else {
            $query = "select vanban_id, vanban_name_vn as name, vanban_link, vanban_type, vanban_date from vanban";
        }
        return mysql_query($query);
    }
?>