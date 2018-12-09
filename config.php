<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
         if(! $conn ){
            die('Could not connect: ' . mysqli_error());
         }
         else{
         }

        $sql = "CREATE DATABASE users";
        if (mysqli_query($conn, $sql)) {
           // echo "Database created successfully";
        } else {
           // echo "Error creating database: " . mysqli_error($conn);
        }
	mysqli_select_db($conn, 'users');
	// sql to create table
	$sql = "CREATE TABLE user (
	username VARCHAR(30) NOT NULL UNIQUE,
	email VARCHAR(30) NOT NULL UNIQUE,
	name VARCHAR(30) NOT NULL,
	password VARCHAR(30) NOT NULL,
	phone INT(10) NOT NULL,
	quiz BOOLEAN
	)";
	mysqli_query($conn, $sql);


?>