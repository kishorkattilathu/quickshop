<?php $this->load->view('User/layout/header'); ?>
<section class="w3l-specification-6">
	<!-- /specification-6-->
	  <div class="specification-6-mian py-5">
	  	<?php
	  	foreach ($single as $sin) 
	  	?>
			 <div class="container py-lg-5">
					<div class="row story-6-grids text-left">
							<div class="col-lg-5 story-gd">
									<img src="<?=base_url('Assets/Admin/product_img/'.$sin->product_img)?>" class="img-fluid" alt="/">
								</div>
							<div class="col-lg-7 story-gd pl-lg-4">
								<h3 class="hny-title"><?=$sin->product_name?></h3>
								<p><?=$sin->product_desc?></p>
			
								<div class="row story-info-content mt-md-5 mt-4">

									<div class="col-md-6 story-info">
										<h5> <a href="#">₹<?=$sin->product_price?></a></h5>	
									
												
										<?php foreach ($user as $use)
										?>
											
										
									</div>
									
									
								</div>
								<form action="<?=base_url('User_controller/add_cart')?>" method="post">
									<input type="hidden" name="email" value="<?=$use->user_email?>">
									<input type="hidden" name="user_id" value="<?=$use->user_id?>">
									<input type="hidden" name="pro_id" value="<?=$sin->product_id?>">
									<input type="hidden" name="price" value="<?=$sin->product_price?>">
									<label>Choose Quantity</label><br>
										<select name="quantity" style="width: 100px">
										
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select><br><br>
									<button type="submit" name="button">Add to Cart</button>
										

									</form>
							
							</div>
						
			
			
						</div>
				 </div>
			 </div>
	 </section>

	 <?php $this->load->view('User/layout/footer');?>