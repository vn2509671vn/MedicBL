<?php
  /**
   * Sets error header and json error message response.
   *
   * @param  String $messsage error message of response
   * @return void
   */
  function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
  }

  /**
   * Pulls posted values for all fields in $fields_req array.
   * If a required field does not have a value, an error response is given.
   */
  function constructMessageBody () {
    $fields_req =  array("name" => true, "email" => true, "message" => true);
    $message_body = "";
    foreach ($fields_req as $name => $required) {
      $postedValue = $_POST[$name];
      if ($required && empty($postedValue)) {
        errorResponse("$name is empty.");
      } else {
        $message_body .= ucfirst($name) . ":  " . $postedValue . "\n";
      }
    }
    return $message_body;
  }

  header('Content-type: application/json');

  //do Captcha check, make sure the submitter is not a robot:)...
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $opts = array('http' =>
    array(
      'method'  => 'POST',
      'header'  => 'Content-type: application/x-www-form-urlencoded',
      'content' => http_build_query(array('secret' => '6LeOCiQTAAAAAJwONjgJtqX90_VpjxpaaXeZhAdk', 'response' => $_POST["g-recaptcha-response"]))
    )
  );
  $context  = stream_context_create($opts);
  $result = json_decode(file_get_contents($url, false, $context, -1, 40000));

  if (!$result->success) {
    errorResponse('reCAPTCHA checked failed! Error codes: ' . join(', ', $result->{"error-codes"}));
  }
  //attempt to send email
  $messageBody = constructMessageBody();
  require './vender/php_mailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  if (!getenv('FEEDBACK_SKIP_AUTH')) {
    $mail->SMTPAuth = true;
    $mail->Username = 'letrungut@gmail.com';
    $mail->Password = 'Hongcucdang@0205';
  }
  if ('TLS' == 'TLS') {
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
  } 

  $mail->Sender = 'letrungut@gmail.com';
  $mail->setFrom($_POST['email'], $_POST['name']);
  $mail->addAddress('letrungut@gmail.com');

  $mail->Subject = $_POST['reason'];
  $mail->Body  = $messageBody;


  //try to send the message
  if($mail->send()) {
    echo json_encode(array('message' => 'Your message was successfully submitted.'));
  } else {
    errorResponse('An unexpected error occured while attempting to send the email: ' . $mail->ErrorInfo);
  }
?>
