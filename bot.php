<?php 
@system("clear");
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t="\n";

date_default_timezone_set("Asia/Jakarta");
require_once("sdata-modules.php");
//intro
print $ijo."
 _____ ____ __ __   __ _____ _ _   _ ___ 
|  ___|    |  |  | /  |  ___| | | | | _  \
| |   | || |  |  |/   | |   | | |_| |____/ $turkis
| |___| || |  |   /|  | |___| |___ _| _  \
|_____|____|__|__/ |__|_____|______||____/\n\n";
echo $kuning."Bot Coin Club (aplikasi penghasil BTC,ETH,EOS,ICH,BCH) \n";
echo $putih."=================================================== \n";
echo $kuning."[".$putih."created : ".$ijo."Shadow Bot".$kuning."]".$putih." || code invite : ".$ijo."WK2XZO \n";
echo $putih."==================================================== \n\n";
//intro 2
sleep(1);
echo $putih."[".$kuning."!".$putih."]".$turkis."Login ";
$x=0;$c=5;while($x<$c){
 $x++;
 sleep(1);
echo"•";
 }
echo"\n\n";
echo $ijo."Note : \n";
echo $ijo."[ENG] Bots Are Running ... PLEASE WAIT .. \n";
echo $ijo."[ENG] IF THERE IS NO RESPONSE FROM SERVER, THEN THE TOKEN OR CONFIG IS WRONG \n\n";
echo $ijo."[IDN] Bot akan jalan ... Tunggu Sebentar ... \n";
echo $ijo."[IDN] Jika Tidak ada respon dari server, mohon di cek kembali token/confignya \n";
require"cfg.php";
$urls[]=array("url"=>"http://api.coinclub.global/api/v1/user/getUserDetail?token=".$config["token"]."&fromUserId=".$config["fromUserId"]."&userId=".$config["userId"]."&platform=1&accessKeyId=".$config["accessKeyId"]."&timestamp=1546935030192&versionCode=1.5.8&nonce=".$config["nonce"]."&version=1");$responsx=$sdata->sdata($urls);
unset($url);$jsonAuth=json_decode($responsx[0]["respons"],true);
if($jsonAuth["errcode"]==1000&&!empty($jsonAuth["data"]["user"]["userName"])){
echo $kuning."[".$putih."•".$kuning."]". $turkis." Informasi Akun \n";
echo $putih."[".$turkis."*".$putih."] Balance : ".$ijo.$jsonAuth["data"]["totalBalance"].$t;
echo $putih."[".$turkis."*".$putih."] User Id : ".$ijo.$jsonAuth["data"]["user"]["userId"].$t;
echo $putih."[".$turkis."*".$putih."] User Name : ".$ijo.$jsonAuth["data"]["user"]["userName"].$t;

echo $putih."[√] Login Success... ";
echo"\n\n";

}
else{
 die("Config Kamu Salah.");
}

 echo $kuning."Bot akan jalan dalam 5 detik ";
 $a=0;$r=5;while($a<$r){
  $a++;
  sleep(1);
 echo ".";
  }
 echo "\n\n";
while(TRUE){
 $curl=curl_init();
 curl_setopt_array($curl,array(CURLOPT_URL=>"http://api.coinclub.global/api/v1/post/estimate",CURLOPT_RETURNTRANSFER=>true,CURLOPT_ENCODING=>"",CURLOPT_MAXREDIRS=>10,CURLOPT_TIMEOUT=>30,CURLOPT_HTTP_VERSION=>CURL_HTTP_VERSION_1_1,CURLOPT_CUSTOMREQUEST=>"POST",CURLOPT_POSTFIELDS=>"userId=".$config["userId"]."&postId=".rand(1079502,1113452)."&platform=1&accessKeyId=".$config["accessKeyId"]."&timestamp=1546954347645&versionCode=1.5.8&nonce=".$config["nonce"]."&version=1",CURLOPT_HTTPHEADER=>array("Accept-Encoding: gzip","Connection: Keep-Alive","Content-Length: 188","Content-Type: application/x-www-form-urlencoded","Host: api.coinclub.global","User-Agent: okhttp/3.9.0","token: ".$config["token"],"deviceId: ".$config["deviceId"],),));
 $response=curl_exec($curl);
 $err=curl_error($curl);
 curl_close($curl);
 if($err){
  echo"cURL Error #:".$err;
 }
 else{
  $e=json_decode($response);
  if($e->errcode=="1000"){
   $json=json_decode($response);
   $get=get_object_vars($json->data);
   $view=$get["viewAward"];
   $rview=$get["rankViewAward"];
   $rtime=$get["readTimeAward"];
   echo $putih."[".$turkis."•".$putih."] Status : ".$ijo."Sukses ".$putih." || ".$putih."Code :$turkis 200". $putih."Reward Nonton : +".$ijo.$view;
echo "\n";
echo $putih."Rank View Reward: ".$ijo.$rview;
   echo "\n";
echo $putih."Rank Time Reward: ".$ijo.$rtime;
   echo "\n";
echo $
sleep(1);
  }
if($e->errcode=="500"){
 echo"Maximum Reached \n";
break;
}
 }
}

?>
