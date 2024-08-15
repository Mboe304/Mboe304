<?php
if (isset($_POST['create'])) {
	$Username = $_POST['username'];
	$Phone = $_POST['phone'];
	$Password = $_POST['password'];

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
		// echo "success";
	}
	// End db connection
	if(empty($Username) && empty($Phone) && empty($Password)){
		echo "All fields are required";
	}else{
		$sql = "INSERT INTO `tbl_user`(`username`, `phone`, `password`) VALUES ('$Username','$Phone','$Password')";
          }

	if(mysqli_query($conn,$sql) == true) {
		
           header("location:landingpage.php");


	}else{ 
	     // echo "something went wrong.please try again ....!";
// 	 }
	 }
}//else{echo "oops";
// }
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
</head>
<body>
<br>
<br>
<img src="images/logo.png" id="image">
<br>
<br>
<form method="POST">
<input id="btn" type="textbox" name="username" placeholder="username" id="btn2">
	<br>
	<br>
	<br>
	<input id="btn" type="number" name="phone" placeholder="phone number" id="btn2">
	<br>
	<br>
	<br>
	<input id="btn"type="password" name="password" placeholder="password" id="btn2">
	<br>
	<br>
	<br>
    <button name="create" id="btn">submit</button>
	<br>
	</form>
</body>
</html>
<style type="">
		body{
			background-color:#00FFFF;
			text-align:center;
			

		}
		#Username
		{
			width: 900px;
			height: 80px;
			text-align:center;
			border-radius: 10px;
		}
		#image{
		width:450px;
		 height:450px;
		 border-radius:100px;
		}
		#btn{
			width: 700px;
			border:250px;
			height:100px;
			color:107EDC;
			border-radius:100px;
			text-align:centre;
			font-size: 50px;
			text-align: centre;
			margin-top: 50px;
		}
		#btn2{
			width:900px;
		    height:90px;
		    border-radius:200px;
		    color:#107EDC
		    text-align:center;
		    font-size: 500px;
		}

		