
<?php $this->load->view('User/layout/header');?>
<style type="text/css">
	#complaint{
			height: 100vh;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center
	}
	.inpt{
		width: 400px;
		padding-left: 10px;
	}
</style>

<center>
	<div id="complaint">
	<?php
	foreach ($user as $customer) 
	?>
	<form method="post" action="<?php echo base_url('index.php/User_controller/complaint_insert')?>">
		<h1>Add Your Complaints Here...!</h1><br><br>
		<input type="" name="name" placeholder="Name" class="inpt" value="<?php echo $customer->user_name?>" readonly><br><br>
		<input type="" name="email" placeholder="Email" class="inpt" value="<?php echo $customer->user_email?>" readonly><br><br>
		<textarea style="width: 400px;height: 200px" placeholder="Share Your Complaint.." name="complaint"></textarea><br><br>
		<input type="Submit" name="" style="height: 40px;width: 200px;border-style: none;background-color: green;color: white">
	</form>
	
</div>
</center>
<br>
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
<center>
<h2>My Complaints</h2></center>


<div style="overflow-x:auto;">
  <table>
     <thead>
          <tr>
            <th data-breakpoints="xs">Sr No:</th>
            <th>Customer Email</th>
            <th>Customer Name</th>
            <th>Customer Message</th>
            <th>Reply</th>
            
           
           
          </tr>
        </thead>
    <tbody>
          <?php
          $i=1;
            foreach ($complaints as $comp) 
            {
             
           
          ?>
          <tr data-expanded="true">
            <td><?=$i;?></td>
            <td><?=$comp->c_email?></td>
            <td><?=$comp->c_name?></td>
            <td><?=$comp->c_message?></td>
            <td><?=$comp->c_reply?></td>
           
          </tr>

          <?php
            $i++;
             }
          ?>
         
        </tbody>
  </table>
</div>

</body>
</html>

<br><br><br>










<?php $this->load->view('User/layout/footer');?>