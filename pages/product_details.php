<?php

$pid = $_GET['product_id'];

$query_result = $obj_app->select_product_info_by_id($pid);

$product_info = mysqli_fetch_assoc($query_result);


//<! ---- ADD to CART-------->

if (isset($_POST['btn']))
{
    $obj_cart->add_to_cart($_POST);
}

?>

<div class="single">
    <div class="wrap">
        <div class="rsidebar span_1_of_left">
            <section  class="sky-form" id="sidebar_accordion">
                <h4 class="m_top_0 p_top_0 tt_uppercase t_align_c f_weight_b">Category</h4>
                <div id="sidebar_cat">
                    <?php
                    $publish_sub_cat = $obj_cat->all_publish_sub_category_info();

                    while ($sub_category_info = mysqli_fetch_assoc($publish_sub_cat)) {
                        ?>
                        <div class="cat_item">
                            <input type="checkbox" id="<?php echo $sub_category_info['sub_category_id']; ?>">
                            <label for="<?php echo $sub_category_info['sub_category_id']; ?>"><?php echo $sub_category_info['sub_category_name']; ?> <span class="f_right">+</span></label>
                            <ul class="active">
                                <?php
                                $sid = $sub_category_info['sub_category_id'];
                                $nested_result = $obj_app->all_nested_category_by_sub_id($sid);
                                while ($nested_category_info = mysqli_fetch_assoc($nested_result)) {
                                    ?>
                                    <li><a href="nested_category_products.php?nid=<?php echo $nested_category_info['nested_category_id'];?>"><?php echo $nested_category_info['nested_category_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } ?>

                </div>
            </section>
            
        </div>
        <div class="cont span_2_of_3">
            <div class="labout span_1_of_a1">
                <!-- start product_slider -->
                <ul id="etalage">
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="assets/<?php echo $product_info['product_image']; ?>" />
                            <img class="etalage_source_image" src="assets/<?php echo $product_info['product_image']; ?>" width="100%" height="200" alt="asssets/<?php echo $product_info['product_image']; ?>" />
                        </a>
                    </li>
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="assets/<?php echo $product_info['product_image']; ?>" />
                            <img class="etalage_source_image" src="assets/<?php echo $product_info['product_image']; ?>" width="100%" height="200" alt="asssets/<?php echo $product_info['product_image']; ?>" />
                        </a>
                    </li>
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="assets/<?php echo $product_info['product_image']; ?>" />
                            <img class="etalage_source_image" src="assets/<?php echo $product_info['product_image']; ?>" width="100%" height="200" alt="asssets/<?php echo $product_info['product_image']; ?>" />
                        </a>
                    </li>
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="assets/<?php echo $product_info['product_image']; ?>" />
                            <img class="etalage_source_image" src="assets/<?php echo $product_info['product_image']; ?>" width="100%" height="200" alt="asssets/<?php echo $product_info['product_image']; ?>" />
                        </a>
                    </li>
                    <li>
                        <a href="optionallink.html">
                            <img class="etalage_thumb_image" src="assets/<?php echo $product_info['product_image']; ?>" />
                            <img class="etalage_source_image" src="assets/<?php echo $product_info['product_image']; ?>" width="100%" height="200" alt="asssets/<?php echo $product_info['product_image']; ?>" />
                        </a>
                    </li>

                </ul>


                <!-- end product_slider -->
            </div>
            <div class="cont1 span_2_of_a1">
                <h3 class="m_3"><?php echo $product_info['product_name']; ?></h3>

                <div class="price_single f_size_13 m_top_25">
                    <span class="actual" style="font-size: 20px;">BDT <?php echo $product_info['product_price']; ?></span>
                    <span class="reducedfrom" style="font-size:14px;">Tk.<?php echo $product_info['product_p_price']; ?></span>
                    <!--<p class="m_top_15">Category : <span class="scheme_color"><?php// echo $product_info['category_name']; ?></span></p>-->
                    <p class="m_top_10 m_bottom_10">Brand : <span class="scheme_color"><?php echo $product_info['manufacturer_name']; ?></span></p>
                    <?php if ($product_info['product_quantity'] > 0) { ?>
                    <p class="m_top_10 m_bottom_10"><b>Quantity</b> : <?php echo $product_info['product_quantity']; ?> item's<span style="color:green;" class="f_size_13"> (In Stock)</span></p>
                    <?php } else { ?>
                    <p class="m_top_10 m_bottom_10">Quantity : <em>0 item's <span style="color:red; font-size: 13px;"> (Stock out of sales)</span></em></p>
                    <?php } ?>
                </div>
                <ul class="options">
                    <h4 class="m_9">Select a Size</h4>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <div class="clear"></div>
                </ul>
                <div class="btn_form">
                    <form action="" method="post">
                        <input style="padding: 5px; width: 50px;" type="number" name="product_sales_quantity" value="1"> <br><br>
                        <input type="hidden" name="product_id" value="<?php echo $product_info['product_id'];?>" title="">
                        <input type="submit" name="btn" value="Add to cart" title="Add to cart">
                    </form>
                </div>
                <ul class="add-to-links">
                    <li><img src="assets/images/wish.png" alt=""/><a href="#">Add to wishlist</a></li>
                </ul>
                <p class="m_desc"><?php echo $product_info['product_short_description']; ?></p>

                <div class="social_single">	
                    <ul>	
                        <li class="fb"><a href="#"><span> </span></a></li>
                        <li class="tw"><a href="#"><span> </span></a></li>
                        <li class="g_plus"><a href="#"><span> </span></a></li>
                        <li class="rss"><a href="#"><span> </span></a></li>		
                    </ul>
                </div>
            </div>
            <div class="clear"></div>



            <div class="toogle">
                <h3 class="m_3">Product Details</h3>
                <p class="m_text">
                    <?php echo $product_info['product_long_description']; ?>
                </p>
            </div>
        </div>
        <div class="clear"></div>
        <div class="mens-toolbar m_top_25" style="width:98%;">
            <h3 class="tt_uppercase color_dark f_weight_b">Related Products</h3>
        </div>
        <ul id="flexiselDemo3">
            <?php
            $category_id=$product_info['category_id'];
//            echo $category_id;
            $related_result=$obj_app->select_related_product_info($category_id);
            while ($related_product_info=  mysqli_fetch_assoc($related_result))
            {
//                echo"<pre>";
//                print_r($related_product_info);
//                exit();
//            }
            ?>
            <li>
                <img src="assets/<?php echo $related_product_info['product_image'];?>" width="100%" height="180" alt="" />
                <div class="grid-flex">
                    <a href="product_details.php?product_id=<?php echo $related_product_info['product_id'];?>"><?php echo $related_product_info['product_name'];?></a>
                    <p style="color: #e74c3c">Tk.<?php echo $related_product_info['product_price'];?></p>
                </div>
            </li>
            <?php }?>
        </ul>
        <div class="m_bottom_30"></div>
        
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo1").flexisel();
                $("#flexiselDemo2").flexisel({
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                        }
                    }
                });
                visibleItems: 3


                $("#flexiselDemo3").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="assets/js/jquery.flexisel.js"></script>
    </div>
</div>
