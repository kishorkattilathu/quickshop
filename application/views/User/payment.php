<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row"><br>
                    <br>
                    <br>
                    <br>
        <div class="col-md-4"></div>
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                    
                </div>
                <div class="panel-body">
                    <form  method="post" action="<?=base_url('User_controller/final_payment')?>">
                    <div class="form-group">
                        <label for="cardNumber">
                            NAME ON CARD</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardName" name="card_name" placeholder="Valid Card Name"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" name="card_no" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" name="expiry_month" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" name="expiry_year" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" placeholder="CV" name="cvv" required />
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <?php
            $total=0;
                foreach ($payment as $pay) 
                {
                 $total=$total+$pay->total_price;
                }
            ?>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a><span readonly="" class="badge pull-right"><span  class="glyphicon glyphicon-inr"></span>₹<?=$total?></span> Final Payment</a>
                </li>
                <input type="hidden" name="total_payment" value="<?=$total?>">
                <input type="hidden" name="user_email" value="<?=$pay->b_user_email?>">
            </ul>
            <br/>
            <button class="btn btn-success btn-lg btn-block" name="button">Pay</button>
        </div>
        </form>
        <div class="col-md-4"></div>
    </div>
</div>
<script>
    
    body { margin-top:20px; }
.panel-title {display: inline;font-weight: bold;}
.checkbox.pull-right { margin: 0; }
.pl-ziro { padding-left: 0px; }
</script>