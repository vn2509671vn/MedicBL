<?php
if(isset($_FILES["infor_addAdvertise1"]))
 {
 		$attachment_file=$_FILES["infor_addAdvertise1"];
 		$output_dir = "../../upload/infor_hos/";
   $fileName = $_FILES["infor_addAdvertise1"]["name"];
		 move_uploaded_file($_FILES["infor_addAdvertise1"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 }
 
?>