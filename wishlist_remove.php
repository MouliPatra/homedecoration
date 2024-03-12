<?php
session_start();
include('connect.php');
include('function.php');
  $id=$_GET['id'];
$data2=wishlist_Delete($id);
if($data2)
{
	echo"<script>alert('Wishlist Delete Succfully');window.location.href='wishlist.php';</script>";
}
else{
	echo"<script>alert('Wishlist Product Delete  Unsuccessful.');window.location.href='wishlist.php';</script>";

}
?>