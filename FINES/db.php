<?php
if (isset($_POST['create'])) {
	$username = $_POST['username'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];

	// start database connection

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
	// End db connection
	if(empty($username) && empty($phone) && empty($password)){
		echo "All fields are required";
	}else{
		$sql = "INSERT INTO `tbl_user`(`username`, `phone`, `password`) VALUES ('$username','$phone','$password')";
          }

	if(mysqli_query($conn, $sql) == true) {
		
           echo "registration successful";


	}else{ 
	     echo "something went wrong.please try again ....!";
// 	 }
	 }
}
  ?>