<?php
$pid=$_GET['id'];

$query_result=$obj_product->select_product_details_info_by_id($pid);
$product_info=  mysqli_fetch_assoc($query_result);
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>View product details</li>
</ul>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Product details</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <tr>
                    <td>Product ID :</td>
                    <td><?php echo $product_info['product_id'];?></td>
                </tr>
                <tr>
                    <td>Product Name :</td>
                    <td><?php echo $product_info['product_name'];?></td>
                </tr>
                <tr>
                    <td>Product Image</td>
                    <td><img src="<?php echo $product_info['product_image'];?>" width="150" height="80" alt=""></td>
                </tr>
                <tr>
                    <td>Manufacturer Name</td>
                    <td><?php echo $product_info['manufacturer_name'];?></td>
                </tr>
                <tr>
                    <td>Category Name</td>
                    <td><?php echo $product_info['category_name'];?></td>
                </tr>
                <tr>
                    <td>Sub-Category Name</td>
                    <td><?php echo $product_info['sub_category_name'];?></td>
                </tr>
                <tr>
                    <td>Nested Category Name :</td>
                    <td><?php echo $product_info['nested_category_name'];?></td>
                </tr>
                <tr>
                    <td>Quantity :</td>
                    <td>Available <?php echo $product_info['product_quantity'];?> items</td>
                </tr>
                <tr>
                    <td>Product Price :</td>
                    <td>BDT <?php echo $product_info['product_price'];?></td>
                </tr>
                <tr>
                    <td>Previous Price :</td>
                    <td>BDT <?php echo $product_info['product_p_price'];?></td>
                </tr>
            </table>            
        </div>
    </div><!--/span-->

</div>