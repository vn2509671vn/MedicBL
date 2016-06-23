<?php 
    function getgioithieuchung($lang){
        if($lang == 'en'){
            $query = "select posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '5' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '5' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function gettamnhinsumenh($lang){
        if($lang == 'en'){
            $query = "select posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '6' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '6' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
    
    function getvisaochontv($lang){
        if($lang == 'en'){
            $query = "select posts.post_title_en as title, posts.post_content_en as content, posts.post_date, posts.post_image from posts where cat_id = '7' and posts.post_status = '1'";
        }
        else {
            $query = "select posts.post_title as title, posts.post_content as content, posts.post_date, posts.post_image from posts where cat_id = '7' and posts.post_status = '1'";
        }
        return mysql_query($query);
    }
?>