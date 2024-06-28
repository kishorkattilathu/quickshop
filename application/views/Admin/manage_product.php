<?php
	$this->load->view('Admin/layout/header.php');
?>

<div class="panel panel-default">
    <div class="panel-heading">
     Manage Product
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
            <th>Product Name</th>
            <th>Description</th>
            <th data-breakpoints="xs">Image</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">Price</th>
            <th>Edit</th>
            <th>Delete</th>

          </tr>
        </thead>
        <?php 
        $i=1;
        foreach ($product as $pro) 
        {
        
        ?>
        <tbody>
          <tr data-expanded="true">
            <td><?=$i;?></td>
            <td><?php echo $pro->cat_name?></td>
            <td><?=$pro->product_name?></td>
            <td><?=$pro->product_desc?></td>
            <td><a href=""><img src="<?=base_url('Assets/Admin/product_img/'.$pro->product_img)?>" style="width:100px;height:100px"></a></td>
            <td><?=$pro->product_price?></td>
           
            <td><a href="<?=base_url('Admin_controller/edit_product/'.$pro->product_id)?>"><img src="<?=base_url('Assets/Admin/images/edit.jpg')?>" style="width:50px;height:50px"></a></td>
           
            <td><a href="<?=base_url('Admin_controller/delete_product/'.$pro->product_id)?>"><img src="<?=base_url('Assets/Admin/images/delete.jpg')?>" style="width:50px;height:50px"></a></td>
          </tr>
         
        </tbody>
      <?php
       $i++; } 
      ?>
      </table>
    </div>
  </div>
<?php
	$this->load->view('Admin/layout/footer.php');
?>