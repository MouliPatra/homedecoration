<?php
include 'connect.php';
include 'admin_function.php';
global $con;
$product_id1=$_POST['product_id'];
$product_sub_image=$_FILES['product_sub_image'];
 $product_id2=mysqli_insert_id($con);
foreach ($product_sub_image['name'] as $key => $value) {
		$img_more_name=$product_sub_image['name'][$key];
		$img_more_tmp_name=$product_sub_image['tmp_name'][$key];
		$image_more_location='assect/Image/product_more_img/'.time().$img_more_name;
		$data2=updateproduct_Subimag_Details($product_id1,$product_id2,$image_more_location);
	if($data2){
	move_uploaded_file($img_more_tmp_name,'../'.$image_more_location);
   echo "<script>alert('Successful');window.location.href='product.php';</script>";
}
}
?>