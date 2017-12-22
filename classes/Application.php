<?php


class Application {
    
    private $db_conn;
    public function __construct() {
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='db_eshop';
        
        $this->db_conn=  mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$this->db_conn){
            die('Connection Fail'. mysqli_error($this->db_conn));
        }
        
    }
    public function all_publish_sub_category_by_category_id($cid)
    {
        $query="SELECT * FROM tbl_sub_category WHERE category_id='$cid' AND publication_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }else{
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function all_nested_category_by_sub_id($sid)
    {
        $query="SELECT * FROM tbl_nested_category WHERE sub_category_id='$sid' AND publication_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }else{
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_latest_product_info()
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id ORDER BY p.product_id DESC LIMIT 6";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_product_info()
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id ORDER BY p.product_id DESC";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_feature_product()
    {
        $query="SELECT * FROM tbl_product WHERE feature_status=1 ORDER BY product_id DESC LIMIT 6";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_mobile_info()
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id AND p.sub_category_id=3 ORDER BY p.product_id DESC LIMIT 6";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_punjabi_info()
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id AND p.nested_category_id=6 ORDER BY p.product_id DESC LIMIT 6";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_product_info_by_id($pid)
    {
        $query="SELECT p.*, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacturer as m WHERE p.category_id=c.category_id AND p.manufacturer_id=m.manufacturer_id AND p.product_id='$pid'";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
//            $product_info=  mysqli_fetch_assoc($query_result);
//            echo "<pre>";
//            print_r($product_info);
//            exit();
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_related_product_info($category_id)
    {
        $query="SELECT * FROM tbl_product WHERE category_id='$category_id' ORDER BY product_id DESC LIMIT 12";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_category_product_info($category_id)
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id AND p.category_id='$category_id' ORDER BY p.product_id DESC";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_nested_category_product_info($nid)
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id AND p.nested_category_id='$nid' ORDER BY p.product_id DESC";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
   
    public function all_publish_manufacturer_info()
    {
        $query="SELECT * FROM tbl_manufacturer LIMIT 20";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_manufacturer_product_by_id($mid)
    {
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id AND p.manufacturer_id='$mid'";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_search_product_info($data)
    {
        $search_item=$data['search_item'];
        
        $query="SELECT p.*, m.manufacturer_name FROM tbl_product as p, tbl_manufacturer as m WHERE p.manufacturer_id=m.manufacturer_id AND p.product_name LIKE '%$search_item%'";
        if (mysqli_query($this->db_conn, $query))
        {
            header('Location:search_products.php');
            
            $query_result=  mysqli_query($this->db_conn, $query);
//            $product_info=  mysqli_fetch_assoc($query_result);
            return $query_result;
//            echo '<pre>';
//            print_r($product_info);
//            exit();
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function save_customer_info($data)
    {
//        echo '<pre>';
//        print_r($data);
//        exit();
        $password=  md5($data['password']);
        
        $query="INSERT INTO tbl_customer (customer_name, customer_email, password) VALUES ('$data[customer_name]','$data[customer_email]','$password')";
        if (mysqli_query($this->db_conn, $query))
        {
           $customer_id=  mysqli_insert_id($this->db_conn);
           
            $_SESSION['customer_id']=$customer_id;
            $_SESSION['customer_name']=$data['customer_name'];
          
//           .....Email varification..........
            $en_customer_id=  base64_encode($customer_id);
            $to=$data['customer_email'];
            $subject="Verify Email";
            
            $message="
                    <span>Dear $data[customer_name]. Thanks for join our community.</span><br>
                    <span>Here is your Account Information</span><br>
                    <span>Your Email : </span> $data[customer_email]<br>
                    <span>Your Password : </span> $data[password]<br>
                    <span>To activate your email account click the link below.</span><br>
                    <a href='http://localhost:431/eshop/activate_email.php?id=$en_customer_id'>http://localhost:431/eshop/activate_email.php?id=$en_customer_id</a>
                      ";
            $headers='Form:career@itexperts.com';
            mail($to, $subject, $message, $headers);
            echo $message;
            exit();
            
            
            
            
//             header('Location:shipping.php');
             
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function customer_email_check_info($customer_email)
    {
        $query="SELECT * FROM tbl_customer WHERE customer_email='$customer_email'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result= mysqli_query($this->db_conn, $query);
            return $query_result;
        }else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }

    public function activate_customer_email($customer_id)
    {
        $query="UPDATE tbl_customer SET activation_status=1 WHERE customer_id='$customer_id'";
        mysqli_query($this->db_conn, $query);
        session_start();
        $_SESSION['message']="Your account is successfully activated!";
        
        header('Location:shipping.php');
    }

    public function save_shipping_info($data)
    {
        $customer_id=$_SESSION['customer_id'];
       
//        echo $customer_id;
//        
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $query="INSERT INTO tbl_shipping (customer_id, customer_name, company_name, customer_email, address, mobile_number, city, zip_code, country) VALUES ('$customer_id','$data[customer_name]','$data[company_name]','$data[customer_email]','$data[address]','$data[mobile_number]','$data[city]','$data[zip_code]','$data[country]')";
        if (mysqli_query($this->db_conn, $query))
        {
           $shipping_id=  mysqli_insert_id($this->db_conn);
           
            $_SESSION['customer_id']=$customer_id;
            $_SESSION['shipping_id']=$shipping_id;
            
             header('Location:view_shipping.php');
             
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_shipping_info_by_customer_id($customer_id)
    {
        $query="SELECT * FROM tbl_shipping WHERE customer_id='$customer_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result= mysqli_query($this->db_conn, $query);
            $shipping_info=  mysqli_fetch_assoc($query_result);
            return $shipping_info;
//            echo"<pre>";
//            print_r($shipping_info);
//            exit();
        }
    }
    public function save_order_info($data)
    {
//        echo "<pre>";
//        print_r($data);
//        exit();
        $payment_type=$data['payment_type'];
        if($payment_type=='Cash_on_delivery')
        {
//            session_start();
            $customer_id=$_SESSION['customer_id'];
            $shipping_id=$_SESSION['shipping_id'];
            $order_total=$_SESSION['grand_total'];
//            echo $customer_id;
//            echo $shipping_id;
//            echo $order_total;
//            exit();
            $query="INSERT INTO tbl_order (customer_id, shipping_id, order_total) VALUES ('$customer_id','$shipping_id','$order_total')";
            if(mysqli_query($this->db_conn, $query))
            {
                $order_id=  mysqli_insert_id($this->db_conn);
                $sql="INSERT INTO tbl_payment(order_id, payment_type) VALUES ('$order_id','$payment_type')";
                if(mysqli_query($this->db_conn, $sql))
                {
//                    session_start();
                    $session_id=  session_id();
                    $query="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'";
                    $query_result=  mysqli_query($this->db_conn, $query);
                    while($product_info=  mysqli_fetch_assoc($query_result))
                    {
                        $query="INSERT INTO tbl_order_details(order_id, product_id, product_price, product_name, product_sales_quantity) VALUES ('$order_id','$product_info[product_id]','$product_info[product_price]','$product_info[product_name]','$product_info[product_sales_quantity]')";
                        mysqli_query($this->db_conn, $query);
                    }
                    $query="DELETE FROM tbl_temp_cart WHERE session_id='$session_id'";
                    mysqli_query($this->db_conn, $query);
                    
                    unset($_SESSION['grand_total']);
                    
                    $_SESSION['message']="Thank you! You will get delivery soon.";
                    
                    header('Location:orderlist.php');
                }
            }else {
                die('Query problem'.mysqli_error($this->db_conn));
            }
        } elseif ($payment_type=='bKash') 
            {
            $customer_id=$_SESSION['customer_id'];
            $shipping_id=$_SESSION['shipping_id'];
            $order_total=$_SESSION['grand_total'];
//            echo $customer_id;
//            echo $shipping_id;
//            echo $order_total;
//            exit();
            $query="INSERT INTO tbl_order (customer_id, shipping_id, order_total) VALUES ('$customer_id','$shipping_id','$order_total')";
            if(mysqli_query($this->db_conn, $query))
            {
                $order_id=  mysqli_insert_id($this->db_conn);
                $sql="INSERT INTO tbl_payment(order_id, payment_type) VALUES ('$order_id','$payment_type')";
                if(mysqli_query($this->db_conn, $sql))
                {
//                    session_start();
                    $session_id=  session_id();
                    $query="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'";
                    $query_result=  mysqli_query($this->db_conn, $query);
                    while($product_info=  mysqli_fetch_assoc($query_result))
                    {
                        $query="INSERT INTO tbl_order_details(order_id, product_id, product_price, product_name, product_sales_quantity) VALUES ('$order_id','$product_info[product_id]','$product_info[product_price]','$product_info[product_name]','$product_info[product_sales_quantity]')";
                        mysqli_query($this->db_conn, $query);
                    }
                    $query="DELETE FROM tbl_temp_cart WHERE session_id='$session_id'";
                    mysqli_query($this->db_conn, $query);
                    
                    unset($_SESSION['grand_total']);
                    
                    $_SESSION['message']="Thank you! You will get delivery soon.";
                    
                    header('Location:orderlist.php');
                }
            }else {
                die('Query problem'.mysqli_error($this->db_conn));
            }
        } elseif ($payment_type=='PayPal') 
            {
            $customer_id=$_SESSION['customer_id'];
            $shipping_id=$_SESSION['shipping_id'];
            $order_total=$_SESSION['grand_total'];
//            echo $customer_id;
//            echo $shipping_id;
//            echo $order_total;
//            exit();
            $query="INSERT INTO tbl_order (customer_id, shipping_id, order_total) VALUES ('$customer_id','$shipping_id','$order_total')";
            if(mysqli_query($this->db_conn, $query))
            {
                $order_id=  mysqli_insert_id($this->db_conn);
                $sql="INSERT INTO tbl_payment(order_id, payment_type) VALUES ('$order_id','$payment_type')";
                if(mysqli_query($this->db_conn, $sql))
                {
//                    session_start();
                    $session_id=  session_id();
                    $query="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'";
                    $query_result=  mysqli_query($this->db_conn, $query);
                    while($product_info=  mysqli_fetch_assoc($query_result))
                    {
                        $query="INSERT INTO tbl_order_details(order_id, product_id, product_price, product_name, product_sales_quantity) VALUES ('$order_id','$product_info[product_id]','$product_info[product_price]','$product_info[product_name]','$product_info[product_sales_quantity]')";
                        mysqli_query($this->db_conn, $query);
                    }
                    $query="DELETE FROM tbl_temp_cart WHERE session_id='$session_id'";
                    mysqli_query($this->db_conn, $query);
                    
                    unset($_SESSION['grand_total']);
                    
                    $_SESSION['message']="Thank you! You will get delivery soon.";
                    
                    header('Location:htmlWebsiteStandardPayment.php');
                }
            }else {
                die('Query problem'.mysqli_error($this->db_conn));
            }
        }
    }
    public function customer_logout()
    {
        unset($_SESSION['customer_id']);
        unset($_SESSION['customer_name']);
        unset($_SESSION['shipping_id']);
        
        
        header('Location:index.php');
    }
    public function check_customer_login_info($data)
    {
//        echo "<pre>";
//        print_r($data);
//        exit();
        $customer_email=$data['customer_email'];
        $password=  md5($data['password']);
        
        $query="SELECT c.*, s.shipping_id FROM tbl_customer as c, tbl_shipping as s WHERE c.customer_email='$customer_email' AND c.password='$password' AND c.activation_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            $customer_info=  mysqli_fetch_assoc($query_result);
            
//        echo "<pre>";
//        print_r($customer_info);
//        exit();
            
            if ($customer_info){
                
                $_SESSION['customer_id']=$customer_info['customer_id'];
                
//                echo $_SESSION['customer_id'];
//                exit();
                
                $_SESSION['customer_name']=$customer_info['customer_name'];
                $_SESSION['shipping_id']=$customer_info['shipping_id'];
                
                header('Location:index.php');
                
            }  else {
                $message="Your email or password incorrect or not activated!";
                return $message;
            }
        }else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_order_info_by_id($customer_id)
    {
        $query="SELECT o.*, c.customer_name, d.*, p.* FROM tbl_order as o, tbl_customer as c, tbl_order_details as d, tbl_payment as p WHERE o.customer_id=c.customer_id AND o.order_id=d.order_id AND o.order_id=p.order_id AND o.customer_id='$customer_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            
            return $query_result;
//            if($query_result==NULL)
//            {
//                header('Location:empty_order.php');
//            }else{
//                return $query_result;
//            }
        }else{
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function nested_category_info()
    {
        $query="SELECT * FROM tbl_nested_category WHERE publication_status=1 ORDER BY nested_category_id ASC LIMIT 20";
        if(mysqli_query($this->db_conn, $query))
        {
            $nested_result=  mysqli_query($this->db_conn, $query);
            return $nested_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function save_contact_message_info($data)
    {
//        echo'<pre>';
//        print_r($data);
//        exit();
        
        $query="INSERT INTO tbl_contact(email, message) VALUES ('$data[email]', '$data[message]')";
        if(mysqli_query($this->db_conn, $query))
        {
            $message="Thank you  for your compliment!";
            return $message;
        }
    }

}
