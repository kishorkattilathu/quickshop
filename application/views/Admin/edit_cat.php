<?php
	$this->load->view('Admin/layout/header.php');
?>
	
	<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Edit Categories</h2>
		<?php
		foreach ($cat_edit as $edit) 
		?>
		<form action="<?=base_url('Admin_controller/edit_categories/'.$edit->cat_id)?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="cat_id" value="<?=$edit->cat_id?>">
			<label>Category Name</label>
			<input type="text" class="ggg" value="<?=$edit->cat_name?>" name="catname" value="" required="">
			<label>Old Image</label>
			<br>
			<br>
			
			<img src="<?php echo base_url('Assets/Admin/category/'.$edit->cat_image)?>">
			<br>
			<br>
			<label>New Image</label>
			<input type="file" class="ggg" name="cattype">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="Update" name="button">
		</form>
		
</div>
</div>

<?php
	$this->load->view('Admin/layout/footer.php');
?>