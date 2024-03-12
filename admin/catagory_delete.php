<?php
include 'connect.php';
$id=$_GET['id'];
$data=catagoryDelete($id);
if($data)
{
	echo"<script>alert('Catagory Delete  SUCCESSFULLY');window.location.href='catagory.php';</script>";
}
else{
	echo"<script>alert('Catagory Delete  Unsuccessful.');window.location.href='catagory.php';</script>";

}



// ====== Catagory Delete ======//
function catagoryDelete($id){
	global $con;
	$sql="DELETE FROM catagory WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	return $query;

}

?>