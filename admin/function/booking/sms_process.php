<?php
require_once '../../../connect/dbconfig.php';
if($_POST['idsms'])
	{
	    $idsms = $_POST['idsms'];
	    $status_doctor_sms=1;
	    $stmt1 = $db_con->prepare("select * from booking b left join doctors d on b.booking_doctor_id = d.doctor_id left join chuyenkhoa ck on b.booking_chuyenkhoa_id = ck.chuyenkhoa_id where b.booking_id=:idsms");
        $stmt1->bindParam(":idsms", $idsms);
        $stmt1->execute();
        while ($row1= $stmt1->fetch(PDO::FETCH_ASSOC)) {
        	if($row1['booking_status_doctor']==0){
        		$status_doctor_sms=1;
        		$doctor_phone = $row1['doctor_call'];
        		$doctor_name = $row1['doctor_name_vn'];
        		$customer_phone = $row1['booking_cellphone'];
        		$chuyenkhoa = $row1['chuyenkhoa_name'];
        		$customer_name = $row1['booking_name'];
        		$booking_date = $row1['booking_date'];
        	}
        }
        /* Begin Xu li goi sms */
        // URL có chứa hai thông tin name và diachi
        	$ip = '192.168.254.2';
        	$user = 'apiuser';
        	$pass = 'apiuser';
        	$port = 1;
        	$content = "Xin chào bác sĩ: " + $doctor_name+" Ngày: " + $booking_date + "
        				Bệnh nhân: "+ $customer_name +" có đặt lịch hẹn khám với bác.
        				Nhờ bác sắp sếp thời gian để khám cho bệnh nhân.
        				Chúc bác nhiều sức khỏe.
        				Tin nhắn được gởi từ hệ thống SMS của BV Thanh Vũ.
        				";
			$url = 'http://' + $ip + '/cgi/WebCGI?1500101=account=' + $user + '&password=' + $pass + '&port='+ $port +'&destination=+84' + $doctor_phone + '&content='+ $content;
			// Khởi tạo CURL
			$ch = curl_init($url);
			// Thiết lập có return
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$result = curl_exec($ch);
			 
			curl_close($ch);
			 
        
        /* End goi SMS */
	    if ($result== true)
	    {
	    	if ($statusCode == 404)
	    	{
	    		echo 0;
	    	}
	    	else
	    	{
		    	$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			    $stmt = $db_con->prepare("UPDATE booking SET booking_status_doctor=:c1 WHERE booking_id=:idsms");
				$stmt->bindParam(":c1", $status_doctor_sms);
				$stmt->bindParam(":idsms", $idsms);
				if($stmt->execute())
				{
					echo $status_doctor_sms;
					
				}
				else{
					echo $result;
				}
	    	}
	    }
	    else {
	    	echo $result;
	    }
		?>
    <?php
	}
?>
