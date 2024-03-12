<?php
include 'connect.php';
include 'admin_function.php';
$product_id1=$_POST['product_id'];
$product_title=$_POST['product_title'];
$product_des=$_POST['product_des'];
$Actual_price=$_POST['Actual_price'];
$discount=$_POST['discount'];
$discount_price=$_POST['discount_price'];
$product_type=$_POST['product_type'];
$img_name=$_FILES['product_image']['name'];
$img_tmp_nmae=$_FILES['product_image']['tmp_name'];
$image_location='assect/Image/product/'.time().$img_name;
//$product_sub_image=$_FILES['product_sub_image'];
// $product_image=$_POST['product_image'];
// $product_price=$_POST['product_price'];
$data1=updateproductDetails($product_id1,$product_title,$product_des,$Actual_price,$discount,$discount_price,$product_type,$image_location);
if($data1)
{
    move_uploaded_file($img_tmp_nmae,'../'.$image_location);

echo"<script>window.location.href='product.php';</script>";
}
else{
	echo"<script>window.location.href='product.php';</script>";
}
?>

</body>
</html>