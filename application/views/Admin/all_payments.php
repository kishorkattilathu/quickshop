<?php $this->load->view('Admin/layout/header'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
    Payment Details
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
			    <tr>
			      <th>Sr No.</th>
			      <th>User Name</th>
			      <th>User Email</th>
			      <th>Receipt No:</th>
			      <th>Total Amount</th>
			      <th>Payment status</th>
			      <th>Payment date</th>
			    </tr>
			    </tr>
        </thead>
        <tbody>
		<?php
			$i=1;
			foreach ($paid as $pay) 
			{
		?>
			    <tr>
			      <td><?=$i;?></td>
			      <td><?=$pay->card_name?></td>
			      <td><?=$pay->customer_email?></td>
			      <td><?=$pay->payment_id?></td>
			      <td><?=$pay->total_payment?></td>
			      <td><?=$pay->payment_status?></td>
			      <td><?=$pay->payment_date?></td>
			      
			   <?php
			   $i++;
			   }
			   ?>
			    
			  </tbody>
      </table>
    </div>
  </div>










	
<?php $this->load->view('Admin/layout/footer'); ?>