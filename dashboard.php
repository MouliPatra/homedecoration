<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<style type="text/css">
	.container{
    width: 1000px;
   background-color:#e2e2e2;
   margin: 50px auto;
   border-radius: 20px 0px 20px 0px;
   padding: 20px;

    }
	</style>
</head>
<body>
<div class="container">
	<h1>welcome <?php echo $_SESSION['username']; ?></h1>
</div>
</body>
</html>