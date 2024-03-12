<!DOCTYPE html>
<html>
<head>
	<title>Customer</title>
  <style type="text/css">
  .edit_delete_style i{
 text-decoration: none;
 color: white;
    }

</style>
</head>
<body>
  <?php
  include('admin_header.php');
  ?>
<!-- ======== End Sidebar ====== -->
<div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
            <!-- Page Heading -->
           <h3><i class="fa fa-user-circle-o"></i> <b>Owl_Carasoul Details</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>status</th>
          <th>title</th>
          <td>button_value</td>
          <td>description</td>
          <td>raid</td>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM owl_carasoul";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['status']."</td>";
          echo "<td>".$data['title']."</td>";
          echo "<td>".$data['button_value']."</td>";
          echo "<td>".$data['description']."</td>";
          echo "<td>".$data['raid']."</td>";
          
        ?>
        <td><img src="<?php echo '../'.$data['image']?>" width="250px" height="100px"></td>
        <td>
          <span style="width: 80px;display: block;">
         <a href="carasoul_delete.php?id=<?php echo $data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this carasoul image?');"><i class="fa fa-trash"></i></a>
        </span>
      </td>
        <?php 

          echo "</tr>";
        }
        ?>

      </tbody>
</table>
</div>

</div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
<?php
include('dashboard_footer.php');
?>

</script>
</body>
</html>