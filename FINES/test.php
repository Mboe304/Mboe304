<?php
if (isset($_POST['signup'])) {
	$Fullname = $_POST['fullname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];

	// start database connection
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'datingappdb';

	//check connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
	if (!$conn) {
		die("connection failed:" . mysqli_connect_error());
	}else{
		echo "success";
	}
	// end db connection
	if (empty($Fullname) && empty($Email) && empty($Password)) {
		echo "All failed are required";


	}else{
		$sql = "INSERT INTO customertbl( fullname, email, password) VALUES ('$Fullname','$Email','$Password')";

		if (mysqli_query($conn,$sql) == true){
			header("location:table.html");

		}else{
			echo "Something went wrong. Please try again...!";
		}
	}

	}else{
		echo "Please submit your form";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>register form</title>
</head>
<body>
	<h1>Register</h1>
<form method="POST">
	<label>enter your fullname</label>
	<input type="text" name="fullname"><br><br>
	<label>enter your email</label>
	<input type="text" name="email"><br><br>
	<label>enter your password</label>
	<input type="password" name="password">
<a href="index.php"><input type="submit" name="signup" value="submit"></a>
</form>
</body>
</html>