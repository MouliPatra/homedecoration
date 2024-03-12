
<?php

include('admin_header.php');

$cat_id=$_GET['id'];
$catagory_data=getSinglecatagoryDetails($cat_id);
?>
<!-- <link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css"> -->
<div id="page-wrapper">
   <div class="container-fluid text-white mt-3" style="background-color: #0D0730;">
     <form action="catagory_edit.php" method="post" enctype="multipart/form-data">
     	<input type="hidden" name="cat_id" value="<?php echo $catagory_data['id']; ?>">
    <div class="form-group">
    	<center><h4 class="pt-3">--Update Catagory--</h4></center>
    <input type="text" class="form-control" id="exampleFormControlSelect1" name="Catagory_name" placeholder="Enter new catagory" value="<?php echo $catagory_data['catagory_name']; ?>">
    <input type="file" class="form-control mt-3" id="exampleFormControlSelect2" name="Catagory_image_insert" placeholder="Enter new catagory image" value="<?php echo $catagory_data['catagory_image']; ?>">
  </div>
  <center><button type="submit" class="btn btn-primary" style="margin-bottom: 20px" onclick="return check();">Update</button>
</center>
</form>

</div>
<?php
include('dashboard_footer.php');
?>

<script type="text/javascript">
  function check()
  {
    $name=document.getElementById('exampleFormControlSelect1').value;
    $image=document.getElementById('exampleFormControlSelect2').value;
        if($name==''){
      alert('plese enter name');
      return false;
    }
      if($image==''){
      alert('plese enter image');
      return false;
    }

  }
</script>
</body>
</html>

