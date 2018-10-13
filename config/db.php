<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db_name = "student_db";
	$db_con= mysqli_connect($servername, $username, $password,$db_name) or die("Not connected");
	
	$_SESSION["db_name"] = $db_con;
?>