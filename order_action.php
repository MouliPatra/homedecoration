<?php
include('connect.php');
global $con;
if (isset($_POST['p_id'])) {
session_start();
$user_id=$_SESSION['userid'];
$p_id=$_POST['p_id'];
$quantity=$_POST['quantity'];
$user_address=$_POST['user_address'];
$price=$_POST['item_price'];

$sql="INSERT INTO order_first(user_id,product_id,quantity,amount_due,	order_address) VALUES ('$user_id','$p_id','$quantity',$price,$user_address)";
$result=mysqli_query($con,$sql);

if($result)
{
	$insert_id=mysqli_insert_id($con);
	echo"<script>alert('sucessefull');</script>";
	header('location:payment.php?order_id='.$insert_id);
}
else
{
	echo"<script>alert('Unsucessefull');window.location.href='buy_now.php';</script>";
}
}
?>