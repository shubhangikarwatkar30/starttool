 <?php
function savelogs($decrypted){
$arraydata = explode("," ,$decrypted);
$arr=array();
$i=0;
foreach( $arraydata as $d){
    $arr[$i]= explode(":",$d)[1];

$i++;
}
$Sql_Query = "INSERT INTO executionLog (userName, category, subCategory, execution_date) values('".$arr[2]."','".$arr[1]."','".$arr[0]."',now())";   
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
