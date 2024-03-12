<?php
include('admin_function.php');
$cat_id=$_POST['catagory_id'];
$data=getSubcategoriWithCatagory($cat_id);
if(!empty($data))
{
	echo'<option value="">Select Sub Catagory</option>';
	foreach($data as $val)
	{
		echo '<option value="'.$val['id'].'">'.$val['Sub_catagory_name'].'</option>';
	}
}
else{
	echo'<option value="">No Sub Catagory Found....</option>';
}
?> 