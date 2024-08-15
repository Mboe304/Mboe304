<?php 
error_reporting(0);
session_start();
if (isset($_SESSION['userid'])) {
header('location:home1.php');
exit();
}
$msg = null;
include  'dbconfig.php';
if (isset($_POST['login'])) {
//submitted user data
$username = $_POST['username'];
$phone= $_POST['phone'];
$userPassword = $_POST['pass'];
if (empty($username) && empty($phone) && empty($password)) {
	echo "All fields are required";
}
}

// search the database records
$sql= "SELECT * FROM `tbl_user` WHERE (`username`, `phone`, `password`) VALUES ('$Username','$Phone','$Password')";
$query = mysqli_query($conn,$sql);
// records found
$count = mysqli_num_rows($query);
if ($count < 1) {
//$msg = "<span class='danger'>No record found...</span>";
echo "No records found";
}else{
// call records from database
foreach ($query as $key => $userData) {
$userID =  $userData['id'];
$userName = $userData['fullname'];
$phone = $userData['phone'];
$userPass = $userData['password'];
}

// compare passwords and verify

if ($phone === $phone && $userPassword ===$userPass) {
// $msg = "<span class='success'>"." You Signed In successfully.</span>";
// store in sessions
$_SESSION['username'] = $userName;
$_SESSION['userid'] = $userID;
$_SESSION['phone'] =  $phone;

header('location:home1.php');
exit();
}else{
$msg = "<span class='danger'>Login failed. Please try again...</span>";
}
}
// }
?>