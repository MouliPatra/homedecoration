
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
          <th>Serial No</th>
<th>Product Price</th>
<th>Delivary address</th>
<th>quantity</th>
<th>order_date</th>
<th>Payment method</th>
<th>Product image</th>
<th>Order date</th>
<th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include('connect.php');
        global $con;
        $sql="SELECT order_first.*,address.*,product.*,payment.pay_method FROM order_first,address,product,payment WHERE product.id=order_first.product_id AND address.id=order_first.order_address AND order_first.id=payment.order_id";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
         $delivary_date=date('Y-m-d', strtotime($data['order_date'].'+7 day'));
          echo "<tr class='text-center'>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['amount_due']."</td>";
          echo "<td>".$data['address1'].', '.$data['phone'].', '.$data['state'].' ,'.$data['address2']."</td>";
          echo "<td>".$data['quantity']."</td>";
          echo "<td>".$data['order_date']."</td>";
          echo "<td>".$data['pay_method']."</td>";
        ?>
<td><img src="<?php echo '../'.$data['p_image']?>" width="150px" height="100px"></td>
<td><?php echo $delivary_date;?></td>
<td>
          <a href="inner_in2.php?id=<?php echo $data['id'];?>&c_id=<?php echo $data['catagory'];?>" name="edit" class="btn btn-sm rounded bg-warning text-white edit_delete_style"><i class="fa fa-eye"></i></a> &nbsp;
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