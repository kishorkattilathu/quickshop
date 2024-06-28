<?php
$this->load->view('Admin/layout/header.php');
?>

<div class="reg-w3">
<div class="w3layouts-main">
	<h2>My Profile</h2>
	<?php
	foreach ($Admin as $adm)
	?>

		<form action="<?=base_url('Admin_controller/admin_update')?>" method="post">
			<input type="hidden" name="admin_id" value="<?=$adm->admin_id?>">
			<label>Name</label>
			<input type="text" class="ggg" name="name" value="<?=$adm->name?>" required="">
			<label>Email</label>
			<input type="email" class="ggg" name="email" readonly="" value="<?=$adm->email?>" required="">
			<label>Password</label>
			<input type="text" class="ggg" name="password" value="<?=$adm->password?>" required="">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="update" name="button">
		</form>
		
</div>
</div>

<?php
$this->load->view('Admin/layout/footer.php');
?>