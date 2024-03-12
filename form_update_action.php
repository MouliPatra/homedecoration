<?php
include('connect.php');
function update_user($id,$email,$password,$image,$firstname,$lastname,$address,$pincode,$phonenumber){
global $con;
$sql="UPDATE connect2 SET email='".$email."',password='".$password."',image='".$image."',firstname='".$firstname."',lastname='".$lastname."',address='".$address."',pincode='".$pincode."',phonenumber='".$phonenumber."' WHERE id='".$id."'";
$result=mysqli_query($con,$sql);
return $result;
}
$id=$_POST['id'];
$firstname=$_POST['firstName'];
$lastName=$_POST['lastName'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$phoneNumber=$_POST['phoneNumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$image_name=$_FILES['image']['name'];
$img_tmp_name=$_FILES['image']['tmp_name'];
$img_location='assect/Image/'.time().$image_name;
$data=update_user($id,$email,$password,$img_location,$firstname,$lastname,$address,$pincode,$phoneNumber);
if($data){
	move_uploaded_file($image_tmp_name,$image_location);
	echo "<script>alert ('succssfuly updated');</script>;";
	header('location:profile.php');
}
else{
	echo "unsuccssfull";
}
?>