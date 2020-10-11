<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

	<?php
$servername="localhost";
$username="root";
$password="biswa@1234";
$db = "store";

$conn= new mysqli($servername,$username,$password,$db);

if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
echo "connected successfully";


?>

</body>
</body>