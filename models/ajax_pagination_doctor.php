<?php 
require('../config.php');
    if($_POST['page']) {
    $page = $_POST['page'];
    $current_page = $page;
    $page -= 1;
    $display = 11;
    $start = $page * $display;
    $end = $start + 11;
    $chitiet = $main['chitiet'];
    if($_SESSION["search"] && $_SESSION["chuyenkhoa_id"]){
        $text_search = $_SESSION["search"];
        $chuyenkhoa_id = $_SESSION["chuyenkhoa_id"];
    }
    else {
        $text_search = '';
        $chuyenkhoa_id = 'all';
    }
    $output = "";
    if(isset($_SESSION['lang'])){
         if($_SESSION['lang'] == 'en'){
            if($chuyenkhoa_id != "all"){
                $query = "SELECT dt.doctor_name_en as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_en LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = '".$chuyenkhoa_id."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $end";
            }
            else {
                $query = "SELECT dt.doctor_name_en as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_en LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $end";
            }
         }
         else {
            if($chuyenkhoa_id != "all"){
                $query = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_vn LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = '".$chuyenkhoa_id."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $end";
            }
            else {
                $query = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_vn LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $end";
            }
         }
    }
    if($chuyenkhoa_id != "all"){
        $query = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = '".$chuyenkhoa_id."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id
        ORDER BY dt.doctor_id 
        LIMIT $start, $end";
    }
    else {
        $query = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id
        ORDER BY dt.doctor_id 
        LIMIT $start, $end";
    }
    
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
                <div class="col-sm-4 col-md-3 col-xs-12">
                <div class="thumbnail">
                    <img src="../admin/upload/image_doctor/'.$row['image'].'" alt="..." class="height-157">
                        <div class="caption">
                            <p>'.$row['name'].'</p>
                            <p><a href="doctor_chitiet.php?id='.$row['doctor_id'].'" class="btn btn-success" role="button">CHI TIẾT</a></p>
                        </div>
                    </div>
                </div>  
            ';
        }  
        // echo $output;  
    }  
    else  
    {  
        echo '<div class="row text-center">Data Not Found</div>';
        return;
    }
    if($chuyenkhoa_id != "all"){
        $query_page = "SELECT COUNT(*) AS count 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = '".$chuyenkhoa_id."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id";
    }
    else {
        $query_page = "SELECT COUNT(*) AS count 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$text_search."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id";
    }
    
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