<?php
include('admin_header.php');
?>

<!-- ======== End Sidebar ====== -->
<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
            	<a href="customer.php">
                <div class="col-sm-4 col-md-4" id="content">
                 <div class="card bg-warning well" style="width: 18rem; height: 150px;">
                    <h2 class="text-white mt-4 ml-4">10&nbsp;&nbsp;
                	<i class="fa fa-users" aria-hidden="true"></i><br>
                	CUSTOMER</h2>
                    </div>
                </div>
            </a>
                <a href="product.php">
                <div class="col-sm-4 col-md-4 well" id="content">
                  <div class="card bg-info" style="width: 18rem; height: 150px;">
                     <h2 class="text-white mt-4 ml-4">10&nbsp;&nbsp;
                	<i class="fa fa-product-hunt" aria-hidden="true"></i><br>
                	PRODUCT</h2>
                    </div>
                </div>
            </a>
              <!-- <div class="override text-white">
			</div> -->
                <a href="#">
                <div class="col-sm-4 col-md-4 well" id="content">
                  <div class="card bg-success" style="width: 18rem; height: 150px;">
                  	<h2 class="text-white mt-4 ml-4">10&nbsp;&nbsp;
                	<i class="fa fa-sliders" aria-hidden="true"></i><br>
                	DISTRICT</h2>
                    </div>
                </div>
            </a>
            <!-- <a href="#">
                <div class="col-sm-4 col-md-4 mt-5" id="content">
                 <div class="card bg-warning well" style="width: 18rem; height: 150px;">
                    <h2 class="text-white">10
                	<i class="fa fa-users" aria-hidden="true"></i><br>
                	CUSTOMER</h2>
                    </div>
                </div>
            </a>
                <a href="#">
                <div class="col-sm-4 col-md-4 well mt-5" id="content">
                  <div class="card bg-info" style="width: 18rem; height: 150px;">
                     <h2 class="text-white">52
                	<i class="fa fa-product-hunt" aria-hidden="true"></i><br>
                	PRODUCT</h2>
                    </div>
                </div>
            </a>
                <a href="#">
                <div class="col-sm-4 col-md-4 well mt-5" id="content">
                  <div class="card bg-success" style="width: 18rem; height: 150px;">
                  	<h2 class="text-white">10
                	<i class="fa fa-sliders" aria-hidden="true"></i><br>
                	CUSTOMER</h2>
                    </div>
                </div>
            </a> -->
<!--             <a href="#">
                <div class="col-sm-4 col-md-4 well mt-5" id="content">
                  <div class="card" style="width: 18rem; height: 150px; background-color: black;">
                  	<h2 class="text-white mt-4 ml-4">10 &nbsp;&nbsp;
                	<i class="fa fa-bug" aria-hidden="true"></i><br>
                	ISSUE</h2>
                    </div>
                </div>
            </a> -->
                <!-- <a href="#">
                <div class="col-sm-4 col-md-4 well mt-5" id="content">
                  <div class="card bg-success" style="width: 18rem; height: 150px;">
                  	<h2 class="text-white mt-4 ml-4">10&nbsp;&nbsp;
                	<i class="fa fa-map-marker" aria-hidden="true"></i><br>
                	DISTRICT</h2>
                    </div>
                </div>
            </a> -->
          <a href="user_order.php">
                <div class="col-sm-4 col-md-4 well mt-5" id="content">
                  <div class="card bg-info" style="width: 18rem; height: 150px;">
                  	<h2 class="text-white mt-4 ml-4">10&nbsp;&nbsp;
                	<i class="fa fa-shopping-cart" aria-hidden="true"></i><br>
                	ORDER</h2>
                    </div>
                </div>
            </a>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <?php
    include('dashboard_footer.php');
    ?>
<!--   
  <script src="../assect/js/jquery-3.6.4.min.js"></script>
  <script src="../assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
   $('.button-left').click(function(){
       $('.sidebar').toggleClass('fliph');
       if($('.sidebar').hasClass("fliph")){
       		$('#page-wrapper').css('width','calc(100% - 42px)');
       }
       else{
       		$('#page-wrapper').css('width','calc(100% - 220px)');
       }
       	
   });
     
});
  </script> -->
</body>
</html>