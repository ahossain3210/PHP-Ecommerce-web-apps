<?php
//...........Security Implemntation...........

//$customer_id=isset($_SESSION['customer_id']);
//$shipping_id=isset($_SESSION['shipping_id']);
//    
//   if( $customer_id!=NULL && $shipping_id!=NULL)
//    {
//        header('Location:view_shipping.php');
//    }

//.......Sign Up............

if(isset($_POST['sign_up']))
{
    $obj_app->save_customer_info($_POST);
}

//.........Customer Login........

if(isset($_POST['login']))
{
    $message=$obj_app->check_customer_login_info($_POST);
}


?>
<!--<script>
    var xmlhttp=new xmlHttpRequest();
    function ajax_email_check(given_text, objID)
    {
        alart(given_text);
    }


</script>-->
<script type="text/javascript">

//Create a boolean variable to check for a valid Internet Explorer instance.
    var xmlhttp = false;
//Check if we are using IE.
    try {
//If the Javascript version is greater than 5.
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert(xmlhttp);
//alert ("You are using Microsoft Internet Explorer.");
    } catch (e) {
        //alert(e);

//If not, then use the older active x object.
        try {
//If we are using Internet Explorer.
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
        } catch (E) {
            // alert(E);
//Else we must be using a non-IE browser.
            xmlhttp = false;
        }
    }
//If we are using a non-IE browser, create a javascript instance of the object.
//alert(typeof XMLHttpRequest132);
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
    }
//xmlhttp = new XMLHttpRequest();
    function ajax_email_check(given_text, objID)
    {
//        alert(given_text);
//        alert(objID);
        var obj = document.getElementById(objID);
        var serverPage = 'ajax_email_check.php?email='+given_text;
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
//            alert(xmlhttp.readyState);
            //alert(xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
//                alert(xmlhttp.responseText);
                document.getElementById(objID).innerHTML = xmlhttp.responseText;
                if(xmlhttp.responseText=='Already Exists!')
                {
                    document.getElementById('save_btn').disabled=true;
                }
                else{
                        document.getElementById('save_btn').disabled=false;
                    }
                //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.send(null);
    }
//
</script>

<div class="register_account">
    <div class="wrap">
        <h4 class="title">Login</h4>
        <h5 class="color_red">
            <?php 
            if(isset($message))
                { 
                    echo $message; 
                    unset($message);
                }?>
        </h5>
        <form action="" method="post">
            <div class="col_1_of_2 span_1_of_2">
                <div><input type="text" name="customer_email" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'E-Mail';
                                                }"></div>
                <div><input type="password" name="password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'password';
                                                }"></div>
                <button type="submit" name="login" class="grey">Login</button>
            </div>
        </form>
        <div class="col_1_of_2 span_1_of_2">
        <h4 class="title">Create an account</h4>
        <p class="f_size_13">If you aren't register yet. Please create an account first.</p>
        <form action="" method="post" onsubmit="ValidateStandard(this)">
            <div><input type="text" name="customer_name" placeholder="Your Name" required="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                         this.value = 'Name';
                                     }"></div>
                <div>
                    <input type="email" name="customer_email" placeholder="E-mail" required="" onfocus="this.value = '';" onblur="ajax_email_check(this.value, 'res')">
                    <span id="res" class="scheme_color f_size_13"></span>
               </div>
            <div><input type="password" name="password" placeholder="Password" required="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Password';
                                                }"></div>
            <div><input type="password" placeholder="Confirm password" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                    this.value = 'Confirm password';
                                                }"></div>
                <button type="submit" name="sign_up" id="save_btn" class="grey">Create Account</button>
                <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
            </div>
            <div class="clear"></div>
        </form>
    </div> 
</div>