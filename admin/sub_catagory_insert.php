<?php
 include 'connect.php';
 $catagory_id=$_POST['catagory_id'];
$sub_catagory_insert=$_POST['sub_catagory_insert'];
$sql="INSERT INTO sub_catagory(`catagory_name`,`Sub_catagory_name`) VALUES('".$catagory_id."','".$sub_catagory_insert."')";

$result=mysqli_query($con,$sql);
if ($result) {
	echo "<script>alert('Sub_catagory add successfully');window.location.href='sub_catagory.php';</script>";
     }  
else{
		echo "<script>alert('Sub_catagory add  Unsuccessful.');window.location.href='sub_catagory.php';</script>";
    }
 ?>