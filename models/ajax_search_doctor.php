<?php   
require('../config.php');
    $_SESSION["search"] = $_POST["search"];
    $_SESSION["chuyenkhoa_id"] = $_POST["chuyenkhoa_id"];
    $start = 0;
    $display = 11;
    $output = '';
    if(isset($_SESSION['lang'])){
         if($_SESSION['lang'] == 'en'){
            if($_POST["chuyenkhoa_id"] != "all"){
                $sql = "SELECT dt.doctor_name_en as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_en LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = '".$_POST["chuyenkhoa_id"]."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $display";
            }
            else {
                $sql = "SELECT dt.doctor_name_en as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_en LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $display";
            }
         }
         else {
            if($_POST["chuyenkhoa_id"] != "all"){
                $sql = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_vn LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = '".$_POST["chuyenkhoa_id"]."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $display";
            }
            else {
                $sql = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
                FROM doctors as dt, chuyenkhoa as ck 
                WHERE dt.doctor_name_vn LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id 
                ORDER BY dt.doctor_id 
                LIMIT $start, $display";
            }
         }
    }
    if($_POST["chuyenkhoa_id"] != "all"){
        $sql = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = '".$_POST["chuyenkhoa_id"]."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id
        ORDER BY dt.doctor_id 
        LIMIT $start, $display";
    }
    else {
        $sql = "SELECT dt.doctor_name_vn as name, dt.doctor_id , dt.doctor_image as image 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id
        ORDER BY dt.doctor_id 
        LIMIT $start, $display";
    }
    $result = mysql_query($sql);
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
                            <p><a href="#" class="btn btn-primary" role="button">Chi tiết</a></p>
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
    if($_POST["chuyenkhoa_id"] != "all"){
        $query_page = "SELECT COUNT(*) AS count 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = '".$_POST["chuyenkhoa_id"]."' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id";
    }
    else {
        $query_page = "SELECT COUNT(*) AS count 
        FROM doctors as dt, chuyenkhoa as ck 
        WHERE dt.doctor_name_vn LIKE '%".$_POST["search"]."%' AND dt.chuyenkhoa_id = ck.chuyenkhoa_id";
    }
    $result_page = mysql_query($query_page);
    $row = mysql_fetch_array($result_page);
    $count = $row['count'];
    $pages = ceil($count / $display);
    $start_page = 1;
    if ($pages > 5)
        $end_page = 5;
    else
        $end_page = $pages;
    
    $output .= "<div class ='col-md-12 text-center'><nav role='page'><ul class='pagination'>";
    for ($i = $start_page; $i <= $end_page; $i++) {
    if (1 == $i)
        $output .= "<li page='$i' class='active'><a >{$i}</a></li>";
    else
        $output .= "<li page='$i'><a >{$i}</a></li>";
    }
    
    if (1 < $pages) {
        $next = 2;
        $output .= "<li page='$next'><a >Next</a></li>";
        $output .= "<li page='$pages'><a >Last</a></li>";
    }
    $output = $output . "</div></ul></nav>";
    echo $output;
 ?>  