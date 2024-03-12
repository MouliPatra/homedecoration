<?php
include('header.php');
include('function.php');
global $con;
$new_id=$_POST['cart_id'];
$quantity=$_POST['quantity'];
$item_price=$_POST['item_price'];
// print_r($new_id);
// print_r($quantity);
// $quantity=$_POST['quantity'];
// $o_id=explode(',',$new_id);
  $user_id=$_SESSION['userid'];
foreach ($new_id as $key => $value) {
    $product_id=$new_id[$key];
     $quantity2=$quantity[$key];
     $item_price2=$item_price[$key];
     // echo "<pre>";
     // print_r($product_id);
     // echo "</pre>";
     // print_r($quantity2);
   $sql="UPDATE cart SET quantity='".$quantity2."',price='".$item_price2."' WHERE user_id='".$user_id."' AND id='".$product_id."'";
   $query=mysqli_query($con,$sql);
     echo "<pre>";
    print_r($query);
   }
   if($query){
   echo "<script>alert('Successful');window.location.href='checkout.php';</script>";
   }
   else{
   echo "<script>alert('Unsuccessful');window.location.href='checkout.php';</script>";
   }
?>