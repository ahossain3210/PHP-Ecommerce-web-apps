<?php
$category_id=$_GET['category_id'];

$query_result=$obj_cat->select_category_info_by_id($category_id);
$category_info=  mysqli_fetch_assoc($query_result);

if(isset($_POST['btn']))
{
    $message=$obj_cat->update_category($_POST);
}
?>


<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Dashboard</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li>Edit category</li>
</ul>

<div class="row-fluid sortable">
    <h2 style="color: green">
        
    </h2>
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Category</h2>
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
            <form name="edit_cat_form" class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name </label>
                        <div class="controls">
                            <input type="text" name="category_name" value="<?php echo $category_info['category_name'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                            <input type="hidden" name="category_id" value="<?php echo $category_info['category_id'];?>" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4">
                       </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Category Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="textarea2" name="category_description" rows="3"><?php echo $category_info['category_description'];?></textarea>
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
                        <button type="submit" name="btn" class="btn btn-primary">Update Category</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
<script>
    document.forms['edit_cat_form'].elements['publication_status'].value='<?php echo $category_info['publication_status'];?>';
</script>