<?php
    function get_4new_post(){
        $query = "select * from posts limit 4 order by post_date DESC where post_status = '1'";
        return mysql_query($query);
    }
?>