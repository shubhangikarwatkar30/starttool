<?php
include_once("starthits.php");
include_once("savefeedback.php");
include_once("getcat.php");
include_once("savelog.php");
include_once("freedata.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

$encrypted=$_POST['d1']; 
$password = '8R@13#s34Af';
$method = 'aes-256-cbc';
 // Must be exact 32 chars (256 bit)
$password = substr(hash('sha256', $password, true), 0, 32);
// IV must be exact 16 chars (128 bit)
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
//echo $encrypted;
//decrypt the data
$decrypted = openssl_decrypt(base64_decode($encrypted), $method, $password, OPENSSL_RAW_DATA, $iv);
$arraydata = explode("," ,$decrypted);
$lastElement =trim( end( $arraydata));

//echo $lastElement;
switch ($lastElement){
 case "save_hits":
   savehits($decrypted);
 break;
 case "save_feedback":
  savefeedback($decrypted);
 break;
case "save_execution":
   savelogs($decrypted);
 break;
case "save_incidents":
   echo $lastElement;
 break;
case "get_cat":
 //echo "get cat";
 getcat();
 break;
 case "freedisk":
 freedata($decrypted);
 break;
default:
    echo"end case";
}
}
