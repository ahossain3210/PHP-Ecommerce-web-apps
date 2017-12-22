<?php


class Cart {
    
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
    public function add_to_cart($data)
    {
        $product_id=$data['product_id'];
        
        $query="SELECT product_name, product_price, product_image FROM tbl_product WHERE product_id='$product_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            $product_info=  mysqli_fetch_assoc($query_result);
            
//            echo '<pre>';
//            print_r($product_info);
//            exit();
            session_start();
            $session_id=session_id();
            
            $sql="INSERT INTO tbl_temp_cart (session_id, product_id, product_name, product_price, product_sales_quantity, product_image) VALUES ('$session_id', '$product_id', '$product_info[product_name]', '$product_info[product_price]', '$data[product_sales_quantity]', '$product_info[product_image]')";
            if(mysqli_query($this->db_conn, $sql))
            {
                header('Location:cart.php');
            }else{
                die('Query problem'.mysqli_error($this->db_conn));
            }
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
    public function selecet_cart_product_by_session_id($session_id)
    {
        $query="SELECT * FROM tbl_temp_cart WHERE session_id='$session_id'";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function update_cart($data)
    {
        $temp_cart_id=$data['temp_cart_id'];
        
        $query="UPDATE tbl_temp_cart SET product_sales_quantity='$data[product_sales_quantity]' WHERE temp_cart_id='$temp_cart_id'";
        if (mysqli_query($this->db_conn, $query))
        {
            header('Location:cart.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
    public function delete_cart_info($temp_cart_id)
    {
        $query="DELETE FROM tbl_temp_cart WHERE temp_cart_id='$temp_cart_id'";
        if (mysqli_query($this->db_conn, $query))
        {
//            header('Location:index.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
}
