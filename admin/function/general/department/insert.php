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
	else if(isset($_FILES['department_position_image']))
	{
		$attachment_file=$_FILES["department_position_image"];
        $output_dir = "../../../upload/image_department/";
        $fileName = $_FILES["department_position_image"]["name"];
		move_uploaded_file($_FILES["department_position_image"]["tmp_name"],$output_dir.$fileName);
		//echo "File uploaded successfully";
		echo $fileName;
	}
	else if(isset($_FILES['change_department_image']))
	{
		$attachment_file=$_FILES["change_department_image"];
        $output_dir = "../../../upload/image_department/";
        $fileName = $_FILES["change_department_image"]["name"];
		move_uploaded_file($_FILES["change_department_image"]["tmp_name"],$output_dir.$fileName);
		//echo "File uploaded successfully";
		echo $fileName;
	}
	else if(isset($_FILES['change_department_position_image']))
	{
		$attachment_file=$_FILES["change_department_position_image"];
        $output_dir = "../../../upload/image_department/";
        $fileName = $_FILES["change_department_position_image"]["name"];
		move_uploaded_file($_FILES["change_department_position_image"]["tmp_name"],$output_dir.$fileName);
		//echo "File uploaded successfully";
		echo $fileName;
	}

 
?>