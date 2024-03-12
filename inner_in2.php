  <?php
// if(isset($_SESSION['email']))
// {
include('function.php');
$id=$_GET['id'];
$c_id=$_GET['c_id'];
$data1=get_inner_product($id);
$data2=get_sub_product_image($id);
$data3=get_inner_data($c_id);
  ?>  
<!DOCTYPE html>
<html>
<head>
	<title>inner_in</title>
	<link rel="stylesheet" type="text/css" href="assect/css/style.css">
	<link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assect/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assect/css/owl.theme.default.css">
</head>
<style type="text/css">
	body{
		background-color: #e2e2e2;
	}
	.container{
width: 1200px;
margin: 50px auto;
background-color: #fff;
padding: 15px;
border-radius: 5px;
	}
/*=========*/
.inner_product_slider .carousel-indicators{
  float: left;
  width: 100%;
  position: relative;
  display: block;
  height: auto;
}
 .inner_product_slider .carousel-indicators li{
    float: left;
    display: block;
    height: 60px;
    width: 60px;
    border: 1px solid #f00;
    margin-bottom: 10px;
  }
 .inner_product_slider .carousel-indicators li img.small_img{
      width: 100%;
      float: left;
      height: 100%;
  }
</style>
<body>
  <?php
  include('header.php');
  ?>	
  <div class="container">
    
		<div class="row">
      <div class="col-md-6">
        <!-- ============= -->
          <div class="row">
            <div class="col-md-3">
              <ul class="">
                <li data-target="" class="active"><img src="<?php echo $data1[0]['p_image'];?>" class="small_img" height="100px" width="100px"></li>

              <?php
          if(!empty($data2))
        {
        foreach ($data2 as $key => $inner_data2) {
            
        ?>
              
                <li data-target="" class="active"><img src="<?php echo $inner_data2['img_name'];?>" class="small_img" height="100px" width="100px"></li>
              
                        <?php
     }
 }
  ?>
  </ul>
            </div>
            <?php
          if(!empty($data1))
        {
        foreach ($data1 as $key => $inner_data) {
            
        ?>
            <div class="col-md-9">
              <img src="<?php echo $inner_data['p_image'];?>" class="d-block w-100 big_img" alt="..." id="myimage">
              <!-- 
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assect\Image\z11.avif" class="d-block w-100 big_img" alt="..." id="myimage">
                </div>
                <div class="carousel-item">
                  <img src="assect\Image\z111.avif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assect\Image\z112.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
   -->           <!--  <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </button>
            </div> -->
          </div>
  
  

        <!-- ============ -->
      </div>
    </div>
			
		<div class="col-md-6 col-sm-10 des">
		<div class="description mt-4">
  <div id="myresult" class="img-zoom-result"></div>
		<h5 class="text-secondary"><?php echo $inner_data['p_description'];?></h5>
		<h5><span class="color_orange">By eCraftIndia</span></h5>
		<div class="border_bottom"></div>
		    <i class="fa fa-star" aria-hidden="true"></i>
		    <i class="fa fa-star" aria-hidden="true"></i>
		    <i class="fa fa-star" aria-hidden="true"></i>
		    <i class="fa fa-star" aria-hidden="true"></i>
		    <i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
    <p class="text-secondary">MRP<span class="ml-5"><i  class="fa fa-inr" aria-hidden="true"><strike><?php echo $inner_data['actual_price'];?></strike></i></span></p>
        <p><span class="text-secondary">offer price</span><span class="ml-3"><i  class="fa fa-inr" aria-hidden="true"><?php echo $inner_data['discount'];?></i></span></p>
        <div class="border_bottom2"></div>
        <p><b class="text-success">Today’s Deal</b><h3 class="ml-3"><i class="fa fa-inr" aria-hidden="true"><!-- <?php echo $inner_data['discount_price'];?> -->
 <input type="text" name="discount_price" readonly value="<?php echo $inner_data['discount_price'];?>" style="border: none" >
        </i></h3></p>
        <p class="ml-3 text-success">Apply Coupon <b>MONSOON</b> to Avail Today’s Deal</p>
        <img src="assect\Image\inner_img.webp" class="img-fluid">
         <div class="border_bottom2"></div>
         <h5>Delivery & Assembly</h5>
<!--          <label class="text-secondary">Delivery to</label><br> -->
<!--          <div class="pin_design">
         <input type="number" name="" placeholder="Enter your pin" class="text-center">
       </div> -->
                <!-- this is quantity section -->
 <!--  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#"> 1</a>
    <a class="dropdown-item" href="#"> 2</a>
    <a class="dropdown-item" href="#"> 3</a>
  </div> -->

</div>
      <a href="<?php echo isset($_SESSION['userid'])?'add_to_cart_action.php?p_id='.$inner_data['id'].'&dis_price='.$inner_data['discount_price'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">

  <button class="buy_now mt-3 px-3" type="submit">Add to cart</button>
</a>
<a href="<?php echo isset($_SESSION['userid'])?'buy_now.php?p_id='.$inner_data['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
<button class="buy_now mt-3 px-3" name="buy_now">BUY NOW</button>
</a>
     </div>
		</div>
              <?php
     }
   }
  ?>

	</div>
	</div>
  <div class="mt-3">
  <div class="scroll-container">
    <?php
          if(!empty($data3))
        {
        foreach ($data3 as $key => $inner_data_catagory) {
            
        ?>
  <img src="<?php echo $inner_data_catagory['p_image'];?>" alt="Cinque Terre">
  <?php
}
}
  ?>
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
  function chreckLogin(){
    alert('Plaese Login...');
    window.location.href='login.php';
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".small_img").hover(function(){
    $(".big_img").attr('src',$(this).attr('src'));
    });
  });
  // $(document).ready(function(){
  //   $('.buy_now_button').click(function(){
  //     alert('login First');
  //   });
  // });
</script>

<script src="assect/js/zoomsl.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.big_img').imagezoomsl({
      zoomrange: [4,4]
    });
  });
</script>
</script>
</body>
</html