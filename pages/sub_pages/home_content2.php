
<div class="main">
    <div class="wrap">
        <div class="">
            <div class="content-top">
                <div class="lsidebar span_1_of_c1">
                    <p class="">Lorem ipsum dolor sit amet, consectetuer adipiscing</p>
                </div>
                <div class="cont span_2_of_c1">
                    <div class="social">	
                        <ul>	
                            <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
                        </ul>
                    </div>
                    <div class="social">	
                        <ul>	
                            <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                        </ul>
                    </div>
                    <div class="social">	
                        <ul>	
                            <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                        </ul>
                    </div>
                    <div class="social">	
                        <ul>	
                            <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="clear"></div>			
            </div>
        </div>
        <div class="col-sm-12">
            <h1 class="tt_uppercase t_align_c color_dark m_bottom_25 f_weight_500" style="font-size: 25px; line-height: 40px;">Latest Collection</h1>
        </div>
        <div class="content-bottom" style="padding: 0; margin: 0;">

            <div class="box1" style="padding: 0; margin: 0;">
                <?php
                while ($product_info = mysqli_fetch_assoc($query_result)) {
//                    echo '<pre>';
//                    print_r($product_info);
                    ?>
                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="view view-fifth">
                                <div class="top_box">
                                    <h3 class="m_1"><?php echo $product_info['product_name']; ?></h3>
                                    <p class="m_2">Lorem ipsum</p>
                                    <div class="grid_img">
                                        <div class="css3"><img src="assets/<?php echo $product_info['product_image']; ?>" width="100%" height="200" alt="180"></div>
                                        <div class="mask">
                                            <div class="info">Quick View</div>
                                        </div>
                                    </div>
                                    <div class="price">Tk.<?php echo $product_info['product_price']; ?></div>
                                </div>
                            </div>
                            <span class="rating">
                                <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                                <label for="rating-input-1-5" class="rating-star1"></label>
                                <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                                <label for="rating-input-1-4" class="rating-star1"></label>
                                <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                                <label for="rating-input-1-3" class="rating-star1"></label>
                                <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                                <label for="rating-input-1-2" class="rating-star"></label>
                                <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                                <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                                (45)
                            </span>
                            <ul class="list">
                                <li>
                                    <img src="assets/images/plus.png" alt=""/>
                                    <ul class="icon1 sub-icon1 profile_img">
                                        <li><a class="active-icon c1" href="#">Add To Bag </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </a>

                    </div>
                <?php } ?>
                <div class="clear"></div>
            </div>
            <div class="m_top_25">
                <h1 class="tt_uppercase t_align_c color_dark m_bottom_25 f_weight_500" style="font-size: 25px; line-height: 40px;">Mobile Collection </h1>
            </div>
            <div class="box1" style="padding: 0; margin: 0;">
                <div class="col_1_of_3 span_1_of_3"><a href="single.html">
                        <div class="view view-fifth">
                            <div class="top_box">
                                <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/images/pic3.jpg" alt=""/></div>
                                    <div class="mask">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                <div class="price">£480</div>
                            </div>
                        </div>
                        <span class="rating">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                            <label for="rating-input-1-5" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                            <label for="rating-input-1-4" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                            <label for="rating-input-1-3" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                            <label for="rating-input-1-2" class="rating-star"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                            <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                            (45)
                        </span>
                        <ul class="list">
                            <li>
                                <img src="assets/images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1" href="#">Add To Bag </a>
                                        <ul class="sub-icon1 list">
                                            <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </a>

                </div>
                <div class="col_1_of_3 span_1_of_3"><a href="single.html">
                        <div class="view view-fifth">
                            <div class="top_box">
                                <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/images/pic3.jpg" alt=""/></div>
                                    <div class="mask">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                <div class="price">£480</div>
                            </div>
                        </div>
                        <span class="rating">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                            <label for="rating-input-1-5" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                            <label for="rating-input-1-4" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                            <label for="rating-input-1-3" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                            <label for="rating-input-1-2" class="rating-star"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                            <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                            (45)
                        </span>
                        <ul class="list">
                            <li>
                                <img src="assets/images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1" href="#">Add To Bag </a>
                                        <ul class="sub-icon1 list">
                                            <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </a>

                </div>
                <div class="col_1_of_3 span_1_of_3"><a href="single.html">
                        <div class="view view-fifth">
                            <div class="top_box">
                                <h3 class="m_1">Lorem ipsum dolor sit amet</h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/images/pic3.jpg" alt=""/></div>
                                    <div class="mask">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                <div class="price">£480</div>
                            </div>
                        </div>
                        <span class="rating">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                            <label for="rating-input-1-5" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                            <label for="rating-input-1-4" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                            <label for="rating-input-1-3" class="rating-star1"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                            <label for="rating-input-1-2" class="rating-star"></label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                            <label for="rating-input-1-1" class="rating-star"></label>&nbsp;
                            (45)
                        </span>
                        <ul class="list">
                            <li>
                                <img src="assets/images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1" href="#">Add To Bag </a>
                                        <ul class="sub-icon1 list">
                                            <li><h3>sed diam nonummy</h3><a href=""></a></li>
                                            <li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </a>

                </div>


                <div class="clear"></div>
            </div>

        </div>
    </div>
