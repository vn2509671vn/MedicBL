<?php 
    require('../config.php');
    if($_POST['page']) {
    $page = $_POST['page'];
    $keyword = $_POST['keyword'];
    $current_page = $page;
    $page -= 1;
    $display = 10;
    $start = $page * $display;
    $end = 10;
    $output = "";
    if(isset($_SESSION['lang'])){
         if($_SESSION['lang'] == 'en'){
            $query = "SELECT dt.doctor_id AS id, dt.doctor_name_en AS title, dt.doctor_experience_en AS content,  'doctors' AS table_name 
                        FROM doctors dt 
                        WHERE dt.doctor_experience_en LIKE  '%$keyword%' 
                        OR dt.doctor_name_en LIKE  '%$keyword%' 
                        UNION 
                        (SELECT p.post_id AS id, p.post_title_en AS title, p.post_excerpt_en AS content,  'posts' AS table_name 
                        FROM posts p 
                        WHERE  p.post_status = '1'
                        AND (p.post_title_en LIKE  '%$keyword%' 
                        OR  p.post_excerpt_en LIKE  '%$keyword%'))
                        LIMIT $start,$end";
         }
         else {
            $query = "SELECT dt.doctor_id AS id, dt.doctor_name_vn AS title, dt.doctor_experience_vn AS content,  'doctors' AS table_name 
                        FROM doctors dt 
                        WHERE dt.doctor_experience_vn LIKE  '%$keyword%' 
                        OR dt.doctor_name_vn LIKE  '%$keyword%' 
                        UNION 
                        (SELECT p.post_id AS id, p.post_title AS title, p.post_excerpt AS content,  'posts' AS table_name 
                        FROM posts p 
                        WHERE p.post_status = '1'
                        AND (p.post_title LIKE  '%$keyword%' 
                        OR  p.post_excerpt LIKE  '%$keyword%'))
                        LIMIT $start,$end"; 
         }
    }
    $query = "SELECT dt.doctor_id AS id, dt.doctor_name_vn AS title, dt.doctor_experience_vn AS content,  'doctors' AS table_name 
                        FROM doctors dt 
                        WHERE dt.doctor_experience_vn LIKE  '%$keyword%' 
                        OR dt.doctor_name_vn LIKE  '%$keyword%' 
                        UNION 
                        (SELECT p.post_id AS id, p.post_title AS title, p.post_excerpt AS content,  'posts' AS table_name 
                        FROM posts p 
                        WHERE  p.post_status = '1'
                        AND (p.post_title LIKE  '%$keyword%' 
                        OR  p.post_excerpt LIKE  '%$keyword%'))
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
           if($row['table_name'] == "doctors"){
           $output .= '  
                <div class="row text-left">
                <div class="col-md-12">
                    <h3 class="title capitalize"><a href="doctor_chitiet.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                            '.$row['content'].'
                        
                </div>
                </div>
                <hr class="divider">
            ';
           }
           else {
               $output .= '  
                <div class="row text-left">
                <div class="col-md-12">
                    <h3 class="title capitalize"><a href="post_chitiet.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
                            '.$row['content'].'
                        
                </div>
                </div>
                <hr class="divider">
            ';
           }
        }  
        // echo $output;  
    }  
    else  
    {  
        echo '<div class="row text-center">Data Not Found</div>';
        return;
    }
    
    $query_page = "SELECT COUNT(*) AS count FROM (SELECT dt.doctor_id AS id, dt.doctor_name_vn AS title, dt.doctor_experience_vn AS content,  'doctors' AS table_name 
                        FROM doctors dt 
                        WHERE dt.doctor_experience_vn LIKE  '%$keyword%' 
                        OR dt.doctor_name_vn LIKE  '%$keyword%' 
                        UNION 
                        (SELECT p.post_id AS id, p.post_title AS title, p.post_excerpt AS content,  'posts' AS table_name 
                        FROM posts p 
                        WHERE p.post_title LIKE  '%$keyword%' 
                        OR  p.post_excerpt LIKE  '%$keyword%')) as tmp_table";
    
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
            $output .= "<li page='$i' class='active'><a href='#'>{$i}</a></li>";
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