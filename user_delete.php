<?php
session_start();
include('connect.php');
    $user_id=$_SESSION['userid'];
function user_delete($id){
	global $con;
	$sql="DELETE FROM connect2 WHERE id='".$id."'";
	$result=mysqli_query($con,$sql);
	return $result;
}
$data=user_delete($user_id);
if($data){
	echo "<script>alert('succfully deleted');</script>";}
else{
	echo "unsuccssfull";
}
?>