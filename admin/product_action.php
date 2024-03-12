<?php
include('connect.php');
if (isset($_POST['submit'])){
global $con;
$catagory_id=$_POST['catagory_id'];
$product_title=$_POST['product_title'];
$product_des=$_POST['product_des'];
$Actual_price=$_POST['Actual_price'];
$discount=$_POST['discount'];
$discount_price=$_POST['discount_price'];
$product_type=$_POST['product_type'];
$img_name=$_FILES['product_image']['name'];
$img_tmp_nmae=$_FILES['product_image']['tmp_name'];
$image_location='assect/Image/product/'.time().$img_name;
$product_sub_image=$_FILES['product_sub_image'];
$sql="INSERT INTO product(`catagory`,`p_name`,`p_description`,`actual_price`,`discount`,`discount_price`,`pro_type`,`p_image`) VALUES('".$catagory_id."','".$product_title."','".$product_des."','".$Actual_price."','".$discount."','".$discount_price."','".$product_type."','".$image_location."')";

$result=mysqli_query($con,$sql);
if ($result) 
{
	move_uploaded_file($img_tmp_nmae,'../'.$image_location);
	$product_id=mysqli_insert_id($con);

	
	foreach ($product_sub_image['name'] as $key => $value) {
		$img_more_name=$product_sub_image['name'][$key];
		$img_more_tmp_name=$product_sub_image['tmp_name'][$key];
		$image_more_location='assect/Image/product_more_img/'.time().$img_more_name;
		$sql1="INSERT INTO product__moreimg(product_id,img_name) VALUES('".$product_id."','".$image_more_location."')";
		$result1=mysqli_query($con,$sql1);
		if($result1){
			move_uploaded_file($img_more_tmp_name,'../'.$image_more_location);
		}
		
	}
	echo "<script>alert('Successful');window.location.href='product.php';</script>";
     }  
else{
		echo "<script>alert('Unsuccessful');window.location.href='product.php';</script>";
    }
}
?>