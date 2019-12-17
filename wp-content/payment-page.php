<?php
/*
 Template Name: Payment
 */

 
get_header();
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.btn-3d-sub {
  display: block;
  margin: 0 auto;
  width: 50%;
  height: 50px;
  font-family: Helvetica;
  border-bottom: 5px solid #CC0000;
  border-top: none;
  border-left: none;
  border-right: none;
  background: linear-gradient(#CC0000,#CC0000);
  color: white;
  border-radius: 10px;
  box-shadow: 0px 2px 10px grey;
  transition: 150ms ease;
  text-align: center;
  line-height: 50px;
  font-weight: bold;
}
@media only screen and (max-device-width: 600px)
{
select{
    margin-top:10px;
}
}
label {
    color: #024c8b;
    font-size: 16px;
    font-weight: 400;
}
h3 {
    color: #024c8b;
    font-family: 'Lato';
    margin: 0 0 15px;
    font-size: 24px;
    font-weight: bold;
}
p {
    color: #666;
    font-size: 14px;
    line-height: 17px;
    margin-bottom: 30px;
    margin-top: 20px;
}
.btnsub{
    width:20%;
}
hr {
    margin-top: 1.5rem;
    margin-bottom: 1.5rem;
}
.container{
    background-color:#f2eff9;
    padding:30px;
    margin-top:20px;
    margin-bottom:20px;
}


.unknown{
    color: #fff !important;
    background-color: #0f4c8b;
    float: left;
    margin-left: -10px;
}

@media only screen and (max-device-width: 600px){
  .unknown{
      margin-left: 0px;
  }
}

.switch-field {
	display: flex;
	margin-bottom: 36px;
	overflow: hidden;
}

@media (max-width: 600px) {
    justify-content: center;
}

.switch-field input {
	position: absolute !important;
	clip: rect(0, 0, 0, 0);
	height: 1px;
	width: 1px;
	border: 0;
	overflow: hidden;
}

.switch-field label {
	background-color: #e4e4e4;
	color: rgba(0, 0, 0, 0.6);
	font-size: 14px;
	line-height: 1;
	text-align: center;
	padding: 8px 16px;
	margin-right: -1px;
	border: 1px solid rgba(0, 0, 0, 0.2);
	box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
	transition: all 0.1s ease-in-out;
}

.switch-field label:hover {
	cursor: pointer;
}

.switch-field input:checked + label:last-of-type {
	background-color: red;
	box-shadow: none;
}

.switch-field input:checked + label:nth-child(2) {
	background-color: #98ef3a;
	box-shadow: none;
}

.switch-field label:first-of-type {
	border-radius: 4px 0 0 4px;

}

.switch-field label:last-of-type {
	border-radius: 0 4px 4px 0;
	
}

</style>
<?php
include "formassets/config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$appid = $_POST['appid'];
?>

<div class="container">
<div class="col-sm-2">
</div>

<div class="col-sm-12">
    <div class="form-row">
    <div class="col-sm-4">
    <label>Application ID : </label>
    <label><?php echo $appid;?></label>
    </div>
    <div class="col-sm-4">
    <label>Given Name : </label> <?php echo $fname;?>
    </div>
    <div class="col-sm-4">
    <label>Last Name : </label> <?php echo $lname;?>
    </div>
    </div>
</div>

<div class="jumbotron well">
<center><h3>ESTA Application Fees : $79</h3>
<div class="form-row">
<div class="col-sm-6" style="text-align:right;">
<label style="text-align:right;">Need Express Service for $29 USD (2 Hours or Less Service)</label>
</div>
<div class="col-sm-6">
<div class="switch-field" style="text-align:center;">
		<input type="radio" id="expressyes" name="express" onclick="totalval('yes')" value="yes" required/>
		<label for="expressyes">Yes</label>
		<input type="radio" id="expressno" name="express" onclick="totalval('no')" value="no" checked/>
		<label for="expressno">No</label>
</div>
</div>
</div>
<h3 id="tot">Total : $79</h3>
<form class="paypal" action="https://evisa-esta.us.com/payment-processing-page.php" method="post" id="paypal_form">
<input type="hidden" name="cmd" value="_xclick" />
        <input type="hidden" name="no_note" value="1" />
        <input type="hidden" name="lc" value="UK" />
        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
        <input type="hidden" name="first_name" value="<?php echo $fname;?>" />
        <input type="hidden" name="last_name" value="<?php echo $lname;?>" />
        <input type="hidden" name="payer_email" value="<?php echo $email;?>" />
        <input type="hidden" name="item_number" value="<?php echo $appid;?>" / >
<input type="hidden" id="amount" name="amount" value="79">
<button type="submit" class="btn btnsub btn-lg btn-danger" style="border-radius:20px;">PAY NOW</button>
</form>
<img src="https://evisa-esta.us.com/wp-content/uploads/2019/11/Payment_Options.png" width="50%" height="auto" style="padding-top:20px;">
</center>
</div>


<div class="col-sm-2">
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.10.1/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
function totalval(field){
    if(field=="yes"){
        console.log(field);
        document.getElementById("tot").innerHTML = "Total : $108";
        document.getElementById("amount").value = "108";
    }if(field=="no"){
        console.log(field);
        document.getElementById("tot").innerHTML = "Total : $79";
        document.getElementById("amount").value = "79";
    }
}
</script>
<?php
get_footer(); 
?>    