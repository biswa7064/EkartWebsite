<?php
include 'includes/common.php';
if (isset($_SESSION['email'])) 
	{ 
		header('location: products.php'); 
	}
?>



<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>

<body>
<?php
include 'includes/header.php';
?>


<div id="banner_image">
<div class="container">
<div id="banner_content">
<a class="btn btn-danger btn-lg active" href="products.php"><b>Shop Now</b></a>
</div>
</div>
</div>



<?php
include 'includes/footer.php';
?>


</body>
</html>