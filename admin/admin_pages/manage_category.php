<?php
if (isset($_GET['status'])) {
    $cid = $_GET['id'];
    if ($_GET['status'] == 'unpublish') {
        $obj_cat->unpublish_category($cid);
    }

    if ($_GET['status'] == 'publish') {
        $obj_cat->publish_category($cid);
    }
    if ($_GET['status'] == 'delete') {
        $obj_cat->delete_category($cid);
    }
}



$query_result = $obj_cat->select_category_info();
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
        <h3 style="color: green;">
            <?php 
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            
            ?>
        </h3>
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Category Table</h2>
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
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>   
                <tbody>
                    <?php while ($category_info = mysqli_fetch_assoc($query_result)) { ?>
                        <tr>
                            <td><?php echo $category_info['category_id']; ?></td>
                            <td class="center"><?php echo $category_info['category_name']; ?></td>
                            <td class="center"><?php echo $category_info['category_description']; ?></td>
                            <td class="center">
                                <?php if ($category_info['publication_status'] == 1) { ?>
                                    <span class="label label-success">Publish</span>
                                <?php } else { ?>
                                    <span class="label label-important">Unpublish</span>
                                <?php } ?>
                            </td>
                            <td class="center">
                                <?php if ($category_info['publication_status'] == 1) { ?>
                                <a class="btn btn-danger" href="?status=unpublish&id=<?php echo $category_info['category_id']; ?>" title="Unpulish">
                                        <i class="halflings-icon white thumbs-down"></i>  
                                    </a>
                                <?php } else { ?>
                                <a class="btn btn-success" href="?status=publish&id=<?php echo $category_info['category_id']; ?>" title="Publish">
                                        <i class="halflings-icon white thumbs-up"></i>  
                                    </a>
                                <?php } ?>
                                <a class="btn btn-info" href="edit_category.php?category_id=<?php echo $category_info['category_id']; ?>" title="Edit">
                                    <i class="halflings-icon white edit"></i>  
                                </a>
                                <a class="btn btn-danger" href="?status=delete&id=<?php echo $category_info['category_id'];?>" onclick="return checkDelete();" title="Delete">
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
