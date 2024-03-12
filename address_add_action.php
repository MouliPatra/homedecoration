<?php
include('connect.php');
session_start();
$user_id=$_SESSION['userid'];
global $con;
$name=$_POST['name'];
$phone=$_POST['phone'];
$address1=$_POST['address1'];
$select_state=$_POST['select_state'];
$address2=$_POST['address2'];
$rad=$_POST['rad'];
$sql="INSERT INTO address(`user_id`,`name`,`phone`,`address1`,`state`,`address2`,`type_address`)VALUES('".$user_id."','".$name."','".$phone."','".$address1."','".$select_state."','".$address2."','".$rad."')"; 
$result=mysqli_query($con,$sql);
if($result)
{
	echo "<script>alert('successfully insert');window.location.href='checkout.php';</script>";

}
else
{
		echo "<script> alert('Unsuccessfully insert');</script>window.location.href='checkout.php;'";

}
?>