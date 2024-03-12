<!DOCTYPE html>
<html>
<head>
	<title>login</title>
  <link rel="stylesheet" type="text/css" href="assect/css/style.css">
  <link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assect/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assect/css/owl.theme.default.css">
</head>
<body>
	<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100  bg_login">
      <div class="col-md-6">
        <img src="assect\Image\home.jpg" alt="Phone image" width="90%" height="80%" class="mx-auto">
      </div>
      <div class="col-md-6">
        <form class="bg_login2" action="login_action.php" method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" name="username"/>
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
<!--               <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked /> -->
              <label class="form-check-label" for="form1Example3">
                <a href="check.php">Register.if you are not register</a>
               </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
                <p class="text-center">
                     <button type="submit" class="btn btn-primary" onclick="return check();">Submit</button>
                </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  function check()
  {
    $email=document.getElementById('form1Example13').value;
    $password=document.getElementById('form1Example3').value;
    if($email==''){
      alert('plese enter name of email');
      return false;
    }
      if($password==''){
      alert('plese enter password');
      return false;
    }

  }
</script>
  <script src="assect/js/jquery-3.6.4.min.js"></script>
  <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
  <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="assect/js/owl.carousel.js"></script>
</body>
</html> 