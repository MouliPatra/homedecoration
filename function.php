<?php
	  include('connect.php');
	 function getAllslider(){
	 	global $con;
	 	$sql="SELECT * FROM slider WHERE status=1 ORDER BY id DESC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }

	 function getAllcatagory(){
	 	global $con;
	 	$sql="SELECT * FROM catagory";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$catagorydata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$catagorydata[]=$data;
        	}
        	return $catagorydata;
        }
       else{
       	return false;
       }
   	 }

	 function owl_carasoul(){
	 	global $con;
	 	$sql="SELECT * FROM owl_carasoul WHERE status=1 ORDER BY id DESC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }

	 function hotdeal(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='hot_deals' ORDER BY id DESC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }

	 function addsection(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='add' ORDER BY id DESC";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
     	return false;
       }
   	 }

	 function just_arrive(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='just_arrival' ORDER BY id DESC";
	 	    $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }


	 function discount(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='discount'";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }

	 function best_home(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='best_home'";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }

	 function bed(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='bed'";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }

	 function demo(){
	 	global $con;
	 	$sql="SELECT * FROM product WHERE pro_type='demo'";
	 	$query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
        	$alldata=array();
        	while($data=mysqli_fetch_assoc($query))
        	{
        		$alldata[]=$data;
        	}
        	return $alldata;
        }
       else{
       	return false;
       }
   	 }
    function get_inner_product($id){
    global $con;
    $sql="SELECT * FROM product WHERE id='".$id."'";
    $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
          $alldata=array();
          while($data=mysqli_fetch_assoc($query))
          {
            $alldata[]=$data;
          }
          return $alldata;
        }
       else{
        return false;
       }
     }
  function get_sub_product_image($id){
    global $con;
    $sql="SELECT product__moreimg.* FROM product__moreimg WHERE product__moreimg.product_id='".$id."'";
    $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
          $alldata=array();
          while($data=mysqli_fetch_assoc($query))
          {
            $alldata[]=$data;
          }
          return $alldata;
        }
       else{
        return false;
       }
     }

     function all_data($id){
    global $con;
    $sql="SELECT * FROM product WHERE id='".$id."'";
    $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
          $alldata=array();
          while($data=mysqli_fetch_assoc($query))
          {
            $alldata[]=$data;
          }
          return $alldata;
        }
       else{
        return false;
       }
     }
     
    
function add_to_cart_Delete($id){
  global $con;
  $sql="DELETE FROM cart WHERE product_id='".$id."'";
  $query=mysqli_query($con,$sql);
  return $query;
}
function buy_now_Delete($id){
  global $con;
  $sql="DELETE FROM order_first WHERE product_id='".$id."'";
  $query=mysqli_query($con,$sql);
  return $query;
}
function wishlist_Delete($id){
  global $con;
  $sql="DELETE FROM wishlist WHERE product_id='".$id."'";
  $query=mysqli_query($con,$sql);
  return $query;
}
function get_inner_data($id){
    global $con;
    $sql="SELECT product.* FROM product WHERE product.catagory='".$id."'";
    $query=mysqli_query($con,$sql);
        $row=mysqli_num_rows($query);
        if($row){
          $alldata=array();
          while($data=mysqli_fetch_assoc($query))
          {
            $alldata[]=$data;
          }
          return $alldata;
        }
       else{
        return false;
       }
     }
// function discount_inner_data($id){
//     global $con;
//     $sql="SELECT product.* FROM product WHERE product.discount='".$id."'";
//     $query=mysqli_query($con,$sql);
//         $row=mysqli_num_rows($query);
//         if($row){
//           $alldata=array();
//           while($data=mysqli_fetch_assoc($query))
//           {
//             $alldata[]=$data;
//           }
//           return $alldata;
//         }
//        else{
//         return false;
//        }
//      }
     function countAddToCart($u_id)
     {
      global $con;
      $sql="SELECT * FROM cart WHERE user_id = '".$u_id."'";
      $query=mysqli_query($con,$sql);
      $rows=mysqli_num_rows($query);
      if($rows)
      {
        return $rows;
      }
      else
      {
        return false;
      }
     }
    function get_address($user_id)
     {
      global $con;
      $sql="SELECT * FROM connect2 WHERE id='".$user_id."'";
      $query=mysqli_query($con,$sql);
      $rows=mysqli_num_rows($query);
      if($rows)
      {
        // return $rows;
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
      }
      else
      {
        return false;
      }
     }
    function get_user_address($user_id)
     {
      global $con;
      $sql="SELECT * FROM address WHERE user_id='".$user_id."'";
      $query=mysqli_query($con,$sql);
      $rows=mysqli_num_rows($query);
      if($rows)
      {
        // return $rows;
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
      }
      else
      {
        return false;
      }
     }
  function cancel_order($id){
  global $con;
  $f=1;
  $sql="UPDATE order_first SET cancel_status='".$f."' WHERE id='".$id."'";
  $query=mysqli_query($con,$sql);    
  return $query;
}
     
?>