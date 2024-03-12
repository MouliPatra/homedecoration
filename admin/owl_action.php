<?php
 include 'connect.php';
$owl_title=$_POST['owl_title'];
$owl_button=$_POST['owl_button'];
$owl_status=$_POST['owl_status'];
$owl_description=$_POST['owl_description'];
$owl_raid=$_POST['owl_raid'];
$img_name=$_FILES['owl_image_insert']['name'];
$img_tmp_nmae=$_FILES['owl_image_insert']['tmp_name'];
$image_location='assect/Image/owl_carasoul/'.time().$img_name;
$sql="INSERT INTO owl_carasoul(`status`,`image`,`title`,`button_value`,`description`,`raid`)VALUES('".$owl_status."','".$image_location."','".$owl_title."','".$owl_button."','".$owl_description."','".$owl_raid."')";
$result=mysqli_query($con,$sql);
if ($result){
	move_uploaded_file($img_tmp_nmae,'../'.$image_location);
	echo "<script>alert('Carasoul image add successfully');window.location.href='admil_owl_carasoul.php';</script>";
     }  
else{
		echo "<script>alert('Carasoul image add  Unsuccessful.');window.location.href='admil_owl_carasoul.php';</script>";
    }
 ?>