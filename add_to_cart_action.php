<!-- <?php
if(isset($_POST['add_to_cart']))
{
	global $con;
	$get_product_id=$_GET['add_to_cart'];

}
?> -->
<?php
include('connect.php');
$p_id=$_GET['p_id'];
$user_id=$_GET['user_id'];
$dis_price=$_GET['dis_price'];

$add="SELECT * FROM cart WHERE user_id='".$user_id."' AND product_id='".$p_id."'";
$add_count=mysqli_query($con,$add);
$count=mysqli_num_rows($add_count);
if($count)
{
	echo "<script>alert('This product already in cart');window.location.href='add_to_cart.php';</script>";
}
else
{
	$sql="INSERT INTO cart(user_id,product_id,price) VALUES ('$user_id','$p_id','$dis_price')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('sucessefully add to add_to_cart');window.location.href='add_to_cart.php';</script>";
}
else
{
	echo"<script>alert('Not add to addtocart');window.location.href='add_to_cart.php';</script>";
}
}
?>