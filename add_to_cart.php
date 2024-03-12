<!DOCTYPE html>
<html>
<head>
	<title>Add To Cart</title>
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
	$count=countAddToCart($user_id);
	global $con;
	$total_price=0;
	$after_discount_price=0;
	$saved_price=0;
	$record=array();
	$result="SELECT * FROM cart WHERE user_id='".$user_id."'";
	
	$query=mysqli_query($con,$result);
	$row=mysqli_num_rows($query);
	while($rec=mysqli_fetch_assoc($query))
	{
		$record[]=$rec;

	}
	$cart_to_buy=array();
?>
	<div class="container_fluid">
		<div class="add_nav text-center">
			<div class="mt-3">
		 <a class="navbar-brand" href="#"><img src="assect\Image\logo.svg"></a>
	    </div>
	        </div>
	    </div>
	    <?php
	    if($row>0){
	    ?>
	    <div class="container">
	    	<div class="row">
	    		<div class="col-md-6">
	    			<div class="cart_portion">
	    			<h4>Your Cart (<?php echo $count;?> Items)</h4>
	    			<div class="saved text-success text-center">You Saved ₹10,500 On This Order</div>
	    			<div class="mt-3">
	    			<div class="cart_picture mb-4">
	    			<div class="mt-3 ml-3">
	    				<div class="row">
	   <?php
    foreach($record as $key=> $data){
      $id=$data['product_id'];
      $cart_to_buy[]=$id;
      $card_id=$data['id'];
    
    $record1=all_data($id);
    foreach($record1 as $add_to_cart)
      {
          ?>
	    	<div class="col-md-5">
	    		<img src="<?php echo $add_to_cart['p_image'];?>" alt="mmm" class="img-fluid">
	    			<p class="text-secondary">Enter PIN Code for Delivery Details</p>
<a href="<?php echo isset($_SESSION['userid'])?'wishlist_action.php?p_id='.$add_to_cart['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
<button class="btn_cart text-center"><b>Move to whislist</b></p></button>
</a>
<a href="add_to_cart_remove.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure to Delete this Product from cart?');"><button class="btn_cart text-center mt-2 mb-4"><b>REMOVE</b></button></a>
</div>
<div class="col-md-7">
 <p><?php echo $add_to_cart['p_description'];?></p>
	<h5><span class="color_orange">By eCraftIndia</span></h5>
<p class="boeder_dotted">MRP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹<?php echo $add_to_cart['actual_price'];?></p>
<!-- <input type="text" name="item_price" readonly value="<?php echo $add_to_cart['actual_price'];?>" id="actual_amount1" style="border: none;margin-left: 35px; font-size: 25px;"> -->

<p class="boeder_dotted text-success">Retail Discount &nbsp;&nbsp;&nbsp;&nbsp;-<?php echo $add_to_cart['discount'];?>%</p>
 <form action="add_to_cart_table_action.php" method="post">
<input type="text" name="item_price[]" id="item_price<?php echo $key;?>" class="iprice item_price" readonly value="<?php echo $add_to_cart['discount_price'];?>" style="border: none;margin-left: 35px; font-size: 25px;">
  <input type="hidden" class="iprice text-center" id="iprice<?php echo $key; ?>" readonly value="<?php echo $add_to_cart['discount_price'];?>">
  <!-- <input type="number" name="" id="qty<?php echo $key; ?>" class="text-center iquentity mr-5" min="1" max="10" onchange="GetItemAmount(<?php echo $key; ?>);"> -->
<input type="hidden" name="cart_id[]" value="<?php echo $card_id?>">
  <select name="quantity[]" id="qty<?php echo $key;?>" onchange="GetItemAmount(<?php echo $key;?>);" onchange="total_Price(this.value);">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  </select>

</div>
 
	    		<?php
	    					$total_price=$total_price+$add_to_cart['actual_price'];
	    					 $after_discount_price=$after_discount_price+$add_to_cart['discount_price'];
	    					 $saved_price=$total_price-$after_discount_price;
	    					 $allItems=implode(',',$cart_to_buy);

	    				}
	    			}
	    		}
	    					
	    					else
	    						{
	    							echo "<h2 class='text-center text-danger mt-5'>Cart is empty</h2>";
	    						}?>
	    				</div>
	    			</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <?php
	$result="SELECT * FROM cart WHERE user_id='".$user_id."'";
	
	$query=mysqli_query($con,$result);
	$row=mysqli_num_rows($query);
	if($row>0){
	    ?>
			<div class="col-md-6">
				<div class="address_part"></div>
				<p><b>Delivering To</b></p>
                  <div class="mt-4">
                  <div class="total_amount">
                  	<h5 class="text-center pt-2">Cart Summary</h5>
                  	<p class="pl-2 boeder_dotted">Items In Cart<span class="align"><?php echo $count?></span></p>
                  	
<!--                      <p class="pl-2 boeder_dotted">Cart Total Price<span class="align"><?php echo $total_price?></span></p> -->
                     <h5 class="pl-2">You Pay<span class="align" id="total_amount"><?php echo $after_discount_price?></span></h5>
<!--                      <h5 class="pl-2 pt-2 text-success">You saved<span class="align"><?php echo $saved_price?></span></h5> -->

                  </div>


                                </div>
  <!--   <div class="float-end">
           <a href="add_to_cart_table_action.php?new_id=<?php echo $allItems?>"><button type="submit" class="btn btn-outline-primary">Process to check out</button></a>
              </div> -->
                       <button type="submit">submit</button>
</form>
              <?php
          }
              ?>
              </div>
	        </div>
	    </div>
	</div>
	<script src="assect/js/jquery-3.6.4.min.js"></script>
	<script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
	<script src="assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="assect/js/owl.carousel.js"></script>
	<!----animation link--->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
	function  GetItemAmount(sl){
		let iprice=parseInt($('#iprice'+sl).val());
		let qty=parseInt($('#qty'+sl).val());
		let total=iprice*qty;
		$('#item_price'+sl).val(total);

		let total_amount=0;
		$('.item_price').each(function(){
        total_amount+=Number($(this).val());
        });
        $('#total_amount').html(total_amount);
	}
</script>
<!-- <script type="text/javascript">
	var iprice=document.getElementsByClassName('iprice');
	var iquentity=document.getElementsByClassName('iquentity');
var itotal=document.getElementsByClassName('itotal');
	function subtotal(){
		for(i=0;i<iprice.length;i++)
		{
			itotal[i].innerText=(iprice[i].value)*(iquentity[i].value);
		}
	}
	subtotal();
</script> -->
</body>
</html>