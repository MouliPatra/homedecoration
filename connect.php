
<?php
    $con;
    $server="localhost";
	$username="root";
	$password="";
	$db="connect";
	$con=mysqli_connect($server,$username,$password,$db);
	if(!$con)
	{

		die("Connection to this device is fail to".mysqli_connect_error());
	}
	?> 