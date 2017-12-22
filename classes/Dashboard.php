<?php

class Dashboard {
    
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
    
    public function logout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        
        header('Location:index.php');
    }
    public function select_all_order_info()
    {
        $query="SELECT o.*, c.customer_name, p.payment_type FROM tbl_order as o, tbl_customer as c, tbl_payment as p WHERE o.customer_id=c.customer_id AND o.order_id=p.order_id";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_customer_info_by_order_id($order_id)
    {
        $query="SELECT o.order_id, c.* FROM tbl_order as o, tbl_customer as c WHERE o.customer_id=c.customer_id AND o.order_id='$order_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_shipping_info_by_order_id($order_id)
    {
        $query="SELECT o.order_id, s.* FROM tbl_order as o, tbl_shipping as s WHERE o.shipping_id=s.shipping_id AND o.order_id='$order_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_payment_info_by_order_id($order_id)
    {
        $query="SELECT o.order_id, p.* FROM tbl_order as o, tbl_payment as p WHERE o.order_id=p.order_id AND o.order_id='$order_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_product_info_by_order_id($order_id)
    {
        $query="SELECT o.*, d.* FROM tbl_order as o, tbl_order_details as d WHERE o.order_id=d.order_id AND o.order_id='$order_id'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
    
   
    
}
