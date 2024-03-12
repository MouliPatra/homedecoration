
<!DOCTYPE html>
	<html>
	<head>
		<title>Home decore</title>
	<link rel="stylesheet" type="text/css" href="assect/css/style.css">
	<link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assect/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assect/css/owl.theme.default.css">
	</head>
	<body>
	<div class="main">
	<?php
	include('header.php');
	include('function.php');
	?>
	<section>
		<div class="">
			<div class="catagory mt-3">
				<?php
				$catagorydata=getAllcatagory();
				?>
				<div class="row">
				<?php
		 		
				if(!empty($catagorydata))
				{
					foreach ($catagorydata as $key =>$catagory_item) {
						
				?>
<div class="col-1 ml-2">
<a href="<?php echo isset($_SESSION['userid'])?'inner.php?id='.$catagory_item['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)';?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
<img src="<?php echo $catagory_item['catagory_image'];?>" class="img-fluid cat_style"> 
</a>
<!-- </a> -->
<h5 class="text-center"><?php echo $catagory_item['catagory_name'];?></h5>
</div>

<?php
     }
 }
	?>
				</div>
			</div>
		</div>
	</section> 
	<section class="carasoul_section">
		<div class="">
		<div class="carasoul">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<?php
				$alldata=getAllslider();
				?>
			<ol class="carousel-indicators">
				<?php
				for($i=0;$i<sizeof($alldata);$i++){
				 ?>
			<li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i;?>" class="<?php echo $i==0?'active':'';?>"></li>
			<?php } ?>
		</ol>
		<div class="carousel-inner">
				<?php
				
				if(!empty($alldata))
				{
					foreach ($alldata as $key => $slider_item) {
						
				?>
				<div class="carousel-item <?php echo $key==0?'active':''; ?>">
                <a href=""><img src="<?php echo $slider_item['image'];?>" alt="" class="w-100"></a>
				<div class="carousel-caption d-none d-md-block">
				</div>
			</div>
			<?php
     }
 }
	?>
				</div>
		<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</button>
	</div>
		</div>
	</div>
	
	</section>
	<section class="extradeal_section">
		<div class="">
		<div class="extra_section mt-4">
			<a href="inner_in2.php"><img src="assect\Image\extra.gif" class="img-fluid w-100"></a>
	</div>
	</div>
	</section>
	<section class="hotdeal_section pt-3">
				<?php
				$hotdealdata=hotdeal();
				?>
			<div class="ml-5">
			<h3 class="deals_heading">Hot Deals</h3>
		</div>
		<div class="scroll-container2">
			<?php
				
			if(!empty($hotdealdata))
				{
				foreach ($hotdealdata as $key => $hot_item) {
						
				?>
				<span class="position-relative">
			<a href="inner_in2.php?id=<?php echo $hot_item['id'];?>&c_id=<?php echo $hot_item['catagory'];?>"><img src="<?php echo $hot_item['p_image'];?>" class="img-fluid" height="300px" width="300px">
				<a href="<?php echo isset($_SESSION['userid'])?'wishlist_action.php?p_id='.$hot_item['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
				<span class="whish_list position-absolute"><i class="fa fa-heart-o" aria-hidden="true"></i></span></a></a>
		     </span>
						<?php
     }
 }
	?>
			</div>
	</section>
	<section class="extradeal_section2">
				<?php
				$adddata=addsection();
				?>
		<div class="pt-4">
		<div class="row">
				<?php
				
			if(!empty($adddata))
				{
				foreach ($adddata as $key => $add_item) {
						
				?>
			<div class="col-6 pt-2">
			 <a href="#"> <img src="<?php echo $add_item['p_image'];?>" class="img-fluid w-100" height="300px" width="300px"></a>
			</div>
		<?php
     }
 }
	?>
	</div>
	</div>
	</section>

<!-- 	<section class="hotdeal_section pt-3">
			<div class="ml-5">
			<h3 class="deals_heading">Hot Deals</h3>
		</div>
			</section> -->
