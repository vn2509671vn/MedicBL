<?php
 
		$attachment_file=$_FILES["doctor_image"];
        $output_dir = "../../../upload/image_doctor/";
        $fileName = $_FILES["doctor_image"]["name"];
		move_uploaded_file($_FILES["doctor_image"]["tmp_name"],$output_dir.$fileName);
		//echo "File uploaded successfully";
		echo $fileName;

 
?>