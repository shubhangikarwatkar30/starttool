<?php
// include_once("config.php");
include_once("starthits.php");
include_once("savefeedback.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

$encrypted=$_POST['d1']; 
$password = '8R@13#s34Af';
$method = 'aes-256-cbc';

// Must be exact 32 chars (256 bit)
$password = substr(hash('sha256', $password, true), 0, 32);
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

//decrypt the data
$decrypted = openssl_decrypt(base64_decode($encrypted), $method, $password, OPENSSL_RAW_DATA, $iv);
$arraydata = explode("," ,$decrypted);
$lastElement = end(explode('-', $decrypted));
 echo $lastElement;
switch ($lastElement){
 case "save_hits":
 echo"case statement";"
  savehits( $decrypted);
 break;
 case "save_feedback":
 
 break;
  case "save_execution":
 
 break;
  case "save_incidents":
 break;
  case "get_category":
 break;
}

}



 ?>
 
 