<section class="just_arrival my-4">
	<div>
			<?php
				$just_arrivedata=just_arrive();
				?>
		<h3 class="deals_heading">Just Arrival</h3>
		<div class="scroll-container3">
			<?php
				
			if(!empty($just_arrivedata))
				{
				foreach ($just_arrivedata as $key => $just_arrive) {
						
				?>
				<span class="position-relative">
			<a href="inner_in2.php?id=<?php echo $just_arrive['id'];?>&c_id=<?php echo $just_arrive['catagory'];?>"><img src="<?php echo $just_arrive['p_image'];?>" class="img-fluid" height="300px" width="300px">
	<a href="<?php echo isset($_SESSION['userid'])?'wishlist_action.php?p_id='.$just_arrive['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
				<span class="whish_list position-absolute"> <i class="fa fa-heart-o" aria-hidden="true"></i></span></a></a>
		</span>
						<?php
     }
 }
	?>
			</div>

		 </div>
	</section>
	<section class="discount">
			<?php
				$discountdata=discount();
				?>
		<div class="my-4">
			<h3 class="deals_heading">Shop By Discount</h3>
			<div class="row mt-3">
				<?php
			if(!empty($discountdata))
				{
				foreach ($discountdata as $key => $discount_data) {
						
				?>
			<div class="col-md-3 col-sm-6">
				<a href="inner_discount.php?id=<?php echo $discount_data['id'];?>&c_id=<?php echo $discount_data['catagory'];?>"><img src="<?php echo $discount_data['p_image'];?>" class="img-fluid"></a>
			</div>
	<?php
     }
 }
	?>
		</div>
	</div>
	</section>
	<section class="color_choose pt-3">
	<div class="">
	<div class="row">
			<div class="col-5">
				<div class="margin_first mt-3"></div>
			</div>
		<div class="col-2">
		<h5 class="text-center">Best Home Decore</h5>
		</div>
		 <div class="col-5">
				<div class="margin_first mt-3"></div>
			</div>
	</div>
				<?php
				$best_homedata=best_home();
				?>
		<div class="scroll-container4">
			<?php
				
			if(!empty($best_homedata))
				{
				foreach ($best_homedata as $key => $best_home) {
						
				?>
			<span class="position-relative">
			<a href="inner_in2.php?id=<?php echo $best_home['id'];?>&c_id=<?php echo $best_home['catagory'];?>"><img src="<?php echo $best_home['p_image'];?>" class="img-fluid" height="300px" width="300px">
	<a href="<?php echo isset($_SESSION['userid'])?'wishlist_action.php?p_id='.$best_home['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
				<span class="whish_list position-absolute"> <i class="fa fa-heart-o" aria-hidden="true"></i></span></a></a>
		</span>
						<?php
     }
 }
	?>
			</div>

	</div>
	</section>
	<section class="extradeal_section3 pt-4">
		<div class="row">
			<?php
				$best_beddata=bed();
				?>
		<div class="scroll-container5">
			<?php
				
			if(!empty($best_beddata))
				{
				foreach ($best_beddata as $key => $bed_data) {
						
				?>
			<span class="position-relative">
			<a href="inner_in2.php?id=<?php echo $bed_data['id'];?>&c_id=<?php echo $bed_data['catagory'];?>"><img src="<?php echo $bed_data['p_image'];?>" class="img-fluid" height="300px" width="300px">
	<a href="<?php echo isset($_SESSION['userid'])?'wishlist_action.php?p_id='.$bed_data['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
			<span class="whish_list position-absolute"> <i class="fa fa-heart-o" aria-hidden="true"></i></span></a></a>
		</span>
						<?php
 }
	}
	?>
		</div>
	</section>
	<section class="section_video">
		<div class="pt-4">
		<div class="row">
			<div class="col-md-6 offset-1">
				<div class="video_style">
				<h3>The art of gifting made special</h3>
				<p class="pt-3">Experience #PureJoy of Gifting with Pure Home + Living! Shop the best gifts curated by us for every occasion to make the day memorable and special. Discover the perfect presents for weddings, birthdays, anniversaries, house warming celebrations and more.#PureJoy of Gifting with Pure Home + Living! Shop the best gifts curated by us for every occasion to make the day memorable and special.</p>
				<a href="#"><button type="button" class="btn btn-dark btn_style">Shop Now</button></a>
			 </div>
		</div>
			<div class="col-5 mt-5">
				<video src="assect\Image\v.mp4" muted autoplay loop class="d-block w-100" class="img-fluid"></video>
		</div>
		</div>
		</div>
	</section>
 <section class="main_product">
 			<?php
				$alldata2=owl_carasoul();
				?>
			<div class="our_item_content">
			<div class="owl-carousel owl-theme" id="best-sale">
			<?php
				
				if(!empty($alldata2))
				{
					foreach ($alldata2 as $key => $owl_item) {
						
				?>

					<div class="box_effect">
					<div class="position-relative w-100 text-center">
						<a href="#">
					<img src="<?php echo $owl_item['image'];?>" class="img-fluid w-100">
				</a>
					<button type="button" class="add" value="add to Cart"><?php echo $owl_item['button_value'];?></button>
						<p class="text-center">
					<?php echo $owl_item['description'];?><br>
				</p>
				<i class="fa fa-inr text-left"><b><?php echo $owl_item['raid'];?></b></i>&nbsp;&nbsp;<strike><i class="fa fa-inr"></i>999</strike>
						
		</div>
	</div>
			<?php
     }
 }
	?>

	</section>
	<section class="owl_casoul">
		<div class="pt-3">
	<div class="">
		<h3 class="h3">shopping Demo-1</h3>
		<div class="row">
			<?php
				$best_demodata=demo();
				?>
		<div class="scroll-container5">
			<?php
				
			if(!empty($best_demodata))
				{
				foreach ($best_demodata as $key => $demo_data) {
						
				?>
				<span class="position-relative">
					<a href="inner_in2.php?id=<?php echo $demo_data['id'];?>&c_id=<?php echo $bed_data['catagory'];?>"><img src="<?php echo $demo_data['p_image'];?>" class="img-fluid" height="300px" width="300px"/>
	<a href="<?php echo isset($_SESSION['userid'])?'wishlist_action.php?p_id='.$bed_data['id'].'&user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>" onclick="<?php echo !isset($_SESSION['userid'])?"chreckLogin();":''; ?>">
				<span class="whish_list position-absolute"> <i class="fa fa-heart-o" aria-hidden="true"></i></span>
			</a>
		</a>
				</span>
			
						<?php
 }
	}
	?>


	</div>
