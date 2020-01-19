
<!-- 
<div class="container box">
<h4><?=$title ?></h4>
<p>Payment information..........</p>

<?php echo 
form_open('admissions/applicationpaymentform');?>

    <h1>Application Payment</h1>
    <div>
    <p>Thank for making Kingdom Way Academy your first choice <br> Please you have to make 4000 naira for <b> Application </b></b></p>
    
    </div>
</form>
</div> -->

<div class="container box">
<h5> <b><?=$title ?></b></h5>
<div class="payment_note" >
<p>Thank for making <b>Kingdom Way Academy</b> your first choice.
 For the school addmission board to process your application. You have to make a payment of <b>N4000</b>  </b></b></p>
</div>

 <div align="center">
         <button type="button" class="btn btn-info btn-lg" id="btn_application_payment"> Make Payment</button>
         <button type="button" class="btn btn-danger btn-lg" id="btn_cancel_payment"> Cancel</button>
 </div>


</div>