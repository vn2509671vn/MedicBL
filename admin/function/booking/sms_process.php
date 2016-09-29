<?php
  error_reporting( error_reporting() & ~E_NOTICE )
?>
<?php
require_once '../../../connect/dbconfig.php';
/**
     * @param $service
     * @param $model RegisterForm
     */
    function sendSms(
    	$strREQID, $strLABELID, $strCONTRACTID, $strCONTRACTTYPEID
    	,$strTEMPLATEID, $strNUM,$strMOBLELIST, $strSCHEDULETIME
    	, $strISTELCOSUB, $strAGENTID, $strAPIUSER, $strAPIPASS, $strUSERNAME
    ){
		$ch = curl_init();
		
		$SampleXml = "<RQST>"
                               . "<name>send_sms_list</name>"
                               . "<REQID>". $strREQID ."</REQID>"                                    
                               . "<LABELID>". $strLABELID ."</LABELID>"
							   . "<CONTRACTID>". $strCONTRACTID ."</CONTRACTID>"
                               . "<CONTRACTTYPEID>". $strCONTRACTTYPEID ."</CONTRACTTYPEID>"
                               . "<TEMPLATEID>". $strTEMPLATEID ."</TEMPLATEID>"
                               . "<PARAMS>"
									."<NUM>". $strNUM ."</NUM>"
									."<CONTENT>". $strNUM ."</CONTENT>"
							   . "</PARAMS>"
                               . "<SCHEDULETIME></SCHEDULETIME>"
                               . "<MOBILELIST>". $strMOBLELIST ."</MOBILELIST>"                               
                               . "<ISTELCOSUB>". $strISTELCOSUB ."</ISTELCOSUB>"
							   . "<AGENTID>". $strAGENTID ."</AGENTID>"
							   . "<APIUSER>". $strAPIUSER ."</APIUSER>"
							   . "<APIPASS>". $strAPIPASS ."</APIPASS>"
							   . "<USERNAME>". $strUSERNAME ."</USERNAME>"
							   . "</RQST>";

							   
		curl_setopt($ch, CURLOPT_URL,            "http://113.185.0.35:8888/smsmarketing/api" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt($ch, CURLOPT_POST,           1 );
		curl_setopt($ch, CURLOPT_POSTFIELDS,     $SampleXml ); 
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/xml;charset=UTF-8')); 

		$result = curl_exec ($ch);		
		$xml = simplexml_load_string($result);

		if ($xml === false) {
			die('Error parsing XML');   
		}
		
		print "Ket qua goi API: " . $xml->ERROR_DESC . "\n"; 
	}

$status_doctor_sms=1;
$status_customer_sms=1;
$strURL = '';
if($_GET['idsms'])
	{
	    $idsms = $_GET['idsms'];
	    $stmt1 = $db_con->prepare("select * from booking b left join doctors d on b.booking_doctor_id = d.doctor_id left join chuyenkhoa ck on b.booking_chuyenkhoa_id = ck.chuyenkhoa_id where b.booking_id=:idsms");
        $stmt1->bindParam(":idsms", $idsms);
        $stmt1->execute();
        while ($row1= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        	if($row1['booking_status_doctor']==0){
		        $status_doctor_sms = 1;
		        $doctor_name = $row1['doctor_name_vn'];
				$customer_phone = $row1['booking_cellphone'];
				$chuyenkhoa = $row1['chuyenkhoa_name'];
				$customer_name = $row1['booking_name'];
				$booking_date = $row1['booking_date'];
				$strURL = 'http://113.185.0.35:8888/smsmarketing/api';
		        $strREQID = 1;
		        $strLABELID = 13255;
				$strTEMPLATEID = 53382;
				$strNUM = 1;
				$strMOBLELIST = '84' . $row1['doctor_call'];
				$strCONTRACTID = 861;
		        $strCONTRACTTYPEID = 1;
		        $strSCHEDULETIME = '';
				$strISTELCOSUB = 0;
				$strAGENTID = 125;
				$strAPIUSER = 'admin';
				$strAPIPASS = 'admin';
				$strUSERNAME = 'thanhvumedic';
        	}
        	else{
        		echo "Is Sended ????";
        	}
        }
     	echo sendSms(
	    	$strREQID, $strLABELID, $strCONTRACTID, $strCONTRACTTYPEID
	    	,$strTEMPLATEID, $strNUM,$strMOBLELIST, $strSCHEDULETIME
	    	, $strISTELCOSUB, $strAGENTID, $strAPIUSER, $strAPIPASS, $strUSERNAME
    	);
	}
else if($_GET['id']){
	$id_sms = $_GET['id'];
	$stmt = $db_con->prepare("UPDATE booking SET booking_status_doctor=:c1 WHERE booking_id=:id");
	$stmt->bindParam(":c1", $status_doctor_sms);
	$stmt->bindParam(":id", $id_sms);
	if($stmt->execute())
		{
			echo $status_doctor_sms;
		}
	else{
		$status_doctor_sms = 0;
		echo $status_doctor_sms;
	}
}
else if($_GET['idsms_cus'])
	{
	    $idsms_cus = $_GET['idsms_cus'];
	    $stmt2 = $db_con->prepare("select * from booking b left join doctors d on b.booking_doctor_id = d.doctor_id left join chuyenkhoa ck on b.booking_chuyenkhoa_id = ck.chuyenkhoa_id where b.booking_id=:idsms_cus");
        $stmt2->bindParam(":idsms_cus", $idsms_cus);
        $stmt2->execute();
        while ($row2= $stmt2->fetch(PDO::FETCH_ASSOC)) {
        	if($row2['booking_status_customer']==0){
        		$status_customer_sms = 1;
		        $doctor_name = $row2['doctor_name_vn'];
				$customer_phone = $row2['booking_cellphone'];
				$chuyenkhoa = $row2['chuyenkhoa_name'];
				$customer_name = $row2['booking_name'];
				$booking_date = $row2['booking_date'];
				$strURL = 'http://113.185.0.35:8888/smsmarketing/api';
		        $strREQID = 1;
		        $strLABELID = 13255;
				$strTEMPLATEID = 53382;
				$strNUM = 1;
				$strMOBLELIST = '84' . $row2['booking_cellphone'];
				$strCONTRACTID = 861;
		        $strCONTRACTTYPEID = 1;
		        $strSCHEDULETIME = '';
				$strISTELCOSUB = 0;
				$strAGENTID = 125;
				$strAPIUSER = 'admin';
				$strAPIPASS = 'admin';
				$strUSERNAME = 'thanhvumedic';        		
        	}        	        
        }   
        //echo $strMOBLELIST;
        sendSms($strREQID, $strLABELID, $strCONTRACTID, $strCONTRACTTYPEID,$strTEMPLATEID, $strNUM,$strMOBLELIST
        , $strSCHEDULETIME, $strISTELCOSUB, $strAGENTID, $strAPIUSER, $strAPIPASS, $strUSERNAME);
}
else if($_GET['id_cus']){
	$id_sms_cus = $_GET['id_cus'];
	$stmt3 = $db_con->prepare("UPDATE booking SET booking_status_customer=:c10 WHERE booking_id=:id_cus");
	$stmt3->bindParam(":c10", $status_customer_sms);
	$stmt3->bindParam(":id_cus", $id_sms_cus);
	if($stmt3->execute())
		{
			echo $status_customer_sms;
		}
	else{
		$status_customer_sms = 0;
		echo $status_customer_sms;
	}
}
?>
