<?php 
    function getgioithieuchung($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '5' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '5' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function gettamnhinsumenh($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '6' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '6' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function getvisaochontv($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '7' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '7' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function getkiemtrasuckhoe($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '9' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '9' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function getthanhtoanbaohiem($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '10' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '10' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function getthekhachhang($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '12' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '12' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function gethuongdankhach($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '13' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '13' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function gettinduocnhieu($lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_date, posts.post_count, posts.post_image, posts.cat_id from posts where cat_id IN(1,2,3) and posts.post_status = '1' ORDER BY post_count DESC LIMIT 0,4";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_date, posts.post_count, posts.post_image, posts.cat_id from posts where cat_id IN(1,2,3) and posts.post_status = '1' ORDER BY post_count DESC LIMIT 0,4";
        }
        return mysql_query($query);
    }
    
    function getchitiet_byID($id, $lang){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_date, posts.post_count, posts.post_image, posts.post_content_en as content, posts.cat_id from posts where posts.post_id = '$id' and posts.post_status = '1' ORDER BY post_count DESC LIMIT 0,4";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_date, posts.post_count, posts.post_image, posts.post_content as content, posts.cat_id from posts where posts.post_id = '$id' and posts.post_status = '1' ORDER BY post_count DESC LIMIT 0,4";
        }
        return mysql_query($query);
    }
    
    function getcactinlienquan($lang, $cat_id, $id){
        if($lang == 'en'){
            $query = "select posts.post_id, posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where posts.cat_id = '$cat_id' and posts.post_status = '1' and posts.post_id != '$id' ORDER BY posts.post_id DESC LIMIT 0,3";
        }
        else {
            $query = "select posts.post_id, posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where posts.cat_id = '$cat_id' and posts.post_status = '1' and posts.post_id != '$id' ORDER BY posts.post_id DESC LIMIT 0,3";
        }
        return mysql_query($query);
    }
    
    function addView($id){
        $query = "select post_count from posts where post_id = '$id'";
        $count = mysql_fetch_array(mysql_query($query));
        $count = $count['post_count'] + 1;
        $update_query = "update posts set post_count = '$count' where post_id='$id'";
        mysql_query($update_query);
    }
    
    function getHosInfo($lang){
        if($lang == 'en'){
            $query = "select infor_id, infor_name_en as name, infor_address_en as address, infor_phone, infor_fax, infor_email, infor_hos_title as title from infor_hos";
        }
        else {
            $query = "select infor_id, infor_name as name, infor_address as address, infor_phone, infor_fax, infor_email, infor_hos_title as title from infor_hos";
        }
        return mysql_query($query);
    }
?>