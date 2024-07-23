 <?php
function savefeedback($arraydata){
include_once("config.php");
$arr=array();
$i=0;
foreach( $arraydata as $d){
    $arr[$i]= explode(":",$d)[1];

$i++;
}
echo "in feedback";
echo $arraydata \n;
print_r ( $arr);
if(strlen($arr[5])==0 || strlen($arr[2])==0 || strlen($arr[3])==0 ||strlen($arr[1])==0 || strlen($arr[0])==0)
{
echo "please insert proper data";
}
else
{
      $catarr=array();
      $catarr = explode(";" ,$arr[1]);

     $subarr=array();
     $subarr = explode(";" ,$arr[2]);
   print_r($subarr );
    
for($i=0; $i<count($subarr); $i++ ){
echo"hi";
if(strlen($arr[7])==0){
    $arr[7]='1.3';
}
$Sql_Query = "INSERT INTO feedback (user_name ,location,category,sub_category,rating,comments,resolved,created_date,version) values('".$arr[0]."','".$arr[6]."','".$catarr[$i]."','".$subarr[$i]."','".$arr[3]."','".$arr[4]."','".$arr[5]."',now(), '".$arr[7]."')";
echo "$Sql_Query" ;      
 

if(strlen($encrypted)>37){

 try {
             $result = mysqli_query($link,$Sql_Query);
             if (!$result) {
                 throw new Exception(mysqli_error($link));
             }
             else {
                echo"record inserted";
             }
         } catch (Exception $e) {
             error_log($e->getMessage());
         }
}
}
         mysqli_close($link);	
         
 }
}
 ?>
 
 
 
 
