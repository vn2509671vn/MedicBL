<?php
 if(isset($_FILES['post_image']))
 {
	$attachment_file=$_FILES["post_image"];
    $output_dir = "../../../upload/tintuc/";
    $fileName = $_FILES["post_image"]["name"];
    if($_FILES['post_image']['size'] > 2097152){
		echo "error";
    }else{
   		move_uploaded_file($_FILES["post_image"]["tmp_name"],$output_dir.$fileName);
  		 echo $fileName;
    }
 }
?>