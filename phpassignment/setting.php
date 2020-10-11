


<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
	<?php
	include "includes/common.php";
	
	if(!isset($_SESSION['email'])){
		header("Location:index.php");
	}
	
?>
<nav>
<div class="navbar navbar-inverse">
<div class="container">
<div class="navbar-header" >
<a class="navbar-brand" style="margin:auto;">Lifestyle Store</a>
</div>


<ul class="nav navbar-nav navbar-right">

<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> cart</a></li>
<li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

</ul>
</div>
</div>
</nav>

<div class="container" style="margin:7% 0% 0% 30%; padding:auto;width:35%">
<h2>Change Password</h2>

<form action="setting_script.php" method="post">

<div class="form-group">
<input type="password" class="form-control" placeholder="Old Password" name="password">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="New Password" name="password1">
</div>
<div class="form-group">
<input type="password" class="form-control" placeholder="Re-type New Password" name="password2">
</div>
<button type="button" class="btn btn-primary"> Change</button>

</form>
</div>

<?php
include 'includes/footer.php';
?>



</body>
</html>
