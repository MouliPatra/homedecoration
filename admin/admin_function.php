<?php 	
  include 'connect.php';
// === Get Single Catagory View Function ======
function getSinglecatagoryDetails($id){
	global $con;
	$sql="SELECT * FROM catagory WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	$numrows=mysqli_num_rows($query);
	if($numrows){
		return mysqli_fetch_assoc($query);
	}
	else{
		return false;
	}

}

// ======= Update Catagory Details ======

function updateCatagoryDetails($id,$cat_name,$cat_image){
	global $con;
	$sql="UPDATE catagory SET catagory_name='".$cat_name."',catagory_image='".$cat_image."' WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
		
	return $query;
}

// ============ Get All Catagory =============

function getAllCatagory(){
	global $con;
	$sql="SELECT * FROM catagory";
	$result=mysqli_query($con,$sql);
	$row=mysqli_num_rows($result);
	if($row){
		$alldata=array();
		while($data=mysqli_fetch_assoc($result)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else{
        return false;
       }
}
// === Get Single Product View Function ======
function getsingleProductDetails($id){
	global $con;
	$sql="SELECT * FROM product WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
	$numrows=mysqli_num_rows($query);
	if($numrows){
		return mysqli_fetch_assoc($query);
	}
	else{
		return false;
	}

}

// ======= Update Catagory Details ======//

function updateproductDetails($id,$pro_name,$pro_des,$pro_price,$pro_d,$pro_dis,$pro_type,$pro_image){
	global $con;
	$sql="UPDATE product SET p_name='".$pro_name."',p_description='".$pro_des."',actual_price='".$pro_price."',discount='".$pro_d."',discount_price='".$pro_dis."',pro_type='".$pro_type."',p_image='".$pro_image."' WHERE id='".$id."'";
	$query=mysqli_query($con,$sql);
		
	return $query;
}
function getSubcategoriWithCatagory($id)
{
    global $con;
    $record = array();
    $sql="SELECT * FROM sub_catagory WHERE status=1 AND catagory_name = '".$id."'";
    $query_one=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($query_one);
    while($rec = mysqli_fetch_array($query_one))
    {
        $record[]=$rec;
    }
    if($record>0)
    {
        return $record;
    }
    else{
        return false;
    } 
}
function updateproduct_Subimag_Details($id,$img_name){
	global $con;
	$sql="UPDATE product__moreimg SET img_name='".$img_name."' WHERE product_id	='".$id."'";
	$query=mysqli_query($con,$sql);
		
	return $query;
}
function getSubimage($id)
{
    global $con;
    $record = array();
    $sql="SELECT * FROM product__moreimg WHERE status=1 AND product_id='".$id."' ORDER BY id DESC";
    $query_one=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($query_one);
    while($rec = mysqli_fetch_array($query_one))
    {
        $record[]=$rec;
    }
    if($record>0)
    {
        return $record;
    }
    else{
        return false;
    } 
}
// ====== Catagory Delete ======//
//function sub_Image_Delete($id){
// 	global $con;
// 	$sql="DELETE product__moreimg FROM  WHERE id='".$id."'";
// 	$query=mysqli_query($con,$sql);
// 	return $query;

// }

?>
