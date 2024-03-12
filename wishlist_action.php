<?php
include('connect.php');
$p_id=$_GET['p_id'];
$user_id=$_GET['user_id'];

$add="SELECT * FROM wishlist WHERE user_id='".$user_id."' AND product_id='".$p_id."'";
$add_count=mysqli_query($con,$add);
$count=mysqli_num_rows($add_count);
if($count)
{
	echo "<script>alert('This product already in wishlist');window.location.href='wishlist.php';</script>";
}
else
{
	$sql="INSERT INTO wishlist(user_id,product_id) VALUES ('$user_id','$p_id')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('sucessefully add to wishlist');window.location.href='wishlist.php';</script>";
}
else
{
	echo"<script>alert('Not add to wishlist');window.location.href='wishlist.php';</script>";
}
}