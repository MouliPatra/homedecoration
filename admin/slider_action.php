<?php
 include 'connect.php';
$slider_insert=$_POST['slider_title'];
$slider_status=$_POST['slider_status'];
$img_name=$_FILES['slider_image_insert']['name'];
$img_tmp_nmae=$_FILES['slider_image_insert']['tmp_name'];
$image_location='assect/Image/slider/'.time().$img_name;
$sql="INSERT INTO slider(`title`,`status`,`image`) VALUES('".$slider_insert."','".$slider_status."','".$image_location."')";
$result=mysqli_query($con,$sql);
if ($result){
	move_uploaded_file($img_tmp_nmae,'../'.$image_location);
	echo "<script>alert('Slider image add successfully');window.location.href='admin_slider.php';</script>";
     }  
else{
		echo "<script>alert('Slider image add  Unsuccessful.');window.location.href='admin_slider.php';</script>";
    }
 ?>