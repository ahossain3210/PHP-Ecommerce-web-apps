<?php


class Admin {
    
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
    public function admin_login_check($data)
    {
//        echo'<pre>';
//        print_r($data);
//        exit();
        $admin_email=$data['admin_email'];
        $password=  md5($data['admin_password']);
//        echo $password;
//        exit();
        $query="SELECT * FROM tbl_admin WHERE admin_email='$admin_email' AND admin_password='$password'";
        
        if(mysqli_query($this->db_conn, $query)){
            $query_result=  mysqli_query($this->db_conn, $query);
            $admin_info=  mysqli_fetch_assoc($query_result);
            
            if ($admin_info){
                session_start();
                $_SESSION['admin_id']=$admin_info['admin_id'];
                $_SESSION['admin_name']=$admin_info['admin_name'];
                
                header('Location:admin_master.php');
            }  else {
                $message="Your email or password incorrect!";
                return $message;
            }
        }  else {
            die('Query Problem'.mysqli_error($this->db_conn));
        }
    }
}
