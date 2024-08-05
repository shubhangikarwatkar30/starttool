<?php
function savehits($decrypted){
 include_once("config.php");

$arr=array();
$i=0;
$arraydata = explode("," ,$decrypted);
foreach( $arraydata as $d){
        $arr[$i]= explode(":",$d)[1];
   
   	 $i++;
}

if(strlen($decrypted)==0){
  echo "insert proper data \n";
}
else{

 	if(strlen($arr[1]) ==0 ){
		$arr[1]='1.2';
	}

$Sql_Query = "INSERT INTO start_hits (hit_date,user_name,version) values(now(),'".$arr[0]."','".$arr[1]."')";	

 try {
	   
             $result = mysqli_query($conn,$Sql_Query);
	     echo "after query";
             if (!$result) {
		     echo"record not inserted";
                 throw new Exception(mysqli_error($link));
             }
             else {
                echo"record inserted";
             }
         } catch (Exception $e) {
             error_log($e->getMessage());
         }
}
         mysqli_close($link);	
         
 }
?>
