<?php
include 'includes/common.php';
?>



<html>
<head>

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#" style="margin:auto">Lifestyle Store</a>
</a>
</div>
<ul class="nav navbar-nav navbar-right" style="margin:auto">
	<li><a href="signup.php" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
</div>
</nav>


<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-xs-12">
<div class="panel panel-primary" style="margin:10% 2% 5% 20%; width:50% ;">
<div class="panel-heading">LOGIN</div>
<div class="panel-body" style="margin:auto;">
<p class="text-warning">Login to make a purchase</p>
<form action="login_submit.php" method="post">
    <div class="form-group">
      
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
    </div>
        <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
<div class="panel-footer">Don't have an account? <a style="color:blue;text-decoration:none;" href="signup.php" target="_self">Register</div>

</div>
</div>
</div>
</div>



<?php
include 'includes/footer.php';
?>

</body>
</html>