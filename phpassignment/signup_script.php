<?php
include 'includes/common.php';
?>

<!DOCTYPE html>
<html>
<body>
	<?php
	$email= $_POST["email"];
	$name=$_POST["name"];
	$password = $_POST["password"];
	$contact= $_POST["contact"];
	$city= $_POST["city"];
	$address=$_POST["address"];

	$query= "SELECT id,email FROM users WHERE email= '$email'";
	$result=mysqli_query($conn,$query);

	if(mysqli_num_rows($result)>0){
		die("Error: email already exist.");
	}else{
		$sql= "INSERT INTO users (name,email,password,contact,city,address) VALUES ('$name','$email','$password','$contact','$city','$address')";
		$result1=mysqli_query($conn,$sql);
		echo "id: ".mysqli_insert_id($conn);
	}
	?>

	<?php

	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	

	
	header("Location: products.php");
	?>

</body>
</html>

