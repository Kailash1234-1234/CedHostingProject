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
require_once 'header.php'; ?>
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
                  <li class="breadcrumb-item active" aria-current="page">Add Catedory</li>
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
                  <span class="pcat" >invalid cridentials</span>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id='productname'>
                  </div>
                  <span class="pname" >invalid cridentials</span>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="URL (Optional)" type="text" id=producturl>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                     <input class="form-control" placeholder="Select category" type="text"> -->
                    <!-- <select name="availvility" id="available">
                    <option value="">Select Availbility...</option>
                        <option value="0">Not Available</option>
                        <option value="1"> Available</option>

                    </select> -->
                  <!-- </div>
                  <span class="avail" >invalid cridentials</span>
                </div> --> 
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

<!-- update category Modal -->
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
                  <span class="btn-inner--text">Update Category Here !!</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5 " id="updatecat1">
            
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
  <!-- ens category modal -->
    <div class="container-fluid">
    <table id="example" class="display table" cellspacing="0">
    <thead>
        <tr class="bg-primary text-white">
            <th>S No.</th>
            <th>Parent Category Name</th>
            <th>Product Category Name</th>
            <!-- <th>Page Link</th> -->
            <th>Category Availbility</th>
            <th>Product Category Luanch Date </th>
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
        

//validation add product form
        // product name validate
           $("#createcatbtn").hide();
           $(".pcat").hide();
           $(".pname").hide();
           $(".avail").hide();
            var pname=$("#productname").val();
            var purl=$("#producturl").val();
            // var pavail=$("#available").val();
            $("#productname").focusout(function() {
              product_name();
           })
           function product_name(){
            var pname=$("#productname").val();
            var ansletter = /^([a-zA-Z_0-9]+\s?)*$/;
            if(pname.length==''){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter product category name");
              $("#createcatbtn").hide();
            } else if(!pname.match(ansletter)){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter valid product category name Ex: Windows hosting");
              $("#createcatbtn").hide();
            } else{
              $(".pname").hide();
              $("#createcatbtn").show();
            }
            } 

            // $("#available").focusout(function() {
            //   product_avil(); 
            //  })

            // function product_avil() {
            //     var pavail=$("#available").val();
            //     var regex = /^[0-9-+()]*$/;
            //     if(pavail.length==''){
            //     $(".avail").show();
            //     $(".avail").focus();
            //     $(".avail").html("** Please select availbility");
            //     $("#createcatbtn").hide();
            //     } else {
            //       $(".avail").hide();
            //       $("#createcatbtn").show();
            //     }
               
            // }

        $("#createcatbtn").on("click", function(e){
        
            e.preventDefault();
          //  alert("hahaah i am add btn")
            var pname=$("#productname").val();
            var purl=$("#producturl").val();
            // var pavail=$("#available").val();
            if(pname==""){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter product category name ");
            } else {
                $.ajax({
                    url : "adminAction.php",
                    type : "POST",
                    data : {
                        pname:pname, purl:purl, action:"addcategory"
                    },
                    success : function(data){
                       alert("Category added  successfully !!")
                       $('#categoryform')[0].reset();
                       location.reload();
                    }
                })
            }
          
        })

        $("#example").DataTable({
               "ajax":'action.php'
        });

         $(document).on("click", "#updatecatbtn", function(){
            var eid=$(this).data("upid");
            var pname=$("#productname1").val();
            var purl=$("#link1").val();
            var pavail=$("#available1").val();
            if(pname==""){
              alert("Category name is required");
            } else if (pavail==''){
              alert("please select  availbility ");
            }
            $.ajax({
              url : "adminAction.php",
              type : "POST",
              dataType: "json",
              data : {eid:eid, pname:pname, purl:purl, pavail:pavail, action:"updatecat"},
              success : function(data){
               
                if(data==1){
                  alert("Category updated successfully  !!");
                  location.reload();
                } else {
                  alert("Not updated, some thing went wrong !!");
                }
              }
            })
         });

        $("#example").on("click", ".editbtn", function(){
            var eid=$(this).data("eid");
            //alert("hello i am edit"+eid);
            $.ajax({
              url : "adminAction.php",
              type : "POST",
              dataType: "json",
              data : {eid:eid, action:"editcat"},
              success : function(data){
                //alert(data)
                $("#updatecat1").html('<form role="form" id="updatecat11">'+
                '<div class="form-group">'+
                  '<div class="input-group input-group-merge input-group-alternative mb-3">'+
                    '<input class="form-control text-center" disabled type="text"  value="HOSTING" >'+
                  '</div>'+
                '</div>'+
                '<div class="form-group">'+
                  '<div class="input-group input-group-merge input-group-alternative mb-3">'+
                    '<div class="input-group-prepend">'+
                      '<span class="input-group-text"><i class="ni ni-hat-3"></i></span>'+
                    '</div>'+
                    '<input class="form-control"  type="text" id="productname1" value="'+data['prod_name']+'" >'+
                  '</div>'+
                '</div>'+
                '<div class="form-group">'+
                  '<div class="input-group input-group-merge input-group-alternative mb-3">'+
                    '<div class="input-group-prepend">'+
                     ' <span class="input-group-text"><i class="ni ni-email-83"></i></span>'+
                   '</div>'+
                    '<input class="form-control" type="text" id="link1" placeholder="Add Url" value="" >'+
                  '</div>'+                                                                             
                '</div>'+
                '<div class="form-group">'+
                  '<div class="input-group input-group-merge input-group-alternative">'+
                    '<div class="input-group-prepend">'+
                      '<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>'+
                      '<select  name="availvility" id="available1">'+
                       '<option class="category" value="">Select Availbility</option>'+
                       '<option value="0">Not Available</option>'+
                        '<option value="1"> Available</option>'+
                    '</select>'+
                    '</div>'+
                  '</div>'+
                '</div>'+
                '<div class="text-center">'+
                  '<button type="button" class="btn btn-primary mt-4" data-upid="'+data['id']+'" id="updatecatbtn">Update Category</button>'+
                  '<button type="button" class="btn btn-danger mt-4" data-dismiss="modal">Close</button>'+
                '</div>'+
              '</form>')
              }
            })
        })

        $("#example").on("click", ".deletebtn", function(){
          if(confirm("Are you Sure To delete This Category ??")){
            var did=$(this).data("did");
            $.ajax({
              url : "adminAction.php",
              type : "POST",
              data : {did:did, action:"deletecat"},
              success : function(data){
                if(data==1){
                alert("Successfully Deleted !!");
                location.reload();
                loadcat()
                } else {
                  alert(" not  Deleted, Something went wrong!!"); 
                }
              }
            })
          }
        })
        
    })
</script>

