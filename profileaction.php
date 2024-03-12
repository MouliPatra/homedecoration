<?php
include('connect.php');
$firstname=$_POST['firstName'];
$lastName=$_POST['lastName'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$phoneNumber=$_POST['phoneNumber'];
$email=$_POST['email'];
$password=$_POST['password'];

global $con;
$sql="SELECT * FROM connect2";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows>0){
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['userid']=$data['id'];
    header('location:index.php');
}
else{
	echo "<script>alert('Username or password does not exist');window.location.href='login.php';</script>";
}
?>