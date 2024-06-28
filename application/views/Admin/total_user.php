<?php $this->load->view('Admin/layout/header.php');?>
<div class="panel panel-default">
    <div class="panel-heading">
    Customer Details
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
			      <th>Phone No:</th>
			     
			    </tr>
        </thead>
        <tbody>
          <?php
			   $i=1;
			   foreach ($users as $use) 
			   {
			   
			   ?>
			    <tr>
			    	<td><?=$i;?></td>
			      <td><?=$use->user_name?></td>
			      <td><?=$use->user_email?></td>
			      <td><?=$use->phone?></td>
			   
			      
			    </tr>
			    <?php
			    	$i++;
					}
				?>
          
        </tbody>
      </table>
    </div>
  </div>













<?php $this->load->view('Admin/layout/footer.php');?>