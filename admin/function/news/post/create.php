<?php

error_reporting( ~E_NOTICE ); // avoid notice

include("../../../../connect/dbconfig.php");

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date  = date('Y-m-d H:i:s');
    $post_title = $_POST['post_title'];
    $post_title_en = $_POST['post_title_en'];
    $post_content = $_POST['post_content'];
    $post_content_en = $_POST['post_content_en'];
    $post_excerpt = $_POST['post_excerpt'];
    $post_excerpt_en = $_POST['post_excerpt_en'];
    $post_status = $_POST['post_status'];
    $cat_id = $_POST['cat_id'];
    $post_count=1;
if($_POST)
{
        try{
            $stmt = $db_con->prepare("INSERT INTO `posts`(`post_date`, `post_title`, `post_title_en`, `post_content`, `post_content_en`, `post_excerpt`, `post_excerpt_en`, `post_image`, `post_status`, `cat_id`, `post_count`) 
        VALUES(:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11)");

            $stmt->bindParam(":p1", $date);
            $stmt->bindParam(":p2", $post_title);
            $stmt->bindParam(":p3", $post_title_en);
            $stmt->bindParam(":p4", $post_content);
            $stmt->bindParam(":p5", $post_content_en);
            $stmt->bindParam(":p6", $post_excerpt);
            $stmt->bindParam(":p7", $post_excerpt_en);
            $stmt->bindParam(":p8", $userpic);
            $stmt->bindParam(":p9", $post_status);
            $stmt->bindParam(":p10", $cat_id);
            $stmt->bindParam(":p11", $post_count);
            if ($stmt->execute()) {
                echo "Successfully Added";
            } else {
                echo "Query Problem";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
else{
    echo "Dont create";
}
?>