<html>
<body>
	<?php
	include 'includes/common.php';
	$query="INSERT INTO user_items(user_id,item_id,status) VALUES('$user_id', '$item_id', 'Added to cart')";
	$result=mysqli_query($conn,$query);
	
	header('Location:products.php');
	?>
</body>
</html>
