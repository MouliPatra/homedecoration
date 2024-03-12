<?php  
include("header.php");
include("function.php");
$user_id=$_SESSION['userid'];
$p_id=$_GET['p_id'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>address</title>
</head>
<body>
<section>
  <div class="container-fluid">
    <div class="row ">
     <div class="col-md-6 osk pb-5">
  <div class="form mx-auto bg-light">

    <div class="form1 mx-auto">
    <div class="row">
      <div class="col-md-12 ">
        <form action="address_add_action.php?u_id=<?php echo $user_id?>" method="post">
        <h3 class="mt-3 text-center"><b>ORDER NOW</b></h3>
        <input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput1" placeholder="Name" name="name">
        <div class="mb-3"></div>
        <input type="phone" class="form-control inputs p-4" id="exampleFormControlInput2" placeholder="Alternative number" name="phone">
        <div class="mb-3"></div>
        

      
       
        <h5><b>Address info</b></h5>
          <input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput3" placeholder="Flat No/Bulding Name" name="address1">
        <div class="mb-3"></div>
            <select class="form-select form-select-lg mb-3 p-1 border border-secondary" aria-label=".form-select-lg example " name="select_state" id="exampleFormControlInput4">
  <option selected>Select State</option>
  <option value="West Bengal">West Bengal</option>
  <option value="Kerala">Kerala</option>
  <option value="Bihar">Bihar</option>
</select>
<div class="mb-3"></div>
<h5><b>What3words.address(optional)</b></h5>
<input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput5" placeholder="optaional address" name="address2">
        <div class="mb-3"></div>
        <input type="radio" name="rad" id="opt" value="Home">
        <label for="opt">Home</label>
        <input type="radio" name="rad" id="opt" value="Office">
        <label for="ort">Office</label>
        <input type="radio" name="rad" id="opt" value="Custom">
        <label for="okt ">Custom</label>
         <div class="mb-3"></div>
         <button class="btn btn-primary  w-100 text-light p-3" type="submit" onclick="return check();">Save Address</button>
        <div class="mb-3"></div>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- <div class="col-md-6 box3">
  <div class="box mx-auto  bg-light mt-5 p-4">
    <h5 class="text-center text-secondary ">Price details</h5>
    <?php
      $data=all_data($p_id);
    foreach($data as $raid)
      {
          ?>
          <div class="total1 mt-2"><p>Price</p></div>
      <div class="total2 mt-2"><p><i class="fa fa-inr"><b><?php echo $raid['discount_price']?></b></i></p></div>
      <div class="total1 mt-1"><p>Delivary Charges</p></div>
      <div class="total2 mt-1"><p><i class="fa fa-inr"><b>30</b></i></p></div>
      <div class="total1 mt-3 "><p>Amount Payable</p></div>
      <div class="total2 mt-3"><p><i class="fa fa-inr"><?php echo $raid['discount_price']?>;<b></b></i></p></div>
      <?php
    }
      ?>
<!--       <button class="btn btn-primary  w-100 text-light p-3 mt-4">ORDER</button> -->
  </div>
<!--   <h3 class=" text-center mt-5 p-3">Choose to payament Option</h3>
          <a href="payment.php">
              <button class="new_address">Payment</button>
          </a>  -->
</div>
</div>
    </div>
  </div>
</section>
<script type="text/javascript">
  function check()
  {
    $name=document.getElementById('exampleFormControlInput1').value;
    $phone=document.getElementById('exampleFormControlInput2').value;
    $pin=document.getElementById('exampleFormControlInput3').value;
    $address1=document.getElementById('exampleFormControlInput4').value;
    $city=document.getElementById('exampleFormControlInput5').value;
    $opt=document.getElementById('opt').value;
    if($name==''){
      alert('plese enter name');
      return false;
    }
      if($phone==''){
      alert('plese enter phone number');
      return false;
    }
  if($pin==''){
      alert('plese enter pin');
      return false;
    } 
    if($address1==''){
      alert('plese enter address');
      return false;
    }
   if($city==''){
    alert('plese enter city');
      return false;
    }
  if($state==''){
      alert('plese enter city');
      return false;
    }


  }
  </script>
</script>
</body>
</html>
