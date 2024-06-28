<?php
	$this->load->view('Admin/layout/header.php');
?>

<div class="panel panel-default">
    <div class="panel-heading">
    Manage Categories
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
            <th data-breakpoints="xs">ID</th>
            <th>Category Name</th>
            <th>Category image</th>
            <th>Edit</th>
            <th>Delete</th>
           
          </tr>
        </thead>
        <tbody>
          <?php
           $i=1;
          foreach ($manage as $man) 
          {
           
          
          ?>
          <tr data-expanded="true">
            <td><?=$i;?></td>
            <td><?=$man->cat_name?></td>
            <td><img src="<?php echo base_url('Assets/Admin/category/'.$man->cat_image)?>" style="height: 100px;width: 100px"></td>

            <td><a href="<?=base_url('Admin_controller/edit_cat/'.$man->cat_id)?>"><img src="<?=base_url('Assets/Admin/images/edit.jpg')?>"style="height:50px;width:50px";></a></td>

            <td><a href="<?=base_url('Admin_controller/delete_cat/'.$man->cat_id)?>"><img src="<?=base_url('Assets/Admin/images/delete.jpg')?>"style="height:50px;width:50px";></a></td>
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