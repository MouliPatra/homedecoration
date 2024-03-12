<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
</head>
<body>
<form action="employee_action.php" method="post">
	<input type="text" name="name" placeholder="Enter your name" id="e_name">
    <input type="email" name="email" placeholder="Enter your email" id="e_email">
    <input type="password" name="password" placeholder="Enter your password" id="e_pass">
    <input type="text" name="designation" placeholder="Enter your designation" id="e_des">
    <input type="text" name="date" placeholder="Enter your date of joining" id="e_date">
    <button type="submit" onclick="return checkvaliid();" name="submit">submit</button>
</form>

<script type="text/javascript">
	function checkvaliid(){
	let e_name=document.getElementById("e_name").value;
	let e_email=document.getElementById("e_email").value;
	let e_pass=document.getElementById("e_pass").value;
	let e_des=document.getElementById("e_des").value;
	let e_date=document.getElementById("e_date").value;
    if(e_name=='')
    {
    	alert ("Please enter a name");
    	return false;
    }
    if(e_email=='')
    {
    	alert ("Please enter a email");
    	return false;
    }
    if(e_pass=='')
    {
    	alert ("Please enter a password");
    	return false;
    }
    if(e_des=='')
    {
    	alert ("Please enter designation");
    	return false;
    }
    if(e_date=='')
    {
    	alert ("Please enter the date");
    	return false;
    }
else(e_name!='' && e_email!='' && e_pass!='' && e_des!='' && e_date!='')
 alert("Succssfully submitted");
return true;
}
</script>
</body>
</html>