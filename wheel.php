<?php @system("clear");date_default_timezone_set("Asia/Jakarta");require_once("sdata-modules.php");echo"";

echo"Support By Subscribe Me👉http://www.youtube.com/DigitalDoctorChannel";
echo"[🇮🇩] Bots Are Running ... PLEASE WAIT ..";
echo"[🇮🇩] IF THERE IS NO RESPONSE FROM SERVER, THEN THE TOKEN OR CONFIG IS WRONG";

require"DDC.php";$urls[]=array("url"=>"http://api.coinclub.global/api/v1/user/getUserDetail?token=".$config["token"]."&fromUserId=".$config["fromUserId"]."&userId=".$config["userId"]."&platform=1&accessKeyId=".$config["accessKeyId"]."&timestamp=1546935030192&versionCode=1.5.8&nonce=&version=1");$responsx=$sdata->sdata($urls);unset($url);$jsonAuth=json_decode($responsx[0]["respons"],true);if($jsonAuth["errcode"]==1000&&!empty($jsonAuth["data"]["user"]["userName"])){echo"[🇮🇩] ¤ACCOUNT INFORMATION¤ [🇮🇩]";
echo"[°] Balance : ".$jsonAuth["data"]["totalBalance"]."
[°] User Id : ".$jsonAuth["data"]["user"]["userId"]."
";echo"[°] User Name : ".$jsonAuth["data"]["user"]["userName"]."
";echo"[🔼]⏭️ DIGITAL DOCTOR ⏮️[🔼]
";echo"[☯️] Login Success...
";echo"

";}else{die("Your Config Wrong???.");}function send($path,$post,$header){$ch=curl_init();curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_URL,"http://api.coinclub.global$path");curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch,CURLOPT_POSTFIELDS,$post);curl_setopt($ch,CURLOPT_HTTPHEADER,$header);$respons=curl_exec($ch);curl_close($ch);return$respons;}while(TRUE){$header="token: .$config["token"].
deviceId: .$config["deviceId"].
Content-Type: application/x-www-form-urlencoded; charset=UTF-8
Content-Length: 173
Host: api.coinclub.global
Connection: Keep-Alive
Accept-Encoding: gzip
User-Agent: okhttp/3.9.0";$z=explode("
",$header);send("/api/v1/lottery/draw","userId=".$config["userId"]."&platform=1&accessKeyId=".$config["accessKeyId"]."&timestamp=1547055943649&versionCode=1.5.8&nonce=".$config["nonce"]."&version=1",$z);$result=send("/api/v1/lottery/draw","userId=".$config["userId"]."&platform=1&accessKeyId=".$config["accessKeyId"]."&timestamp=1547055943649&versionCode=1.5.8&nonce=".$config["nonce"]."&version=1",$z);$j=json_decode($result);if($j->errcode=="1000"){$js=json_decode($result);$ambi=get_object_vars($js->data->account);$ambil=get_object_vars($js->data);$pr=$ambil["prizeType"];$bl=$ambi["balance"];$etq=$ambi["ethQuota"];echo"Prize Code :".$pr." | CCU Balance :".$bl." | ETH Quota :".$etq."
";sleep(3);}else{if($j->errcode=="1002"){echo"Maximum Reached 😥
";echo"50 Spin Perday
";break;}}}
?>
