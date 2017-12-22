<?php
$result = $obj_app->select_feature_product();
?>
<div class="index-banner">
    <div class="wmuSlider example1" style="height: 560px;">
        <div class="container">
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
