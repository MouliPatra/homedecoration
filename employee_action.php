<?php
include('connect.php');
global $con;
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$designation=$_POST['designation'];
$date=$_POST['date'];
$sql="INSERT INTO employee2(`name`,`email`,`password`,`designation`,`Date_of_joining`)VALUES('".$name."','".$email."','".$password."','".$designation."','".$date."')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo 'Succefully submitted';

}
else{
		echo 'Unsuccefull to submitted';
}
?>