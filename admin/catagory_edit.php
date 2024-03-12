
 <?php
include 'admin_function.php';

$id=$_POST['cat_id'];
$cat_name=$_POST['Catagory_name'];
$img_name=$_FILES['Catagory_image_insert']['name'];
$img_tmp_nmae=$_FILES['Catagory_image_insert']['tmp_name'];
$image_location='assect/Image/catagory/'.time().$img_name;
$data=updateCatagoryDetails($id,$cat_name,$image_location);
if($data)
{
	move_uploaded_file($img_tmp_nmae,'../'.$image_location);
	echo "<script>alert('Catagory edit successfully');window.location.href='catagory.php';</script>";
}
else{
	echo"<script>alert('Catagory edit  Unsuccessful.');window.location.href='catagory.php';</script>";

}
?>

</body>
</html>