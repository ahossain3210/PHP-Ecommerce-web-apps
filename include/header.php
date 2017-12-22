<?php 
//    echo $customer_id;
    if(isset($_GET['status']))
    {
        if($_GET['status']=='logout')
        {
            $obj_app->customer_logout();
        }
    }
?>
<div class="wrap"> 
    <div class="logo">
        <a href="home.php"><img src="assets/images/logo.png" width="200" height="50" alt=""/></a>
        <!--<input type="text" placeholder="Search.." style="padding: 10px;">-->
    </div>

    <div class="cssmenu">
        <ul>
            <li><a href="cart.php">Cart</a></li>| 
            <!--<li><a href="checkout.php">My Account</a></li>|--> 
            <li class="active"><a href="wishlist.php">Wishlist</a></li>|
            <li><a href="orderlist.php">Orderlist</a></li>|
            
            <?php
             $customer_id=  isset($_SESSION['customer_id']);
             $shipping_id=  isset($_SESSION['shipping_id']);
             if($customer_id==NULL && $shipping_id==NULL)
                {
            ?>
                 <li><a href="checkout.php">Checkout</a></li>
            <?php } elseif($customer_id!=NULL && $shipping_id!=NULL){?>
                 <li><a href="view_shipping.php">Checkout</a></li>
            <?php } elseif($customer_id!=NULL && $shipping_id==NULL){?>
                <li><a href="shipping.php">Checkout</a></li>
            <?php } if($customer_id!=NULL){ ?>
                 |  <li><a href="?status=logout" class="color_green f_weight_b" style="color: green;">Logout</a></li>
            <?php  }?>
            
            
        </ul>
    </div>
    <ul class="icon2 sub-icon2 profile_img">
        <li class="m_top_15"><a class="active-icon c2 m_top_15" href="cart.php"><img src="assets/images/cart2.png"></a>
            <ul class="sub-icon2 list">
                <div class="headline">
                    <p style="">Recently added items</p>
                </div>
                <?php
                if (isset($_GET['status'])) 
                    {
                    $temp_cart_id = $_GET['id'];

                    if ($_GET['status'] == 'delete') 
                        {
                        $obj_cart->delete_cart_info($temp_cart_id);
                    }
                }
                $session_id = session_id();

                $cart_product = $obj_cart->selecet_cart_product_by_session_id($session_id);
                while ($cart_product_info = mysqli_fetch_assoc($cart_product)) {
                    ?>
                    <div id="header_cart">
                        <div class="header_cart_top">
                            <img src="assets/<?php echo $cart_product_info['product_image']; ?>" alt="" height="50">
                            <p><a href="#" style="color: #000; margin-top: 25px;"><?php echo $cart_product_info['product_name']; ?></a></p>
                            <p>Product code</p>
                        </div>
                        <div class="header_cart_top_2" >
                            <p><?php echo $cart_product_info['product_sales_quantity']; ?> x <b style="font-weight: bold; font-size: 14px;"><?php echo $cart_product_info['product_price']; ?></b></p>
                            <p><a href="?status=delete&id=<?php echo $cart_product_info['temp_cart_id']; ?>" class="scheme_color" style="color: #e74c3c; font-size: 15px;">x</a></p>
                        </div>
                    </div>
                <?php } ?>
<!--                <div id="header_cart" style="background: #ddd;">
                    <table align='right' style="padding: 10px; text-align: center; margin: 15px; width:100%;">
                        <tr style="padding: 5px;">
                            <td style="float:right; font-weight: bold;"><b>Shipment fee</b> :</td>
                            <td>Tk.100</td>
                        </tr>
                        <tr style="padding: 5px;">
                            <td style="float:right; font-weight: bold;"><b>Discount (15%)</b> :</td>
                            <td>Tk.
                                <?php //if(isset($_SESSION['discount']))
                                    { 
                                    //echo $_SESSION['discount'];
                                    }?>
                            </td>
                        </tr>
                        <tr style="color: #e73c2e; padding: 5px;">
                            <td style="float:right; font-weight: bold;"><b>Total</b> :</td>
                            <td>Tk.<?php 
                           // if (isset($_SESSION['grand_total']))
                                { 
                                //echo $_SESSION['grand_total']; 
                                }?>
                            </td>
                        </tr>
                    </table>
                </div>-->
                <div id="header_cart" style="height:35px; background: #e74c3c;padding-top: 5px;">
                    <?php
                    $customer_id= isset($_SESSION['customer_id']);
                    $shipping_id=  isset($_SESSION['shipping_id']);

                    if($customer_id!=NULL && $shipping_id!=NULL)
                        {
                    ?> 
                        <a href="view_shipping.php" style="font-size:15px; padding: 5px 20px;">Checkout</a>
                    <?php } elseif($shipping_id==NULL && $customer_id!=NULL) { ?>
                        <a href="shipping.php" style="font-size:15px; padding: 5px 20px;">Checkout</a>
                    <?php }else {?>
                        <a href="checkout.php" style="font-size:15px; padding: 5px 20px;">Checkout</a>
                    <?php } ?>
                </div>

            </ul>
        </li>

    </ul>
    <div class="clear"></div>
</div>