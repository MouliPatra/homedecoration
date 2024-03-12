<?php
include('connect.php');
// if(isset($_POST['insert_brand']))
// {
// 	$brand_title=$_POST['brand_title'];
// 	$query="SELECT * FROM  brand WHERE brand_title='$brand_title'";
// 	$result=mysqli_query($con,$query);
// 	$row=mysqli_num_rows($result);
// 	if($row>0)
// 	{
// 		echo "<script>alert('This brand is also present in database');</script>";
// 	}
  $brand_title=$_POST['brand_title'];
	 if(isset($_POST['insert_brand']))
 {
		$insert_query="INSERT INTO brand(`brand_title`) VALUES ('".$brand_title."')";
		$result_insert=mysqli_query($con,$insert_query);
		if($result_insert)
		{
			echo "<script>alert('This brand is inserted successfull in database');window.location.href='brands.php';</script>";
		}
}
?>