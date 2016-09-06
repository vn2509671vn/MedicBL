<?php 
require('../config.php');
    if($_POST['page']) {
    $page = $_POST['page'];
    $current_page = $page;
    $page -= 1;
    $display = 9;
    $start = $page * $display;
    $end = $start + 9;
    $output = "";
    if(isset($_SESSION['lang'])){
         if($_SESSION['lang'] == 'en'){
            $query = "select posts.post_id ,posts.post_title_en as title, posts.post_date, posts.post_count, posts.post_image, post_excerpt_en as content 
            from posts where cat_id = '13' and posts.post_status = '1' 
            ORDER BY post_count DESC 
            LIMIT $start,$end";
         }
         else {
            $query = "select posts.post_id ,posts.post_title as title, posts.post_date, posts.post_count, posts.post_image, post_excerpt as content 
            from posts where cat_id = '13' and posts.post_status = '1' 
            ORDER BY post_count DESC 
            LIMIT $start,$end";
         }
    }
    $query = "select posts.post_id ,posts.post_title as title, posts.post_date, posts.post_count, posts.post_image, post_excerpt as content 
            from posts where cat_id = '13' and posts.post_status = '1' 
            ORDER BY post_count DESC 
            LIMIT $start,$end";
    
    $result = mysql_query($query);
    if($result == false){
        echo '<div class="row text-center">Data Not Found</div>';
        return;
    }
    if(mysql_num_rows($result) > 0)  
    {  
        while($row = mysql_fetch_array($result))  
        {  
           $output .= '  
                <div class="row text-left">
                <div class="col-md-4"><a href="post_chitiet.php?cat_id=1&id='.$row['post_id'].'" class=""><img src="../admin/upload/tintuc/'.$row['post_image'].'" class="img-responsive"></a></div>
                <div class="col-md-8">
                    <h3 class="title uppercase"><a href="post_chitiet.php?cat_id=13&id='.$row['post_id'].'">'.$row['title'].'</a></h3>
                        <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> '.$row['post_date'].'</p>
                            '.$row['content'].'
                        <p class="text-muted"><a href="post_chitiet.php?cat_id=13&id='.$row['post_id'].'">Chi tiết</a></p>
                </div>
                </div>
                <hr class="divider">
            ';
        }  
        // echo $output;  
    }  
    else  
    {  
        echo '<div class="row text-center">Data Not Found</div>';
        return;
    }
    
    $query_page = "SELECT COUNT(*) AS count FROM posts where cat_id = '13' and posts.post_status = '1'";
    
    $result_page = mysql_query($query_page);
    $row = mysql_fetch_array($result_page);
    $count = $row['count'];
    $pages = ceil($count / $display);
     
    if ($current_page >= 5) {
        $start_page = $current_page - 2;
        if ($pages > $current_page + 2)
            $end_page = $current_page + 2;
        else if ($current_page <= $pages && $current_page > $pages - 4) {
            $start_page = $pages - 4;
            $end_page = $pages;
        } else {
            $end_page = $pages;
        }
    } else {
        $start_page = 1;
    if ($pages > 5)
        $end_page = 5;
    else
        $end_page = $pages;
    }
     
    $output .= "<div class ='col-md-12 text-center'><nav role='page'><ul class='pagination'>";
     
    if ($current_page > 1) {
        $output .= "<li page='1' onclick='pagination(1)'><a href='#'>First</a></li>";
        $previous = $current_page - 1;
        $output .= "<li page='$previous' onclick='pagination($previous)'><a href='#'>Previous</a></li>";
    } 
     
    for ($i = $start_page; $i <= $end_page; $i++) {
        if ($current_page == $i)
            $output .= "<li page='$i' class='active'><a>{$i}</a></li>";
        else
            $output .= "<li page='$i' onclick='pagination($i)'><a href='#'>{$i}</a></li>";
    }
     
    if ($current_page < $pages) {
        $next = $current_page + 1;
        $output .= "<li page='$next' onclick='pagination($next)'><a href='#'>Next</a></li>";
        $output .= "<li page='$pages' onclick='pagination($pages)'><a href='#'>Last</a></li>";
    } 
     
    $output = $output . "</div></ul></nav>";
     
    echo $output;
 
}
?>