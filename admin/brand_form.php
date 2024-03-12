<!DOCTYPE html>
<html>
<head>
	<title>catagory</title>
	<link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
<?php
include('admin_header.php');
?>
<div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
     <form action="brand_action.php" method="post">
    <div class="form-group">
    	<center><h4 class="pt-3">--Enter Brand--</h4></center>
    <input type="text" class="form-control" id="exampleFormControlSelect1" name="brand_title" placeholder="Enter new brand">
<center><button type="submit" class="btn btn-primary my-3" name="insert_brand">insert brand</button>
  </div>
</form>