<?php
require_once '../../classes/Dbcon.php';
require_once '../../classes/User.php';
require_once '../../classes/Product.php';

$conn=new Dbcon();
$conn=$conn->createConnection();
$newuser=new User();
$addcategory=new Product();

$action=$_POST['action'];
switch($action){
    case "fetchcat":{
       echo $addcategory ->fetchproduct($conn);
    break;
    }
    case "addcategory":{
        $pname=$_POST['pname'];
        $purl= $_POST['purl'];
        $pavail=$_POST['pavail'];
        echo $addcategory ->addproductcategory($pname, $purl, $pavail, $conn);
    break;
     }
     case "fetchalldata":{
         $addcategory ->fetchdata($conn);
     break;
     }
    
}

?>
 