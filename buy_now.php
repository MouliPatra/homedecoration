<!DOCTYPE html>
<html>
<head>
	<title>Buy Now</title>
	<link rel="stylesheet" type="text/css" href="assect/css/style.css">
	<link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assect/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assect/css/owl.theme.default.css">
</head>
<body>
  <?php
	include('header.php');
	include('function.php');
	$user_id=$_SESSION['userid'];
	$id=$_GET['p_id'];
	global $con;
	$total_price=0;
	$after_discount_price=0;
	$saved_price=0;
	$record=array();
	$result="SELECT * FROM product WHERE `id`='".$id."'";
	$query=mysqli_query($con,$result);
	while($rec=mysqli_fetch_assoc($query))
	{
		$record[]=$rec;

	}
?>
<form action="order_action.php" method="post">
	<div class="container_fluid">
		<div class="add_nav text-center">
			<div class="mt-3">
		 <a class="navbar-brand" href="#"><img src="assect\Image\logo.svg"></a>
	    </div>
	        </div>
	    </div>
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-6">
	    			<div class="cart_portion">

	    			<div class="mt-3">
	    			<div class="cart_picture mb-4">
	    			<div class="mt-3 ml-3">
	<div class="row">
	  <?php
    foreach($record as $data){
      $product_id=$data['id'];
      // $order_id=$data['id'];
    
    $record1=all_data($id);
    foreach($record1 as $buy_now1)
      {
          ?>
       <div class="col-md-5">
       	<input type="hidden" name="p_id" value="<?php echo $buy_now1['id']?>;">
<img src="<?php echo $buy_now1['p_image'];?>" class="img-fluid">
<p class="text-secondary">Enter PIN Code for Delivery Details</p>
  <select name="quantity" onchange="total_Price(this.value);">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  </select>
	    					 <!-- <a href="order_action.php?p_id=<?php echo $buy_now1['id'];?>&user_id=<?php echo $_SESSION['userid'];?>&price=<?php echo $buy_now1['discount_price'];?>"> -->
	    						<button class="btn_cart text-center mt-3" type="submit" onclick="return check_address();"><b>Continue</b></p></button>
	    					<!-- </a> -->
<a href="buy_now_remove.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure to Delete this Product from buy now?');"><button class="btn_cart text-center mt-2 mb-4"><b>REMOVE</b></button></a>
<!--<button class="btn_cart text-center mt-2 mb-4"><b>Delete</b></p></button> -->
	    					</div>
	    					<div class="col-md-7">
	    						<p><?php echo $buy_now1['p_description'];?></p>
	    						<h5><span class="color_orange">By eCraftIndia</span></h5>
	    						<p class="boeder_dotted">MRP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹<?php echo $buy_now1['actual_price'];?></p>
	    						<p class="boeder_dotted text-success">Retail Discount &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $buy_now1['discount'];?></p>
	    						<p class="boeder_dotted">ITEM PRICE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹<!-- <?php echo $buy_now1['discount_price']; ?> -->
<input type="text" readonly 
value="<?php echo $buy_now1['discount_price'];?>" class="total_amount2" style="border: none">	  </p>
	    					</div>

	    					<?php
	    				}
	    			}
	    					?>
	    				</div>
	    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <?php
	    $address_data=get_address($user_id);
	    ?>
			<div class="col-md-6">

                  <div class="mt-4">
                  <div class="total_amount">
                  	<h5 class="text-center pt-2">Order Summary</h5>
                  	<div class="address_part"></div>
				<p><b>Delivering To
<!-- 				<?php
				
			if(!empty($address_data))
				{
				foreach ($address_data as $key => $add_data) {	
				?>
				<h6><input type="radio" name="user_address" value="<?php echo $user_add_data['address'];?>"><?php echo $add_data['firstname'].' ,'.$add_data['lastname'].' ,'.$add_data['address'].', '.$add_data['pincode'];?></h6>

<?php
     }
 }
	?> -->
	<?php 
$user_address=get_user_address($user_id);
	?>
		<?php
				
			if(!empty($user_address))
				{
				foreach ($user_address as $key => $user_add_data) {	
				?>
				<h6><input type="radio" name="user_address" id="user_address" value="<?php echo $user_add_data['id'];?>"> <?php echo $user_add_data['name'].' ,'.$user_add_data['phone'].' ,'.$user_add_data['address1'].', '.$user_add_data['state'].', '.$user_add_data['address2'].', '.$user_add_data['type_address'];?></h6>

<!-- 		<?php echo (!isset($add_data['address']))?'Plese give address':$add_data['address'];?>
			<h3><?php echo $add_data['pincode'];?></h3> -->
<?php
     }
 }
	?>
	<a href="address2.php?user_id=<?php echo $user_id;?>& p_id=<?php echo $id;?>">Add new address</a>
				</b></p>
                     <h3 class="pl-2">You Pay</h3>
                     <input type="text" name="item_price" readonly value="<?php echo $buy_now1['discount_price'];?>" id="total_amount1" style="border: none;margin-left: 35px; font-size: 25px;">

         

                  </div>
                   <a href="payment.php?p_id=<?php echo $id?>">
              <button class="new_address">Payment</button>
          </a> 
              </div>
              </div>
	        </div>
	</div>
</form>
    <script src="assect/js/jquery-3.6.4.min.js"></script>
	<script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
	<script src="assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="assect/js/owl.carousel.js"></script>
	<!----animation link--->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript">

  function total_Price(val){
      <?php
          if(!empty($record1))
        {
        foreach ($record1 as $key => $buy_now1) {
            
        ?>
var t=val*<?php echo $buy_now1['discount_price'];?>;
<?php
}
}
?>
document.getElementById("total_amount1").value=t;
  }
</script>
<script type="text/javascript">
	function check_address()
	{
		$user_address=document.getElementById("user_address").value;
		if($user_address==''){
			alert('Please give the address');
			return false;
		}
	}
</script>
</body>
</html>