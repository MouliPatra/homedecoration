<?php
session_start();
include('connect.php');
include('function.php');
$id=$_GET['id'];
$data2=buy_now_Delete($id);
if($data2)
{
	echo"<script>alert('Product Delete Succfully from buy now');window.location.href='buy_now.php';</script>";
}
else{
	echo"<script>alert('Product Delete  Unsuccessful from buynow.');window.location.href='buy_now.php';</script>";

}
?>