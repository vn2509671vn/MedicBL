<?php
require_once '../../../../connect/dbconfig.php';

	
	if($_POST)
	{
		$id = $_POST['id'];
		$date  = date('Y-m-d H:i:s');
	    $post_title = $_POST['post_title'];
	    $userpic = $_POST['post_temp'];
	    $post_title_en = $_POST['post_title_en'];
	    $post_content = $_POST['post_content'];
	    $post_content_en = $_POST['post_content_en'];
	    $post_excerpt = $_POST['post_excerpt'];
	    $post_excerpt_en = $_POST['post_excerpt_en'];
	    $post_status = $_POST['post_status'];
	    $cat_id = $_POST['cat_id'];
		try{
            $stmt = $db_con->prepare("UPDATE posts SET post_date=:p1, post_title=:p2, post_title_en=:p3, post_content=:p4, post_content_en=:p5, post_excerpt=:p6, post_excerpt_en=:p7, post_image=:p8, post_status=:p9, cat_id=:p10 WHERE post_id=:id");
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
            $stmt->bindParam(":id", $id);
            if ($stmt->execute()) {
                echo "Successfully Added";
            } else {
                echo "Query Problem";
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
	}

?>