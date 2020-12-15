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
                  <li class="breadcrumb-item"><a href="#"> <i class="ni ni-planet text-orange"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Products </a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Products</li>
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
  <!-- Page content -->
   <div class="container mt--6 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
             
              <div class="text-center mt-3">
                <a href="#" class="btn btn-neutral btn-icon mr-4">
                  <span class="btn-inner--icon"> <i class="ni ni-planet text-orange"></i></span>
                  <span class="btn-inner--text">Add New Product Here !!</span>
                </a>
               
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" id="categoryform">
                <h1>  Create New Product</h1>
                <p>Enter Product Details</p>
                <span class="text-danger"> Note : All fields are required (*)</span>
                <div style="height:2px; width:100%;margin-bottom:30px; background-color:#ccc"></div>   
            <div class="form-group">
              <label for="available"> Select product category <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cloud'></i></span>
                    </div>
                    <select name="availvility" id="productcat">
                       
                    </select>
                  </div>
                  <span class="pcat"> Please choose product category</span>
                </div>
                <div class="form-group">
                <label for="available"> Enter product name <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cloud-sun'></i></span>
                    </div>
                    <input class="form-control" type="text" id="productname" placeholder="Ex : Ced Hosting" >
                  </div>
                  <span class="pname" >invalid product name</span>
                </div>
                <div class="form-group">
                <label for="available">Page URL</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cookie'></i></span>
                    </div>
                    <input class="form-control" placeholder="http:www.google.com" type="text" id="producturl">
                  </div>
                  <!-- <span class="purl" >invalid product name</span> -->
                </div>

                <h1>Product description </h1>
                <p>Enter product description below</p>
                <div style="height:2px; width:100%;margin-bottom:30px; background-color:#ccc"></div>
              
                <div class="form-group">
                <label for="available"> Enter monthly price  <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-dollar-sign'></i></span>
                    </div>
                    <input class="form-control" maxlength="5" placeholder="Ex : 23" type="text" id="mprice">
                  </div>
                  <span class="mp" >invalid cridentials</span>
                  <h5>this shuld be monthly plan</h5>
                </div>
                <div class="form-group">
                <label for="available"> Enter annual price <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fab fa-btc'></i></span>
                    </div>
                    <input class="form-control" maxlength="5" placeholder="Ex : 23" type="text" id="aprice">
                  </div>
                  <span class="ap" >invalid cridentials</span>
                  <h5>This would be annual price</h5>
                </div>
                <div class="form-group">
                <label for="available"> SKU <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-key'></i></span>
                    </div>
                    <input class="form-control" type="text"  id="skuid">
                  </div>
                  <span class="sku" >invalid cridentials</span>
                </div>

                <h1>Feature </h1>
                <div style="height:2px; width:100%;margin-bottom:30px; background-color:#ccc"></div>

                <div class="form-group">
                <label for="available"> Web space (in GB) <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-fire'></i></span>
                    </div>
                    <input class="form-control"  type="text" id="wspace">
                
                </div>
                <span class="wsp" >invalid cridentials</span>
                <h5>Enter 0.5 for 512 MB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Bandwidth (in GB) <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fab fa-cloudversify'></i></span>
                    </div>
                    <input class="form-control"  type="text" id="bwidth">
                </div>
                <span class="bw" >invalid cridentials</span>
                <h5>Enter 0.5 for 512 MB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Free domain <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-globe'></i></span>
                    </div>
                    <input class="form-control" maxlength="3" type="text" id="fdomain">
                </div>
                <span class="fd" >invalid cridentials</span>
                <h5>Enter 0 if no domain avilable in this service</h5>
                </div>
                <div class="form-group">
                <label for="available"> Language/Technology support <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-code'></i></span>
                    </div>
                    <input class="form-control"  type="text" id="technology">
                  </div>
                  <span class="tech" >invalid cridentials</span>
                  <h5>Separate by(,) Ex: PHP, MySQL, MongoDB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Mailbox <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" maxlength="3" type="text" id="mailbox">
                  </div>
                  <span class="mb" >invalid cridentials</span>
                <h5>Enter Number of mailbox will be provided, 0 if none </h5>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-success mt-4" id="createproductbtn">Create now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <div class="container">
