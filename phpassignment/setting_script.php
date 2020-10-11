<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
	header("Location:index.php");

}
$query="SELECT password FROM users";
$result=mysqli_query($conn,$query);
if($_POST['password1']==$_POST['password2']){
 echo "password updated."
}else{
	echo "doesnot match.";
	header("Location:setting.php");
}
?>