</div>
<!-------------home Content---------->

<?php
$query_result = $obj_app->select_product_info();

$result = $obj_app->select_feature_product();

$publish_sub_cat=$obj_cat->all_publish_sub_category_info();
?>

<div class="index-banner">
    <div class="wmuSlider example1" style="height: 560px;">
        <div class="">
            <div class="wmuSliderWrapper">
                <?php while ($product_info = mysqli_fetch_assoc($result)) { ?>
                    <article style="position: relative; width: 100%; opacity: 1;"> 
                        <div class="banner-wrap">
                            <div class="slider-left">
                                <img src="assets/<?php echo $product_info['product_image']; ?>" width="" height="400" alt=""/> 
                            </div>
                            <div class="slider-right">
                                <h2 class="">New Arrival</h2>
                                <h1 class=""><?php echo $product_info['product_name']; ?></h1>
                                <p class="">Tk.<?php echo $product_info['product_price']; ?></p>
                                <div class="btn"><a href="shop.html">Shop Now</a></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--    <div class="wmuSliderWrapper2">
             <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
            </ul>
            <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="wmuActive">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="">2</a></li>
                <li><a href="#" class="">3</a></li>
                <li><a href="#" class="">4</a></li>
            </ul>
        </div>-->
    <script src="assets/js/jquery.wmuSlider.js"></script> 
    <script type="text/javascript" src="assets/js/modernizr.custom.min.js"></script> 
    <script>
        $('.example1').wmuSlider();
    </script> 	   
</div>
<?php
//echo "all products pages";
?>

<div class="login">  
    <div class="wrap">
        <div class="rsidebar span_1_of_left">
            <section  class="sky-form" id="sidebar_accordion">
                <h4 class="m_top_0 p_top_0 tt_uppercase t_align_c f_weight_b" style="padding: 10px 0px;">Category</h4>
                    <div id="sidebar_cat">
                        <?php while ($sub_category_info=  mysqli_fetch_assoc($publish_sub_cat)){?>
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
                                <li><a href="#"><?php echo $nested_category_info['nested_category_name'];?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                        <?php }?>
                    </div>
            </section>
        </div>
        <div class="cont span_2_of_3">
            <div class="mens-toolbar">
                <h3 class="color_dark t_align_c tt_uppercase f_weight_b">Latest Products</h3>
            </div>
            <div class="box1">
                <?php while ($product_info=  mysqli_fetch_assoc($query_result)){?>
                <div class="col_1_of_single1 span_1_of_single1">
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <a href="#">
                                <h3 class="m_1"><?php echo $product_info['product_name'];?></h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/<?php echo $product_info['product_image'];?>" width="100%" height="200" alt=""/></div>
                                    <div class="mask1">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                </a>
                                <p class="price scheme_color" style="font-size: 14px; ">Tk.<?php echo $product_info['product_price'];?> </p>
                            </div>
                        </div>
                        <span class="rating1 ">
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
                        <ul class="list2  ">
                            <li id="">
                                <img src="assets//images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1 f_size_13" href="#">Add To Bag </a></li>
                                </ul>
                            </li>
                        </ul>
<!--                        <div class="clear"></div>-->
                    </div>
                <?php }?>
                
                <div class="clear"></div>
                
            </div>
            <div class="mens-toolbar">
                <h3 class="tt_uppercase color_dark f_weight_b t_align_c">Mobile Collection</h3>
            </div>
            <div class="box1">
                <?php 
                $mobile_info=$obj_app->select_mobile_info();
                while ($product_info=  mysqli_fetch_assoc($mobile_info)){?>
                <div class="col_1_of_single1 span_1_of_single1">
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <a href="#">
                                <h3 class="m_1"><?php echo $product_info['product_name'];?></h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/<?php echo $product_info['product_image'];?>" width="100%" height="200" alt=""/></div>
                                    <div class="mask1">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                </a>
                                <p class="price scheme_color" style="font-size: 14px; ">Tk.<?php echo $product_info['product_price'];?></p>
                            </div>
                        </div>
                        <span class="rating1 ">
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
                        <ul class="list2  ">
                            <li id="">
                                <img src="assets//images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1 f_size_13" href="#">Add To Bag </a></li>
                                </ul>
                            </li>
                        </ul>
<!--                        <div class="clear"></div>-->
                    </div>
                <?php }?>
                
                <div class="clear"></div>
                
            </div>
            <div class="mens-toolbar">
                <h3 class="tt_uppercase color_dark f_weight_b t_align_c">Punjabi Collection</h3>
            </div>
            <div class="box1">
                <?php 
                $punjabi_info=$obj_app->select_punjabi_info();
                while ($product_info=  mysqli_fetch_assoc($punjabi_info)){?>
                <div class="col_1_of_single1 span_1_of_single1">
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <a href="#">
                                <h3 class="m_1"><?php echo $product_info['product_name'];?></h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/<?php echo $product_info['product_image'];?>" width="100%" height="200" alt=""/></div>
                                    <div class="mask1">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                </a>
                                <p class="price scheme_color" style="font-size: 14px; ">Tk.<?php echo $product_info['product_price'];?></p>
                            </div>
                        </div>
                        <span class="rating1 ">
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
                        <ul class="list2  ">
                            <li id="">
                                <img src="assets//images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1 f_size_13" href="#">Add To Bag </a></li>
                                </ul>
                            </li>
                        </ul>
<!--                        <div class="clear"></div>-->
                    </div>
                <?php }?>
                
                <div class="clear"></div>
                
            </div>
            <div class="mens-toolbar">
                <h3 class="tt_uppercase color_dark f_weight_b t_align_c">T-Shirt Collection</h3>
            </div>
            <div class="box1">
                <?php 
                $mobile_info=$obj_app->select_mobile_info();
                while ($product_info=  mysqli_fetch_assoc($mobile_info)){?>
                <div class="col_1_of_single1 span_1_of_single1">
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <a href="#">
                                <h3 class="m_1"><?php echo $product_info['product_name'];?></h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/<?php echo $product_info['product_image'];?>" width="100%" height="200" alt=""/></div>
                                    <div class="mask1">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                </a>
                                <p class="price scheme_color" style="font-size: 14px; ">Tk.<?php echo $product_info['product_price'];?></p>
                            </div>
                        </div>
                        <span class="rating1 ">
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
                        <ul class="list2  ">
                            <li id="">
                                <img src="assets//images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1 f_size_13" href="#">Add To Bag </a></li>
                                </ul>
                            </li>
                        </ul>
<!--                        <div class="clear"></div>-->
                    </div>
                <?php }?>
                
                <div class="clear"></div>
                
            </div>
            <div class="mens-toolbar">
                <h3 class="tt_uppercase color_dark f_weight_b t_align_c">Punjabi Collection</h3>
            </div>
            <div class="box1">
                <?php 
                $mobile_info=$obj_app->select_mobile_info();
                while ($product_info=  mysqli_fetch_assoc($mobile_info)){?>
                <div class="col_1_of_single1 span_1_of_single1">
                        <div class="view1 view-fifth1">
                            <div class="top_box">
                                <a href="#">
                                <h3 class="m_1"><?php echo $product_info['product_name'];?></h3>
                                <p class="m_2">Lorem ipsum</p>
                                <div class="grid_img">
                                    <div class="css3"><img src="assets/<?php echo $product_info['product_image'];?>" width="100%" height="200" alt=""/></div>
                                    <div class="mask1">
                                        <div class="info">Quick View</div>
                                    </div>
                                </div>
                                </a>
                                <p class="price scheme_color" style="font-size: 14px; ">Tk.<?php echo $product_info['product_price'];?></p>
                            </div>
                        </div>
                        <span class="rating1 ">
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
                        <ul class="list2  ">
                            <li id="">
                                <img src="assets//images/plus.png" alt=""/>
                                <ul class="icon1 sub-icon1 profile_img">
                                    <li><a class="active-icon c1 f_size_13" href="#">Add To Bag </a></li>
                                </ul>
                            </li>
                        </ul>
<!--                        <div class="clear"></div>-->
                    </div>
                <?php }?>
                
                <div class="clear"></div>
                
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>