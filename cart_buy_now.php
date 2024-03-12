<?php
// echo "<pre>";
// print_r($_POST);
// exit();
include('connect.php');
global $con;
$count=0;
$insert_id=array();
session_start();
$user_id=$_SESSION['userid'];
for($i=0; $i<count($_POST['p_id']) ; $i++) {
$p_id=$_POST['p_id'][$i];
$quantity=$_POST['quantity'][$i];
$user_address=$_POST['user_address'];
$price=$_POST['item_price'][$i];
$sql="INSERT INTO order_first(user_id,product_id,quantity,amount_due,	order_address) VALUES ('$user_id','$p_id','$quantity',$price,$user_address)";
$result=mysqli_query($con,$sql);

if($result)
{
	$insert_id[]=mysqli_insert_id($con);
	$count++;

	$sql2="DELETE FROM cart";
	$result=mysqli_query($con,$sql2);
	
	// echo "<script>alert('sucessefull');</script>";
	// header('location:payment.php?order_id='.$insert_id);
}

}
if($count){
	$inserted_id=implode(",", $insert_id);
	header('location:payment.php?order_id='.$inserted_id);
}
else
{
	echo"<script>alert('Unsucessefull');window.location.href='buy_now.php';</script>";
}

?>