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
require_once 'header.php'; 
if (isset($_SESSION['email']) && isset($_SESSION['name'])) {
    if (isset($_SESSION['is_admin'])==1) {

    }
}
?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#">
                      <i class="ni ni-circle-08 text-blue"></i>
                  </a></li>
                  <li class="breadcrumb-item"><a href="#">Users</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    View All Users List</li>
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
    <div class="container mt--6 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-2 text-center ">
              <h1 class="text-primary">User Details List</h1>
            </div>
            <div class="table-responsive">
                <table id="example" class="table">
                    <thead>
                        <tr class="bg-primary text-white">
                            <!-- <th>Id </th>
                            <th>prod Id </th> -->
                            <th>S.No.</th>
                          
                            <th>Product Name</th>
                            <th>Product page Link</th>
                            <th>Product Availbility Status</th>
                            <th>Product Webspace</th>
                            <th>Bandwidth</th>
                            <th>freedomain</th>
                            <th>Technology</th>
                            <th>MAIL BOX</th>
                           
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
    <!-- Page content -->
   <div class="container">
<?php require_once 'footer.php';?>    
   </div>

   <script>
     $(document).ready(function(){
        $("#example").DataTable({
            "ajax":'viewallproductaction.php'
        });
    })
   </script>
 