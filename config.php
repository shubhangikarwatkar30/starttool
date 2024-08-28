<?php
$conn = mysqli_init();

mysqli_real_connect($conn, 'starttooldev01.mysql.database.azure.com', 'srtadmin01', 'Ugw6h1daE5', 'startdb', 3306)
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
die('Failed to connect to MySQL: '.mysqli_connect_error());
exit();
}else{

}

?>
