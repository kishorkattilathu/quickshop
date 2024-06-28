<?php
	$this->load->view('Admin/layout/header.php');
?>
	
	<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Add Categories</h2>

		<form action="<?=base_url('Admin_controller/add_categories')?>" method="post" enctype="multipart/form-data">
			<label>Category Name</label>
			<input type="text" class="ggg" name="catname" value="" required="">
			<label>Cat Type</label>
			<input type="file" class="ggg" name="cattype" value="" required>
			
			
				<div class="clearfix"></div>
				<input type="submit" value="add" name="button">
		</form>
		
</div>
</div>

<?php
	$this->load->view('Admin/layout/footer.php');
?>