<?php
session_start();
include('connect.php');
include('function.php');
      $id=$_GET['id'];
$data2=add_to_cart_Delete($id);
if($data2)
{
	echo"<script>alert('Cart Product Delete Succfully');window.location.href='add_to_cart.php';</script>";
}
else{
	echo"<script>alert('Cart Product Delete  Unsuccessful.');window.location.href='add_to_cart.php';</script>";

}
?>