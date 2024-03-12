<?php
include('connect.php');
$title=$_POST['title'];
$img_name=$_FILES['image']['name'];
$img_tmp_nmae=$_FILES['image']['tmp_name'];
$image_location='assect/Image/slider/'.time().$img_name;
$sql="INSERT INTO profile_image(`image`,`title`) VALUES('".$image_location."','".$title."')";
$result=mysqli_query($con,$sql);
if ($result) {
	move_uploaded_file($img_tmp_nmae,$image_location);
	echo "<script>alert('Successful');window.location.href='check.php';</script>";
     }  
else{
		echo "<script>alert('Unsuccessful');window.location.href='check.php';</script>";
    }
?>