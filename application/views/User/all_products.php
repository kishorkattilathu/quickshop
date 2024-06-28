<?php $this->load->view('User/layout/header');?>


<section class="w3l-ecommerce-main">
	<!-- /products-->
	<div class="ecom-contenthny py-5">
		<div class="container py-lg-5">
			<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
			<p class="text-center">Handpicked Favourites just for you</p>

			
			<!-- /row-->
			<div class="ecom-products-grids row mt-lg-5 mt-3">
				
			<?php
					foreach ($allproduct as $product) 
					{
					
					

					?>


				<div class="col-lg-3 col-6 product-incfhny mt-4">
					
					<div class="product-grid2 transmitv">
						<div class="product-image2">
							<a href="<?=base_url('User_controller/single_page/'.$product->product_id)?>">
								<img class="pic-1 img-fluid" src="<?=base_url('Assets/Admin/product_img/'.$product->product_img)?>"style=width:250px;height:250px>
								<img class="pic-2 img-fluid" src="<?=base_url('Assets/Admin/product_img/'.$product->product_img)?>">
							</a>
							<ul class="social">
									<li><a href="<?=base_url('User_controller/single_page/'.$product->product_id)?>" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

									<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
									</li>
							</ul>
							<div class="transmitv single-item">
							<!-- <form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="transmitv_item" value="Women Maroon Top">
									<!-- <input type="hidden" name="amount" value="899.99"> -->
									<!-- <button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
										Add to Cart
									</button> -->
								<!-- </form> --> 
							</div>
						</div>
						<div class="product-content">
							<h3 class="title"><a href="#"><?=$product->product_name?></a></h3>
							<span class="price">₹<?=$product->product_price?></span>
						</div>
						
					</div>
					

				</div>
				<?php
						}
					?>
				

			</div>
			
			<!-- //row-->
		</div>
	</div>
</section>


<?php $this->load->view('User/layout/footer');?>