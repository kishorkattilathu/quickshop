<?php 

$this->load->view('Admin/layout/header')

?>


		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-5 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Total CATEGORY</h4>
					<h3><?php echo $category_count?></h3>
					
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-5 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Users</h4>
						<h3><?php echo $customer_count?></h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-5 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Total PRODUCTS</h4>
						<h3><?php echo $product_count?></h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-5 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
						
					</div>
					<div class="col-md-8 market-update-left">
						<h4>PENDING COMPLAINTS</h4>
						<h3><?php echo $Pendingcomplaint?></h3>
						
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		

<?php 

$this->load->view('Admin/layout/footer')

?>
