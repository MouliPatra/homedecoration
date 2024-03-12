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
     <form action="owl_action.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    	<center><h4 class="pt-3">--Give Owl carasoul image--</h4></center>
    <input type="text" class="form-control" id="exampleFormControlSelect1" name="owl_title" placeholder="Enter slider title">
     <input type="text" class="form-control mt-3" id="exampleFormControlSelect1" name="owl_button" placeholder="Enter slider button value">
 <input type="number" class="form-control mt-3" id="exampleFormControlSelect1" name="owl_status" placeholder="Enter slider status">
 <input type="text" class="form-control mt-3" id="exampleFormControlSelect1" name="owl_description" placeholder="Enter slider description">
 <input type="number" class="form-control mt-3" id="exampleFormControlSelect1" name="owl_raid" placeholder="Enter slider raid">
    <input type="file" class="form-control mt-3" id="exampleFormControlSelect1" name="owl_image_insert" placeholder="Enter new owl image">
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

