<?php
$result = array();
$data = array();
  if($_POST['RQST']){
    $result[] = array(
      'RPLY' => array(
		        'ERROR_CODE' => 1,
		        'ERROR_DESC' => "ok",
		        ),
  );
  die (json_encode($result));
  }
?>

<!--{-->
<!--  "items": [-->
<!--    {-->
<!--      "key": "First",-->
<!--      "value": 100-->
<!--    },{-->
<!--      "key": "Second",-->
<!--      "value": false-->
<!--    },{-->
<!--      "key": "Last",-->
<!--      "value": "Mixed"-->
<!--    }-->
<!--  ],-->
<!--  "obj": {-->
<!--    "number": 1.2345e-6,-->
<!--    "enabled": true-->
<!--  },-->
<!--  "message": "Strings have to be in double-quotes."-->
<!--}-->
