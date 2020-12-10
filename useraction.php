<?php
require_once 'Dbcon.php';
require_once 'User.php';
$conn=new Dbcon();
$conn=$conn->createConnection();
$newuser=new User();

$action=$_POST['action'];
switch($action){
    case "register":{
        $name=$_POST["name"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $password=$_POST["password"];
        $squestion=$_POST["squestion"];
        $sanswer=$_POST["sanswer"];
       echo $newuser -> userRegistration($name, $email, $mobile, $password, $squestion, $sanswer, $conn);

        }
}

?>