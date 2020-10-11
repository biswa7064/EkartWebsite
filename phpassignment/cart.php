<?php
session_start();

?>



<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<script src="bootstrap/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">

</head>
<body>

<?php
include 'includes/common.php';
?>
<?php
include 'includes/header.php';
?>
<?php
$query="SELECT price FROM items";
$res=mysqli_query($conn,$query);
$inner = "SELECT items.name, users_items.status FROM items INNER JOIN users_items ON items.pid=users_items.item_id";
$result=mysqli_query($conn,$inner);
if(mysqli_num_rows($result)==0){
	echo "Add items to the cart first!";
}else{
	while($sum= mysqli_fetch_assoc($res));

}
?>

<div class="container ">
<table class="table table-bordered text-center">
<thead>

<tr>
<th style="text-align:center;">Item Number</th>
<th style="text-align:center;">Item Name</th>
<th style="text-align:center;">Price</th>
<th></th>
</tr>

</thead>

<tbody>
<tr>
<td> </td>
<td> </td>
<td> </td>
<td> </td>
</tr>

<tr>
<td> </td>
<td>Total</td>
<td>Rs 0/-</td>
<td><a href="success.php"><button type="button" class="btn btn-primary">Confirm Order</button></a></td>
</tr>
</tbody>

</table>
</div>

<?php
include 'includes/footer.php';
?>


</body>
</html>













