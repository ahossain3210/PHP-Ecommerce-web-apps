<?php
ob_start();
session_start();


require 'classes/Application.php';
$obj_app = new Application();

require 'classes/Category.php';
$obj_cat = new Category();

require 'classes/Cart.php';
$obj_cart = new Cart();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>E-shop | Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/css/my_style.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <link href="assets/css/form.css" rel="stylesheet" type="text/css" media="all" />
        <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />-->
        <!-----------Flatstic-------------->


        <!----------Flatsitc ---------->

        <!--<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>-->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.easydropdown.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".dropdown img.flag").addClass("flagvisibility");

                $(".dropdown dt a").click(function () {
                    $(".dropdown dd ul").toggle();
                });

                $(".dropdown dd ul li a").click(function () {
                    var text = $(this).html();
                    $(".dropdown dt a span").html(text);
                    $(".dropdown dd ul").hide();
                    $("#result").html("Selected value is: " + getSelectedValue("sample"));
                });

                function getSelectedValue(id) {
                    return $("#" + id).find("dt a span.value").html();
                }

                $(document).bind('click', function (e) {
                    var $clicked = $(e.target);
                    if (!$clicked.parents().hasClass("dropdown"))
                        $(".dropdown dd ul").hide();
                });


                $("#flagSwitcher").click(function () {
                    $(".dropdown img.flag").toggleClass("flagvisibility");
                });
            });
        </script>
        <!-- start menu -->     
        <link href="assets/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="assets/js/megamenu.js"></script>
        <script>$(document).ready(function () {
                $(".megamenu").megamenu();
            });</script>
        <!-- end menu -->
        <script type="text/javascript" src="assets/js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" id="sourcecode">
            $(function ()
            {
                $('.scroll-pane').jScrollPane();
            });
        </script>
        <!-- top scrolling -->
        <script type="text/javascript" src="assets/js/move-top.js"></script>
        <script type="text/javascript" src="assets/js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
                });
            });
        </script>
        <!-- Include the Etalage files -->
        <link rel="stylesheet" href="assets/css/etalage.css">
        <script src="assets/js/jquery.etalage.min.js"></script>
        <!-- Include the Etalage files -->
        <script>
            jQuery(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });
                // This is for the dropdown list example:
                $('.dropdownlist').change(function () {
                    etalage_show($(this).find('option:selected').attr('class'));
                });

            });
        </script>
        <!----//details-product-slider--->	
        <!--..........Search script..........-->
        <script type="text/javascript">
            jQuery(document).ready(function ()
            {
                jQuery('#search-area button').click(function ()
                {
                    var return_bool = false;

                    if (jQuery(this).hasClass('active') && jQuery('#search-area input').val().length !== 0)
                    {
                        return_bool = true;
                    } else if (jQuery(this).hasClass('active') && jQuery('#search-area input').val().length === 0)
                    {
                        jQuery('#search-area input').animate(
                                {
                                    width: '28px'
                                }, 350, 'easeOutExpo');

                        jQuery('#search-area button').removeClass('active');

                        return_bool = false;
                    } else
                    {
                        jQuery(this).addClass('active');
                        jQuery('#search-area input').animate(
                                {
                                    width: '867px'
                                }, 350, 'easeOutExpo');

                        return_bool = false;

                    }
                    return return_bool;
                });
            });



        </script>
        <style>
            ul.sub_list li a:hover{
                color: #e74c3c;
            }
            ul.list1 li a:hover{
                color: #e74c3c;
            }
            .best_seller_title a{
                color: #000;
                /*padding-left: 5px;*/
            }
            .best_seller_title p{
                padding-left: 5px;
            }
            .best_seller_title a:hover{
                color: #e74c3c;
            }
            .top_box h3:hover{
                color: #e74c3c;
            }
            .mens-toolbar{
                background: #002a80;
            }
            .mens-toolbar h3{
                color: #fff;
                font-weight: normal;
                padding: 8px 15px;
            }
            #sidebar_accordion h4{
                padding: 17px 0px; 
                line-height: 1.5;
                background: #002a80; 
                color: #fff; 
                font-size: .85em;
            }
            
        </style>
    </head>
    <body>
        <div class="header-top">
<?php include './include/header.php'; ?>
        </div>
        <!--Navbar-->
            <?php include './include/navbar.php'; ?>
        <!--Home Content-->


<?php
if (isset($pages)) {
    if ($pages == 'checkout') {
        include './pages/checkout.php';
    } else if ($pages == 'home') {
        include './pages/home_content.php';
    } else if ($pages == 'register') {
        include './pages/register.php';
    } else if ($pages == 'wishlist') {
        include './pages/wishlist.php';
    } else if ($pages == 'orderlist') {
        include './pages/orderlist.php';
    } else if ($pages == 'shop') {
        include './pages/shop.php';
    } else if ($pages == 'product_details') {
        include './pages/product_details.php';
    } else if ($pages == 'c_products') {
        include './pages/category_products.php';
    } else if ($pages == 'nested_products') {
        include './pages/nested_category_products.php';
    } else if ($pages == 'cart') {
        include './pages/cart.php';
    } else if ($pages == 'manufacturer_products') {
        include './pages/manufacturer_products.php';
    } else if ($pages == 'search_products') {
        include './pages/search_products.php';
    } else if ($pages == 'shipping') {
        include './pages/shipping.php';
    } else if ($pages == 'view_shipping') {
        include './pages/view_shipping.php';
    } else if ($pages == 'payment') {
        include './pages/payment.php';
    } else if ($pages == 'em_order') {
        include './pages/empty_order.php';
    } else if ($pages == 'contact') {
        include './pages/contact.php';
    }
} else {
    include './pages/home_content.php';
}
?>









        <!--Footer-->
        <?php include './include/footer.php'; ?>


        <script type="text/javascript">
            $(document).ready(function () {

                var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                };


                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    </body>
</html>