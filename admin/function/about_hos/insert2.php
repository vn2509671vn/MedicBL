<?php

 		$attachment_file=$_FILES["infor_addAdvertise2"];
 		$output_dir = "../../upload/infor_hos/";
 		$fileName = $_FILES["infor_addAdvertise2"]["name"];
		 move_uploaded_file($_FILES["infor_addAdvertise2"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 
?>