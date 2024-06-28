<?php
	$this->load->view('Admin/layout/header.php');
?>

<div class="panel panel-default">
    <div class="panel-heading">
   Pending Complaints
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
            <th data-breakpoints="xs">Sr No:</th>
            <th>Customer Email</th>
            <th>Customer Name</th>
            <th>Customer Message</th>
            <th>Reply</th>
            <th>Action</th>
            <th>Action</th>
           
           
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
            foreach ($complaint as $comp) 
            {
             
           
          ?>
          <tr data-expanded="true">
            <td><?=$i;?></td>
            <td><?=$comp->c_email?></td>
            <td><?=$comp->c_name?></td>
            <td><?=$comp->c_message?></td>
            <td><?=$comp->c_reply?></td>
            <td><a href="<?=base_url('Admin_controller/reply_complaint/'.$comp->complaint_id)?>" class="btn btn-success" >Reply</a></td>
            <td><a href="<?=base_url('Admin_controller/delete_complaint/'.$comp->complaint_id)?>" class="btn btn-danger" >Delete</a></td>
          </tr>

          <?php
            $i++;
             }
          ?>
         
        </tbody>
      </table>
    </div>
  </div>
<?php
	$this->load->view('Admin/layout/footer.php');
?>