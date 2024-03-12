<!DOCTYPE html>
<html>
<head>
    <title>php file upload</title>
    <link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <style type="text/css">
        .container{
            width: 900px;
            margin: 50px auto;
        }
    </style>
</head>
<body>
<div class="container">
 <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-2 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="registration_actiont.php" method="post" enctype="multipart/form-data">
            <div class="row">
    <div class="mx-auto">
    <label for="p1"><img src="assect/image/a4.jpg" id="uploadFile" width="100px" height="100px" class="rounded-circle"  atl="image"></label>
        <input type="file" name="image" onchange="readURL(this);" id="p1" accept=".jpg,'jpeg,.png,.webp" class="d-none">
    </div>
</div>
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" class="form-control form-control-lg" name="firstName" />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" class="form-control form-control-lg" name="lastName" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="Address" name="address" />
                    <label for="Address" class="form-label">Address</label>
                  </div>

                </div>
            </div>
                  <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="Pincode" id="PinAddress" class="form-control form-control-lg" name="pincode" />
                    <label class="form-label" for="PinAddress">Pincode</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phoneNumber" class="form-control form-control-lg" name="phoneNumber" />
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                  </div>

                </div>
              </div>

 <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="emailAddress" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="PinAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="Password" id="PasswordNumber" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="Password">Password</label>
                  </div>

                </div>
              </div>



              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Submit" onclick="return check();" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>  
    </form>

</div>
<script type="text/javascript">
  function check()
  {
    $f_name=document.getElementById('firstName').value;
    $l_name=document.getElementById('lastName').value;
    $address=document.getElementById('Address').value;
    $pin=document.getElementById('PinAddress').value;
    $phoneNumber=document.getElementById('emailAddress').value;
    $emailAddress=document.getElementById('PasswordNumber').value;
    $image=document.getElementById('p1').value;
    if($f_name==''){
      alert('plese enter name of firstName');
      return false;
    }
      if($l_name==''){
      alert('plese enter lastName');
      return false;
    }
  if($address==''){
      alert('plese enter address');
      return false;
    }
  if($pin==''){
      alert('plese enter pin code');
      return false;
    } 
    if($phoneNumber==''){
      alert('plese enter phone Number');
      return false;
    }

    if($emailAddress==''){
      alert('plese enter email');
      return false;
    }
   if($image==''){
    alert('plese enter image');
      return false;
    }


  }
</script>
 <script src="assect/js/jquery-3.6.4.min.js"></script>
    <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="assect/bootstrap-4.6.2-dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
           function readURL(input){
                if(input.files && input.files[0]){
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#uploadFile')
                            .attr('src', e.target.result);
                            // .width(80)
                            // .height(80);
                    };
                }

                reader.readAsDataURL(input.files[0]);
            }
</script>
</body>
</html>