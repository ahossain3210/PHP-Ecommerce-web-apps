<?php
$query_result=$obj_cat->all_publish_category_info();
?>

<div class="header-bottom">
    <div class="wrap">
        <!-- start header menu -->
        <ul class="megamenu skyblue">
            <li><a class="color2" href="index.php">Home</a></li>
            <li><a class="color1" href="shop.php">Shop</a></li>
            <?php while ($category_info=  mysqli_fetch_assoc($query_result)){?>
            <li class="grid"><a class="color7" href="category_products.php?cid=<?php echo $category_info['category_id'];?>"><?php echo $category_info['category_name'];?></a>
                <div class="megapanel">
                    <div class="row">
                        <?php
                        $cid=$category_info['category_id'];
                        $result=$obj_app->all_publish_sub_category_by_category_id($cid);
                        while ($sub_category_info=  mysqli_fetch_assoc($result))
                        {
                        ?>
                        <div class="col1">
                            <div class="h_nav">
                                <h4><?php echo $sub_category_info['sub_category_name'];?></h4>
                                <ul>
                                    <?php
                                    $sid=$sub_category_info['sub_category_id'];
                                    $publish_nested_category=$obj_app->all_nested_category_by_sub_id($sid);
                                    while ($nested_category_info=  mysqli_fetch_assoc($publish_nested_category))
                                    {
                                    ?>
                                    <li><a href="nested_category_products.php?nid=<?php echo $nested_category_info['nested_category_id'];?>"><?php echo $nested_category_info['nested_category_name'];?></a></li>
                                    <?php }?>
                                </ul>	
                            </div>							
                        </div>
                        <?php }?>
                        <img src="assets/images/nav_img.jpg" alt=""/>
                    </div>
                </div>
            </li>
            <?php }?>
            <li><a class="color12" href="contact.php">Contact</a></li>
        </ul>
        
        <div class="clear"></div>
    </div>
</div>