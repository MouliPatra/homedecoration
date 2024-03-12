
 <?php
  include('admin_header.php');
  ?>
  <!-- <link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css"> -->
  <div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
        	<h3><i class="fa fa-user-circle-o"></i> <b>Category List</b></h3>
        	<a href="catagory_add_form.php"class="btn btn-secondary">+Add<br> Catagory</a>
        	<button type="button" class="btn btn-primary">+Add Sub-<br>catagory</button>
        	<!-- <button type="button" class="btn btn-danger">+Edit/Delete Sub-<br>catagory</button>
        	<button type="button" class="btn btn-warning">+Add Brand-<br>Name</button>
        	<button type="button" class="btn btn-info">+Edit/Delete Sub-<br>Brand-Na</button> 
        	<button type="button" class="btn btn-success">+Edit/Delete Sub-<br>catagory</button> -->

  <div class="table-responsive mt-3">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>Catagory</th>
          <th>Catagory image</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connect.php');
        global $con;
        $sql="SELECT * FROM catagory";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['catagory_name']."</td>";
        ?>
        <td><img src="<?php echo '../'.$data['catagory_image']?>" width="150px" height="100px"></td>
        <td>
          <span style="width: 80px;display: block;">
          <a href="catagory_edit_form.php?id=<?php echo $data['id'];?>" name="edit" class="btn btn-sm rounded bg-warning text-white edit_delete_style"><i class="fa fa-pencil"></i></a> &nbsp;
        <a href="catagory_delete.php?id=<?php echo $data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
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
<!-- ==== end of Page Wrapper ======== -->
        </div>
        <!-- ==== End of main Class===== -->
    </div>

  
<?php include('dashboard_footer.php');?>