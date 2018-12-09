
<?php
	include "config.php";

	$username = mysql_real_escape_string($conn,$_POST['user']);
	$password = mysql_real_escape_string($conn,$_POST['pass']);

	$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if ($count == 1){
		header("location test.php");
		$_SESSION["username"] = $username;
	}

	else{
		echo "<br><br><br>your login infor was incorrect";
	}

	
?>


