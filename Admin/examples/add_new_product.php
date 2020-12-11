<?php require_once 'header.php'; ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"> <i class="ni ni-planet text-orange"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Prosucts </a></li>
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
                <div style="height:2px; width:100%;margin-bottom:30px; background-color:#ccc"></div>
              <div class="form-group">
              <label for="available"> Select Product Category <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cloud'></i></span>
                    </div>
                    <select name="availvility" id="productcat">
                       
                    </select>
                  </div>
                </div>
                <div class="form-group">
                <label for="available"> Enter Product Name <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cloud-sun'></i></span>
                    </div>
                    <input class="form-control" type="text" id="productname" value="" >
                  </div>
                </div>
                <div class="form-group">
                <label for="available">Page URL</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cookie'></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id='purl'>
                  </div>
                </div>

                <h1>Product Description </h1>
                <p>Enter Product Description Below</p>
                <div style="height:2px; width:100%;margin-bottom:30px; background-color:#ccc"></div>
              
                <div class="form-group">
                <label for="available"> Enter Monthly Price  <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-dollar-sign'></i></span>
                    </div>
                    <input class="form-control" placeholder="Ex : 23" type="text" id="mprice">
                   
                  </div>
                  <h5>this shuld be monthly plan</h5>
                </div>
                <div class="form-group">
                <label for="available"> Enter Annual Price <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fab fa-btc'></i></span>
                    </div>
                    <input class="form-control" placeholder="Ex : 23" type="text" id="aprice">
                  </div>
                  <h5>This would be Annual Price</h5>
                </div>
                <div class="form-group">
                <label for="available"> SKU <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-key'></i></span>
                    </div>
                    <input class="form-control" type="text" id="skuid">
                  </div>
                </div>

                <h1>Feature </h1>
                <div style="height:2px; width:100%;margin-bottom:30px; background-color:#ccc"></div>

                <div class="form-group">
                <label for="available"> Web Space (in GB) <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-fire'></i></span>
                    </div>
                    <input class="form-control"  type="text" id="wspace">
                
                </div>
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
                <h5>Enter 0.5 for 512 MB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Free Domain <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-globe'></i></span>
                    </div>
                    <input class="form-control" type="text" id="fdomain">
                </div>
                <h5>Enter 0 if no domain avilable in this service</h5>
                </div>
                <div class="form-group">
                <label for="available"> Language/Technology Support <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-code'></i></span>
                    </div>
                    <input class="form-control"  type="text" id="technology">
                  </div>
                  <h5>Separate by(,) Ex: PHP, MySQL, MongoDB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Mailbox <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" type="text" id="mailbox">
                  </div>
                <h5>Enter Number of mailbox will be provided, 0 if none </h5>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-success mt-4" id="createproductbtn">Create Now</button>
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



        $("#productname").keypress(function(event) {
            var character = String.fromCharCode(event.keyCode);
            return isValid(character);     
        });

        function isValid(str) {
            return !/[~`.!@#$%\^&*()+=\-\[\]\\';,/{}|0123456789\\":<>\?]/g.test(str);
        }
        $("#createproductbtn").on("click", function(e){

          e.preventDefault();
          var pcategory=$("#productcat").val();
          var productname=$("#productname").val();
          var producturl=$("#purl").val();
          var monthlyprice=$("#mprice").val();
          var annualyprice=$("#aprice").val();
          var skuid=$("#skuid").val();
          var webspace=$("#wspace").val();
          var bandwidth=$("#bwidth").val();
          var freedomain=$("#fdomain").val();
          var technology=$("#technology").val();
          var mailbox=$("#mailbox").val();
 
          if(pcategory==""){
            alert("please select product category");
          } else if (productname==''){
            alert ("Enter Product Name");
          }
          else if (producturl==''){
            alert ("Enter Product Url");
          }
          else if (monthlyprice==''){
            alert ("Enter  Monthly Price In Rupee");
          }
          else if (annualyprice==''){
            alert ("Enter Annualy Price In Rupee");
          }
          else if (skuid==''){
            alert ("Enter SKU Id");
          }
          else if (webspace==''){
            alert ("Enter WEB Space In MB");
          }
          else if (bandwidth==''){
            alert ("Enter BandWidth In MB");
          } 
          else if (freedomain==''){
            alert ("Enter Free Domain Name");
          } 
          else if (technology==''){
            alert ("Enter Technology LIke JAVA, PHP, SQL");
          } 
          else if (mailbox==''){
            alert ("Enter Number Of MailBoxs");
          } else {
               $.ajax({
                 url : "adminAction.php",
                 type : "POST",
                 data : {pcategory:pcategory, productname:productname,producturl:producturl,monthlyprice:monthlyprice,annualyprice:annualyprice,skuid:skuid,webspace:webspace,bandwidth:bandwidth,freedomain:freedomain,technology:technology,mailbox:mailbox,action:"addnewproduct"},
                 dataType : "json",
                 success : function(data){
                   console.log(data);
                   alert(data);
                 }
               })
          }

          alert("i am add product button"+pcategory);
        })
    })
  </script>
