<?php
 if(isset($_FILES['infor_logo']))
 {
 		$attachment_file=$_FILES["infor_logo"];
 		$output_dir = "../../../images/logo/";
 		$fileName = $_FILES["infor_logo"]["name"];
 		move_uploaded_file($_FILES["infor_logo"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 }
 else if(isset($_FILES["infor_addAdvertise1"]))
 {
 		$attachment_file=$_FILES["infor_addAdvertise1"];
 		$output_dir = "../../upload/infor_hos/";
   $fileName = $_FILES["infor_addAdvertise1"]["name"];
		 move_uploaded_file($_FILES["infor_addAdvertise1"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 }
 else if(isset($_FILES["infor_addAdvertise2"]))
 {
 		$attachment_file=$_FILES["infor_addAdvertise2"];
 		$output_dir = "../../upload/infor_hos/";
 		$fileName = $_FILES["infor_addAdvertise2"]["name"];
		 move_uploaded_file($_FILES["infor_addAdvertise2"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 }
else if (isset($_FILES["infor_addAdvertise3"]))
 {
 		$attachment_file=$_FILES["infor_addAdvertise3"];
 		$output_dir = "../../upload/infor_hos/";
 		$fileName = $_FILES["infor_addAdvertise3"]["name"];
		 move_uploaded_file($_FILES["infor_addAdvertise3"]["tmp_name"],$output_dir.$fileName);
		 echo $fileName;
 }
 
?>