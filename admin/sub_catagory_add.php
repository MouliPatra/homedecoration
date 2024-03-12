	<link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
<?php
include('admin_header.php');
?>
<div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
<form action="sub_catagory_insert.php" method="post">
    <div class="form-group">
    	<center><h4 class="pt-3">--Choose Catagory--</h4></center>
  <select name="catagory_id" id="product_catagory" class="form-control">
  <option value="">Select a catagory</option>
 <?php
  $catagory=getAllCatagory();
  foreach ($catagory as $value) {
  ?>
    <option value="<?php echo $value['id'];?>"><?php echo $value['catagory_name'];?></option>
  <?php
  }
  
  ?>
  </select>
</div>
  <div class="form-group mt-3">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the subcatagory" name="sub_catagory_insert">
  </div>
<center><button class="btn btn-primary my-3" type="submit" onclick="return check();">Add Sub Catagory</button></center>
  </form>
  </div>
  </div>  
<?php
include('dashboard_footer.php');
?>
<script type="text/javascript">
  function check()
  {
    $name=document.getElementById('product_catagory').value;
    $image=document.getElementById('exampleFormControlInput1').value;
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
