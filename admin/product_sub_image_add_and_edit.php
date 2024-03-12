<?php
include('connect.php');
if (isset($_POST['submit'])){
global $con;
$product_id=$_POST['product_id'];
$product_sub_image=$_FILES['product_sub_image'];

	$c=0;
	foreach ($product_sub_image['name'] As $key => $value) {
		$img_more_name=$product_sub_image['name'][$key];
		$img_more_tmp_name=$product_sub_image['tmp_name'][$key];
		$image_more_location='assect/Image/product_more_img/'.time().$img_more_name;
		$sql1="INSERT INTO product__moreimg(product_id,img_name) VALUES('".$product_id."','".$image_more_location."')";
		// echo $sql1;exit();
		$result1=mysqli_query($con,$sql1);
		if($result1){
			move_uploaded_file($img_more_tmp_name,'../'.$image_more_location);
			$c++;
		}
		
	}
	if($c){
		echo "<script>alert('Successful');window.location.href='product_view.php?id=".$product_id."';</script>";
		}  
		else{
		echo "<script>alert('Unsuccessful');window.location.href='product_view.php?id=".$product_id."';</script>";
	}
}
?>