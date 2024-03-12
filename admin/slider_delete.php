<?php
include 'connect.php';
$id=$_GET['id'];
$data=sliderDelete($id);
if($data)
{
	echo"<script>alert('Slider Delete  SUCCESSFULLY');window.location.href='admin_slider.php';</script>";
}
else{
	echo"<script>alert('Slider Delete  Unsuccessful.');window.location.href='admin_slider.php';</script>";

}



// ====== Catagory Delete ======//
function sliderDelete($id){
	global $con;
	$sql="DELETE FROM slider WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	return $query;

}

?>