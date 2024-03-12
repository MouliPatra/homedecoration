<?php
include('header.php');
include('function.php');
  $after_discount_price=0;
// $new_id=$_GET['new_id'];
// $o_id=explode(',',$new_id);
$user_id=$_SESSION['userid'];
global $con;
  $sql="SELECT cart.*,product.* FROM cart,product WHERE cart.product_id=product.id";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);
while($rec=mysqli_fetch_assoc($query))
  {
    $record[]=$rec;

  }
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="cart_buy_now.php" method="post">
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
              <?php
    foreach($record as $key=> $checkout_data){
    //   $id=$data['product_id'];
    //   $record1=all_data($id);
    // foreach($record1 as $checkout_data)
    //   {
              ?>
  <div class="row">
       <div class="col-md-5">
        <input type="hidden" name="p_id[]" value="<?php echo $checkout_data['id']?>;">
<img src="<?php echo $checkout_data['p_image'];?>" class="img-fluid">
<p class="text-secondary">Enter PIN Code for Delivery Details</p>
<!--   <select name="quantity" onchange="total_Price(this.value);">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  </select> -->
<a href="add_to_cart_remove.php?id=<?php echo $product_id;?>" onclick="return confirm('Are you sure to Delete this Product from chekout?');"><button class="btn_cart text-center mt-2 mb-4"><b>REMOVE</b></button></a>
<!--<button class="btn_cart text-center mt-2 mb-4"><b>Delete</b></p></button> --></div>
                <div class="col-md-7">
                  <p><?php echo $checkout_data['p_description'];?></p>
                  <h5><span class="color_orange">By eCraftIndia</span></h5>
                  <p class="boeder_dotted">MRP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹<?php echo $checkout_data['actual_price'];?></p>
                  <p class="boeder_dotted text-success">Quantity
                    <input type="text" name="quantity[]" readonly value="<?php echo $checkout_data['quantity']?>"></p>
                  <p class="boeder_dotted">ITEM PRICE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹<!-- <?php echo $buy_now1['discount_price']; ?> -->
<!--                      <input type="text" readonly 
                     value="<?php echo $buy_now1['discount_price'];?>" id="total_amount1" style="border: none"> -->
<!-- <input type="text" name="item_price" id="item_price<?php echo $key; ?>" class="iprice item_price" readonly value="<?php echo $checkout_data['price'];?>"> -->
<input type="text" name="item_price[]" readonly value="<?php echo $checkout_data['price'];?>">

                  </p>
<!-- <select name="quantity" id="qty<?php echo $key;?>" onchange="GetItemAmount(<?php echo $key;?>);" onchange="total_Price(this.value);">
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
 -->                </div>


                <?php
                      $after_discount_price=$after_discount_price+$checkout_data['price'];
                    }
                ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="col-md-6">
      <?php
      $address_data=get_address($user_id);
      ?>
                  <div class="mt-4">
                  <div class="total_amount">
                    <h5 class="text-center pt-2">Order Summary</h5>
                    <div class="address_part"></div>
        <p><b>Delivering To
<!--        <?php
        
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

<!--    <?php echo (!isset($add_data['address']))?'Plese give address':$add_data['address'];?>
      <h3><?php echo $add_data['pincode'];?></h3> -->
<?php
     }
 }
  ?>
  <a href="address2.php?user_id=<?php echo $user_id;?>& p_id=<?php echo $checkout_data['id']?>">Add new address</a>
        </b></p>
 <h5 class="pl-2">You Pay<span class="align" id="total_amount"><?php echo $after_discount_price?></span></h5>
<!--  
<input type="text" name="item_price" readonly value="<?php echo $d_p;?>" style="border: none;margin-left: 35px; font-size: 25px;"> -->
         

                  </div>
<!--                    <a href="payment.php?p_id=<?php echo $id?>"> -->
              <button class="new_address" type="submit">Payment</button> 
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
<!--   <script type="text/javascript">

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
</script> -->
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
</body>
</html>