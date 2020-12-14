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
// session_start();


class Product
{
    public $pid;
    public $product_parent_id;
    public $product_name;
    public $link;
    public $product_Available;
    public $product_launch_date;

    
    function fetchproduct($conn)
    {
        $query = "SELECT * from `tbl_product` where `id`='1'";
        if ($result=mysqli_query($conn, $query)) {
            while ($row=mysqli_fetch_assoc($result)) {
                 return $row['prod_name'];
            }
        }

    }

    function addproductcategory($pname, $purl, $pavail, $conn)
    {
        $query = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `html`, `prod_available`, `prod_launch_date`) 
        VALUES('1', '{$pname}', '{$purl}', '{$pavail}', NOW())";
        if (mysqli_query($conn, $query) or die(print_r($conn))) {
            return 1;
        } else {
            return 0;
        }
    }

    function fetchdata($conn) 
    {
        $data=array();
        $sql="SELECT * FROM tbl_product WHERE `id`!='1' AND `prod_parent_id`='1'";
        $result =  mysqli_query($conn, $sql);
          $count=0;
        while ($row=mysqli_fetch_assoc($result)) {
            $count++;
            $available=0;
            if ($row['prod_available']==1) {
                $available="Available";
            } else {
                $available="Un-Available";
            }
            $data['data'][] = array($count,  $row['prod_name'], $row['html'], $available, $row['prod_launch_date'],'<input type="button" class="btn btn-primary editbtn"  data-toggle="modal" data-target="#updatecategory" value="Edit" data-eid="'.$row['id'].'" > <input class="btn btn-danger bg-orange deletebtn" type="button" value="delete" data-did="'.$row['id'].'">');
        }
        print_r(json_encode($data));
    }


    function fetchdatawithproductdesc($conn) 
    {
        $data=array();
        //$sql="SELECT * FROM tbl_product WHERE `id`!='1'";
        $sqlquery="SELECT `tbl_product`.*, `tbl_product_description`.* FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`";
        $result =  mysqli_query($conn, $sqlquery);
        $pcount=0;
        while ($row=mysqli_fetch_assoc($result)) {
            $pcount++;
            $mid= $row['prod_parent_id'];
            $sql_selectparent_name = "SELECT `prod_name` FROM `tbl_product` where `id`='$mid'";
            $result1 =  mysqli_query($conn, $sql_selectparent_name);
            $GLOBALS['$productnamemain']='';
            while ($row1=mysqli_fetch_assoc($result1)) {
                 $GLOBALS['$productnamemain'] = $row1['prod_name'];
            }
            $product_desc=json_decode($row['description']);
            $webspace=$product_desc->{'webspace'};
            $bandwidth=$product_desc->{'bandwidth'};
            $freedomain=$product_desc->{'freedomain'};
            $technology=$product_desc->{'technology'};
            $mailbox=$product_desc->{'mailbox'};
            $available=0;
            if ($row['prod_available']==1) {
                $available="Available";
            } else {
                $available="Unavailable";
            }
            // $row['id'], $row['prod_id']
            $data['data'][] = array($pcount, $GLOBALS['$productnamemain'], $row['prod_name'], $row['html'], $available, $webspace, $bandwidth, $freedomain, $technology, $mailbox, $row['mon_price'], $row['annual_price'], $row['sku'], $row['prod_launch_date'], '<input type="button" class="btn btn-primary editbtn"  data-toggle="modal" data-target=".editproductmodal" value="Edit" data-eid="'.$row['prod_id'].'" > <input class="btn btn-danger bg-orange deletebtn" type="button" value="delete" data-did="'.$row['prod_id'].'">');
        }
        print_r(json_encode($data));
    }

    function fetchdatanav($conn){
        $data=array();
        $sql="SELECT * FROM tbl_product WHERE `prod_parent_id`='1' AND `prod_available`='1'";
        $result =  mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($result)) {
            $data[]= array($row['id'],  $row['prod_name'], $row['html']);
        }
        return print_r(json_encode($data));
    }

    function deleteCategory($cid, $conn)
    {
        $sql="DELETE FROM `tbl_product` WHERE `id` = $cid";
        if (mysqli_query($conn, $sql)) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function editCategory($cid, $conn)
    {
        $query = "SELECT * from `tbl_product` where `id`='$cid'";
        if ($result=mysqli_query($conn, $query)) {
            while ($row=mysqli_fetch_assoc($result)) {
                 return print_r(json_encode($row));
            }
        }
    }  

    function UpdateCategory($cid, $pname, $purl, $pavail, $conn)
    {
        $sql="UPDATE `tbl_product` SET `prod_name` = '$pname', `html`= '$purl', `prod_available`= '$pavail' where  `id` = '$cid'";
        if (mysqli_query($conn, $sql) or die(print_r($conn))) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function addnewProduct($cid, $productname, $producturl, $monthlyprice, $annualyprice, $skuid, $product_desc_json, $conn)
    {
    $query = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `html`, `prod_available`, `prod_launch_date`) 
    VALUES('{$cid}', '{$productname}', '{$producturl}', '1', NOW())";
        if (mysqli_query($conn, $query)) {
            $last_id = $conn->insert_id;
            $query1 = "INSERT INTO `tbl_product_description`(`prod_id`, `description`, `mon_price`, `annual_price`, `sku`) 
            VALUES('{$last_id}', '{$product_desc_json}', '{$monthlyprice}', '{$annualyprice}', '{$skuid}')";
            if (mysqli_query($conn, $query1) or die(print_r($conn))) {
                return 1;
            } else {
                return 0; 
            }
            return 1;
        } else {
            return 0;
        }
    }

    function deleteProductTabledata($cid, $conn)
    {
        $deletesql="DELETE `tbl_product`, `tbl_product_description`
        FROM `tbl_product`
        INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id`
        WHERE `prod_id`=$cid";
        if (mysqli_query($conn, $deletesql)) {
            echo 1;
        } else {
            echo 0;
        }
    }


    function updateProductTabledata($cid, $conn)
    {
        $data=array();
        //$sql="SELECT * FROM tbl_product WHERE `id`!='1'";
        $sqlquery="SELECT `tbl_product`.*, `tbl_product_description`.* FROM `tbl_product` INNER JOIN `tbl_product_description` ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` WHERE `prod_id`='$cid'";
        $result =  mysqli_query($conn, $sqlquery);
        $pcount=0;
        while ($row=mysqli_fetch_assoc($result)) {
            $pcount++;
            $mid= $row['prod_parent_id'];
            $sql_selectparent_name = "SELECT `prod_name` FROM `tbl_product` where `id`='$mid'";
            $result1 =  mysqli_query($conn, $sql_selectparent_name);
            $GLOBALS['$productnamemain']='';
            while ($row1=mysqli_fetch_assoc($result1)) {
                 $GLOBALS['$productnamemain'] = $row1['prod_name'];
            }
            $product_desc=json_decode($row['description']);
            $webspace=$product_desc->{'webspace'};
            $bandwidth=$product_desc->{'bandwidth'};
            $freedomain=$product_desc->{'freedomain'};
            $technology=$product_desc->{'technology'};
            $mailbox=$product_desc->{'mailbox'};
            $available=0;
            if ($row['prod_available']==1) {
                $available="Available";
            } else {
                $available="Unavailable";
            }
            // $row['id'], $row['prod_id']
            $data[] = array($pcount, $GLOBALS['$productnamemain'], $row['prod_name'], $row['html'], $available, $webspace, $bandwidth, $freedomain, $technology, $mailbox, $row['mon_price'], $row['annual_price'], $row['sku'], $row['prod_launch_date'], $row['prod_id']);
        }
        return print_r(json_encode($data));
    }

    function update_new_Product($updateid, $cid, $productname, $producturl, $monthlyprice, $annualyprice, $skuid, $product_desc_json, $conn){
        $sql= "UPDATE `tbl_product` SET `prod_name`='$productname',`html`='$producturl' WHERE `id` ='$updateid'";
        if ($conn->query($sql) === true) {
            $sql2="UPDATE `tbl_product_description` SET `description`='$product_desc_json',`mon_price`='$monthlyprice',`annual_price`='$annualyprice',`sku`='$skuid' WHERE `prod_id` ='$updateid'";
            if ($conn->query($sql2) === true) {
                return 1;
            } else {
                return "Error updating record: " . $this->conn->error;
            }
        } else {
            return "Error updating record: " . $this->conn->error;
        }
    }
}
