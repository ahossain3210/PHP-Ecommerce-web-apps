<?php
//...........Manufacturer Products...........

$mid=$_GET['id'];
//echo $mid;
$manufacturer_products=$obj_app->select_manufacturer_product_by_id($mid);

//...........Add to cart.............

if (isset($_POST['btn'])) 
    {
    $obj_cart->add_to_cart($_POST);
}

?>
<div class="login">  
    <div class="wrap">
        <div class="rsidebar span_1_of_left">
            <section  class="sky-form" id="sidebar_accordion">
                <h4 class="m_top_0 p_top_0 tt_uppercase t_align_c f_weight_b" style="padding: 10px 0px;">Category</h4>
                    <div id="sidebar_cat">
                        <?php 
                        $publish_sub_cat=$obj_cat->all_publish_sub_category_info();
                        while ($sub_category_info=  mysqli_fetch_assoc($publish_sub_cat))
                           {
                        ?> 
                        <div class="cat_item">
                            <input type="checkbox" id="<?php echo $sub_category_info['sub_category_id'];?>">
                            <label for="<?php echo $sub_category_info['sub_category_id'];?>"><?php echo $sub_category_info['sub_category_name'];?> <span class="f_right">+</span></label>
                            <ul class="active">
                                <?php
                                $sid=$sub_category_info['sub_category_id'];
                                $nested_result=$obj_app->all_nested_category_by_sub_id($sid);
                                while($nested_category_info=  mysqli_fetch_assoc($nested_result))
                                {
                                ?>
                                <li><a href="nested_category_products.php?nid=<?php echo $nested_category_info['nested_category_id'];?>"><?php echo $nested_category_info['nested_category_name'];?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <?php }?>
                        
                    </div>
            </section>
            <section  class="sky-form" id="sidebar_accordion">
                <h4 class="m_top_30 m_bottom_30 p_top_0 tt_uppercase t_align_c f_weight_b">Bestseller</h4>
                <?php 
                $bestseller_result = $obj_app->select_feature_product();
                    while ($product_info=  mysqli_fetch_assoc($bestseller_result))
                        {
                    ?>
                <div class="best_seller m_bottom_20" style="width:100%; float: left;">
                    <div class="best_seller_left" style="width:30%; float: left;">
                        <a href="product_details.php?product_id=<?php echo $product_info['product_id']; ?>"><img src="assets/<?php echo $product_info['product_image'];?>" width="90%" height="70" alt=""></a>
                    </div>
                    <div class="best_seller_title" style="width: 80%;">
                        <p class="m_top_15"><a href="product_details.php?product_id=<?php echo $product_info['product_id']; ?>" class="f_size_13" title="<?php echo $product_info['product_name'];?>"><?php echo $product_info['product_name'];?></a></p>
                    </div>
                </div>
                <?php }?>
            </section>
        </div>
        <div class="cont span_2_of_3">
            <div class="mens-toolbar">
                <h3 class="color_dark t_align_c tt_uppercase f_weight_b">All Available Products</h3>
            </div>
            <div class="box1">
                <?php while ($product_info=  mysqli_fetch_assoc($manufacturer_products)){?>
                <div class="col_1_of_single1 span_1_of_single1">
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <a href="product_details.php?product_id=<?php echo $product_info['product_id'];?>">
                                <h3 class="m_1"><?php echo $product_info['product_name'];?></h3>
                                <p class="m_2"><?php echo $product_info['manufacturer_name'];?></p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/<?php echo $product_info['product_image'];?>" width="100%" height="200" alt=""/></div>
                                    <div class="mask1">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                </a>
                                <p class="price scheme_color f_size_14">Tk.<?php echo $product_info['product_price'];?> <span class="color_dark m_left_10" style="font-size:13px;"><small><s>Tk.<?php echo $product_info['product_p_price'];?></s></small></span></p>
                            </div>
                        </div>
                        <span class="rating1">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                            <label for="rating-input-1-5" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                            <label for="rating-input-1-4" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                            <label for="rating-input-1-3" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                            <label for="rating-input-1-2" class="rating-star"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                            <label for="rating-input-1-1" class="rating-star"></label>
                        </span>
                        <ul class="list2">
                            <li>
                                <!--<img src="assets//images/plus.png" alt=""/>-->
                                <ul class="icon1 sub-icon1 profile_img">
                                    <form action="" method="post">
                                        <input type="hidden" name="product_sales_quantity" value="1">
                                        <input type="hidden" name="product_id" value="<?php echo $product_info['product_id']; ?>">
                                        <li><input id="add_to_cart" name="btn" class="active-icon tt_uppercase" type="submit" value="+ Add to cart" ></li>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                <?php }?>
                
                <div class="clear"></div>
                
            </div>
            
            
        </div>
        <div class="clear"></div>
    </div>
</div>