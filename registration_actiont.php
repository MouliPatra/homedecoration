 <?php 
include('connect.php');
global $con;
$firstname=$_POST['firstName'];
$lastName=$_POST['lastName'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$phoneNumber=$_POST['phoneNumber'];
$email=$_POST['email'];
$password=$_POST['password'];
$image_name=$_FILES['image']['name'];
$img_tmp_name=$_FILES['image']['tmp_name'];
$img_location='assect/Image/'.time().$image_name;
$sql2="SELECT * FROM connect2 WHERE `email`='".$email."'";
$result2=mysqli_query($con,$sql2);
$row=mysqli_num_rows($result2);
if ($row>0) {
    echo "<script>alert('email already exist');</script>";
}
else{
$sql="INSERT INTO connect2(`firstname`,`lastName`,`address`,`pincode`,`phoneNumber`,`email`,`password`,`image`) VALUES('".$firstname."','".$lastName."','".$address."','".$pincode."','".$phoneNumber."','".$email."','".$password."','".$img_location."')";
$result=mysqli_query($con,$sql);
if($result){
    $insert_id=mysqli_insert_id($con);
    move_uploaded_file($img_tmp_name,$img_location);
    echo "<script> alert('account create successfully');</script>";
    header('location:index.php');
}
else{
        echo "<script> alert('Unsuccefull');</script>";
}
}
?>