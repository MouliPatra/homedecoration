<!-- <?php
include('connect.php');
$p_id=$_GET['p_id'];
$user_id=$_GET['user_id'];

	$sql="INSERT INTO order_first(user_id,product_id) VALUES ('$user_id','$p_id')";
$result=mysqli_query($con,$sql);
if($result)
{
	$insert_id=mysqli_insert_id($con);
	echo"<script>alert('sucessefull');</script>";
}
else
{
	echo"<script>alert('Unsucessefull');window.location.href='buy_now.php';</script>";
}
?> -->