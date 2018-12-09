<?php

    include("config.php");

	session_start();
      

    $myusername = mysqli_real_escape_string($conn,$_POST['user']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
    $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
               $_SESSION['username'] = $row["username"];
               $_SESSION['name'] = $row["name"];
               $_SESSION['took_quiz'] = $row["quiz"];
           }

    echo"<html>
<head>
	<title>Login</title>
	<!--setting favicon-->
	<link rel='icon'
		type='image/png'
		href='logo.jpg'>

			<style>
	body {
		padding-top: 15%;
		text-align: center;
	}
	
	p {
		font-size: 50pt;
	}
	</style>
		</head>

	<!--connecting page to stylesheet-->
	<link rel='stylesheet' type='text/css' href='stylesheet.css'>
<!--creating navigation bar, from w3schools.com-->
<div class='navbar'>
	<ul style='display: inline-block;'>
		<li><a href='home.php'>Shu</a></li>
		<li><a href='login.php'>Log In</a></li>
		<li><a href='register.php'>Register</a></li>
		<li><a href='catalog.html'>Catalog</a></li>
		<li><a href='quiz.php'>Find Your Shu</a></li>
		<li><a href='order.php'>Order</a></li>
	</ul>
</div>
<body><center><p>Welcome, " . $_SESSION['name'] ."</p>";

if ($_SESSION['took_quiz']==null){
	echo "You havent taken our quiz yet!<br>";
	echo "<a href='quiz.php'>Click here to take the quiz!</a>";
}

/*
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }*/
   
?>