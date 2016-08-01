<?php 
require('../config.php');
    if($_POST['page']) {
    $page = $_POST['page'];
    $current_page = $page;
    $page -= 1;
    $display = 4;
    $start = $page * $display;
    $end = $start + 4;
    $output = "";
    $query = "select * 
            from camnghi_kh where camnghi_approved = '1'
            ORDER BY camnghi_id DESC 
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
                <div class="col-md-4"><a href="#" class=""><img src="../admin/upload/camnghi_khachhang/'.$row['camnghi_image'].'" class="img-responsive img-circle"></a></div>
                <div class="col-md-8">
                    <h3 class="title uppercase">'.$row['camnghi_author'].'</h3>
                        <p class="text-muted"><span class="glyphicon glyphicon-calendar"></span> '.$row['camnghi_date'].'</p>
                            '.$row['camnghi_content'].'
                        
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
    
    $query_page = "SELECT COUNT(*) AS count FROM camnghi_kh where camnghi_approved = '1'";
    
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