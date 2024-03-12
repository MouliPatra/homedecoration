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
     <form action="slider_action.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    	<center><h4 class="pt-3">--Give slider image--</h4></center>
    <input type="text" class="form-control" id="exampleFormControlSelect1" name="slider_title" placeholder="Enter slider title">
     <input type="number" class="form-control" id="exampleFormControlSelect1" name="slider_status" placeholder="Enter slider status">
    <input type="file" class="form-control mt-3" id="exampleFormControlSelect1" name="slider_image_insert" placeholder="Enter new catagory image">
<center><button type="submit" class="btn btn-primary my-3">Insert</button></center>
  </div>
</form>

</div>
</div>
<?php
include('dashboard_footer.php');
?>
</body>
</html>

