
<br>
<br>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<?php
		foreach ($payment as $pay) 
	?>

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                       <?=$pay->address?>
                        <abbr title="Phone">Mob:</abbr><?=$pay->phone?>
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em><?=$pay->payment_date?></em>
                    </p>
                    <p>
                        <em>Receipt #:<?=$pay->payment_id?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Qty.</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php
                    	$total=0;
                    	foreach ($pro_details as $pro) 
                    	{
                    	$total=$total+$pro->total_price;
                    	
                    	?>
                        <tr>
                           <td class="col-md-9"><em><?=$pro->product_name?></em></h4></td> 
                        <td class="col-md-1" style="text-align: center"><?=$pro->quantity?></td> 
                            <td class="col-md-1 text-center">₹<?=$pro->price?></td>
                            <td class="col-md-1 text-center">₹<?=$pro->total_price?></td>
                        </tr>
                        <?php
                    }
                    ?>

                        <tr>
                            <td>   </td>
                            <td>   </td>
                           

                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>₹<?=$total?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <h3 class="text-center">Thanks For Shopping With Us!</h3>
                </td>

            </div>
            <div><a href="<?=base_url('User_controller/clear_receipt/'.$pro->b_user_id)?>" class="btn btn-primary">Back To Home</a></div>
        </div>
    </div>

<script type="text/javascript">
	
	body {
    margin-top: 20px;
}
</script>

