<?php
$query_result=$obj_manu->select_manufacturer_info();

if (isset($_GET['status'])){
    $mid=$_GET['mid'];
//    echo $mid;
    
    if ($_GET['status']=='unpublish')
    {
        $obj_manu->unpublish_manufacturer($mid);
    } elseif ($_GET['status']=='publish') {
        $obj_manu->publish_manufacturer($mid);
    } elseif($_GET['status']=='delete')
    {
        $obj_manu->delete_manufacturer_by_id($mid);
    }
    
}

?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>>Manage Manufacturer</a></li>
</ul>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Manage Manufacturer</h2>
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
                        <th>MID</th>
                        <th>Image</th>
                        <th>Manufacturer Name</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($manufacturer_info=  mysqli_fetch_assoc($query_result)){?>
                    <tr>
                        <td><?php echo $manufacturer_info['manufacturer_id'];?></td>
                        <td><img src="<?php echo $manufacturer_info['manufacturer_image'];?>" width="80" height="60" alt=""></td>
                        <td><?php echo $manufacturer_info['manufacturer_name'];?></td>
                        <td><?php echo $manufacturer_info['category_name'];?></td>
                        <td><?php echo $manufacturer_info['manufacturer_description'];?></td>
                        
                        <td class="center">
                            <?php if($manufacturer_info['publication_status']==1){?>
                            <span class="label label-success">Published</span>
                            <?php } else {?>
                            <span class="label label-important">Unpublish</span>
                            <?php }?>
                        </td>
                        <td class="center">
                            <?php if($manufacturer_info['publication_status']==1){?>
                            <a class="btn btn-danger" href="?status=unpublish&mid=<?php echo $manufacturer_info['manufacturer_id'];?>" title="Click to Unpublish">
                                <i class="halflings-icon white thumbs-down"></i>  
                            </a>
                            <?php } else {?>
                            <a class="btn btn-success" href="?status=publish&mid=<?php echo $manufacturer_info['manufacturer_id'];?>" title="Click to Publish">
                                <i class="halflings-icon white thumbs-up"></i>  
                            </a>
                            <?php }?>
                            <a class="btn btn-info" href="edit_manufacturer.php?mid=<?php echo $manufacturer_info['manufacturer_id'];?>">
                                <i class="halflings-icon white edit"></i>  
                            </a>
                            <a class="btn btn-danger" href="?status=delete&mid=<?php echo $manufacturer_info['manufacturer_id'];?>" onclick="return checkDelete();" title="Delete">
                                <i class="halflings-icon white trash"></i> 
                            </a>
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div>