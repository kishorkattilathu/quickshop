<?php
	$this->load->view('Admin/layout/header.php');
?>

<div class="panel panel-default">
    <div class="panel-heading">
   All Complaints
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
  </div>
<?php
	$this->load->view('Admin/layout/footer.php');
?>