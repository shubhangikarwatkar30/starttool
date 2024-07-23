<?php

include_once("starthits.php");
include_once("savefeedback.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
echo "in index \n";
$encrypted=$_POST['d1']; 
$password = '8R@13#s34Af';
$method = 'aes-256-cbc';
switch ($lastElement)
{
 case "save_hits":
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
 
 
