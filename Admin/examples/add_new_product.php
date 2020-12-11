<?php require_once 'header.php'; ?>
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
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
              <div class="form-group">
              <label for="available"> Select Product Category <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cloud'></i></span>
                    </div>
                    <select name="availvility" id="available">
                        <option value="0">Not Available</option>
                        <option value="1"> Available</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                <label for="available"> Enter Product Name <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cloud-sun'></i></span>
                    </div>
                    <input class="form-control" disabled type="text" id="productcat" value="" >
                  </div>
                </div>
                <div class="form-group">
                <label for="available">Page URL</label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-cookie'></i></span>
                    </div>
                    <input class="form-control" placeholder="Product Name" type="text" id='productname'>
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
                    <input class="form-control" placeholder="Ex : 23" type="text" id=producturl>
                   
                  </div>
                  <h5>this shuld be monthly plan</h5>
                </div>
                <div class="form-group">
                <label for="available"> Enter Annual Price <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fab fa-btc'></i></span>
                    </div>
                    <input class="form-control" placeholder="Ex : 23" type="text" id=producturl>
                  </div>
                  <h5>This would be Annual Price</h5>
                </div>
                <div class="form-group">
                <label for="available"> SKU <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-key'></i></span>
                    </div>
                    <input class="form-control" type="text" id=producturl>
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
                    <input class="form-control"  type="text" id=producturl>
                
                </div>
                <h5>Enter 0.5 for 512 MB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Bandwidth (in GB) <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fab fa-cloudversify'></i></span>
                    </div>
                    <input class="form-control"  type="text" id=producturl>
                </div>
                <h5>Enter 0.5 for 512 MB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Free Domain <span>*</span></label>
                <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text"><i class='fas fa-globe'></i></span>
                    </div>
                    <input class="form-control" type="text" id=producturl>
                </div>
                <h5>Enter 0 if no domain avilable in this service</h5>
                </div>
                <div class="form-group">
                <label for="available"> Language/Technology Support <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class='fas fa-code'></i></span>
                    </div>
                    <input class="form-control"  type="text" id=producturl>
                  </div>
                  <h5>Separate by(,) Ex: PHP, MySQL, MongoDB</h5>
                </div>
                <div class="form-group">
                <label for="available"> Mailbox <span>*</span></label>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" type="text" id=producturl>
                  </div>
                <h5>Enter Number of mailbox will be provided, 0 if none </h5>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-success mt-4" id="createcatbtn">Create Now</button>
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
