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
                    foreach ($profile as $pro) 
                    ?>
  <form  method="post" action="<?=base_url('index.php/User_controller/profile_update')?>">
    <h1>My Profile....!</h1><br><br>
    <input type=""  placeholder="Name" class="inpt" name="name" value="<?=$pro->user_name?>"><br><br>
    <input type=""  placeholder="Email" class="inpt"  name="email"  value="<?=$pro->user_email?>" readonly><br><br>
     <input type=""  placeholder="Email" class="inpt"   name="phone"    value="<?=$pro->phone?>"><br><br>
      <input type=""  placeholder="Email" class="inpt"   name="password"  value="<?=$pro->password?>" ><br><br>
    <input type=""  placeholder="Email" class="inpt"  name="address" value="<?=$pro->address?>"><br><br>
   
    <input type="Submit" name="" style="height: 40px;width: 200px;border-style: none;background-color: green;color: white">
  </form>
  
</div>
</center>
<br>




































                  
                
<?php $this->load->view('User/layout/footer');?>