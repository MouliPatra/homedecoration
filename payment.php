<?php  
include("header.php")
?>
<!DOCTYPE html>
<html>
<head>
  <title>payment_method</title>
</head>
<body>
  <?php
  $user_id=$_SESSION['userid'];
  $order_id=$_GET['order_id'];
  ?>
<div class="container">
  <h2 class="text-center text-info">Payment Option</h2>
  <div class="row">
    <div class="col-md-3 offset-5 mt-4">
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    UPI(Gpay/Phone Pay/Paytem)
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
        <input type="text" name="rad" id="ort" placeholder="+ Enter UPI Id">
  </div>
</div>
<!-- <a hre="payment_action.php?o_id=<?php echo $order_id?>"> -->
  <form action="payment_action.php" method="post">
    <input type="hidden" name="o_id" value="<?php echo $order_id?>">
    <input type="radio" name="cod"  value="COD">
Cash ON Deivary
<button type="submit" class="btn btn-success">confirm order</button>
  </form>
    </div>
  </div>
 
</div>
<script src="assect/js/jquery-3.6.4.min.js"></script>
  <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
</body>
</html>

