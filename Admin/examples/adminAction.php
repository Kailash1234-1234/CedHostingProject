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

$action=$_POST['action'];
switch($action) {
case "fetchcat":
      echo $addcategory ->fetchproduct($conn);
    break;
case "addcategory":
      $pname=$_POST['pname'];
      $purl= $_POST['purl'];
      $pavail=$_POST['pavail'];
      echo $addcategory ->addproductcategory($pname, $purl, $pavail, $conn);
    break;
case "fetchalldata":
      $addcategory ->fetchdata($conn);
    break;
case "fetchalldatanav":
      $addcategory ->fetchdatanav($conn);
      // print_r($addcategory);
    break;

case "deletecat":
      $cid=$_POST['did'];
      $addcategory ->deleteCategory($cid, $conn);
    break;

case "editcat":
      $cid=$_POST['eid'];
      $addcategory->editCategory($cid, $conn);
    break;
case "updatecat":
      $cid=$_POST['eid'];
      $pname=$_POST['pname'];
      $purl= $_POST['purl'];
      $pavail=$_POST['pavail'];
      $addcategory->updateCategory($cid, $pname, $purl, $pavail, $conn);
    break;
case "addnewproduct":
      $cid=$_POST['pcategory']; 
      $productname=$_POST['productname'];
      $producturl=$_POST['producturl'];
      $monthlyprice=$_POST['monthlyprice'];
      $annualyprice=$_POST['annualyprice'];
      $skuid=$_POST['skuid'];
      $webspace=$_POST['webspace'];
      $bandwidth=$_POST['bandwidth'];
      $freedomain=$_POST['freedomain'];
      $technology=$_POST['technology'];
      $mailbox=$_POST['mailbox'];
      $product_desc = array("webspace" => $webspace, "bandwidth" => $bandwidth,
       "freedomain" => $freedomain, "technology" => $technology
       , "mailbox" => $mailbox);
      $product_desc_json=json_encode($product_desc);
      $result = $addcategory->addnewProduct($cid, $productname, $producturl, $monthlyprice, $annualyprice, $skuid, $product_desc_json, $conn);
      echo ($result);
    break;
case "deleteproduct":
      $cid=$_POST['did'];
      $addcategory->deleteProductTabledata($cid, $conn);
    break;
case "editproductfetch":
      $cid=$_POST['eid'];
      $addcategory->updateProductTabledata($cid, $conn);
    break;
case "updateproduct":
      $updateid=$_POST['eid'];
      $cid=$_POST['pcategory']; 
      $productname=$_POST['productname'];
      $producturl=$_POST['producturl'];
      $monthlyprice=$_POST['monthlyprice'];
      $annualyprice=$_POST['annualyprice'];
      $skuid=$_POST['skuid'];
      $webspace=$_POST['webspace'];
      $bandwidth=$_POST['bandwidth'];
      $freedomain=$_POST['freedomain'];
      $technology=$_POST['technology'];
      $mailbox=$_POST['mailbox'];
      $product_desc = array("webspace" => $webspace, "bandwidth" => $bandwidth,
       "freedomain" => $freedomain, "technology" => $technology,
        "mailbox" => $mailbox);
      $product_desc_json=json_encode($product_desc);
      echo $result = $addcategory->updateNewProduct($updateid, $cid, $productname, $producturl, $monthlyprice, $annualyprice, $skuid, $product_desc_json, $conn);
      //echo ($updateid.$cid.$productname.$producturl.$monthlyprice.$annualyprice.$skuid.$product_desc_json);
    break;
}
?>
 