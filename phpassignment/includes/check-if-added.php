


<!DOCTYPE html>
<html>
<body>


<?php
function check_if_added_to_cart($item_id){
	include 'common.php';
	$query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id='$user_id' and status='Added to cart'";
	if(mysqli_num_rows($query)>=1){
		return 1;
	}else{
		return 0;
	}
}


?>