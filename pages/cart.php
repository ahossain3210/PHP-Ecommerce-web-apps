<?php
//session_start();

$session_id = session_id();

$cart_product = $obj_cart->selecet_cart_product_by_session_id($session_id);

//...........Update cart...........

if(isset($_POST['update']))
{
//    $temp_cart_id=$_POST['temp_cart_id'];
    $obj_cart->update_cart($_POST);
}

// ..........Update Cart End ..............


//..........Delete Cart..........

if (isset($_GET['status'])) {
    $temp_cart_id = $_GET['id'];

    if ($_GET['status'] == 'delete') {
        $obj_cart->delete_cart_info($temp_cart_id);
    }
}

//..........Feature Products ..............

//$manufacturer_result=$obj_app->all_publish_manufacturer_info();
$result = $obj_app->select_feature_product();


?>

<div class="wrap">
    
    <div class="rsidebar span_1_of_left">
            <section  class="sky-form" id="sidebar_accordion">
                <h4 class="m_top_0 p_top_0 tt_uppercase t_align_c f_weight_b">Category</h4>
                <div id="sidebar_cat">
                    <?php 
                    $publish_sub_cat = $obj_cat->all_publish_sub_category_info();
                    while ($sub_category_info = mysqli_fetch_assoc($publish_sub_cat)) 
                        { 
                    ?>
                        <div class="cat_item">
                            <input type="checkbox" id="<?php echo $sub_category_info['sub_category_id']; ?>">
                            <label for="<?php echo $sub_category_info['sub_category_id']; ?>"><?php echo $sub_category_info['sub_category_name']; ?> <span class="f_right">+</span></label>
                            <ul class="active">
                                    <?php
                                    $sid = $sub_category_info['sub_category_id'];
                                    $nested_result = $obj_app->all_nested_category_by_sub_id($sid);
                                    while ($nested_category_info = mysqli_fetch_assoc($nested_result)) 
                                                {
                                    ?>
                                        <li><a href="nested_category_products.php?nid=<?php echo $nested_category_info['nested_category_id']; ?>"><?php echo $nested_category_info['nested_category_name']; ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                            <?php } ?>

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
        <div class="m_bottom_30" id="cart" style="font-size: 13px;">
        <h3 class="tt_uppercase f_weight_600 m_bottom_30 m_top_30 f_size_20">Cart</h3>
        <table border="1" cellpadding="10" width="100%" style="border: solid 1px #000; text-align: center; padding: 10px;">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Sub-total</th>
            </tr>
            <tbody>
                <?php $sum=0; while ($cart_product_info = mysqli_fetch_assoc($cart_product)) { ?>
                    <tr style="border: 1px solid #000;">
                        <td>
                            <img src="assets/<?php echo $cart_product_info['product_image']; ?>" width="120" height="100" alt="">
                        </td>
                        <td><?php echo $cart_product_info['product_name']; ?></td>
                        <td class="scheme_color">BDT <?php echo $cart_product_info['product_price']; ?></td>
                        <td>
                            <form action="" method="post">
                                <p><button type="submit" name="update">Update</button></p>
                                <input class="m_bottom_10 m_top_10" type="number" name="product_sales_quantity" value="<?php echo $cart_product_info['product_sales_quantity']; ?>">
                                <input class="m_bottom_10" type="hidden" name="temp_cart_id" value="<?php echo $cart_product_info['temp_cart_id'];?>">
                                <p><a href="?status=delete&id=<?php echo $cart_product_info['temp_cart_id']; ?>">Remove</a></p>
                            </form>
                        </td>
                        <td class="scheme_color">BDT 
                            <?php 
                            echo $sub_total = $cart_product_info['product_price'] * $cart_product_info['product_sales_quantity']; 
                            ?>
                        </td>
                    </tr>
                <?php $sum=$sum+$sub_total;} ?>
            </tbody>
        </table>
        <div style="width: 100%; margin: 20px 0px;">
            <p class="t_align_r f_size_16"><label class="t_align_l">Shipment fee : </label> <span>BDT <?php $shipment_fee=100; echo $shipment_fee;?></span></p>
            <p class="t_align_r p_top_10 f_size_16"><label class="t_align_l">Discount (15%) : </label> 
                <span>BDT 
                <?php 
                $discount= ($sum*15)/100; 
                $_SESSION['discount']=$discount;
                echo $discount; 
                ?>
                </span>
            </p>
            <p class="t_align_r p_top_10 scheme_color f_size_18"><label class="t_align_l">Grand Total : </label> 
                <span>BDT 
                    <?php 
                    $total=($sum+$shipment_fee)-$discount;
                    $_SESSION['grand_total']=$total;
                    echo $total; 
                    ?>
                </span>
            </p>
        </div>
        <div class="m_top_10 checkout" style="width: 100%;">
            <?php
            $customer_id= isset($_SESSION['customer_id']);
            $shipping_id=  isset($_SESSION['shipping_id']);
           
            if($customer_id!=NULL && $shipping_id!=NULL)
                {
            ?>  
                <a href="view_shipping.php" class="btn-default color_light bg_scheme_color p_10 m_top_10" title="Proceed to checkout">Proceed to checkout</a>  
            <?php }  else { ?>
                <a href="checkout.php" class="btn-default color_light bg_scheme_color p_10 m_top_10" title="Proceed to checkout">Proceed to checkout</a>
            <?php } ?>
        </div>
    </div>
    </div>
    <div class="clear"></div>
    <h3 class="tt_uppercase color_dark f_weight_b m_bottom_30 m_top_25 color_blue">You may also buy </h3>
        
        <ul id="flexiselDemo3">
            <?php while ($product_info=  mysqli_fetch_assoc($result)){?>
            <li>
                <a href="product_details.php?product_id=<?php echo $product_info['product_id']; ?>">
                    <img src="assets/<?php echo $product_info['product_image'];?>" width="150" height="180" alt="" />
                </a>    
                <div class="grid-flex">
                    <a href="product_details.php?product_id=<?php echo $product_info['product_id']; ?>" class="scheme_color"><?php echo $product_info['product_name'];?></a>
                    <p class="scheme_color">BDT <?php echo $product_info['product_price'];?></p>
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