<?php
 if(isset($_FILES['vanban_file']))
 {
 		$attachment_file=$_FILES["vanban_file"];
 		$output_dir = "../../upload/vanban/tailieu/";
 		$fileName = $_FILES["vanban_file"]["name"];
 		move_uploaded_file($_FILES["vanban_file"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 }
 
?>