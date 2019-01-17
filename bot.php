<?php 
date_default_timezone_set("Asia/Jakarta");
@system("clear");
@system("rm -rf user");
@system("git clone https://github.com/adidoank/user");
system("mkdir user/json");
system("clear");
require"modul.php";
echo$figlet.$t.$t;
sleep(1);
error_reporting(0);
require __DIR__."/user/user.php";
$member=count($data);
$date=new DateTime();
echo$kuning."[".$putih.$date->format("H:i:s d/m/Y").$kuning."]  ";
echo$putih."[member: ".$ijo.$member.$putih." ]".$t;
if($stat_ads){
   echo$ads.$t;
  }
echo$ijo.$msgwe.$t;
sleep(3);
$data_user=$data;
if(!isset($data_user)){
  echo"[•] git belum di install".$t."[•] pkg install git".$t;
  exit;
  }
if($we_stat){
$acc=count($config);
$def=30;
if($delay>=$def){
 $a=$delay/$acc+1;
 }
else{
$a=$def/$acc+1;
}
$sleep=substr($a,0,4);
echo$putih."[-] ".$ijo."multiple account".$putih." [-]".$t;
echo$putih."[".$turkis."•".$putih"] cek akun ";
$p=0;$l=3;while($p<$l){
  $p++;
  sleep(1);
 echo $putih."•";
 }
sleep(2);
$bot=0;while($bot<$acc){
$tiket=$config[$bot];
  $bot++;
$js=json_decode(invite($tiket),true);
if($js["code"]=="200"){
echo$ijo."•";
}
else{
  echo$putih."•";
}
sleep(1);
}
echo$putih.$t."[".$ijo."•".$putih."] total akun [".$ijo.$acc.$putih."]".$t;
sleep(1);
if($acc>$delay){
   echo$kuning."[-] max 30 akun bro".$t;
 exit;
 }
echo"[•] validasi akun".$t;
sleep(1);
$page=0;
echo"[•] download data";
while(true){
  $page++;$cfg=$config[0];
  $js=json_decode(lis($cfg,$page),true);
  $code=$js["code"];
  $acc_data=$js["data"]["apprentice_list"];
  $tot=$js["data"]["apprentice_total"];
  $akun=count($acc_data);
  if($code==200){
    if($akun!=null){
    $validasi1=true;
    $json_data=json_encode($acc_data);
    file_put_contents("user/json/data".$page.".json",$json_data);
    echo"•";
}
else{
  $validasi2=true;
  break;
  }
  }
else{
  $kuning."[•] terjadi kesalahan".$t;
system("rm -rf user");
exit;
}}
if($validasi1){
  $total=$page;$acc=count($config);
  echo$t;
  for($i=0;$i<$acc;$i++){
    $token=substr($config[$i],7,-22);
    $meid=substr($config[$i],-16);
    $js=json_decode(login($token,$meid),true);
    $code=$js["code"];
    $msg=$js["msg"];
    $vip=$js["data"]["userMsg"]["level"];
    $nik=$js["data"]["userMsg"]["nickname"];
    $gold=$js["data"]["userMsg"]["gold_flag"];
    $bal=$js["data"]["userMsg"]["balance"];
    $inco=$js["data"]["userMsg"]["invitation_code"];
    $nk=substr($nik,0,8);
    if($nik==null){
      echo$red."[!] ada masalah jaringan ".$kuning."[-] tiket salah".$t;
      @system("rm -rf user");
      exit;
}
 elseif($code=="200"){
 foreach($data_useras$user1){
 for($x=1;$x<$total;$x++){
  $get=file_get_contents("user/json/data".$x.".json");
$data=json_decode($get,true);
$join=array_merge_recursive($data,$data);
foreach($joinas$user){
 $tuyul=$user["user"]["nickname"];
if($nik==$tuyulOR$nik==$user1OR$inco==$user1){
 $msg="ok";
}
 else{
  $error=true;
}}}}}
 elseif($code=="9999"){
  echo$kuning."[•] ".$msg.$t.$putih." [•] ambil tiket baru".$t;
  @system("rm -rf user");
  exit;
 }
  if($msg=="ok"){
   echo$putih."[".$ijo."•".$putih."] ".$turkis.$nk.$putih."	| gold: ".$ijo.$gold.$putih." | bal: \$ ".$ijo.$bal."$putih | vip:$ijo ".$vip.$t;
  }
 elseif($error){
  echo$red."[•] ".$nk.$putih."	| gold: ".$ijo.$gold.$putih." | bal: \$ ".$ijo.$bal."$putih | vip:$ijo ".$vip.$t;
  echo$red."[•] ".$kuning.$nik.$turkis." bukan member ".$t;
  $err=true;
}
sleep(1);
}}
 elseif($validasi2){
  $acc=count($config);
  echo$t;
  for($i=0;$i<$acc;$i++){
$token=substr($config[$i],7,-22);
$meid=substr($config[$i],-16);
$js=json_decode(login($token,$meid),true);
$code=$js["code"];
$msg=$js["msg"];
$vip=$js["data"]["userMsg"]["level"];
$nik=$js["data"]["userMsg"]["nickname"];
$gold=$js["data"]["userMsg"]["gold_flag"];
$bal=$js["data"]["userMsg"]["balance"];
$inco=$js["data"]["userMsg"]["invitation_code"];
$nk=substr($nik,0,8);
if($nik==null){
  echo$red."[!] ada masalah jaringan ".$kuning."[×] tiket salah".$t;
 @system("rm -rf user");
 exit;
}
 elseif($code=="200"){
  foreach($data_useras$user1){
   if($nik==$user1){
    $msg="ok";
 }
  else
   {
    $error=true;
  }}}
   elseif($code=="9999"){
    echo$kuning."[•] ".$msg.$t.$putih." [•] ambil tiket baru".$t;
     @system("rm -rf user");
     exit;
     }
      if($msg=="ok"){
       echo$putih."[".$ijo."•".$putih."] ".$turkis.$nk.$putih."	| gold: ".$ijo.$gold.$putih." | bal: \$ ".$ijo.$bal."$putih | vip:$ijo ".$vip.$t;
     }
elseif($error){
  echo$red."[•] ".$nk.$putih."	| gold: ".$ijo.$gold.$putih." | bal: \$ ".$ijo.$bal."$putih | vip:$ijo ".$vip.$t;
  echo$red."[•] ".$kuning.$nik.$turkis." bukan member ".$t;
  $err=true;}
 sleep(1);
}}
 if($err){
  echo$turkis."[•] Chat fb Nani Boled".$t;
  system("rm -rf user");
  exit;
  }
else{
 $fiture=true;
}}
 else{
  echo$red."[•] ".$kuning.$nik.$red." Permission denied".$t;
  @system("rm -rf user");
  echo$putih.$msgwe.$t;
  exit;
  }
   if($fiture){
    echo $putih."[".$turkis."√".$putih."] cek absen".$t;
    for($i=0;$i<$acc;$i++){
     sleep(1);
     $token=substr($config[$i],7,-22);
     $meid=substr($config[$i],-16);
     $js=json_decode(login($token,$meid),true);
     $nik=$js["data"]["userMsg"]["nickname"];
     echo$ijo."[•] ".$biru.substr($nik,0,8)." |] ";$cekin=json_decode(cekin($tiket),true);$code=$cekin["code"];$msg=$cekin["msg"];if($code=="200"){echo$ijo."sukses".$putih." | gold: + ".$ijo.$cekin["data"]["gold_flag"].$t;sleep($sleep);}else{echo$kuning.$msg.$t;}}sleep(1);echo$turkis."[w] membuka box".$t;sleep(1);for($i=0;$i<$acc;$i++){sleep(1);$token=substr($config[$i],7,-22);$meid=substr($config[$i],-16);$js=json_decode(login($token,$meid),true);$nik=$js["data"]["userMsg"]["nickname"];echo$ijo."[•] ".$biru.substr($nik,0,8)." |] ";$token=substr($config[$i],7,-22);$meid=substr($config[$i],-16);$box=json_decode(box($token,$meid),true);$code=$box["code"];$msg=$box["msg"];$gold=$box["data"]["gold_tribute"];if($code==200){echo$ijo."sukses$putih || gold +$ijo".$gold.$t;sleep($sleep);}else{echo$kuning.$msg.$t;}}sleep(1);echo$turkis."[w] watching video vip".$t;sleep(1);$limit=0;while(true){for($i=0;$i<$acc;$i++){sleep(1);$token=substr($config[$i],7,-22);$meid=substr($config[$i],-16);$js=json_decode(login($token,$meid),true);$nik=$js["data"]["userMsg"]["nickname"];echo$ijo."[•] ".$biru.substr($nik,0,8)." |] ";$token=substr($config[$i],7,-22);$meid=substr($config[$i],-16);$js=json_decode(video($token,$meid),true);$code=$js["code"];$msg=$js["msg"];$gold=$js["data"]["gold_flag"];$coun=$js["data"]["count"];$update=$js["data"]["isUpdate"];$vip=$js["data"]["userLevel"];if($code=="200"){echo$ijo."sukses$putih || gold +$ijo".$gold."$putih || vip: $turkis".$vip.$t;$limit=0;}else{echo$kuning.substr($msg,0,32).$t;$limit++;}sleep($sleep);}if($limit>=$acc){echo$ijo.$msgwe.$t;system("rm -rf user");break;}$q=0;sleep(1);echo$putih."[W] sleep:$ijo $sleep $putih sec ".$turkis."rolling ".$ijo;while($q<5){$q++;echo"•";sleep(1);}echo$t;}}
?>















