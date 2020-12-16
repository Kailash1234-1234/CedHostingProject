<?php
/**
 * Recipe class file
 *
 * PHP Version 5.2
 *
 * @category Recipe
 * @package  Recipe
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/recipes
 */ ?>
<?php  if ($menu="linuxhosting"); ?>
<?php require_once 'header.php';
require_once 'classes/Dbcon.php';
require_once 'classes/Product.php';

$conn=new Dbcon();
$conn=$conn->createConnection();
$addcategory=new Product();

if (isset($_GET['id'])) {
      $catid=$_GET['id'];
      // echo "<script>var id =".$_GET['id']."</script>";
      $arr= $addcategory->fetchProductCategory($catid, $conn);     
}
?>
<!---header--->
<!---singleblog--->
<div class="content">
    <div class="linux-section">
        <div class="container">
        <?php
        if (isset($_GET['id'])) { 
            foreach ($arr as $val) {
            ?>
            <div class="linux-grids">
                <div class="col-md-8 linux-grid">
                <h2><?php echo $val[1]; ?></h2>
                <?php echo $val[2];?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
        <?php 
            }
        }?>
        
<div class="tab-prices">
<?php
 $arrall = $addcategory->fetchProductCategoryAllData($catid, $conn);
//   print_r($arrall);
?>
<div class="container" id="myTab">
    <div class="bs-example bs-example-tabs" role="tabpanel"
     data-example-id="togglable-tabs">
        <ul  class="nav nav-tabs left-tab" role="tablist">
            <li role="presentation" class="active"><a href="#home" 
            id="home-tab" role="tab" data-toggle="tab"
             aria-controls="home" aria-expanded="true">IN Hosting</a></li>
            <li role="presentation"><a href="#profile"
             role="tab" id="profile-tab" data-toggle="tab"
              aria-controls="profile">US Hosting</a></li>
            </ul>
        <div id="myTabContent" class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active"
             id="home" aria-labelledby="home-tab">
                <div class="linux-prices">
                <?php foreach ($arrall as $prodesc) { ?>
                    <div class="col-md-3 linux-price">
                        <div class="linux-top">
                        <h4><?php echo $prodesc[1]; ?></h4>
                        </div>
                        <div class="linux-bottom">
                            <h5>$  <?php echo $prodesc[8]; ?> <span class="month">per month</span></h5>
                            <h5>$  <?php echo $prodesc[9]; ?> <span class="month">per year</span></h5>
                            <h6><?php echo $prodesc[5] ?>  Free Domain </h6>
                            <ul>
                            <li><strong><?php echo $prodesc[3] ?> GB</strong> Web Space </li>
                            <li><strong><?php echo $prodesc[4] ?> MB</strong> Band Width </li>
                            <li><strong> <?php echo $prodesc[7] ?>  </strong> Email Accounts</li>
                            <li><strong><?php echo $prodesc[6]?></strong>  technology Supports </li>
                            <li><strong>Includes </strong>  Global CDN </li>
                            <li><strong>High Performance</strong>  Servers</li>
                            <li><strong>location</strong> : 
                            <img src="images/india.png"></li>
                            </ul>
                        </div>
                        <a href="#" class="catbtn" data-catid="<?php echo $prodesc[12]; ?>">buy now</a>
                    </div>
                <?php }; ?>
                    <div class="clearfix"></div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- clients -->
<div class="clients">
    <div class="container">
        <h3>Some of our satisfied clients include...</h3>
        <ul>
            <li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
            <li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
            <li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
            <li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
            <li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
            <li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
        </ul>
    </div>
</div>
<!-- clients -->
    <div class="whatdo">
        <div class="container">
            <?php foreach ($arr as $val) { ?>
                <h3 style=" text-transform: uppercase;" ><?php echo $val['1'] ?> Features</h3>
            <?php }?>
           
            <div class="what-grids">
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit,
                             sed do eiusmod tempor 
                             incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur
                             adipisicing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur
                             adipisicing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="what-grids">
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-download-alt"
                     aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur
                             adipisicing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-move" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit,
                             sed do eiusmod tempor incididunt ut 
                             labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 what-grid">
                    <div class="what-left">
                    <i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
                    </div>
                    <div class="what-right">
                        <h4>Expert Web Design</h4>
                        <p>Lorem ipsum dolor sit amet conse ctetur
                             adipisicing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>
<!---footer--->
<?php require_once 'footer.php'; ?>
<script>
    
 
   $(document).ready(function(){
      $(".catbtn").on("click", function(){
          var catid= $(this).data("catid");
          alert(catid)
      })

   })
</script>