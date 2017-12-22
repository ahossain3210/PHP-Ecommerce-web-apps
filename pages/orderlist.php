<?php
$customer_id= $_SESSION['customer_id'];
//echo $customer_id;
$query_result=$obj_app->select_order_info_by_id($customer_id);

?>
<div class="register_account">
    <div class="wrap f_size_13">
        <h4 class="title">Order List</h4>
        <h5 class="color_green">
            <?php if (isset($_SESSION['message'])){echo $_SESSION['message']; unset($_SESSION['message']);}?>
        </h5>
        <form>
            <table id="order_table" style="border: 1px solid #000; padding: 10px; text-align: center; width: 100%; margin-top: 30px;">
                <tr style="border: 1px solid #000;">
                    <td style="border: 1px solid #000; padding: 20px 10px;">Customer Name</td>
                    <td style="border: 1px solid #000; padding: 20px 10px;">Product Name</td>
                    <td style="border: 1px solid #000; padding: 20px 10px;">Order Date</td>
                    <td style="border: 1px solid #000; padding: 20px 10px;">Payment Type</td>
                    <td style="border: 1px solid #000; padding: 20px 10px;">Payment Status</td>
                    <td style="border: 1px solid #000; padding: 20px 10px;">Quantity</td>
                    <td style="border: 1px solid #000; padding: 20px 10px;">Unit Price</td>
                    
                </tr>
                <?php 
                while ($order_info=  mysqli_fetch_assoc($query_result))
                        {
                    ?>
                <tr style="border: 1px solid #000;">
                    <td><?php echo $order_info['customer_name'];?></td>
                    <td style="border: 1px solid #000;" class="p_bottom_20 p_top_20"><?php echo $order_info['product_name'];?></td>
                    <td style="border: 1px solid #000;" class="p_bottom_20 p_top_20"><?php echo $order_info['order_date'];?></td>
                    <td style="border: 1px solid #000;" class="p_bottom_20 p_top_20"><?php echo $order_info['payment_type'];?></td>
                    <td style="border: 1px solid #000;" class="p_bottom_20 p_top_20"><?php echo $order_info['payment_status'];?></td>
                    <td style="border: 1px solid #000;" class="p_bottom_20 p_top_20"><?php echo $order_info['product_sales_quantity'];?></td>
                    <td style="border: 1px solid #000;" class="p_bottom_20 p_top_20">Tk.<?php $order_total=$order_info['order_total']; echo $order_info['product_price'];?></td>
                </tr>
                <?php }?>
                
            </table>
        </form>
        <div style="width: 100%; text-align: right; margin-top: 20px;">
            <p class="f_size_13"><label><span class="f_weight_b f_size_15">Total Order</span> (Including VAT & Shipment fee) :</label><span class="scheme_color f_size_15"> Tk.<?php if (isset($order_total)){ echo $order_total;}?></span></p>
        </div>
    </div>
</div>