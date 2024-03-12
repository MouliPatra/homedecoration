<!DOCTYPE html>
<html>
<head>
	<title>address</title>
    <link rel="stylesheet" type="text/css" href="assect/css/style.css">
	<link rel="stylesheet" href="assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assect/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assect/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assect/css/owl.theme.default.css">
	<style type="text/css">
  .container{
width: 900px;
margin: 50px auto;
background-color: #fff;
padding: 15px;
border-radius: 5px;
	}
	</style>
</head>
<body>
	<div class="address">
		<div class="container">
			<form class="form_style">
				 <div class="form-group">
				    <label for="exampleInputName">Name</label>
				    <input type="text" class="form-control" id="exampleInputName" aria-describedby="NameHelp" placeholder="enter your name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPhone">Phone number</label>
				    <input type="number" class="form-control" id="exampleInputNumber" aria-describedby="PhoneHelp" placeholder="enter your phone number">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPin">Pin number</label>
				    <input type="number" class="form-control" id="exampleInputPin" aria-describedby="PinHelp" placeholder="Enter your pin">
				  </div>
				  	<div class="form-group">
				    <label for="exampleInputPin">Address Line 1</label>
				    <input type="text" class="form-control" id="exampleInputaddress1" aria-describedby="PinHelp" placeholder="Appertment/bulding/socity name">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPin">City</label>
				    <input type="text" class="form-control" id="exampleInputCity" aria-describedby="PinHelp" placeholder="Enter your City">
				  </div>
				  <div class="form-group">
				    <label for="exampleFormControlSelect1">Select state</label>
				    <select class="form-control" id="exampleFormControlSelect1">
				      <option>West Bengal<option>2</option>
				      <option>Oridsha</option>
				      <option>Karnataka</option>
				      <option>Kerala</option>
				    </select>
				  </div>
				  <button type="button" class="can_button">CANCEL</button>
				  <button type="button" class="save_button" onclick="return check();">SAVE</button>
			</form>
		</div>
	</div>
	<script type="text/javascript">
		function check()
	{
		$name=document.getElementById('exampleInputName').value;
		$phone=document.getElementById('exampleInputNumber').value;
		$pin=document.getElementById('exampleInputPin').value;
		$address1=document.getElementById('exampleInputaddress1').value;
		$city=document.getElementById('exampleInputCity').value;
		$state=document.getElementById('exampleFormControlSelect1').value;
		if($name==''){
			alert('plese enter name');
			return false;
		}
			if($phone==''){
			alert('plese enter phone number');
			return false;
		}
	if($pin==''){
			alert('plese enter pin');
			return false;
		}	
		if($address1==''){
			alert('plese enter address');
			return false;
		}
   if($city==''){
    alert('plese enter city');
			return false;
		}
	if($state==''){
			alert('plese enter city');
			return false;
		}


	}
	</script>
    <script src="assect/js/jquery-3.6.4.min.js"></script>
	<script src="assect/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
	<script src="assect/bootstrap-4.6.2-dist/js/boots
	trap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="assect/js/owl.carousel.js"></script>
	<!----animation link--->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>