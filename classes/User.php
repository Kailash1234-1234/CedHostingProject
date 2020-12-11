<?php

session_start();
class User{
    public $id;
    public $name;
    public $email;
    public $mobile;
    public $password;
    public $email_approved;
    public $phone_approved;
    public $active;
    public $is_admin;


    function userRegistration($name, $email, $mobile, $password, $squestion, $sanswer, $conn) 
    {
        $query = "INSERT INTO tbl_user(`email`, `name`, `mobile`,`password`, `security_question`, `security_answer`) 
        VALUES('{$email}','{$name}','{$mobile}', '{$password}', '{$squestion}', '{$sanswer}')";
        if (mysqli_query($conn, $query)) {
            return 1;
        } else {
            return 0;
        }
    
    }  
    
    function userLogin($email, $password, $conn)
    {
        $output=0;
        $query = "SELECT * FROM tbl_user where `email` ='".$email."' AND `password` = '".$password."'"; 
        if ($result=mysqli_query($conn, $query)) {
            while ($row=mysqli_fetch_assoc($result)) {
                if ($row['email_approved']==1) {
                    $_SESSION['email']=$row['email'];
                    $_SESSION['name']=$row['name'];
                    // $_SESSION['dos']=$row['date_of_signup'];
                    $_SESSION['uid']=$row['id'];
                    $_SESSION['type'] = $row['is_admin'];
                    $_SESSION['mobile'] = $row['mobile'];
                    if ($row['is_admin']==1) {
                        $output = 1;
                    } else if ($row['is_admin']==0) {
                        $output =  2;
                    } else {
                        $output  = 0;
                    }
                } else {
                    $output  = 3;
                }
            }
        } 
        return $output;
    }
    
}

?>