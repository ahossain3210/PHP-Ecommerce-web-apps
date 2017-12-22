<?php
$order_id=$_GET['id'];

$customer_result=$obj_dash->select_customer_info_by_order_id($order_id);
$customer_info=  mysqli_fetch_assoc($customer_result);

$shipping_result=$obj_dash->select_shipping_info_by_order_id($order_id);
$shipping_info=  mysqli_fetch_assoc($shipping_result);

$payment_result=$obj_dash->select_payment_info_by_order_id($order_id);
$payment_info=  mysqli_fetch_assoc($payment_result);

$product_result=$obj_dash->select_product_info_by_order_id($order_id);
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>View Orders</li>
</ul>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                <h2>Customer Info</h2>
                    <td class="center">Customer Name</td>
                    <td class="center"><?php echo $customer_info['customer_name'];?></td>
                </tr>
                <tr>
                    <td class="center">Email Address</td>
                    <td class="center"><?php echo $customer_info['customer_email'];?></td>
                </tr>
            </table>            
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                <h2>Shipping Info</h2>
                    <td class="center">Receiver Name</td>
                    <td class="center"><?php echo $shipping_info['customer_name'];?></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><?php echo $shipping_info['company_name'];?></td>
                </tr>
                <tr>
                    <td>Shipping Address</td>
                    <td><?php echo $shipping_info['address'];?>, <?php echo $shipping_info['city'];?>-<?php echo $shipping_info['zip_code'];?>.</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td><?php echo $shipping_info['country'];?></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td><?php echo $shipping_info['mobile_number'];?></td>
                </tr>
            </table>      
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                <h2>Payment Info</h2>
                    <td class="center">Payment Method</td>
                    <td class="center"><?php echo $payment_info['payment_type'];?></td>
                </tr>
                <tr>
                    <td class="center">Payment Status</td>
                    <td class="center"><?php echo $payment_info['payment_status'];?></td>
                </tr>
            </table> 
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                <h2>Ordering Product Info</h2>
                    <td class="center">Product ID</td>
                    <td class="center">Product Name</td>
                    <td class="center">Quantity</td>
                    <td class="center">Price</td>
                </tr>
                <?php while ($product_info=  mysqli_fetch_assoc($product_result)){?>
                <tr>
                    <td class="center"><?php echo $product_info['product_id'];?></td>
                    <td class="center"><?php echo $product_info['product_name'];?></td>
                    <td class="center"><?php echo $product_info['product_sales_quantity'];?></td>
                    <td class="center"><?php $order_total=$product_info['order_total']; echo $product_info['product_price'];?></td>
                </tr>
                <?php }?>
            </table> 
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <h2 class="center">Total Order : BDT <?php if(isset($order_total)){ echo $order_total;}?></h2>                
            </table> 
        </div>
    </div><!--/span-->

</div>