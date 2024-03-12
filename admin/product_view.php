<?php
  include('admin_header.php');
  // include('admin_function.php');
  $id=$_GET['id'];
$data1=getSubimage($id);

  ?>
  <div id="page-wrapper">
        <div class="container-fluid text-white" style="background-color: #0D0730">
 <form action="product_sub_image_add_and_edit.php" method="post" enctype="multipart/form-data"> -->
      <!-- ?id=<?php echo $sub_item['id'];?> -->

    <div class="form-group">
    	<center><h4 class="pt-3">--Give Product Sub Image--</h4></center>
      <div class="form-outline mb-4 w-50 mx-auto">
	<label class="form-label">Product More Image</label>
	<input type="file" multiple="multiple" name="product_sub_image[]" id="img_file" onchange="readURLMoreImage(this);" required="required">
  <input type="hidden" name="product_id" value="<?php echo $id; ?>">
</div>
<div class="form-outline mb-4 w-50 mx-auto" id="ShowMoreImage"></div>
<!-- <a href="product_sub_image_add_and_edit.php"> -->
<center>
  <button type="submit" name="submit" class="btn btn-primary my-3">Insert</button>
</center>
<!-- </a> -->
</div>
</form>
	<div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3 text-white" style="width:100%;" cellpadding="0" cellspacing="0">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
          if(!empty($data1))
        {
        foreach ($data1 as $key => $inner_data) {
          echo "<tr>";
          echo "<td>".++$key."</td>";
          ?>
        <td><img src="<?php echo '../'.$inner_data['img_name']?>" width="200px" height="100px"></td>
        <td>
    <a href="product_sub_image_delete.php?id=<?php echo $inner_data['id'];?>" name="delete" class="btn btn-sm rounded bg-danger text-white edit_delete_style" onclick="return confirm('Are you sure to Delete this Catagory?');"><i class="fa fa-trash"></i></a>
      </td>
        <?php 

          echo "</tr>";
        }
      }
        ?>
     </tbody>
</table>
</div>

  </div>

</div>
<?php
include('dashboard_footer.php');
?>
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
</body>
</html>