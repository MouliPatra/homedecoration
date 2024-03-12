<?php
  include('admin_header.php');
  ?>
  <!-- <link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css"> -->
  <div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">

  <div class="table-responsive mt-3">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspsacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>Catagory Name</th>
          <th>Product Name</th>
           <th>Product Description</th>
           <th>Actual Price</th>
           <th>Discount</th>
           <th>Discount Price</th>
           <th>Product type</th>
           <th>Product image</th>
           <th>action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connect.php');
        global $con;
        $sql="SELECT product.*,catagory.catagory_name FROM product,catagory WHERE product.catagory=catagory.id";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['catagory_name']."</td>";
          echo "<td>".$data['p_name']."</td>";
          echo "<td>".$data['p_description']."</td>";
          echo "<td>".$data['actual_price']."</td>";
          echo "<td>".$data['discount']."</td>";
          echo "<td>".$data['discount_price']."</td>";
          echo "<td>".$data['pro_type']."</td>";
        ?>
        <td><img src="<?php echo '../'.$data['p_image']?>" width="150px" height="100px"></td>
        <td>
          <span style="width: 80px;display: block;">
          <a href="product_edit_form.php?id=<?php echo $data['id'];?>" name="edit" class="btn btn-sm rounded bg-warning text-white edit_delete_style"><i class="fa fa-pencil"></i></a> &nbsp;
        <a href="product_delete.php?id=<?php echo $data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
        <a href="product_view.php?id=<?php echo $data['id'];?>" name="view" class="btn btn-sm rounded bg-warning text-white edit_delete_style mt-2"><i class="fa fa-eye"></i></a>

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