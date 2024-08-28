 <?php
function freedata($decrypted){
include_once("config.php");
$arr = explode("," ,$decrypted);
$Sql_Query = "INSERT INTO freedisk_data (user_name, execution_date, space_free) values('".$arr[0]."', now(),".$arr[1]. ")";   

 try {
              
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
