<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);
#color scheme
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";

function slow($str) {
foreach (str_split($str) as $rt) {
echo $rt;
usleep(8000);
}
echo "
";
}
function cetak($str) {
foreach (str_split($str) as $rt) {
echo $rt;
usleep(2500);
}
echo "
";
}
function gas($str) {
foreach (str_split($str) as $rt) {
echo $rt;
usleep(50);
}
}

function timer($text,$timer){
date_default_timezone_set('UTC');
$tim = time()+$timer;
$blue="\033[34m";$cyn="\033[36m";
$blet="\033[92m";$putih="\033[37m";
$bpur="\033[35m";$m="\033[31m";
$bhj="\033[33m";$nyr="\033[8m";
$rm="\033[0"."m";
$wrn=[$putih,$m];
$i=0;
$randw=[$blet,$bhj,$cyn,$blet,$bhj,$cyn];$x=1;
while(true):
echo "\r                                                        \r";
$wsl=$wrn[$i];
$tm = $tim-time();
$date=date("H:i:s",$tm);
if($tm<1){ break; }
$str=str_repeat("•",$x);$stran=$randw[$x-1];
$as="秒 ";$cls="]";
echo $putih.$text."$putih [$wsl$date$putih$cls $as$stran$str";
if($x==6){$x=1;}else{$x++;} sleep(1);
$i++;
if($i >= count ($wrn)){$i=0;}
endwhile;
 }



function getName() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < 100; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

class curls{
public static function curl(
$url=0,$httpheader=0,$post=0,$request=0,$proxy=0){ 
$curl=curl_init();
curl_setopt_array($curl,array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_SSL_VERIFYPEER => false,
  CURLOPT_SSL_VERIFYHOST => false,
  CURLOPT_CONNECTTIMEOUT => 30,
  CURLOPT_TIMEOUT => 60,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_AUTOREFERER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_COOKIEJAR => "cookie.txt",
  CURLOPT_COOKIEFILE => "cookie.txt",
  CURLOPT_HEADER => true));
if($httpheader){
curl_setopt($curl, CURLOPT_HTTPHEADER, $httpheader);}
if($post){
curl_setopt_array($curl,array(
  CURLOPT_POST => true,
  CURLOPT_POSTFIELDS => $post));}
if($request){
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $request);}
if($proxy){
curl_setopt_array($curl,array(
  CURLOPT_HTTPPROXYTUNNEL => true,
  CURLOPT_PROXY => $proxy,
  CURLOPT_PROXYTYPE => CURLPROXY_SOCKS5));}
$response=curl_exec($curl);
$httpcode=curl_getinfo($curl);
$header=substr($response, 0, curl_getinfo($curl, CURLINFO_HEADER_SIZE));
$body=substr($response, curl_getinfo($curl, CURLINFO_HEADER_SIZE));
curl_close($curl);
return array($header, $body);}

}

class fx extends curls{
public static function headers(){
$header=array(
"Host: www.palu303.co",
"Origin: https://www.palu303.co",
"Content-Type: application/x-www-form-urlencoded",
"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.5249.62 Safari/537.36",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"Referer: https://www.palu303.co/"
);
return $header;
}  
  
public static function url($linked){
$url="https://www.palu303.co/{$linked}";
return $url;
}

public static function login(){
  global $email;
  global $token;
  global $regtoken;
  $nama = getName();
$url=self::url("main/doRegisterMain");
$data = "stage_val=0&_token=".$token."&register_token=".$regtoken."&username=". $nama."&password=Dayanaji%4031&repassword=Dayanaji%4031&nama=ultramen&tlp=5451513154848&referral=&isRegHasBank=1&rekening_nama=gsgagagagac&bank=BRI&rekening_nomor=84884848778&terms=on";
//$data=http_build_query(["stage_val"=>"0","_token"=>"$token","register_token"=>"$regtoken","username"=>"mazlana","password"=>"Dayanaji","repassword"=>"Dayanaji","nama"=>"ultramen","tlp"=>"26662627266","referral"="","isRegHasBank"=>"1","rekening_nama"=>"gsgagagagac","bank"=>"BRI","rekening_nomor"=>"84884848778","terms"=>"on"]);
return self::curl($url,self::headers(),$data)[1];
}

public static function hm(){
$url=self::url("daftar");
return self::curl($url,self::headers())[1];
}

public static function db(){
$url=self::url("home.php?LTC=1&DOGE=1&DGB=0&TRX=1&USDT=0&BCH=0&DASH=0&FEY=0&ZEC=0&SOL=0&redirect=1");
return self::curl($url,self::headers())[1];
}

public static function akun(){
$url=self::url("account.php");
return self::curl($url,self::headers())[1];
}

public static function wd($wdcoin){
$url=self::url("account.php");
$data=http_build_query(["$wdcoin"=>"withdraw"]);
return self::curl($url,self::headers(),$data)[1];
}

public static function banner(){
$green = "\e[1;32m";
$blue = "\e[1;34m";
$red = "\e[1;31m";
$white = "\33[37;1m";
$yellow = "\e[1;33m";
$cyan = "\e[1;36m";
$purple = "\e[1;35m";
$gray = "\e[1;30m";
slow($yellow . "Day : " . date("l") . "  Date : " . date("d M Y") . "  Time : " . date("H:i"));
gas(str_repeat($cyan . "=", 80) . "
");
slow($white."     
  ██████╗██╗   ██╗ █████╗ ███╗   ██╗ [1;37mズヒー  Creator   :   Mazlana
 ██╔════╝██║   ██║██╔══██╗████╗  ██║ ズヒー  Scraping  :   cryptoshi.club
 ██║     ██║   ██║███████║██╔██╗ ██║ ズヒー  Version   :   6.0
 [01;38;5;196m██║     ██║   ██║██╔══██║██║╚██╗██║ ズヒー  Contact   : 081233959206
 ╚██████╗╚██████╔╝██║  ██║██║ ╚████║               Thanks To
  ╚═════╝ ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝".$white."  Zay08| SugionoOfc| Tutorial Hp |Yzzztv
                                   ");

gas(str_repeat($cyan . "=", 80) . "
");

}


}
while(true):
$db = fx::hm();
$token = explode('"', explode('name="_token" value="', $db)[1])[0];
$regtoken = explode('"', explode('name="register_token" value="', $db)[1])[0];
//$stagev = explode('"', explode('type="hidden" name="stage_val" value="', $db)[1])[0];

$log = fx::login();
$anjay = explode('"', explode('text: "Username:', $log)[1])[0];
$status = explode('"', explode('title: "', $log)[1])[0];

if($status == "Berhasil!") {
$kata = $white."
🎃 TOKEN : ". $green.$regtoken.$green.$white."
🎉 STATUS :". $green.$status.$white."
✨ INFO :".$cyan.$anjay.$white."
=======================================================";
cetak($kata);
}else{
cetak($red."Failed Username Telah Terdaftar");
};

endwhile;