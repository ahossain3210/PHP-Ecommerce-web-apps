<?php


class Product {
    
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
    public function save_product_info($data)
    {
//        echo'<pre>';
//        print_r($data);
//        print_r($_FILES);
//        exit();
        
        $image_path='../product_image/';
        $image_url=$image_path.$_FILES['product_image']['name'];
        $file_type=  pathinfo($image_url,PATHINFO_EXTENSION);
        $file_size=$_FILES['product_image']['size'];
        $image=  getimagesize($_FILES['product_image']['tmp_name']);
        if($image)
        {
            if(file_exists($image_url))
            {
                die('This image already exist !');
            }else{
                if($file_size>5242880)
                {
                    die('This image size is so large!');
                }else{
                    if ($file_type!='jpg' && $file_type!='png')
                    {
                        die('File type is not valid!');
                    }else{
                        $query="INSERT INTO tbl_product(product_name, category_id, sub_category_id, nested_category_id, manufacturer_id, product_code, product_price, product_p_price, product_quantity, product_image, product_short_description, product_long_description, feature_status) VALUES ('$data[product_name]','$data[category_id]','$data[sub_category_id]','$data[nested_category_id]', '$data[manufacturer_id]','$data[product_code]','$data[product_price]','$data[product_p_price]','$data[product_quantity]','$image_url','$data[product_short_description]','$data[product_long_description]','$data[feature_status]')";
                        if(mysqli_query($this->db_conn, $query))
                        {
                            move_uploaded_file($_FILES['product_image']['tmp_name'], $image_url);
                            $message="Save product info successfully!";
                            return $message;
                        } else {
                            die('Query problem'.mysqli_error($this->db_conn));
                        }
                    }
                }
            }
        }else{
            die('The file is not an image. please upload valid image');
        }
        
        
    }
     public function select_product_details_info_by_id($pid)
    {
        $query="SELECT p.*, m.manufacturer_name, c.category_name, s.sub_category_name, n.nested_category_name FROM tbl_product as p, tbl_manufacturer as m, tbl_category as c, tbl_sub_category as s, tbl_nested_category as n WHERE p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id AND p.sub_category_id=s.sub_category_id AND p.nested_category_id=n.nested_category_id AND p.product_id='$pid'";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function unfeature_product_info($pid)
    {
        $query="UPDATE tbl_product SET feature_status=0 WHERE product_id='$pid'";
        if (mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_product.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function feature_product_info($pid)
    {
        $query="UPDATE tbl_product SET feature_status=1 WHERE product_id='$pid'";
        if (mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_product.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function delete_product_info($pid)
    {
        $query="DELETE FROM tbl_product WHERE product_id='$pid'";
        if (mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_product.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_product_info_by_id($pid)
    {
        $query="SELECT p.*, m.manufacturer_name, c.category_name, s.sub_category_name, n.nested_category_name FROM tbl_product as p, tbl_manufacturer as m, tbl_category as c, tbl_sub_category as s, tbl_nested_category as n WHERE p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id AND p.sub_category_id=s.sub_category_id AND p.nested_category_id=n.nested_category_id AND p.product_id='$pid'";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_all_product_info()
    {
        $query="SELECT p.*, m.manufacturer_name, c.category_name, s.sub_category_name, n.nested_category_name FROM tbl_product as p, tbl_manufacturer as m, tbl_category as c, tbl_sub_category as s, tbl_nested_category as n WHERE p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id AND p.sub_category_id=s.sub_category_id AND p.nested_category_id=n.nested_category_id";
        if (mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
}
