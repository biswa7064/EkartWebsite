<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
<?php
include 'includes/commmon.php';
$_SESSION['email']=$email;

if(!isset($email)){
	header ("Location:index.php");
}
?>

<div class="alert alert-success" style="text-align:center;">

<strong>Your order is confirmed. Thank you for shopping
with us. <a href="products.php">Click here</a> to purchase any other item.</strong>

</div>

</body>
</html>