<hr>
</div>
</section>
<section class="offer_zone">
	<div class="">
		<div class="mt-4">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<img src="assect\Image\bath.webp" class="img-fluid">
				</div>
				 <div class="col-md-6 col-sm-12">
					<img src="assect\Image\bath2.webp" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="propular_brand">
	<div class="">
		<div class="mt-4">
		<h3 class="deals_heading">Explore Popular Brands</h3>
		<div class="mt-3">
		<div class="row">
			<div class="col-md-2 col-sm-4">
				<img src="assect\Image\brand1.webp" class="img-fluid">
			</div>
			<div class="col-md-2 col-sm-4">
				<img src="assect\Image\brand2.webp" class="img-fluid">
			</div>
			<div class="col-md-2 col-sm-4">
				<img src="assect\Image\brand3.webp" class="img-fluid">
			</div>
			<div class="col-md-2 col-sm-4">
				<img src="assect\Image\brand4.webp" class="img-fluid">
			</div>
			<div class="col-md-2 col-sm-4">
				<img src="assect\Image\brand5.webp" class="img-fluid">
			</div>
			<div class="col-md-2 col-sm-4">
				<img src="assect\Image\brand6.webp" class="img-fluid">
			</div>
		</div>
	</div>
</div>
	</div>
</section>
<section class="description">
	<div class="mt-4">
	<div class="">
		<b><p>Beautify Your Home with Pepperfry Home Décor Items<br></p></b>
		<p>The literal meaning of home is a place where you live, a place where you belong, a place that provides you comfort and care. You long to get home no matter what you do and where you go. The comfort and the sense of security that a home brings to you is immense. After a tiring day, you only want to crash on your living room sofa and talk your heart out to your loved ones. It is where you know you will never be judged and always be protected.<br></p>
		<p>When you buy a home, you typically buy a house. It is a simple space with walls. A home is what you make of it. Since your home is your personal space, it should have your touch and reflect who you are. Decorating your home with home décor items is a great way to add a personal touch and make your home aesthetically appealing.<br></p>
		<p>At Pepperfry, you can buy find the perfect home décor items to decorate your home. Pepperfry has curated 32 product categories, offering something special for every home. You can explore various product categories, know about deals of the day, discover the latest trends, and find several leading brands on the Pepperfry website. You can use the filter and sorting tools to find home décor items matching your specifications.

</p>
<b><p>Reasons To Buy Home Décor Items<br></p></b>
<p><b>. Helps create your own space:</b>Decorating your home with décor items helps create a sense of belonging. For instance, you have recently moved to a new city and home. You feel homesick. You place a lamp gifted by your mom, along with her photo frame, next to your bed. This helps you create a space that truly belongs to you</p>
<p><b>. Adds a personal touch:</b>Decorating your home with décor items helps create a sense of belonging. For instance, you have recently moved to a new city and home. You feel homesick. You place a lamp gifted by your mom, along with her photo frame, next to your bed. This helps you create a space that truly belongs to you</p>
<p><b>. Makes your home appealing:</b>Decorating your home with décor items helps create a sense of belonging. For instance, you have recently moved to a new city and home. You feel homesick. You place a lamp gifted by your mom, along with her photo frame, next to your bed. This helps you create a space that truly belongs to you</p>
<p><b>Choosing The Perfect Home Décor Items<br></b></p>
<p>You should consider where you would like to place your home décor. This will assist you in choosing the right décor items. You should have reasonable space in your house for home décor placement. The placement area should also be well-lit to ensure that your décor items are placed systematically and stand out.</p>
<p><b>Keeping Up with Home Décor Items Maintenance<br></b></p>
<p>To ensure that your favourite home decoration items have the same charm, you should care from them properly. You should place them on a firm surface, having reasonable space. This will prevent your home décor items from falling and breaking.<br>
You should also regularly clean the homeécor items to prevent dust accumulation. You can find various furniture care products by Pepperfry that will help you care, maintain, and rejuvenate your home décor items and furniture. Check them out!
</p>
<b>Frequently Asked Questions (FAQs)<br>How to decorate your home in a low budget?</b>
<p>Buying home decorations items is great way to decorate your home. A few simple yet unique décor items can enhance your home’s appeal in an effortless manner. Plus, you do not have to spend fortune to decorate your home. At Pepperfry several stunning home décor pieces within your budget.</p>
	</div>
