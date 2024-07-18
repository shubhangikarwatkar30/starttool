
 <?php
function savehits($decrypted){
 include_once("config.php");
 echo "executing starthits \n";
echo $decrypted ."\n";
$arr=array();
$i=0;
$arraydata = explode("," ,$decrypted);
foreach( $arraydata as $d){
        $arr[$i]= explode(":",$d)[1];
    echo  $arr[$i]."\n";
   	 $i++;
}

if(strlen($decrypted)==0){
  echo "insert proper data \n";
}
else{
echo "lets insert the data records \n";
 	if(strlen($arr[1]) ==0 ){
		$arr[1]='1.2';
	}

echo"above insert \n";	
//$Sql_Query = "INSERT INTO start_hits (hit_date,user_name,version) values(now(),'".$arr[0]."','".$arr[1]."')";	
$Sql_Query="insert into start_hits (hit_date,user_name,version) values (now(),'shubhangi','1.2')";	
echo $Sql_Query ."\n";
 try {
	   echo"in query execution \n";
             $result = mysqli_query($conn,$Sql_Query);
	     echo"after insert \n";
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
 
 
 
 
