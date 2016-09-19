<?php
 if(isset($_FILES['vanban_file']))
 {
 		$attachment_file=$_FILES["vanban_file"];
 		$output_dir = "../../upload/vanban/tailieu/";
 		$fileName = $_FILES["vanban_file"]["name"];
 		if($_FILES['vanban_file']['size'] > 10048576){
     echo "error";
   }else{
   		move_uploaded_file($_FILES["vanban_file"]["tmp_name"],$output_dir.$fileName);
  		 echo $fileName;
   }
 }
 else if(isset($_FILES['vanban_update_file']))
 {
 		$attachment_file=$_FILES["vanban_update_file"];
 		$output_dir = "../../upload/vanban/tailieu/";
 		$fileName = $_FILES["vanban_update_file"]["name"];
 		if($_FILES['vanban_update_file']['size'] > 10048576){
     echo "error";
   }else{
   		move_uploaded_file($_FILES["vanban_update_file"]["tmp_name"],$output_dir.$fileName);
  		 echo $fileName;
   }
 }
?>