</div>
</section>
<section class="footer">
	<div class="pt-4">
	<div class="row">
		<div class="col-md-2 col-sm-4 offset-1">
			<b><p>Corporate</p></b>
			<ul>
				<li>About Us</li>
				<li>Corporate Governance</li>
				<li>Pepperfry in the News</li>
				<li>Careers</li>
			</ul>
		</div>
			<div class="col-md-2 col-sm-4 offset-1">
		 <b><p>Useful Links</p></b>
			<ul>
				<li>Explore Gift Cards</li>
				<li>Buy in Bulk</li>
				<li>Discover Our Brands</li>
				<li>Check Out Bonhomie, Our Blog</li>
				<li>Find a Studio</li>
			</ul>
		</div>
		<div class="col-md-2 col-sm-4 offset-1">
		<b><p>Partner With Us</p></b>
			<ul>
				<li>Sell on Pepperfry
				<li>Become a Franchisee</li>
				<li>Become Our Channel Partner</li>
				<li>Become Our Pep Homie</li>
				<li>Our Marketplace Policies</li>
			</ul>
		</div>
		<div class="col-md-2 col-sm-4 offset-1">
			<b><p>Need Help?</p></b>
			<ul>
				<li>FAQs</li>
				 <li>Policies</li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
<div class="row">
	<div class="col-md-6 col-sm-12 offset-1">
			 <b>We accept<br></b>
				<div class="mt-2">
					 <a href="#"><img src="assect\Image\net1.webp"></a>
						<a href="#"> <img src="assect\Image\net2.webp"></a>
						<a href="#"> <img src="assect\Image\net3.avif"></a>
						<a href="#"> <img src="assect\Image\net5.webp"></a>
			</div>
		</div>
		<div class="col-md-5 col-sm-8">
			 <b>Like What You See? Follow us Here<br></b>
			 <div class="mt-2">
					 <a href="#"><img src="assect\Image\post1.webp" class="img-fluid"></a>
					 <a href="#"><img src="assect\Image\post2.webp" class="img-fluid"></a>
					 <a href="#"><img src="assect\Image\post3.webp" class="img-fluid"></a>
					 <a href="#"><img src="assect\Image\post4.webp" class="img-fluid"></a>
					 <a href="#"><img src="assect\Image\post6.webp" class="img-fluid"></a>
					</div>
		</div>  
	</div>
	<div class="row margin_bottom pt-4">
	</div>
	<div class="row">
		<ul class="mx-auto flex mt-4">
			<li><a href="#"> Whitehat</a></li>
			<li class="pl-3"><a href="#"> Sitemap</a></li>
			<li class="pl-3"><a href="#"> Terms Of Use</a></li>
			<li class="pl-3"><a href="#"> Privacy Policy</a></li>
			<li class="pl-3"><a href="#"> Your Data and Security</a></li>
			<li class="pl-3"><a href="#"> Grievance Redressal</a></li>
           <i class="fa fa-arrow-circle-up" aria-hidden="true" onclick="topFunction()" id="myBtn" title="Go to top"></i>
		</ul>
	</div>
	<div class="row">
		<div class="mx-auto Copyright">
				<b><a href="#">© Copyright Pepperfry Limited</a></b>
		</div>
	</div>
</div>
</section>
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
		$('#best-sale').owlCarousel({
		loop:true,
		margin:15,
		dots:false,
		nav:true,
		autoplay:true,   
		smartSpeed: 2000, 
		autoplayTimeout:7000,
		responsive:{
				0:{
						items:1
				},
				600:{
						items:2
				},
				1000:{
						items:3
				}
		}
});
</script>
<script>
  let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
	</body>
</html>