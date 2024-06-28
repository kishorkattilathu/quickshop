<?php $this->load->view('User/layout/header') ?>

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
  text-align: left;
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

<h2 class="text-center">Total Purchase</h2>
<div class="container">
	<div class="row">
		
		<div class="col-md-1"></div>
		<div class="col-md-10" style="overflow-x:auto";>
			
			<table>
			    <tr>
			      <th>Sr No.</th>
			      <th>Product Name</th>
			      <th>Product Price</th>
			      <th>Product Image</th>
			      <th>Quantity</th>
			      <th>Total Price</th>
			      
			      
			    </tr>
			   <?php
			   		$i=1;
			   		$total=0;
			   		foreach ($checkout as $check) 
			   		{
			   		$total=$total+$check->total_price;	
			   		
			   ?>
			    <tr>
			      <td><?=$i;?></td>
			      <td><?=$check->product_name?></td>
			      <td><?=$check->product_price?></td>
			      <td><img src="<?=base_url('Assets/Admin/product_img/'.$check->product_img)?>" style="height:150px;width:150px"></td>
			      <td><?=$check->quantity?></td>
			      <td><?=$check->total_price?></td>
			      
			      
			    </tr>
			    <?php
			    	$i++;
			    	}
			    ?>

			    
			  </table>
			  <div><h4>Total Price=<?php echo $total?></h4><a href="<?=base_url('User_controller/payment/'.$total)?>"><button class="btn btn-primary" style="width:150px">Pay</button></a></div>

		</div>
		<div class="col-md-1"></div>

	</div>
</div>


</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>


<?php $this->load->view('User/layout/footer') ?>