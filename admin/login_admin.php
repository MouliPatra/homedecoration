<?php
include('connect.php');
$username=$_POST['username'];
$password=$_POST['password'];

global $con;
$sql="SELECT * FROM admin WHERE Admin_email='".$username."' AND Admin_password='".$password."'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows>0){
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['username']=$data['Admin_name'];
	header('location:dashboard2.php');
}
else{
	echo "<script>alert('Username or password does not exist');window.location.href='index.php';</script>";
}
?>