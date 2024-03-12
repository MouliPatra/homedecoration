<?php
include 'connect.php';
include 'admin_function.php';
$id=$_GET['id'];
$data=sub_Image_Delete($id);
if($data)
{
	echo"<script>alert('Product sub image Delete  SUCCESSFULLY');window.location.href='catagory.php';</script>";
}
else{
	echo"<script>alert('Product sub image  Delete  Unsuccessful.');window.location.href='catagory.php';</script>";

}