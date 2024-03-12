<?php
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];

global $con;
$sql="SELECT * FROM connect2 WHERE email='".$username."' AND password='".$password."'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows>0){
	$data=mysqli_fetch_assoc($result);
	session_start();
	
	$_SESSION['userid']=$data['id'];
	$_SESSION['username']=$data['firstname'];
	header('location:index.php');
}
else{
	echo "<script>alert('Username or password does not exist');window.location.href='login.php';</script>";
}
?>