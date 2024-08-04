 <?php
function savelogs($decrypted){

echo "$decrypted"; 
$arraydata = explode("," ,$decrypted);
$arr=array();
$i=0;
foreach( $arraydata as $d){
    $arr[$i]= explode(":",$d)[1];

$i++;
}


$Sql_Query = "INSERT INTO executionLog (userName, category, subCategory, execution_date) values('".$arr[2]."','".$arr[1]."','".$arr[0]."',now())";
       echo "$Sql_Query" ;
 try {
             $result = mysqli_query($conn,$Sql_Query);
             if (!$result) {
                 throw new Exception(mysqli_error($link));
             }
             else {
                echo"record inserted";
             }
         } catch (Exception $e) {
             error_log($e->getMessage());
         }

         mysqli_close($link);	
         
 }
