<?php

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
        $query = "INSERT INTO `tbl_product`(`prod_parent_id`, `prod_name`, `link`, `prod_available`, `prod_launch_date`) 
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
        $sql="SELECT * FROM tbl_product WHERE `id`!='1'";
        $result =  mysqli_query($conn, $sql);
        while ($row=mysqli_fetch_assoc($result)) {
            $data['data'][] = array($row['id'], $row['prod_parent_id'], $row['prod_name'], $row['link'],  $row['prod_launch_date'],'<input type="button" class="btn btn-success editbtn"  data-toggle="modal" data-target="#updatecategory" value="Edit" data-eid="'.$row['id'].'" > <input class="btn btn-danger deletebtn" type="button" value="delete" data-did="'.$row['id'].'">');
        }
        print_r(json_encode($data));
    }
}
