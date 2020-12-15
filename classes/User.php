<?php
/**
 * Templet File Doc Comment
 * 
 * PHP version /
 * 
 * @category Tenplete_Class
 * @package  Templete_Class
 * @author   Author <author@domain.com>
 * @license  http://opensource.org/MIT MIT License
 * @link     http://localhost/
 */
session_start();
/**
 * Recipe class file
 *
 * PHP Version 5.2
 *
 * @category Recipe
 * @package  Recipe
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/recipes
 */
class User
{
    public $id;
    public $name;
    public $email;
    public $mobile;
    public $password;
    public $email_approved;
    public $phone_approved;
    public $active;
    public $is_admin;

    /**
     * Display the cart
     *
     * @param query $name      comment
     * @param query $email     comment
     * @param query $mobile    comment
     * @param query $password  comment
     * @param query $squestion comment
     * @param query $sanswer   comment
     * @param query $conn      comment
     *
     * @return String
     *
     * @since 1.0.1
     */
    function userRegistration($name, $email, $mobile, $password, $squestion, $sanswer, $conn) 
    {
        $query = "INSERT INTO tbl_user(`email`, `name`, `mobile`,`password`,
         `security_question`, `security_answer`) 
        VALUES('{$email}','{$name}','{$mobile}', '{$password}', '{$squestion}',
         '{$sanswer}')";
        if (mysqli_query($conn, $query)) {
            return 1;
        } else {
            return 0;
        }
    
    }  
    /**
     * Display the cart
     *
     * @param query $email    comment
     * @param query $password comment
     * @param query $conn     comment
     *
     * @return String
     *
     * @since 1.0.1
     */
    function userLogin($email, $password, $conn)
    {
        $output=0;
        $query = "SELECT * FROM tbl_user where `email` ='".$email."' 
        AND `password` = '".$password."'"; 
        if ($result=mysqli_query($conn, $query)) {
            while ($row=mysqli_fetch_assoc($result)) {
                if ($row['active']==1) {
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