<?php
$query_result=$obj_dash->select_all_order_info();
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>Manage Comments</li>
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
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Order Amount</th>
                        <th>Payment Type</th>
                        <th>Order Date</th>
                        <th>Order Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($order_info=  mysqli_fetch_assoc($query_result)){?>
                    <tr>
                        <td><?php echo $order_info['order_id'];?></td>
                        <td class="center"><?php echo $order_info['customer_name'];?></td>
                        <td class="center">BDT <?php echo $order_info['order_total'];?></td>
                        <td class="center"><?php echo $order_info['payment_type'];?></td>
                        <td class="center"><?php echo $order_info['order_date'];?></td>
                        <td class="center"><?php echo $order_info['order_status'];?></td>
                        <td class="center">
                            <a class="btn btn-primary" href="view_orders.php?id=<?php echo $order_info['order_id'];?>" title="View Order details">
                                <i class="halflings-icon white zoom-in"></i>  
                            </a>
                            <a class="btn btn-success" href="#" title="Download Invoice">
                                <i class="halflings-icon white download"></i>  
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="#" title="Delete Order">
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