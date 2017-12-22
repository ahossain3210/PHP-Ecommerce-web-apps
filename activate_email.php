<?php

$en_customer_id=$_GET['id'];
//echo $en_customer_id;
//exit();
$customer_id=  base64_decode($en_customer_id);

require './classes/Application.php';
$obj_app=new Application();

$obj_app->activate_customer_email($customer_id);


?>