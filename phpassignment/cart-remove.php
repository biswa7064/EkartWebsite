

<html>
<body>
	<?php
	include 'includes/common.php';
	
	
	
	
	$query= "SELECT user_id,item_id FROM users_items";
	$result= mysqli_query($conn,$query);
	$row= mysqli_fetch_array($result);
	$id=$row['user_id'];
	$item_id=$row['item_id'];
	$delete = "DELETE FROM users_items WHERE user_id='$id' AND item_id='$item_id'";
	$deleteresult=mysqli_query($conn,$delete);
	
	header("Location:cart.php");
	?>
</body>
</html>