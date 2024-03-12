
<?php
session_start();
include('connect.php');
include('function.php');
$id=$_GET['id'];
$data2=cancel_order($id);
if($data2)
{
	echo"<script>alert('Cancel Succfully');window.location.href='cancel_successfully.php';</script>";
	header('location:cancel_success.php');
}
else{
	echo"<script>alert('Cancel Unsuccessful');window.location.href='cancel_successfully.php';</script>";
	header('location:cancel_success.php');
}
?>