<!DOCTYPE html>
<html>
<head>
	<title>inner</title>
  <link rel="stylesheet" type="text/css" href="assect/css/style.css">
  <link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assect/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assect/css/owl.theme.default.css">
</head>
<body>
  <?php
  include('function.php');
$id=$_GET['id'];
$data1=get_inner_data($id);
  include('header.php');
  ?>
<section class="inner_page">
	<div class="container">
<div class="row">
    <?php
          if(!empty($data1))
        {
        foreach ($data1 as $key => $inner_data) {
            
        ?>
  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <a href="inner_in2.php?id=<?php echo $inner_data['id'];?>&c_id=<?php echo $inner_data['catagory'];?>">
  <img src="<?php echo $inner_data['p_image'];?>" class="img-fluid" class="card-img-top" alt="..."> 
  </a>    <a href="wishlist_action.php?p_id=<?php echo $inner_data['id'];?>&user_id=<?php echo $_SESSION['userid'];?>"> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span></a>
    <div class="card-body">
    <p class="card-text"><span class="colour"><?php echo $inner_data['p_description'];?></span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
	  <i class="fa fa-star" aria-hidden="true"></i>
	<i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true"><?php echo $inner_data['discount_price'];?></i>&nbsp;&nbsp;<strike><?php echo $inner_data['actual_price'];?></strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="add_to_cart_action.php?p_id=<?php echo $inner_data['id'];?> & user_id=<?php echo $_SESSION['userid'];?>"><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>

  </div>
    <?php
     }
 }
  ?>
<!--  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s14.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>   
  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\door1.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
   <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
   <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s12.jpg" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
</div>
<div class="mt-4">
<div class="row">
  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s2.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
 <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s14.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>   
  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\door1.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
   <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
   <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s12.jpg" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
</div>
</div>
<div class="mt-4">
<div class="row">
  <div class="col-md-12">
  <img src="assect\Image\mon.webp" class="img-fluid" width="100%">
</div>
</div>
</div>
<div class="mt-4">
<div class="row">
  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s2.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
 <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s14.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>   
  <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\door1.webp" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
   <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div>
   <div class="col-md-3 col-sm-6">
    <div class="card position-relative">
  <img src="assect\Image\s12.jpg" class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
    <div class="card-body">
    <p class="card-text"><span class="colour">Dream Boat Silver& Aluminium Showpiece</span></p>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
  <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    
<i class="fa fa-inr" aria-hidden="true">4667</i>&nbsp;&nbsp;<strike>6888</strike>

 <div class="botton-cen">
    <p class="text-center pt-2">
    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
</p>
  </div>
  </div>
 </div>
  </div> -->
</div>
</div>
</section>
  <script src="assect/js/jquery-3.6.4.min.js"></script>
  <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="assect/js/owl.carousel.js"></script>
</body>
</html>