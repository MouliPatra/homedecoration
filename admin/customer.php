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
           <h3><i class="fa fa-user-circle-o"></i> <b>Customer Details</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>F_name</th>
          <th>L_name</th>
          <th>email</th>
          <th>Address</th>
          <th>Pincode</th>
          <th>Phonenumber</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connect.php');
        global $con;
        $sql="SELECT * FROM connect2";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['firstname']."</td>";
          echo "<td>".$data['lastname']."</td>";
          echo "<td>".$data['email']."</td>";
          echo "<td>".$data['address']."</td>";
          echo "<td>".$data['pincode']."</td>";
          echo "<td>".$data['phonenumber']."</td>";
          
        ?>
        <td>
          <span style="width: 80px;display: block;">
          <button name="edit" class="btn btn-sm rounded bg-warning text-white edit_delete_style"><a href="#"><i class="fa fa-pencil"></i></a></button> &nbsp;
        <button name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style"><a href="#"><i class="fa fa-trash"></i></a></button>
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