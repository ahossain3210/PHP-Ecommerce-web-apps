<?php

class Manufacturer {
    
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
    public function save_manufacturer_info($data)
    {
        $image_path='../manufacturer_image/';
        $target_file=$image_path.$_FILES['manufacturer_image']['name'];
        $file_type=  pathinfo($target_file,PATHINFO_EXTENSION);
        $file_size=$_FILES['manufacturer_image']['size'];
        $image=  getimagesize($_FILES['manufacturer_image']['tmp_name']);
        if($image)
        {
            if(file_exists($target_file))
            {
                die('This image already exist');
            } else {
                if($file_size>5242880)
                {
                    die('Image size is so large');
                } else {
                    if($file_type!='jpg' && $file_type!='png')
                    {
                        die('Image type is not valid');
                    } else {
                        $query="INSERT INTO tbl_manufacturer (manufacturer_name, category_id, manufacturer_description, manufacturer_image, publication_status) VALUES ('$data[manufacturer_name]','$data[category_id]','$data[manufacturer_description]','$target_file','$data[publication_status]')";
                        if(mysqli_query($this->db_conn, $query))
                        {
                            move_uploaded_file($_FILES['manufacturer_image']['tmp_name'], $target_file);
                            $message="Save Manufacturer info successfully!";
                            return $message;
                        } else {
                            die('Query problem'.mysqli_error($this->db_conn));
                        }
                    }
                }
            }
        } else {
            die("Image doesn't uploaded");
        }
            
    }
    public function select_manufacturer_info()
    {
        $query="SELECT m.*, c.category_name FROM tbl_manufacturer as m, tbl_category as c WHERE m.category_id=c.category_id";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function unpublish_manufacturer($mid)
    {
        $query="UPDATE tbl_manufacturer SET publication_status=0 WHERE manufacturer_id='$mid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_manufacturer.php');
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function publish_manufacturer($mid)
    {
        $query="UPDATE tbl_manufacturer SET publication_status=1 WHERE manufacturer_id='$mid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_manufacturer.php');
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function delete_manufacturer_by_id($mid)
    {
        $query="DELETE FROM tbl_manufacturer WHERE manufacturer_id='$mid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_manufacturer.php');
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_manufacturer_by_id($mid)
    {
        $query="SELECT m.*, c.category_name FROM tbl_manufacturer as m, tbl_category as c WHERE m.category_id=c.category_id AND m.manufacturer_id='$mid'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function all_publish_manufacturer_info()
    {
        
        $query="SELECT * FROM tbl_manufacturer WHERE publication_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $publish_manufacturer=  mysqli_query($this->db_conn, $query);
            return $publish_manufacturer;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
}
