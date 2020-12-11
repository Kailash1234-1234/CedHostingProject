<?php require_once 'header.php'; ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-planet text-orange"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
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
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
             
              <div class="text-center mt-3">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"> <i class="ni ni-planet text-orange"></i></span>
                  <span class="btn-inner--text">Create Category Here !!</span>
                </a>
               
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" id="categoryform">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" disabled type="text" id="productcat" value="" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id='productname'>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="URL (Optional)" type="text" id=producturl>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <!-- <input class="form-control" placeholder="Select category" type="text"> -->
                    <select name="availvility" id="available">
                        <option value="0">Not Available</option>
                        <option value="1"> Available</option>

                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4" id="createcatbtn">Create Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- create category update modal  -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updatecategory">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="updatecategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
      <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
             
              <div class="text-center mt-3">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"> <i class="ni ni-planet text-orange"></i></span>
                  <span class="btn-inner--text">Create Category Here !!</span>
                </a>
               
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" id="categoryform">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" disabled type="text" id="productcat" value="" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id='productname'>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="URL (Optional)" type="text" id=producturl>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <!-- <input class="form-control" placeholder="Select category" type="text"> -->
                    <select name="availvility" id="available">
                        <option value="0">Not Available</option>
                        <option value="1"> Available</option>
                    </select>
                  </div>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary mt-4" id="createcatbtn">Create Category</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  <!-- ens category modal -->
    <div class="container-fluid">
    <table id="example" class="display table" cellspacing="0">
    <thead>
        <tr class="bg-success text-white">
            <th>Id </th>
            <th>Product Parent Id</th>
            <th>Product Name</th>
            <th>Link</th>
            <th>Product Luanch Date </th>
            <th>Action </th>
        </tr>
    </thead>
    </table>


</div>
<div class="container">
<?php require_once 'footer.php'; ?>    
</div>



     
 

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function(){
        function loadcat(){
           $.ajax({
               url : "adminAction.php",
               type : "POST",
               data : {action:"fetchcat"},
               success : function(data){
                   $("#productcat").val(data);
               }
           })
        }
        loadcat();

        $("#createcatbtn").on("click", function(e){
            e.preventDefault();
          //  alert("hahaah i am add btn")
            var pname=$("#productname").val();
            var purl=$("#producturl").val();
            var pavail=$("#available").val();
            if(pname==""){
                alert("product name required !!")
            } else {
                $.ajax({
                    url : "adminAction.php",
                    type : "POST",
                    data : {
                        pname:pname, purl:purl, pavail:pavail, action:"addcategory"
                    },
                    success : function(data){
                       alert("successfully Added Category !!")
                       $('#categoryform')[0].reset();
                       location.reload();
                    }
                })
            }
          
        })

        $("#example").DataTable({
               "ajax":'action.php'
        });

        // $("#example").on("click", ".editbtn", function(){
           
        //     var eid=$(this).data("eid");
        //     alert("hello i am edit"+eid);
        // })

        $("#example").on("click", ".deletebtn", function(){
            var did=$(this).data("did");
            alert("hello i am delete"+did);
        })
    })
</script>

