<?php

$customer_id=$_SESSION['customer_id'];
$shipping_info=$obj_app->select_shipping_info_by_customer_id($customer_id);

?>
<div class="register_account">
    <div class="wrap" style="font-size: 15px;">
        <div class="t_align_c">
        <h1 class="title color_green" style="margin-bottom: 0.5em; font-size: 1.5em; text-transform: uppercase; line-height: 1.2em;">Check Your Shipping Information</h1>
            <p class="m_top_30"><label class="f_weight_600">Customer Name : </label> <span class="color_blue"> <?php echo $shipping_info['customer_name'];?></span></p>
            <p class="m_top_10"><label class="f_weight_600" class="f_weight_600">Company Name : </label><span class="color_blue"> <?php echo $shipping_info['company_name'];?></span></p>
            <p class="m_top_10"><label class="f_weight_600">Customer Email : </label><span class="color_blue"> <?php echo $shipping_info['customer_email'];?></span></p>
            <p class="m_top_10"><label class="f_weight_600">Mobile Number : </label><span class="color_blue"> <?php echo $shipping_info['mobile_number'];?></span></p>
            <p class="m_top_10"><label class="f_weight_600">Shipping Address : </label><span class="color_blue"> <?php echo $shipping_info['address'];?>,</span><span class="color_blue"> <?php echo $shipping_info['city'];?></span><span class="color_blue">-<?php echo $shipping_info['zip_code'];?>.</span></p>
            <p class="m_top_10"><label class="f_weight_600">Country : </label><span class="color_blue"> <?php echo $shipping_info['country'];?></span></p>
            <p class="m_top_20 color_blue f_size_18">If your shipping information is correct, then click Okey for payment. Or <a href="shipping.php">Click Here</a> to complete shipment.</p>
            <a href="payment.php"><button class="grey m_top_30 t_align_c" style="float: none;">Everything is Okey</button></a>
        <!--<p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>-->
        </div>
        <div class="clear"></div>
    </div> 
</div>
