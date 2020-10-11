




<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>

<?php

	include 'includes/common.php';
	
	if(isset($_SESSION)){
		header("Location:products.php");
	}
?>
<?php
include 'includes/header.php';
?>


<div class="container" style="margin:7% 0% 0% 30%; padding:auto;width:35%">
<h2>SIGN UP</h2>
<div class="row">
<form role="form" action="signup_script.php" method="post">
<div class="form-group">
	
<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
</div>

<div class="form-group">
	
<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
</div>

<div class="form-group">
<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
</div>

<div class="form-group">
<input type="number" class="form-control" id="contact" name="contact" placeholder="Contact" required>
</div>

<div class="form-group">
<input type="text" class="form-control" id="city" name="city" placeholder="City">
</div>

<div class="form-group">
<input type="text" class="form-control" id="address" name="address" placeholder="Address">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</div>


<?php
include 'includes/footer.php';
?>



</body>

</html>