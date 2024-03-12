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
     <form action="catagory_add.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
    	<center><h4 class="pt-3">--Give New Catagory--</h4></center>
    <input type="text" class="form-control" id="exampleFormControlSelect1" name="Catagory_insert" placeholder="Enter new catagory">
    <input type="file" class="form-control mt-3" id="exampleFormControlSelect2" name="Catagory_image_insert" placeholder="Enter new catagory image">
<center><button type="submit" class="btn btn-primary my-3" onclick="return check();">Insert</button>
  </div>
</form>
      	<center><h4 class="pt-3">--All Sub-catagory List--</h4></center>
      	<table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>Sub-catagory</th>
           <th>Action</th>
        </tr>
      </thead>
        </div>
        <tbody>
        	<tr>
        		<td>Please select catagory first</td>
        		        <td>
          <span style="width: 80px;display: block;">
          <a href="edit" class="btn btn-sm rounded bg-warning text-white edit_delete_style"><i class="fa fa-pencil"></i></a> &nbsp;
        <a href="catagory_delete.php?id=<?php echo $data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
        </span>
      </td>
        	</tr>
        </tbody>
    </table>

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

