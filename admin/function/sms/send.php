<?php
	// Textlocal account details
	$username = 'letrungut@gmail.com';
	$hash = '00bc1f642f212805b4894fcfa355e1871427d9ad';
	
	// Message details
	$numbers = array(0944749459);
	$sender = urlencode('Trung Ut Le');
	$message = rawurlencode('This is your message');
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.txtlocal.com/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>