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
require_once '../../classes/Dbcon.php';
require_once '../../classes/User.php';
require_once '../../classes/Product.php';

$conn=new Dbcon();
$conn=$conn->createConnection();
$newuser=new User();

$addcategory=new Product();

$addcategory ->fetchdata($conn);
?>
 