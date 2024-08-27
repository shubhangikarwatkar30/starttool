 <?php
function freedata($decrypted){
include_once("config.php");
$arraydata = explode("," ,$decrypted);
$arr=array();
$i=0;
foreach( $arraydata as $d){
    $arr[$i]= explode(":",$d)[1];

$i++;
}
$Sql_Query = "INSERT INTO freedisk_data (user_name, execution_date, space_free) values('".$arr[0]."', now(),".$arr[1]. ")";   
echo $Sql_Query";
 try {
              echo " in try". $Sql_Query;
             $result = mysqli_query($conn,$Sql_Query);
             
             if (!$result) {
                 echo"record not inserted";
                 throw new Exception(mysqli_error($conn));
             }
             else {
                echo"record inserted";
             }
         } catch (Exception $e) {
             error_log($e->getMessage());
         }

         mysqli_close($conn);	
         
 }
