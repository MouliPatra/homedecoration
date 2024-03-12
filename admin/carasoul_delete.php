<?php
include 'connect.php';
$id=$_GET['id'];
$data=owlDelete($id);
if($data)
{
	echo"<script>alert('Owl carasoul Delete  SUCCESSFULLY');window.location.href='admil_owl_carasoul.php';</script>";
}
else{
	echo"<script>alert('Owl carasoul Delete  Unsuccessful.');window.location.href='admil_owl_carasoul.php';</script>";

}



// ====== Catagory Delete ======//
function owlDelete($id){
	global $con;
	$sql="DELETE FROM owl_carasoul WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	return $query;

}

?>