
 <?php
function savehits($arraydata){
 include_once("config.php");
 echo "executing starthits \n";
$arr=array();
$i=0;
foreach( $arraydata as $d){
        $arr[$i]= explode(":",$d)[1];
    
   	 $i++;
}
/*echo "insert proper data \n";
if(strlen($arraydata)<=0){
  echo "insert proper data \n";
}
else{
echo "lets insert the data records \n";
 	if(strlen($arr[1]) ==0 ){
		$arr[1]='1.2';
	}
}*/
echo"above insert";	
//$Sql_Query = "INSERT INTO start_hits (hit_date,user_name,version) values(now(),'".$arr[0]."','".$arr[1]."')";	
$sql_Query="insrt into start_hits (hit_date,user_name,version) values (now(),'shubhangi','1.2')";	
echo "$Sql_Query" ;
 try {
             $result = mysqli_query($conn,$Sql_Query);
             if (!$result) {
                 throw new Exception(mysqli_error($link));
             }
             else {
                echo"record insert";
             }
         } catch (Exception $e) {
             error_log($e->getMessage());
         }

         mysqli_close($link);	
         
 }
 ?>
 
 
 
 
