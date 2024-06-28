<?php
	$this->load->view('Admin/layout/header.php');
?>
	
	<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Add Product</h2>

		<form action="<?=base_url('Admin_controller/add_product_details')?>" method="post" enctype="multipart/form-data">
			<label>Category Name</label>
			<select name="category_id">
				<?php
				foreach ($product as $pro) 
				{
				
				
				?>
				<option value="<?=$pro->cat_id?>"><?=$pro->cat_name?></option>
				<?php
			}
				?>
			</select>
			<br>
			<br>
			
			<label>Name</label>
			<input type="text" class="ggg" name="name" value="" required="">

			<label>Description</label>
			<input type="text" class="ggg" name="desc" value="" required="">

			<label>Price</label>
			<input type="text" class="ggg" name="price" value="" required="">

			<label>Image</label>
			<input type="file" class="ggg" name="img" value="" required>
			
			
				<div class="clearfix"></div>
				<input type="submit" value="add" name="button">
		</form>
		
</div>
</div>

<?php
	$this->load->view('Admin/layout/footer.php');
?>