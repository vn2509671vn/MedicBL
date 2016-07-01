<?php
    function get_4new_post(){
        $query = "select * from posts where post_status = '1' and cat_id NOT IN(5,6,7,8) ORDER BY post_date DESC limit 4";
        return mysql_query($query);
    }
?>