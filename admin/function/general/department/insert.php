<?php
	if(isset($_FILES['department_image']))
	{
		$attachment_file=$_FILES["department_image"];
        $output_dir = "../../../upload/image_department/";
        $fileName = $_FILES["department_image"]["name"];
		move_uploaded_file($_FILES["department_image"]["tmp_name"],$output_dir.$fileName);
		//echo "File uploaded successfully";
		echo $fileName;
	}
	if(isset($_FILES['department_position_image']))
	{
		$attachment_file=$_FILES["department_position_image"];
        $output_dir = "../../../upload/image_department/";
        $fileName1 = $_FILES["department_position_image"]["name"];
		move_uploaded_file($_FILES["department_position_image"]["tmp_name"],$output_dir.$fileName1);
		//echo "File uploaded successfully";
		echo $fileName1;
	}

 
?>