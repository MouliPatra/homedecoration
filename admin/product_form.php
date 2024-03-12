<?php
include('admin_header.php');
?>
<link rel="stylesheet" href="../assect/bootstrap-4.6.2-dist/css/bootstrap.min.css">
  <div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
	<h1 class="text-center">Insert Product</h1>
	<form action="product_action.php" method="post" enctype="multipart/form-data">
<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Product Title</label>
	<input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" required="required">
</div>
<div class="form-outline mb-4 w-50 mx-auto">
   <label class="form-label">Product description</label>

	<input type="text" name="product_des" id="product_des" class="form-control" placeholder="enter product description" required="required">
</div>
<div class="form-outline mb-4 w-50 mx-auto">
	<select name="catagory_id" id="product_catagory" class="form-control">
	<option value="">Select a catagory</option>

	<?php
	$catagory=getAllCatagory();
	foreach ($catagory as $value) {
	?>
		<option value="<?php echo $value['id']; ?>"><?php echo $value['catagory_name'];?></option>
	<?php
	}
	
	?>
	</select>
	</div>
	<div class="form-outline mb-4 w-50 mx-auto">
	<select name="product_subcatagory" id="product_subcatagory" class="form-control">
	?>
	</select>
	</div>

<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Product Type</label>
	<input type="text" name="product_type" id="product_type" class="form-control" placeholder="enter product type" required="required">
</div>
	
	<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Actual Price</label>
	<input type="text" name="Actual_price" id="Actual_price" class="form-control" onkeyup="discount_value();">
</div>
<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Discount(%)</label>
	<input type="text" name="discount" id="discount" class="form-control" onkeyup="discount_value();">
</div>


<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Discount Price</label>
	<input type="text" name="discount_price" id="discount_price" class="form-control">
</div>
<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Product Image</label>
	<input type="file" name="product_image" id="img_file1" onchange="" required="required">
</div>
<div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Product More Image</label>
	<input type="file" multiple="multiple" name="product_sub_image[]" id="img_file" onchange="readURLMoreImage(this);" required="required">
</div>
<div class="form-outline mb-4 w-50 mx-auto" id="ShowMoreImage"></div>
	<div class="form-outline mb-4 w-50 mx-auto">
	<input type="submit" name="submit" class="btn btn-info" value="insert Products" onclick="return check();">
</div>

	</form>
</div>
</div>
<script type="text/javascript">
	function check()
	{
		$name=document.getElementById('product_title').value;
		$des=document.getElementById('product_des').value;
		$catagory=document.getElementById('product_catagory').value;
		$sub_catagory=document.getElementById('product_subcatagory').value;
		$product_type=document.getElementById('product_type').value;
		$a_price=document.getElementById('Actual_price').value;
		$discount=document.getElementById('discount').value;
		$discount_price=document.getElementById('discount_price').value;
		$image=document.getElementById('img_file1').value;
		if($name==''){
			alert('plese enter name of product');
			return false;
		}
			if($des==''){
			alert('plese enter product description');
			return false;
		}
	if($catagory==''){
			alert('plese enter catagory');
			return false;
		}
	if($sub_catagory==''){
			alert('plese enter sub_catagory');
			return false;
		}	
		if($product_type==''){
			alert('plese enter product_type');
			return false;
		}

		if($a_price==''){
			alert('plese enter Actual_price');
			return false;
		}

		if($discount==''){
			alert('plese enter discount Price');
			return false;
		}
   if($image==''){
    alert('plese enter image');
			return false;
		}


	}
</script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('#product_catagory').on('change',function()
		{
			let cat_id=$(this).val();
		    	$.ajax(
		    	{
		    		url:'ajax_dashboard.php',
		    		type:'post',
		    		data:{catagory_id:cat_id},
		    		success:function(result){
		    			$("#product_subcatagory").html(result);
		    		}
    	});
    });
	});
	
</script>
<script type="text/javascript">
	function discount_value()
	{
		let a=parseInt($('#Actual_price').val());
		let b=parseInt($('#discount').val());
		if(isNaN(a)){
			a=0;
		}
		if(isNaN(b)){
			b=0;
		}
		let c=a*b/100;
		let d=a-c;
		let x=Math.round(d);
		$('#discount_price').val(x);
	}
</script>
<script type="text/javascript">
	function readURLMoreImage(input)
    {
      // $('#ShowMoreImage');
      let moreimg='No Image';
      if(input.files)
      {
        $('#ShowMoreImage').html('');
        var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
        
          // let file=$(this);
          var reader=new FileReader();
          reader.onload=function(e)
          {
            
            let img=$('<img />')
             .attr('src',e.target.result)
             .attr('style','margin-right:8px')
             .width(80)
             .height(80);
            // moreimg=moreimg+img;
            $('#ShowMoreImage').append(img);
          };
          reader.readAsDataURL(input.files[i]);
          // alert('Hi');
        }
       
        }
        else{
          $('#ShowMoreImage').html(moreimg);
        }


      }
</script>
<?php include('dashboard_footer.php');?>
