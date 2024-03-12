	<?php
	session_start();
	if(isset($_SESSION['username'])) {
			$udata=explode(" ",$_SESSION['username']);
			$uname=$udata[0];
		}

	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" type="text/css" href="assect/css/style.css">
	<link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assect/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assect/css/owl.theme.default.css">
</head>
<body>
	<header>
	<div class="container-fluid">
		<div class="top w-100"><a href="<?php echo isset($_SESSION['userid'])?'order_details.php?user_id='.$_SESSION['userid']:'javascript:void(0)'; ?>"><p class="top_header text-white py-1 px-2 mt-4 ml-5">Order details</p></a>
	<div class="col-2 offset-9 pt-4 d-flex">	
       <div class="dropdown dropdown_style">
            <a href="javascript:void(0);" class="dropdown-toggle text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i><b><?php echo (!isset($_SESSION['userid']))?'Account':$uname; ?></b>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  	<?php if (!isset($_SESSION['username'])) { ?>
    <a class="dropdown-item" href="check.php">Register</a>
    <a class="dropdown-item" href="login.php">Login</a>
<?php 
	} else{
		?>
    <a class="dropdown-item" href="profile.php">Profile</a>
    <a class="dropdown-item" href="#">Password Change</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
    <?php } ?>
  </div>
</div>

	
	<a href="wishlist.php"><i class="fa fa-heart ml-2" aria-hidden="true"></i></a>
	<a href="add_to_cart.php"><i class="fa fa-cart-arrow-down ml-2" aria-hidden="true"></i></a>
		</div>
	</div>
		<nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="#"><img src="assect\Image\logo.svg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Lamps & light</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">sofa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Furnitere</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>

			</form>
	 
		</div>
	</nav>
	</div>
	</header>
</body>
 