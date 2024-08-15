<?php
if (isset($_POST['create'])) {
	$Fullname = $_POST['Fullname'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	// start database connection

	$servername ='localhost';
	$username ='root';
	$password ='';
	$dbname ='bolt'; //your database name

	//connect to db
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	//check connection
	if (!$conn) {
		die("connection failed:" .mysqli_connect_error());
	}else{
		echo "success";
	}
	// End db connection
	if(empty($Fullname) && empty($Email) && empty($Password)){
		echo "All fields are required";
	}else{
		$sql = "INSERT INTO `tbl_user`(`Fullname`, `Email`, `Password`) VALUES ('($Fullname','$Email','$Password')";
          }

	if(mysqli_query($conn, $sql) == true) {
		
           echo "registration successful";


	}else{ 
	     echo "something went wrong.please try again ....!";

	 }
}
  ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="text" name="Fullname" placeholder="Fullname">
	<br>
	<br>
		<input type="Email" name="Email" placeholder="Email">
		<br>
		<br>
	<input type="password" name="Password" placeholder="Password">
	<br>
	<br>
	<input type="submit" name="submit" value="submit">


</body>
</html>