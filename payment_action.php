<?php
include('connect.php');
global $con;
$count=0;
session_start();
$user_id=$_SESSION['userid'];
$pay_method=$_POST['cod'];
$o_id=$_POST['o_id'];
$order_id=explode(",",$o_id);
for($i=0; $i<count($order_id) ; $i++) {
// $o_id=$_POST['o_id'];
	$ordered_id=$order_id[$i];
$sql="INSERT INTO payment(`order_id`,`user_id`,`pay_method`) VALUES('".$ordered_id."','".$user_id."','".$pay_method."')";
$result=mysqli_query($con,$sql);
$count++;

}
if($result){
	echo "<script>alert('Successfuly insert');</script>";
	header('location:order.php');
}
else{
		echo "<script>alert('Unsuccessfuly to insert');</script>";
		header('location:payment.php');

}
?>