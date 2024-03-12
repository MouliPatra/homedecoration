<?php
include 'connect.php';
$id=$_GET['id'];
$data=productDelete($id);
if($data)
{
	echo"<script>alert('Product Delete  SUCCESSFULLY');window.location.href='product.php';</script>";
}
else{
	echo"<script>alert('Product Delete  Unsuccessful.');window.location.href='product.php';</script>";

}



// ====== Catagory Delete ======//
function productDelete($id){
	global $con;
	$sql="DELETE FROM product WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	return $query;

}

?>