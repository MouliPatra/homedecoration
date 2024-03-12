<!-- <?php
  include('admin_header.php');
  include('admin_function.php');
 $id=$_GET['id'];
$data1=get_inner_product($id);
  ?>
  <!-- <link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css"> -->
  <div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">

  <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
          if(!empty($data1))
        {
        foreach ($data1 as $key => $inner_data) {
            
        ?>
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          
        ?>
        <td><img src="<?php echo '../'.$inner_data['img_name']?>" width="200px" height="100px"></td>
        <td>
    <a href="product_sub_image_delete.php?id=<?php echo $inner_data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
      </td>
        <?php 

          echo "</tr>";
        }
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

  
<?php include('dashboard_footer.php');?> -->