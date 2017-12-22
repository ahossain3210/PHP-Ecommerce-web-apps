<?php
ob_start();

session_start();
$admin_id=$_SESSION['admin_id'];
if($admin_id==NULL){
    header('Location:index.php');
} 
    require '../classes/Dashboard.php';
    $obj_dash=new Dashboard();
    
    require '../classes/Category.php';
    $obj_cat=new Category();
    
    require '../classes/Manufacturer.php';
    $obj_manu=new Manufacturer();
    
    require '../classes/Product.php';
    $obj_product=new Product();
    
if(isset($_GET['status'])){
    if($_GET['status']=='logout'){
    
    $obj_dash->logout();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>eShop | Dashboard</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="../admin_assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../admin_assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="../admin_assets/css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="../admin_assets/css/style-responsive.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="../admin_assets/css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="../admin_assets/css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="../admin_assets/../admin_assets/img/favicon.ico">
        <!-- end: Favicon -->
        <script type="text/javascript">
            function checkDelete()
            {
                chk=confirm('Are You Sure To Delete This?');
                if(chk)
                {
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>



    </head>

    <body>
        <!-- start: Header -->
        <?php include './admin_includes/admin_header.php';?>
        <!-- start: Header -->

        <div class="container-fluid-full">
            <div class="row-fluid">

                <!-- start: Main Menu -->
                <?php include './admin_includes/admin_sidebar.php';?>
                <!-- end: Main Menu -->

                <noscript>
                <div class="alert alert-block span10">
                    <h4 class="alert-heading">Warning!</h4>
                    <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
                </div>
                </noscript>

                <!-- start: Content -->
                <div id="content" class="span10">
                    
                    <?php
                    if(isset($admin_pages)){
                        if($admin_pages=='dashboard'){
                            include './admin_pages/dashboard.php';
                        }
                        elseif($admin_pages=='add_category'){
                            include './admin_pages/add_category.php';
                        }
                        elseif($admin_pages=='add_manu'){
                            include './admin_pages/add_manufacturer.php';
                        }
                        elseif($admin_pages=='add_sub_cat'){
                            include './admin_pages/add_sub_category.php';
                        }
                        elseif($admin_pages=='add_product'){
                            include './admin_pages/add_product.php';
                        }
                        elseif($admin_pages=='manage_category'){
                            include './admin_pages/manage_category.php';
                        }
                        elseif($admin_pages=='manage_manu'){
                            include './admin_pages/manage_manufacturer.php';
                        }
                        elseif($admin_pages=='manage_sub_cat'){
                            include './admin_pages/manage_sub_category.php';
                        }
                        elseif($admin_pages=='manage_product'){
                            include './admin_pages/manage_product.php';
                        }
                        elseif($admin_pages=='edit_cat'){
                            include './admin_pages/edit_category.php';
                        }
                        elseif($admin_pages=='edit_manu'){
                            include './admin_pages/edit_manufacturer.php';
                        }
                        elseif($admin_pages=='nested'){
                            include './admin_pages/add_nested_category.php';
                        }
                        elseif($admin_pages=='manage_order'){
                            include './admin_pages/manage_orders.php';
                        }
                        elseif($admin_pages=='view_order'){
                            include './admin_pages/view_orders.php';
                        }
                        elseif($admin_pages=='edit_sub_cat'){
                            include './admin_pages/edit_sub_category.php';
                        }
                        elseif($admin_pages=='view_details'){
                            include './admin_pages/view_details.php';
                        }
                        elseif($admin_pages=='edit_products'){
                            include './admin_pages/edit_products.php';
                        }
                        elseif($admin_pages=='manage_nested'){
                            include './admin_pages/manage_nested_category.php';
                        }
                    }  else {
                        include './admin_pages/admin_main_content.php';    
                    }
                    ?>



                </div><!--/.fluid-container-->

                <!-- end: Content -->
            </div><!--/#content.span10-->
        </div><!--/fluid-row-->

        <div class="modal hide fade" id="myModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here settings can be configured...</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <?php include './admin_includes/admin_footer.php';?>

        <!-- start: JavaScript-->

        <script src="../admin_assets/js/jquery-1.9.1.min.js"></script>
        <script src="../admin_assets/js/jquery-migrate-1.0.0.min.js"></script>

        <script src="../admin_assets/js/jquery-ui-1.10.0.custom.min.js"></script>

        <script src="../admin_assets/js/jquery.ui.touch-punch.js"></script>

        <script src="../admin_assets/js/modernizr.js"></script>

        <script src="../admin_assets/js/bootstrap.min.js"></script>

        <script src="../admin_assets/js/jquery.cookie.js"></script>

        <script src='../admin_assets/js/fullcalendar.min.js'></script>

        <script src='../admin_assets/js/jquery.dataTables.min.js'></script>

        <script src="../admin_assets/js/excanvas.js"></script>
        <script src="../admin_assets/js/jquery.flot.js"></script>
        <script src="../admin_assets/js/jquery.flot.pie.js"></script>
        <script src="../admin_assets/js/jquery.flot.stack.js"></script>
        <script src="../admin_assets/js/jquery.flot.resize.min.js"></script>

        <script src="../admin_assets/js/jquery.chosen.min.js"></script>

        <script src="../admin_assets/js/jquery.uniform.min.js"></script>

        <script src="../admin_assets/js/jquery.cleditor.min.js"></script>

        <script src="../admin_assets/js/jquery.noty.js"></script>

        <script src="../admin_assets/js/jquery.elfinder.min.js"></script>

        <script src="../admin_assets/js/jquery.raty.min.js"></script>

        <script src="../admin_assets/js/jquery.iphone.toggle.js"></script>

        <script src="../admin_assets/js/jquery.uploadify-3.1.min.js"></script>

        <script src="../admin_assets/js/jquery.gritter.min.js"></script>

        <script src="../admin_assets/js/jquery.imagesloaded.js"></script>

        <script src="../admin_assets/js/jquery.masonry.min.js"></script>

        <script src="../admin_assets/js/jquery.knob.modified.js"></script>

        <script src="../admin_assets/js/jquery.sparkline.min.js"></script>

        <script src="../admin_assets/js/counter.js"></script>

        <script src="../admin_assets/js/retina.js"></script>

        <script src="../admin_assets/js/custom.js"></script>
        <!-- end: JavaScript-->

    </body>
</html>
