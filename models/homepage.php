<?php
    function get_4new_post(){
        $query = "select * from posts where post_status = '1' ORDER BY post_date DESC limit 4";
        return mysql_query($query);
    }
?>