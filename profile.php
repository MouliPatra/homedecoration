<?php
        session_start();
 ?>

<?php
      include('connect.php');
     function getProfileData(){
        global $con;

        $user_id=$_SESSION['userid'];
        $sql="SELECT * FROM connect2 WHERE id='".$user_id."'";
        $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
            $alldata=mysqli_fetch_assoc($query);
            return $alldata;
        }
       else{
        return false;
       }
     }
     ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assect/css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <title>profile</title>
<!------ Include the above in your HEAD tag ---------->

<?php 
$profiledata=getProfileData();

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                            <img src="<?php echo $profiledata['image']?>" height="200px" width="200px">
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
<!--                             <?php echo $profiledata['image']?> -->
                            <?php echo $profiledata['firstname'].' '.$profiledata['lastname']; ?></h4>
                        <small><cite title="San Francisco, USA"> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php echo $profiledata['email']; ?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><?php echo $profiledata['address'];?>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i><?php echo $profiledata['pincode'];?></p>
                          
                        <!-- Split button -->
                </div>
            </div>
        </div>
    </div>
</div>
  <a href="update_profile.php">update profile</a>
        <a href="user_delete.php" onclick="confirm('Are you sure to delete?');">delete profile</a>
</body>
</html>
