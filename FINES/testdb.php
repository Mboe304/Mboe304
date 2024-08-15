<?php 
session_start();
if (isset($_SESSION['userid'])) {
header('location:home1.php');
exit();
}
$msg = null;
include  'dbconfig.php';
if (isset($_POST['login'])) {
//submitted user data
$userFulname = $_POST['fulname'];
$userEmail = $_POST['email'];
$userPassword = $_POST['pass'];
if(empty($userFullname)|| (empty($userEmail) || empty($userPassword)) {
   echo "All fields are required";

search the database records
$sql= "SELECT * FROM tbl_customers WHERE fullname = '$userFullname',email = $userEmail";
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
$user_Email = $userData['email'];
$userPass = $userData['password'];
}

// compare passwords and verify

if ($userEmail === $user_Email && $userPassword ===$userPass) {
// $msg = "<span class='success'>"." You Signed In successfully.</span>";
// store in sessions
$_SESSION['username'] = $userName;
$_SESSION['userid'] = $userID;
$_SESSION['useremail'] =  $user_Email;

header('location:home1.php');
exit();
}else{
$msg = "<span class='danger'>Login failed. Please try again...</span>";
}
}
}
}
?>