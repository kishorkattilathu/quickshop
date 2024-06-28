<?php $this->load->view('User/layout/header'); ?>

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

<h2 class="text-center">Total Receipts</h2>
<div class="container">
	<div class="row">
		
		<div class="col-md-1"></div>
		<div class="col-md-10" style="overflow-x:auto";>
			
			<table>
			    <tr>
			      <th>Sr No.</th>
			      <th>Your Name</th>
			      <th>Your Email</th>
			      <th>Receipt No:</th>
			      <th>Total Amount</th>
			      <th>Payment status</th>
			      <th>Payment date</th>
			    </tr>
		<?php
			$i=1;
			foreach ($payment as $pay) 
			{
		?>
			    <tr>
			      <td><?=$i;?></td>
			      <td><?=$pay->user_name?></td>
			      <td><?=$pay->customer_email?></td>
			      <td><?=$pay->payment_id?></td>
			      <td><?=$pay->total_payment?></td>
			      <td><?=$pay->payment_status?></td>
			      <td><?=$pay->payment_date?></td>
			      
			   <?php
			   $i++;
			   }
			   ?>
			    
			  </table>

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
<?php $this->load->view('User/layout/footer'); ?>