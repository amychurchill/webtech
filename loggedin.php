<?php

    include("config.php");

	session_start();
      

    $myusername = mysqli_real_escape_string($conn,$_POST['user']);
    $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
    $sql = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
    /*$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
               echo $row["username"];
           }*/

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
      }
   
?>