<?php require_once 'footer.php'; ?>     
</div>  
  <script>
    $(document).ready(function(){
      debugger;
      function loadcat(){
        $.ajax({
          url : "adminAction.php",
          type : "POST",
          data : {action:"fetchalldatanav"},
          dataType: "json",
          success : function(data){
              var html='<option value="">Chose Cetegory Here..</option>';
              for(var i=0;i<data.length;i++){
                html+= '<option value="'+data[i][0]+'">'+data[i][1]+'</option>';
              }
              $("#productcat").html(html);
          }
        })
        }
        loadcat();

        //validation add product form
        // product name validate
        $("#createproductbtn").hide();
           $(".pname").hide();
           $(".mp").hide();
           $(".ap").hide();
           $(".wsp").hide();
           $(".bw").hide();
           $(".tech").hide();
           $(".mb").hide();
           $(".fd").hide();
           $(".sku").hide();
           $(".pcat").hide();

           var pcategory=$("#productcat").val();
            // product category validate 
            $("#productcat").focusout(function(){
                cat_validate();
            });
            function cat_validate(){
            var pcat=$("#productcat").val();
            if(pcat.length==''){
                $(".pcat").show();
                $(".pcat").focus();
                $(".pcat").html("** Please choose  product category ");
                $("#createproductbtn").hide();
                } else  {
                  $(".pcat").hide();
                 // $("#createproductbtn").show();
                 // product_name();
                }
            }

           $("#productname").focusout(function() {
              product_name();
           })
           function product_name(){
            var pname=$("#productname").val();
            var ansletter = /(^([a-zA-Z]+\-[0-9]+$))|(^([a-zA-Z])+$)/;
            if(pname.length==''){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter product name");
              $("#productname").focus();
              $("#createproductbtn").hide();
              return false;
            } else if(!pname.match(ansletter)){
              $(".pname").show();
              $(".pname").focus();
              $(".pname").html("** Please enter valid product name Ex: Windows Hosting");
              $("#productname").focus();
              $("#createproductbtn").hide();
              return false;
            } else{
              $(".pname").hide();
              //product_m_price();
              //$("#createproductbtn").show();
            }
            } 
            
            $("#mprice").focusout(function() {
              product_m_price();
             })

            function product_m_price() {
                var monthlyprice=$("#mprice").val();
                var monthregex = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
                if(monthlyprice.length==''){
                $(".mp").show();
                $(".mp").focus();
                $(".mp").html("** Please enter  monthly price");
                $("#createproductbtn").hide();
                $("#mprice").focus();
                return false;
                } else if(!monthlyprice.match(monthregex)){
                $(".mp").show();
                $(".mp").focus();
                $(".mp").html("** Please enter valid monthly price Ex: 120");
                $("#createproductbtn").hide();
                $("#mprice").focus();
                return false;
                } else {
                  $(".mp").hide();
                  //product_a_price();
                 // $("#createproductbtn").show();
                }
               
            }

            $("#aprice").focusout(function() {
              product_a_price();
             })

             function product_a_price() {
              var annualyprice=$("#aprice").val();
              var annuregex = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
                if(annualyprice.length==''){
                $(".ap").show();
                $(".ap").focus();
                $(".ap").html("** Please enter  annualy price");
                $("#createproductbtn").hide();
                $("#aprice").focus();
                return false;
                } else if(!annualyprice.match(annuregex)){
                $(".ap").show();
                $(".ap").focus();
                $(".ap").html("** Please enter valid annualy price Ex: 1200");
                $("#createproductbtn").hide();
                $("#aprice").focus();
                return false;
                } else {
                  $(".ap").hide();
                 // sku_id_validate();
                  //$("#createproductbtn").show();
                }
            }


            // sku validate 
            $("#skuid").focusout(function(){
              sku_id_validate();
            });
            function sku_id_validate(){
              var skuid=$("#skuid").val();
              var skuregex = /^(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+))|(([a-zA-Z0-9-#?]+)([a-zA-Z0-9]+)([-#?]))+$/;
              if(skuid.length==''){
                $(".sku").show();
                $(".sku").focus();
                $(".sku").html("** Please enter SKU ID");
                $("#createproductbtn").hide();
                $("#skuid").focus();
                return false;
                } else if(!skuid.match(skuregex)){
                $(".sku").show();
                $(".sku").focus();
                $(".sku").html("** Please enter valid SKU ID Ex: WINDOW#12");
                $("#createproductbtn").hide();
                $("#skuid").focus();
                return false;
                } else {
                  $(".sku").hide();
                  //sku_websp_validate();
                 // $("#createproductbtn").show();
                }
            }
            // web space validate 
            $("#wspace").focusout(function(){
              sku_websp_validate();
            });

              function sku_websp_validate(){
              var webspace=$("#wspace").val();
              var webregex = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
              if(webspace.length==''){
                $(".wsp").show();
                $(".wsp").focus();
                $(".wsp").html("** Please enter webspace In MB");
                $("#createproductbtn").hide();
                $("#wspace").focus();
                return false;
                } else if(!webspace.match(webregex)){
                $(".wsp").show();
                $(".wsp").focus();
                $(".wsp").html("** Please enter valid web space Ex:12.5");
                $("#createproductbtn").hide();
                $("#wspace").focus();
                return false;
                } else {
                  $(".wsp").hide();
                  //bandwidth_validate();
                  //$("#createproductbtn").show();
                }
            }
            // band width validate 
            $("#bwidth").focusout(function(){
              bandwidth_validate();
            });

            function bandwidth_validate(){
              var bandwidth=$("#bwidth").val();
              var bandwidthregx = /^([0-9]+\.[0-9]+$)|(^([0-9])+$)/;
              if(bandwidth.length==''){
                $(".bw").show();
                $(".bw").focus();
                $(".bw").html("** Please enter bandWidth in MB");
                $("#createproductbtn").hide();
                $("#bwidth").focus();
                return false;
                } else if(!bandwidth.match(bandwidthregx)){
                $(".bw").show();
                $(".bw").focus();
                $(".bw").html("** Please enter valid bandwidth Ex:12.9");
                $("#createproductbtn").hide();
                $("#bwidth").focus();
                return false;
                } else {
                  $(".bw").hide();
                  //fd_validate();
                 // $("#createproductbtn").show();
                }
            }

            // free domain validate 
             $("#fdomain").focusout(function(){
              fd_validate();
            });

            function fd_validate(){
              var freedomain=$("#fdomain").val();
              var fdregex = /^[0-9]*$/;
              if(freedomain.length==''){
                $(".fd").show();
                $(".fd").focus();
                $(".fd").html("** Please enter number of free domain");
                $("#createproductbtn").hide();
                $("#fdomain").focus();
                return false;
                } else if(!freedomain.match(fdregex)){
                $(".fd").show();
                $(".fd").focus();
                $(".fd").html("** Please enter free domain Ex: 2");
                $("#createproductbtn").hide();
                $("#fdomain").focus();
                return false;
                } else {
                  $(".fd").hide();
                 // tech_validate();
                 // $("#createproductbtn").show();
                }
            }
            // technology validate 
            $("#technology").focusout(function(){
                tech_validate();
            });

            function tech_validate(){
              var technology=$("#technology").val();
              var techregex = /(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+[0-9]+\,[a-zA-Z]+$))|(^([a-zA-Z]+\,[a-zA-Z]+[0-9]+$))|(^([a-zA-Z]+\,[a-zA-Z]+$))|(^([a-zA-Z])+$)/;
              if(technology.length==''){
                $(".tech").show();
                $(".tech").focus();
                $(".tech").html("** Please enter technology name");
                $("#createproductbtn").hide();
                $("#technology").focus();
                return false;
                } else if(!technology.match(techregex)){
                $(".tech").show();
                $(".tech").focus();
                $(".tech").html("** Please enter valid technology Name Ex: JAVA,PHP ");
                $("#createproductbtn").hide();
                $("#technology").focus();
                return false;
                } else {
                  $(".tech").hide();
                  //mail_validate();
                 // $("#createproductbtn").show();
                }
            }
             // mailbox validate 
             $("#mailbox").focusout(function(){
                mail_validate();
            });

            function mail_validate(){
              var mailbox=$("#mailbox").val();
              var mailregex = /^[0-9]*$/;
              if(mailbox.length==''){
                $(".mb").show();
                $(".mb").focus();
                $(".mb").html("** Please enter number of mailbox");
                $("#createproductbtn").hide();
                $("#mailbox").focus();
                return false;
                } else if(!mailbox.match(mailregex)){
                $(".mb").show();
                $(".mb").focus();
                $(".mb").html("** Please enter number only Ex: 2 ");
                $("#createproductbtn").hide();
                $("#mailbox").focus();
                return false;
                } else {
                  $(".mb").hide();
                  $("#createproductbtn").show();
                }
            }
             

        
        $("#createproductbtn").on("click", function(e){

          e.preventDefault();
          var pcategory=$("#productcat").val();
          var productname=$("#productname").val();
          var producturl=$("#producturl").val();
          var monthlyprice=$("#mprice").val();
          var annualyprice=$("#aprice").val();
          var skuid=$("#skuid").val();
          var webspace=$("#wspace").val();
          var bandwidth=$("#bwidth").val();
          var freedomain=$("#fdomain").val();
          var technology=$("#technology").val();
          var mailbox=$("#mailbox").val();
           $(".pname").hide();
           $(".mp").hide();
           $(".ap").hide();
           $(".wsp").hide();
           $(".bw").hide();
           $(".tech").hide();
           $(".mb").hide();
           $(".fd").hide();
           $(".sku").hide();
           if((pcategory=="" || productname=="" || monthlyprice=='' || annualyprice=='' || skuid=='' || webspace=='' || bandwidth=='' || freedomain=='' || technology=='' || mailbox=='')){
          if(pcategory==""){
            $("#productcat").focus();
            $(".pcat").show();
            cat_validate();
          } 
          if (productname==""){
            $("#productname").focus();
            $(".pname").show();
          }
           if (monthlyprice==''){
            $("#mprice").focus();
            $(".mp").show();
          }
           if (annualyprice==''){
            $("#aprice").focus();
            $(".ap").show();
          }
           if (skuid==''){
            $("#skuid").focus();
            $(".sku").show();
          }
           if (webspace==''){
            $("#wspace").focus();
            $(".wsp").show();
          }
           if (bandwidth==''){
            $("#bwidth").focus();
            $(".bd").show();;
          } 
           if (freedomain==''){
            $("#fdomain").focus();
            $(".fd").show();
          } 
           if (technology==''){
            $("#technology").focus();
            $(".tech").show();
          } 
          if (mailbox==''){
            $("#mailbox").focus();
            $(".mb").show();
           }  
           }else{
               $.ajax({
                 url : "adminAction.php",
                 type : "POST",
                 data : {pcategory:pcategory, productname:productname,producturl:producturl,monthlyprice:monthlyprice,annualyprice:annualyprice,skuid:skuid,webspace:webspace,bandwidth:bandwidth,freedomain:freedomain,technology:technology,mailbox:mailbox,action:"addnewproduct"},
                 dataType : "json",
                 success : function(data){
                   //console.log(data);
                   if(data==1){
                     alert(" Product added successfully !!");
                     location.reload();
                   }else{
                    $("#productcat").focus();
                    $(".pcat").show();
                    alert(" Product not added successfully !!");
                   }
                 }
               })
           } 
        })
    })
  </script>
