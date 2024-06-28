<?php
	$this->load->view('Admin/layout/header.php');
?>
	
	<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Edit Product</h2>

		<form action="<?=base_url('Admin_controller/edit_product_details')?>" method="post" enctype="multipart/form-data">
			<?php
			foreach ($edit_product as $pro)
			?>
			<label>Category Name</label>
			<select name="cat_ids">
				<option value="<?=$pro->cat_id?>"><?=$pro->cat_name?></option>
				<?php
				foreach ($category as $cat) 
				{
					?>
					<option value="<?=$cat->cat_id?>"><?=$cat->cat_name?></option>
				<?php 
					}
				?>
			</select>
			
			<br>
			<br>
			<input type="hidden" value="<?=$pro->product_id?>" name="product_id">
			<label>Product Name</label>
			<input type="text" class="ggg" name="name" value="<?=$pro->product_name?>" required="">

			<label>Description</label>
			<input type="text" class="ggg" name="desc" value="<?=$pro->product_desc?>" required="">

			<label>Price</label>
			<input type="text" class="ggg" name="price" value="<?=$pro->product_price?>" required="">
			
			<label>Old image</label>
			<img src="<?=base_url('Assets/Admin/product_img/'.$pro->product_img)?>" style="width:100px;height:100px" >
			<br>
			<br>
			<br>


			<label>New Image</label>
			<input type="file" class="ggg" name="img">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="add" name="button">
		</form>
		
</div>
</div>

<?php
	$this->load->view('Admin/layout/footer.php');
?>