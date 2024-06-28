<?php $this->load->view('User/layout/header');?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>

<h2 class="text-center">My Cart</h2>
<div class="container">
	<div class="row">
		
		<div class="col-md-1"></div>
		<div class="col-md-10" style="overflow-x:auto";>
			
			<table>
			    <tr>
			      <th>Sr No.</th>
			     
			      <th>Product Name</th>
			      <th>product Image</th>
			      <th>Quantity</th>
			      <th>Total Price</th>
			      <!-- <th>Payment Status</th> -->
			      <th>Action</th>
			      
			    </tr>
			    <?php
			    $i=1;

				if (!empty($cart)) 
				{
				
			    	foreach ($cart as $car) 
			    	{
			    	
							?>
							<tr>
							<td><?=$i;?></td>
							
							<td><?=$car->product_name;?></td>
							<td><img src="<?=base_url('Assets/Admin/product_img/'.$car->product_img)?>" style="width:150px;height:150px" ></td>
							<td><?=$car->quantity;?></td>
							<td><?=$car->total_price;?></td>
							<!-- <td><?=$car->payment_status;?></td> -->
							<td><a href="<?=base_url('User_controller/delete_cart/'.$car->booking_id)?>"><button class="btn btn-primary">Cancel</button></a></td>
							
							</tr>

							<?php
							$i++; 
						
					}

				}
				else
				{
					echo '<tr><td colspan="6">No Booking Yet</td></tr>';
				}
			    ?>
			    
			    
			  </table>

		</div>
		<div class="col-md-1"></div>

	</div>
</div>
<?php
if (!empty($cart)) 
				{
		$mail=$car->b_user_email;
			if ($mail!='') {
	
?>
<div><a href="<?=base_url('User_controller/checkout')?>"><img src="<?=base_url('Assets/Admin/images/checkout.png')?>" style="width:150px;height:150px"></a></div>
<?php
}
}
?>

</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>



<?php $this->load->view('User/layout/footer');?>