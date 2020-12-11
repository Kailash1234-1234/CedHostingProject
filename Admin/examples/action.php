<?php
require_once '../../classes/Dbcon.php';
require_once '../../classes/User.php';
require_once '../../classes/Product.php';

$conn=new Dbcon();
$conn=$conn->createConnection();
$newuser=new User();

$addcategory=new Product();

$addcategory ->fetchdata($conn);
?>
 