<?php

$customer_email=$_GET['email'];

require './classes/Application.php';
$obj_app=new Application();

$query_result=$obj_app->customer_email_check_info($customer_email);
$customer_info=  mysqli_fetch_assoc($query_result);

if($customer_info)
{
    echo 'Already Exists!';
}else{
    echo 'Available';
}


?>