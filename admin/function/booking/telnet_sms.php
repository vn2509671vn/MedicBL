<?php
function GetServerStatus($site, $port)
{
    $status = array("OFFLINE", "ONLINE");
    $fp = @fsockopen($site,$port,$errno,$errstr,2);
    if(!$fp)
    {
        echo $status[0];
    }else{
        echo $status[1];
    }
}
$site = "113.185.0.35";
$port = 8888;
GetServerStatus($site,$port);
?>