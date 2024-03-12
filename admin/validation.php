<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Javascript</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0
/dist/css/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
</head>
<body style="background:#dbeef4;">
<div class="container w-50">
<div class="w-100 border border-danger p-3 mt-5">
<form action="#" method="post">
<h1 class="text-center text-primary">Registration </h1>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>Name:</label>
<input type="text" name="" id="std_name"
placeholder="Enter Name..." class="form-control" onkeyup="validAlfabets();"
/>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Phone No:</label>
<input type="text" name="" id="std_phone"
placeholder="Enter Pnone Number..." class="form-control"
onkeyup="validphone(this);" maxlength="10"/>
<!-- pattern="[1-9]{1}[0-9]{9}" -->
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Course:</label>
<select name="" id="std_course" class="form-control">
<option value="">Select Course</option>
<option value="BCA">BCA</option>
<option value="BHM">BHM</option>
<option value="BBA in HM">BBA</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>University Roll no:</label>
<input type="text" name="" id="std_roll"
placeholder="Enter University Roll Number..." class="form-control"
onkeyup="validphone(this);" maxlength="11"/>
<!-- pattern="[1-9]{1}[0-9]{9}" -->
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Email ID:</label>
<input type="email" name="" id="std_email"
placeholder="Enter Email ID..." class="form-control" />
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Password:</label>
<input type="password" name="" id="std_pass"
placeholder="Enter Password..." class="form-control" />
</div>
</div>
<div class="col-md-12 text-center">
<input type="submit" name="submit" value="Save" class="btn
btn-primary" onclick="return checkValidate();" />
</div>
</div>
</form>
</div>
</div>
<script type="text/javascript">
// =========== Use for type only Alfabets and Space ==============
function validAlfabets(){
let std_name=document.getElementById("std_name").value;
std_name = std_name.replace(/[^A-Za-z ]/g, '');
document.getElementById("std_name").value=std_name.toUpperCase();
// /g for global checking
}
// ==== Use for Press only Number ====
function validphone(e){
let mob=e.value;
var phoneNum = mob.replace(/[^0-9]/g, '');
e.value=phoneNum;
// /g for global checking
}
function checkValidate(){
let std_name=document.getElementById("std_name").value;
let std_phone=document.getElementById("std_phone").value;
let std_course=document.getElementById("std_course").value;
let std_roll=document.getElementById("std_roll").value;
let std_email=document.getElementById("std_email").value;
let std_pass=document.getElementById("std_pass").value;
// ==== use the pattern we get the phone number first digit is 6-9
and other 9 digits are 0-9 =====
let regx = /^[6-9]{1}[0-9]{9}$/;
// ==== use the pattern we get the roll number first digit is 3 and
second digit is 4 and other 9 digits are 0-9 =====
let regx_roll = /^[3]{1}[4]{1}[0-9]{9}$/;
// it match the pattern and the pattern it match then return true
other wise return false;
let mail_regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zAZ0-9]{2,4})+$/;
// ^ :It denotes the start of the expression.
// $ :It denotes the end of the expression.
if(std_name=='')
{
alert("Please Enter Name....");
document.getElementById("std_name").focus();
return false;
}
if(std_phone=='')
{
alert("Please Enter Phone Number....");
document.getElementById("std_phone").focus();
return false;
}
if(std_phone.length<10){
alert("Please Enter Atleast 10 digits...");
document.getElementById("std_phone").focus();
return false;
}
if(!regx.test(std_phone))
{
alert("Please Enter Valid Phone Number....");
document.getElementById("std_phone").focus();
return false;
}
if(std_course=='')
{
alert("Please Select Course Name....");
document.getElementById("std_course").focus();
return false;
}
if(std_roll=='')
{
alert("Please Enter Univ. Roll Number....");
document.getElementById("std_roll").focus();
return false;
}
if(std_roll.length<11){
alert("Please Enter Atleast 11 digits...");
document.getElementById("std_roll").focus();
return false;
}
if(!regx_roll.test(std_roll))
{
alert("Please Enter Valid Univ. Roll Number....");
document.getElementById("std_roll").focus();
return false;
}
if(std_email=='')
{
alert("Please Enter Email ID....");
document.getElementById("std_email").focus();
return false;
}
if(!mail_regex.test(std_email))
{
alert("Please Enter Valid Email ID....");
document.getElementById("std_email").focus();
return false;
}
if(std_pass=='')
{
alert("Please Enter Password....");
document.getElementById("std_pass").focus();
return false;
}
if(std_name!='' && std_phone!='' && std_course!='' && std_roll!='' &&
std_email!='' && std_pass!=''){
alert("Successfully Submited.\nThank You");
return true;
}
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA
/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd
/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js
/bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"></script>
</body>
</html>