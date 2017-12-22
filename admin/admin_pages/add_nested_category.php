
<?php
$query_result=$obj_cat->all_publish_category_info();
$result=$obj_cat->all_publish_sub_category_info();
$publish_manufacturer=$obj_manu->all_publish_manufacturer_info();

if(isset($_POST['btn']))
{
    $message=$obj_cat->save_nested_category_info($_POST);
}
?>



<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>Add Nested Category</li>
</ul>

<div class="row-fluid sortable">
    <h2 style="color: green">
        
    </h2>
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Nested Category Form</h2>
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
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Nested category Name </label>
                        <div class="controls">
                            <input type="text" class="span6 typeahead" id="typeahead" name="nested_category_name"  data-provide="typeahead" data-items="4">
                       </div>
                    </div>
                      <div class="control-group">
                        <label class="control-label" for="selectError3">Category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="category_id">
                                <option>---Select---</option>
                                <?php while ($category_info=  mysqli_fetch_assoc($query_result)){?>
                                <option value="<?php echo $category_info['category_id']?>"><?php echo $category_info['category_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>  
                      <div class="control-group">
                        <label class="control-label" for="selectError3">Sub-category Name</label>
                        <div class="controls">
                            <select id="selectError3" name="sub_category_id">
                                <option>---Select---</option>
                                <?php while ($sub_category_info=  mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $sub_category_info['sub_category_id']?>"><?php echo $sub_category_info['sub_category_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>  
                      <div class="control-group">
                        <label class="control-label" for="selectError3">Manufacturer Name</label>
                        <div class="controls">
                            <select id="selectError3" name="manufacturer_id">
                                <option>---Select---</option>
                                <?php while ($manufacturer_info=  mysqli_fetch_assoc($publish_manufacturer)){?>
                                <option value="<?php echo $manufacturer_info['manufacturer_id']?>"><?php echo $manufacturer_info['manufacturer_name']?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Publication Status</label>
                        <div class="controls">
                            <select id="selectError3" name="publication_status">
                                <option>---Select---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>   

                    <div class="form-actions">
                        <button type="submit" name="btn" class="btn btn-primary">Save Info</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->