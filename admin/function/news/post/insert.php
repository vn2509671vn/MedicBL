<?php
 
		$attachment_file=$_FILES["post_image"];
        $output_dir = "../../../upload/infor_hos/";
        $fileName = $_FILES["post_image"]["name"];
		move_uploaded_file($_FILES["post_image"]["tmp_name"],$output_dir.$fileName);
		//echo "File uploaded successfully";
		echo $fileName;

 
?>