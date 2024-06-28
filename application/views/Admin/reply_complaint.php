<?php
$this->load->view('Admin/layout/header.php');
?>

<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Reply Complaints</h2>
	<?php
		foreach ($reply as $rep) 
	?>
	
		<form action="<?=base_url('Admin_controller/reply')?>" method="post">
			<label>Customer Email</label>
		
			<input type="hidden" class="ggg" name="complaint_id" value="<?=$rep->complaint_id?>" readonly >
			<input type="text" class="ggg" name="email" value="<?=$rep->c_email?>" readonly >
			<label>Complaints/Suggestions</label>
			<input type="text" class="ggg" name="message" readonly="" value="<?=$rep->c_message?>" >
			<label>Reply</label>
			<input type="text" class="ggg" name="reply" value="" required="">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="update" name="button">
		</form>
		
</div>
</div>

<?php
$this->load->view('Admin/layout/footer.php');
?>