<?php
// include_once("config.php");
include_once("starthits.php");
include_once("savefeedback.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
echo"in index";
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
   savehits( $decrypted);
$lastElement = end(explode('-', $decrypted));
 echo $lastElement;
switch ($lastElement){
 case "save_hits":
   echo $lastElement;
   savehits( $decrypted);
 break;
 case "save_feedback":
    echo $lastElement;
 break;
case "save_execution":
  echo $lastElement;
 break;
case "save_incidents":
   echo $lastElement;
 break;
  case "get_category":
   echo $lastElement;
 break;
 default:
    echo"end case";
}

}



 ?>
 
 
