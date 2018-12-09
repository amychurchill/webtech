<!DOCTYPE html>
<html>
<head>
	<title>Shu | Register</title>
	<!--setting favicon-->
	<link rel="icon"
		type="image/png"
		href="logo.jpg">
		</head>
	<!--connecting page to stylesheet-->
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
<body>
<!--creating navigation bar, from w3schools.com-->
<div class="navbar"><div id="nav">
	<ul>
		<li><a href="home.php">Shu</a></li>
		<li><a href="login.php">Log In</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="catalog.html">Catalog</a></li>
		<li><a href="quiz.php">Find Your Shu</a></li>
		<li><a href="order.php">Order</a></li>
	</ul></div>
</div>

<div id = "content">
	<?php
	include "config.php";



	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$username = $_POST["username"];
	$password = $_POST["password"];



	$sql = "INSERT INTO user (username,email,name,password,phone) VALUES('". $username ."', '". $email ."', '". $name ."', '". $password ."', '". $phone ."');";
	mysqli_query($conn, $sql);

	echo"<p>Welcome, $name!";

	?>

</div>
</body>
</html>

