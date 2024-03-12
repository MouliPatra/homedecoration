<?php
 include 'connect.php';
$Catagory_insert=$_POST['Catagory_insert'];
$img_name=$_FILES['Catagory_image_insert']['name'];
$img_tmp_nmae=$_FILES['Catagory_image_insert']['tmp_name'];
$image_location='assect/Image/catagory/'.time().$img_name;
$sql="INSERT INTO catagory(`catagory_name`,`catagory_image`) VALUES('".$Catagory_insert."','".$image_location."')";
$result=mysqli_query($con,$sql);
if ($result){
	move_uploaded_file($img_tmp_nmae,'../'.$image_location);
	echo "<script>alert('Catagory add successfully');window.location.href='catagory.php';</script>";
     }  
else{
		echo "<script>alert('Catagory add  Unsuccessful.');window.location.href='catagory.php';</script>";
    }
 ?>