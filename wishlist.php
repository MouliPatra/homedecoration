<!DOCTYPE html>
<html>
<head>
	<title>wishlist</title>
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
	global $con;
	$record_wish=array();
	$result="SELECT * FROM wishlist WHERE user_id='".$user_id."'";
	$query= mysqli_query($con,$result);
	$row=mysqli_num_rows($query);
	while($rec= mysqli_fetch_assoc($query))
	{
		$record_wish[]=$rec;

	}
?>
<?php
if($row>0){
?>
	<div class="wishlist">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-1">
					<div class="mt-5">
						<div class="wish">
						<a href="#">&nbsp;&nbsp;<i class="fa fa-heart-o" aria-hidden="true">My Wishlist &nbsp;&nbsp;</i><i class="fa fa-arrow-right" aria-hidden="true"></i>
						<p>Your Favourites All In One Place</p>
					</a>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="mt-5">
					<div class="wish-product">
					<div class="row">
	<?php
    foreach($record_wish as $data){
      $id=$data['product_id'];
      $wish_id=$data['id'];
    
    $record1=all_data($id);
    foreach($record1 as $wishlist)
      {
          ?>
          
						<div class="col-md-6">
							<div class="card position-relative">
					  <img src="<?php echo $wishlist['p_image'];?>"  class="img-fluid" class="card-img-top" alt="..."> <span class="whish_list2"> <i class="fa fa-heart" aria-hidden="true"></i></span>
					    <div class="card-body">
					    <p class="card-text"><span class="colour"><?php echo $wishlist['p_description'];?></span></p>
					    <i class="fa fa-star" aria-hidden="true"></i>
					    <i class="fa fa-star" aria-hidden="true"></i>
					    <i class="fa fa-star" aria-hidden="true"></i>
						  <i class="fa fa-star" aria-hidden="true"></i>
						<i class="fa fa-star-o text-muted" aria-hidden="true"></i><br>
					    
					<i class="fa fa-inr" aria-hidden="true"><?php echo $wishlist['actual_price'];?></i>&nbsp;&nbsp;<strike><?php echo $wishlist['discount_price'];?></strike>

					 <div class="botton-cen">
					    <p class="text-center pt-2">
					    <a href="#" ><input type="button" name="" value="Add to cart" class="button_style"></a>
					</p>
					  </div>
					  <a href="wishlist_remove.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure to Delete this product from wishlist?');"><center><button class="btn btn-danger text-center mt-2 mb-4"><b>REMOVE</b></button></center></a>
					  </div>
					 </div>
				</div>
					<?php
	    				}
	    			}
	    			}
	    			else{
	    				echo "<h2 class='text-center text-danger'>No Product in wishlist</h2>";
	    			}
	    					?>
			</div>
						    <div class="row mt-3">
					<div class="mx-auto">
						<a href="index.php">
						<button class="explore"> explore more product</button>
					</a>
					      </div>
				     </div>
			</div>
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
</body>
</html>