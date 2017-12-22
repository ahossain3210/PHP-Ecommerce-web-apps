<?php


class Category {
    
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
    public function save_category_info($data)
    {
//        echo'<pre>';
//        print_r($data);
//        exit();
        $category_name=$data['category_name'];
        $category_description=$data['category_description'];
        $publication_status=$data['publication_status'];
//        echo $category_name;
//        echo $category_description;
//        echo $publication_status;
        
        $query="INSERT INTO tbl_category (category_name, category_description, publication_status) VALUES ('$category_name', '$category_description', '$publication_status')";
        if(mysqli_query($this->db_conn, $query)){
            $message="Save category information succesfully!";
            return $message;
        }else{
            die('Query Problem'.mysqli_errno($this->db_conn));
        }
    }
    public function select_category_info()
    {
        $query="SELECT * FROM tbl_category";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }
    }
    public function unpublish_category($cid)
    {
        $query="UPDATE tbl_category SET publication_status=0 WHERE category_id='$cid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_category.php');
        }else{
            die('Query Problem'.mysqli_error($this->db_conn));
        }
    }
    public function publish_category($cid)
    {
        $query="UPDATE tbl_category SET publication_status=1 WHERE category_id='$cid'";
        if(mysqli_query($this->db_conn, $query))
        {
             header('Location:manage_category.php');
        }else{
            die('Query Problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_category_info_by_id($category_id)
    {
        $query="SELECT * FROM tbl_category WHERE category_id='$category_id'";
        if (mysqli_query($this->db_conn, $query)){
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function update_category($data)
    {
//        $category_id=$_POST['category_id'];
//        $category_name=$_POST['category_name'];
//        $category_description=$_POST['category_description'];
//        $publication_status=$_POST['publication_status'];
        
//        $query="UPDATE tbl_category SET category_name='$category_name', category_description='$category_description', publication_status='$publication_status' WHERE category_id='$category_id'";
        $query="UPDATE tbl_category SET category_name='$_POST[category_name]',category_description='$_POST[category_description]',publication_status='$_POST[publication_status]' WHERE category_id='$_POST[category_id]'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_category.php'); 
            
            session_start();
            $_SESSION['message']="Update category successfully!";
            
        }  else {
            die('Query Problem'.mysqli_error($this->db_conn)); 
        }
    }
    public function delete_category($cid)
    {
//        echo $cid;
//        exechoit();
        
        $query="DELETE FROM tbl_category WHERE category_id='$cid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function all_publish_category_info()
    {
        $query="SELECT * FROM tbl_category WHERE publication_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
//    ...........Sub Category Start...............
    
    public function save_sub_category_info($data)
    {
        $query="INSERT INTO tbl_sub_category(sub_category_name, category_id, sub_category_description, publication_status) VALUES ('$data[sub_category_name]','$data[category_id]','$data[sub_category_description]','$data[publication_status]')";
        if(mysqli_query($this->db_conn, $query))
        {
            $message="Save sub-category info successfully!";
            return $message;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_sub_category_info()
    {
        $query="SELECT s.*, c.category_name FROM tbl_sub_category as s, tbl_category as c WHERE s.category_id=c.category_id";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function all_publish_sub_category_info()
    {
        $query="SELECT * FROM tbl_sub_category WHERE publication_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $result=  mysqli_query($this->db_conn, $query);
            return $result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function publish_sub_category_info($sid)
    {
        $query="UPDATE tbl_sub_category SET publication_status=1 WHERE sub_category_id='$sid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location: manage_sub_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function unpublish_sub_category_info($sid)
    {
        $query="UPDATE tbl_sub_category SET publication_status=0 WHERE sub_category_id='$sid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location: manage_sub_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function delete_sub_category_info($sid)
    {
        $query="DELETE FROM tbl_sub_category WHERE sub_category_id='$sid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location: manage_sub_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function select_sub_category_by_id($sid)
    {
        $query="SELECT s.*, c.category_name FROM tbl_sub_category s, tbl_category as c WHERE s.category_id=c.category_id AND s.sub_category_id='$sid'";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }

//    .........Nested Category Start Here......
    
    public function save_nested_category_info($data)
    {
//        echo '<pre>';
//        print_r($data);
//        exit();
        
        $query="INSERT INTO tbl_nested_category(nested_category_name, category_id, sub_category_id, manufacturer_id, publication_status) VALUES ('$data[nested_category_name]','$data[category_id]','$data[sub_category_id]','$data[manufacturer_id]','$data[publication_status]')";
        if(mysqli_query($this->db_conn, $query))
        {
            $message="Save nested category info successfully!";
            return $message;
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    
    public function all_publish_nested_category_info()
    {
        $query="SELECT * FROM tbl_nested_category WHERE publication_status=1";
        if(mysqli_query($this->db_conn, $query))
        {
            $nested_result=  mysqli_query($this->db_conn, $query);
            return $nested_result;
        } else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function update_sub_category_info($data)
    {
        $query="UPDATE tbl_sub_category SET sub_category_name='$_POST[sub_category_name]',sub_category_description='$_POST[sub_category_description]',publication_status='$_POST[publication_status]' WHERE sub_category_id='$_POST[sub_category_id]'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location:manage_sub_category.php'); 
            
            session_start();
            $_SESSION['message']="Update sub-category successfully!";
            
        }  else {
            die('Query Problem'.mysqli_error($this->db_conn)); 
        }
    }
    public function select_nested_category_info()
    {
        $query="SELECT n.*, c.category_name, s.sub_category_name FROM tbl_nested_category as n, tbl_category as c, tbl_sub_category as s WHERE n.category_id=c.category_id AND n.sub_category_id=s.sub_category_id";
        if(mysqli_query($this->db_conn, $query))
        {
            $query_result=  mysqli_query($this->db_conn, $query);
            return $query_result;
            
        }  else {
            die('Query Problem'.mysqli_error($this->db_conn)); 
        }
    }
    public function unpublish_nested_category($nid)
    {
        $query="UPDATE tbl_nested_category SET publication_status=0 WHERE nested_category_id='$nid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location: manage_nested_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function publish_nested_category($nid)
    {
        $query="UPDATE tbl_nested_category SET publication_status=1 WHERE nested_category_id='$nid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location: manage_nested_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
    public function delete_nested_category($nid)
    {
        $query="DELETE FROM tbl_nested_category WHERE nested_category_id='$nid'";
        if(mysqli_query($this->db_conn, $query))
        {
            header('Location: manage_nested_category.php');
        }  else {
            die('Query problem'.mysqli_error($this->db_conn));
        }
    }
}
