<?php
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
require_once 'classes/Dbcon.php';
require_once 'classes/User.php';
$conn=new Dbcon();
$conn=$conn->createConnection();
$newuser=new User();
$action=$_POST['action'];
switch ($action) {
case "register":
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $password=$_POST["password"];
    $squestion=$_POST["squestion"];
    $sanswer=$_POST["sanswer"];
    echo $newuser -> userRegistration($name, $email, $mobile, $password, $squestion, $sanswer, $conn);
    break;
    
case "login":
    $email=$_POST["email"];
    $password=$_POST["password"];
    echo $newuser -> userLogin($email, $password, $conn);
    break;
}

?>