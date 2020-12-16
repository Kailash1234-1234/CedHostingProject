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
require_once 'header.php';?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-9 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Product</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"> <i class="ni ni-planet text-orange"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Product</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Product</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--6 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-2 text-center ">
              <h1 class="text-primary">Product Details</h1>
            </div>
            <div class="table-responsive">
                <table id="example" class="table">
                    <thead>
                        <tr class="bg-primary text-white">
                            <!-- <th>Id </th>
                            <th>prod Id </th> -->
                            <th>S.No.</th>
                            <th>Product Category Name </th>
                            <th>Product Name</th>
                            <th>Product Availbility Status</th>
                            <th>Product Webspace</th>
                            <th>Bandwidth</th>
                            <th>freedomain</th>
                            <th>Technology</th>
                            <th>MAIL BOX</th>
                            <th>Monthly price</th>
                            <th>Annualy price</th>
                            <th>Product SKU ID</th>
                            <th>Product Luanch Date </th>
                            <th>Action </th>
                        </tr>
                    </thead>
                   
                </table>
                </div>
          </div>
        </div>
      </div> 

         <!--update  product modal -->



    <div class="container">
    <?php require_once 'footer.php';?>  
    </div>
<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
        $("#example").DataTable({
            "ajax":'viewallusers.php'
        });

       $(document).on("click",".deletebtn", function(e){
          e.preventDefault();
          if(confirm("Are you Sure you want to delete this product ??")){
          var did=$(this).data("did");
          $.ajax({
            url : "adminAction.php",
            type : "POST",
            data : {did:did, action:"deleteproduct"},
            success : function(data){
              if(data==1){
                alert("Product deleted successfully !! ")
                location.reload(true);
              }
            }
          })
          }
       })



        })
        
    </script>
