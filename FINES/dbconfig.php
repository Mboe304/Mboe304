<?php
$servername ='localhost';
	$username ='root';
	$password ='';
	$dbname ='ig_db'; //your database name

	//connect to db
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if (!$conn) {
		die("connection failed:" .mysqli_connect_error());
	}else{
		echo "success";
	}
	?>