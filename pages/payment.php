<?php
if (isset($_POST['btn'])) {
    $obj_app->save_order_info($_POST);
}
?>
<div class="register_account">
    <div class="wrap">
        <h4 class="title">Payment</h4>
        <p></p>
        <form action="" method="post">
            <div class="col_1_of_2 span_1_of_2" style="margin-left: 40px;">
                <div class="m_top_20">
                    <input type="radio" checked="" value="PayPal" name="payment_type"><label>PayPal</label>
                </div>
                <div class="m_top_35">
                    <input type="radio" value="bKash" name="payment_type"><label>bKash</label>
                </div>
                <div class="m_top_35">
                    <input type="radio" value="Cash_on_delivery" name="payment_type"><label>Cash on Delivery</label>
                </div>
                <button type="submit" name="btn" class="grey m_top_35">Confirm Order</button>
                <!--<p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>-->
            </div>
            <div class="clear"></div>
        </form>
    </div> 
</div>