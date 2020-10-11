<?php
session_start();
?>
<html>
<body>
	<?php
	include 'includes/common.php';
	?>
	<?php
	$email= mysqli_real_escape_string($conn,$_POST["email"]);
	$password= mysqli_real_escape_string($conn,md5($_POST["password"]));
	
	$query = "SELECT email,password FROM users";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==0){
		echo "no data available.";
	}else{
		$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
		printf("email : %s and password: %s",$row["email"],$row["password"]);
	}
	

	
	
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	

	
	header("Location: products.php");
	?>
</body>
</html>
