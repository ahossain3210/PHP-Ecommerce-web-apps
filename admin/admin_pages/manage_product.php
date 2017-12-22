<?php
$query_result=$obj_product->select_all_product_info();


if(isset($_GET['status']))
{
    $pid=$_GET['id'];
    if($_GET['status']=='unfeatured')
    {
        $obj_product->unfeature_product_info($pid);
    } elseif($_GET['status']=='featured')
    {
        $obj_product->feature_product_info($pid);
    }elseif($_GET['status']=='delete')
    {
        $obj_product->delete_product_info($pid);
    }
}
?>
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="dashboard.php">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>Manage Products</li>
</ul>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage products</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($product_info=  mysqli_fetch_assoc($query_result)){?>
                    <tr>
                        <td><?php echo $product_info['product_id'];?></td>
                        <td><img src="<?php echo $product_info['product_image'];?>" width="80" height="60" alt=""></td>
                        <td><?php echo $product_info['product_name'];?></td>
                        <td><?php echo $product_info['product_quantity'];?> Items</td>
                        <td>BDT<?php echo $product_info['product_price'];?></td>
                        <td class="center">
                            <?php if($product_info['feature_status']==1){?>
                            <span class="label label-success">Featured</span>
                            <?php } else { ?>
                            <span class="label label-important">Unfeatured</span>
                            <?php } ?>
                        </td>
                        <td class="center">
                            <?php if($product_info['feature_status']==1){?>
                            <a class="btn btn-danger" href="?status=unfeatured&id=<?php echo $product_info['product_id'];?>" title="Click to Featured">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            <?php } else {?>
                            <a class="btn btn-success" href="?status=featured&id=<?php echo $product_info['product_id'];?>" title="Click to featured">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            <?php } ?>
                            <a class="btn btn-primary" href="view_details.php?id=<?php echo $product_info['product_id'];?>" title="View details">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            <a class="btn btn-info" href="edit_products.php?id=<?php echo $product_info['product_id'];?>" title="Edit">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&id=<?php echo $product_info['product_id'];?>" title="Delete" onclick="return checkDelete();">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div>