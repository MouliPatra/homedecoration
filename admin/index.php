
<!DOCTYPE html>
<html>
<head>
	<title>Admin_login</title>
	<link rel="stylesheet" type="text/css" href="../assect/css/admin2.css">
    <link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	  <link rel="stylesheet" href="../assect/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="../assect/css/owl.carousel.min.css">
	  <link rel="stylesheet" href="../assect/css/owl.theme.default.css">
</head>
<body>
	<div class="container-fluid">
<div class="Admin_login_part">
			<!--<img src="..\assect\Image\admin_login.jpeg" class="img-fluid">-->
<section class="vh-50" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="..\assect\Image\admin2.jpeg" alt="login form" class="img-fluid h-100 w-100" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login_admin.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
 				<img src="..\assect\Image\logo.svg">
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="username" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		</div>
	</div>
  <script src="../assect/js/jquery-3.6.4.min.js"></script>
  <script src="../assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="../text/javascript" src="assect/js/owl.carousel.js"></script>
</body>
</html>