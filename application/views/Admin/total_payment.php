<?php $this->load->view('Admin/layout/header.php');?>
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

<h2 class="text-center">Total Users</h2>
<div class="container">
	<div class="row">
		
		<div class="col-md-1"></div>
		<div class="col-md-10" style="overflow-x:auto";>
			
			<table>
			    <tr>
			      <th>Sr No.</th>
			      <th>User Name</th>
			      <th>User Email</th>
			      <th>Phone No:</th>
			     
			    </tr>
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

<?php $this->load->view('Admin/layout/footer.php');?>