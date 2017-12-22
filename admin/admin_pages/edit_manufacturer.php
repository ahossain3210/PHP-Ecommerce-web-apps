<?php
$mid=$_GET['mid'];
//echo $mid;
$query_result=$obj_manu->select_manufacturer_by_id($mid);
$manufacturer_info=  mysqli_fetch_assoc($query_result);

$result=$obj_cat->all_publish_category_info();
?>

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>Edit Manufacturer</li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Manufacturer Form</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <h3 style="color: green;">
                <?php if (isset($message)){ echo $message; }?>
            </h3>
            <form name="edit_manu_form" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacturer Name </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="manufacturer_name" value="<?php echo $manufacturer_info['manufacturer_name'];?>" data-provide="typeahead" data-items="4">
                       </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option>---Select---</option>
                                <?php while ($category_info=mysqli_fetch_assoc($result)){
                                    
                                if($category_info['category_id']==$manufacturer_info['category_id'])
                                {
                                ?>
                                    <option value="<?php echo $category_info['category_id'];?>" selected="true"><?php echo $category_info['category_name'];?></option>
                                <?php }else {?>
                                    <option value="<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name'];?></option>
                                <?php } }?>
                            </select>
                        </div>
                    </div> 
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Manufacturer Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="manufacturer_description" rows="3"><?php echo $manufacturer_info['manufacturer_description'];?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacturer Image </label>
                        <div class="controls">
                            <input type="file" class="span6 typeahead" id="typeahead" name="manufacturer_image"  data-provide="typeahead" data-items="4"><img src="<?php echo $manufacturer_info['manufacturer_image'];?>" width="100" height="50" alt="">
                       </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option>Select</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>   

                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save Manufacturer</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div>
<script>
    
    document.forms['edit_manu_form'].elements['publication_status'].value='<?php echo $manufacturer_info['publication_status'];?>';
</script>