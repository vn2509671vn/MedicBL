<?php 
    function getparentmenu($lang){
        if($lang == 'en'){
            $query = "select menu_id, menu_name_en as name, menu_link, menu_pos from menu where menu_parent = 0 ORDER BY menu_pos ASC";
        }
        else {
            $query = "select menu_id, menu_name_vn as name, menu_link, menu_pos from menu where menu_parent = 0 ORDER BY menu_pos ASC";
        }
        return mysql_query($query);
    }
?>