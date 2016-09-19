/**
     * @param $service
     * @param $model RegisterForm
     */
    public static function sendSms($service, $model)
    {
        Yii::info("Call api with info: ");
        $url = 'http://113.185.0.35:8888/smsmarketing/api';
       
        $message = "test message";
		$send_list = "84912XXXYYY";

		/*
		* MUST CHANGE PARAMMETER HERE
		*/
        $param = "<RQST>
                    <name>send_sms_list</name>
                    <REQID>9999</REQID>
                    <LABELID>20884</LABELID>
                    <CONTRACTID>1843</CONTRACTID>
                    <CONTRACTTYPEID>1</CONTRACTTYPEID>
                    <TEMPLATEID>79532</TEMPLATEID>
                        <PARAMS>
                            <NUM>1</NUM>
                            <CONTENT>$message</CONTENT>
                        </PARAMS>
                        <MOBILELIST>$send_list</MOBILELIST>
                        <SCHEDULETIME></SCHEDULETIME>
                    <ISTELCOSUB>0</ISTELCOSUB>
                        <AGENTID>336</AGENTID>
                        <APIUSER>apiuser</APIUSER>
                        <APIPASS>apipass</APIPASS>
                        <USERNAME>PortalUserName</USERNAME>
                    </RQST>
                    ";

        Yii::info('Request url: ' . $url);
        Yii::info($param);
        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
            $result = curl_exec($ch);
            curl_close($ch);

            Yii::info($result);
        } catch (Exception $e) {
            Yii::error($e);
            $response = null;
        }
    }