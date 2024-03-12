<?php
  include('admin_header.php');
  ?>
  <!-- <link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css"> -->
  <div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
        	<h3><i class="fa fa-user-circle-o"></i> <b>Subcategory_llist</b></h3>
  <div class="table-responsive mt-3">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>catagory_name</th>
          <th>sub_Catagory</th>
          <th>status</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connect.php');
        global $con;
        $sql="SELECT sub_catagory.*,catagory.catagory_name FROM sub_catagory,catagory WHERE sub_catagory.catagory_name=catagory.id";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['catagory_name']."</td>";
          echo "<td>".$data['Sub_catagory_name']."</td>";
          echo "<td>".$data['status']."</td>";
        ?>
        <td>
          <span style="width: 80px;display: block;">
          <a href="catagory_edit_form.php?id=<?php echo $data['id'];?>" name="edit" class="btn btn-sm rounded bg-warning text-white edit_delete_style"><i class="fa fa-pencil"></i></a> &nbsp;
        <a href="subcatagory_delete.php?id=<?php echo $data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
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