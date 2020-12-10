<?php

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
    
}

?>