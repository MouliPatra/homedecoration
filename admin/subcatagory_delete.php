<?php
include 'connect.php';
$id=$_GET['id'];
$data=subcatagoryDelete($id);
if($data)
{
	echo"<script>alert('Subcatagory Delete  SUCCESSFULLY');window.location.href='sub_catagory.php';</script>";
}
else{
	echo"<script>alert('Subcatagory Delete  Unsuccessful.');window.location.href='sub_catagory.php';</script>";

}



// ====== Catagory Delete ======//
function subcatagoryDelete($id){
	global $con;
	$sql="DELETE FROM sub_catagory WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	return $query;

}

?>