	<?php
  include 'admin_function.php';
		session_start();
		if (isset($_SESSION['username'])) {
			$udata=explode(" ",$_SESSION['username']);
			$uname=$udata[0];
		}
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>AdminHeader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assect/css/admin2.css">
    <!-- <link rel="stylesheet" type="text/css" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../assect/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="assets/css/owlcarousle.css"> -->
  <link rel="stylesheet" type="text/css" href="">
  <!-- ====== Data table css ==== -->
  <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap.min.css">

  <script src="../assect/js/jquery-3.6.4.min.js"></script>
  
</head>
<body>
	 <!--===================
        Header
        =======================-->
        <header class="header">
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5" href="#"><img src="..\assect\Image\logo.svg" class="img-fluid"></a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown messages-menu">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success bg-success">10</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul class="dropdown-menu-over list-unstyled">
                      <li class="header-ul text-center">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu list-unstyled">
                          <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="" alt="User Image">
                            </div>
                            <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">See All Messages</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown notifications-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-warning bg-warning">10</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <ul class="dropdown-menu-over list-unstyled">
                    <li class="header-ul text-center">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu list-unstyled">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">View all</a></li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item dropdown  user-menu">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="http://via.placeholder.com/160x160" class="user-image" alt="User Image" >
                  <span class="hidden-xs"><b><?php echo (!isset($_SESSION['username']))?'Account':$uname; ?></b></span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  	<?php if (!isset($_SESSION['username'])) { ?>
    <a class="dropdown-item" href="#">Register</a>
    <a class="dropdown-item" href="index.php">Login</a>
<?php 
	} else{
		?>
    <a class="dropdown-item" href="#">Profile</a>
    <a class="dropdown-item" href="#">Password Change</a>
    <a class="dropdown-item" href="logout.php">Logout</a>
    <?php } ?>
  </div>              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="main">


        <aside class="sidebar left">
          <div>
            <div class="user-panel">
              <div class="pull-left image">
                <img src="http://via.placeholder.com/160x160" class="rounded-circle" alt="User Image">
              </div>
              <div class="pull-left info">
                <p>bootstrap develop</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="#" data-toggle="collapse" data-target="#dashboard" class="collapsed active" > <i class="fa fa-th-large"></i> <span class="nav-label"> Dashboards </span> <span class="fa fa-chevron-left pull-right"></span> </a>
              <ul class="sub-menu collapse" id="dashboard">
                <li class="active"><a href="#">Customer</a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </li>
<!--             <li> <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Product</span></a> </li> -->
 <li> <a href="#" data-toggle="collapse" data-target="#tables1" class="collapsed active" ><i class="fa fa-diamond"></i> <span class="nav-label">Product</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables1" >
            <li><a href="product_form.php">Product Add</a></li>
          </ul>
        </li>
            <!-- <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Catagoris</span> <span class="fa fa-chevron-left pull-right"></span> </a>
          </li> -->
           <li> <a href="#" data-toggle="collapse" data-target="#tables2" class="collapsed active" ><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Catagory</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables2">
            <li><a href="catagory_add_form.php">Catagory Add</a></li>
            <li><a href="catagory.php">Catagory</a></li>
           <li><a href="sub_catagory.php">Subcatagory</a></li>
          </ul>
        </li>
<!--           <li> <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Slider</span></a> </li>
          <li> -->
           <li> <a href="#" data-toggle="collapse" data-target="#tables4" class="collapsed active" ><i class="fa fa-laptop"></i> <span class="nav-label">Admin_slider</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables4">
           <li><a href="slider_add_form.php">Slider add from</a></li>
            <li><a href="admin_slider.php">Slider</a></li>
          </ul>
        </li>
                  <li> <a href="#" data-toggle="collapse" data-target="#tables5" class="collapsed active" ><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Admin_Owl Carasoul</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables5">
            <li><a href="admil_owl_carasoul.php">Owl carasoul</a></li>
          </ul>
        </li>
        <li>
           <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">Issues</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables" >
            <li><a href=""> Static Tables</a></li>
            <li><a href=""> Data Tables</a></li>
            <li><a href=""> Foo Tables</a></li>
            <li><a href=""> jqGrid</a></li>
          </ul>
        </li>
        <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-shopping-cart"></i> <span class="nav-label">Delivary District</span><span class="fa fa-chevron-left pull-right"></span></a>
      </li>
      <li> <a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Order</span> </a></li>
    </ul>
    </div>
    </aside>
