<!DOCTYPE html>
<html>
<head>
	<title>order details</title>
	<link rel="stylesheet" type="text/css" href="assect/css/style.css">
	<link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assect/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assect/css/owl.theme.default.css">
</head>
<style type="text/css">
	table{
		margin: auto;
		margin-top: 40px;
	}
	th,td{
		border: 1px solid black;
		padding: 20px;
	}
</style>
<body>
<?php
include('header.php');
$user_id=$_GET['user_id'];
?>
<table align="centar">
	<thead>
	<tr class="text-center">
<th>Serial No</th>
<th>Product Price</th>
<th>Delivary address</th>
<th>quantity</th>
<th>order_date</th>
<!-- <th>Payment method</th> -->
<th>Product image</th>
<th>Delivary date</th>
<th>status</th>
<!-- <th>order status</th> -->
</tr>
</thead>
<tbody>
        <?php
        include('connect.php');
        global $con;
        $sql="SELECT order_first.*,order_first.id as 'order_id', address.*,product.p_image,payment.pay_method FROM order_first,address,product,payment WHERE product.id=order_first.product_id AND address.id=order_first.order_address AND order_first.id=payment.order_id AND order_first.user_id='".$user_id."' ORDER BY order_first.order_date ASC";
    // $sql="SELECT order_first.*,address.*,product.p_image FROM order_first,address,product WHERE product.id=order_first.product_id AND address.id=order_first.order_address AND order_first.user_id='".$user_id."'";
    // echo $sql;
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
        	// echo "<pre>";
        	// print_r($data);
          $delivary_date=date('Y-m-d', strtotime($data['order_date'].'+7 day'));
          echo "<tr class='text-center'>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['amount_due']."</td>";
          echo "<td>".$data['address1'].', '.$data['phone'].', '.$data['state'].' ,'.$data['address2']."</td>";
          echo "<td>".$data['quantity']."</td>";
          echo "<td>".$data['order_date']."</td>";
          // echo "<td>".$data['pay_method']."</td>";
        ?>
<td><img src="<?php echo $data['p_image']?>" width="150px" height="100px"></td>
<td><?php echo ($data['cancel_status']!=1)?$delivary_date:'-';?></td>
<?php
if($data['cancel_status']!=1){
if($delivary_date>date('Y-m-d')){ 
?>
<td><a href="cancel_order.php?id=<?php echo $data['order_id']?>"onclick="return confirm('Are you sure to Delete this Product?');"><button class="bg-danger text-white border-0 pt-2 pb-2 rounded px-1">Cancel order</button></a></td>
<?php
}
else{
  ?>
  <td>Delivary successfully</td> 
  <?php
}
}
else{
  echo "<td>Order Calceled.</td> ";
}
?>

           <?php 
          // echo "<td>".$data['order_status']."</td>";
          echo "</tr>";
        }
        ?>

      </tbody>
              <tfoot>
           <a href="index.php">
            <button class="explore mt-3"> explore more product</button>
          </a>
        </tfoot>
</table>
</body>
</html>