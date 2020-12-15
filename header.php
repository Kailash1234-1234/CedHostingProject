<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
session_start(); 
if (isset($_SESSION["email"])) { 
    $email = $_SESSION["email"];
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<!---fonts-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">

    $(function() {
    $('.team a').Chocolat();
    });

</script>	

<script type="text/javascript" src="js/jquery.hoverdir.js"></script>


<script type="text/javascript">
    $(function() {
    
        $(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
    });

</script>						
<!--script-->
</head>
<body>
    <!---header--->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="sr-only">Toggle navigation</i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </button>				  
                            <div class="navbar-brand">
                            
                                <h1 class="logo">  <a href="index.php"><span class="l1"><i class='fas fa-globe'></i>  Ced</span><span class="l2"> Hosting  <i class='fas fa-globe'></i> </span> </a></h1>
                            </div>
                        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="<?php 
                                if ($menu=="index") {
                                     echo "active";
                                } ?>">
                                <a href="index.php">Home
                                     <i class="sr-only">(current)</i></a></li>
                                <li class="<?php
                                if ($menu=="about") {
                                     echo "active";
                                } ?>"><a href="about.php">About</a></li>
                                <!-- <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages<i class="caret"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="pricing.php">Pricing</a></li>
                                            <li><a href="faq.php">FAQ's</a></li>
                                            <li><a href="testimonials.php">Testimonials</a></li>
                                            <li><a href="history.php">History</a></li>
                                            <li><a href="support.php">Support</a></li>
                                            <li><a href="templatesetting.php">Template setting</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="portfolio.php">Portfolio</a></li>
                                        </ul>
                                    </li> -->
                                <li class="<?php 
                                if ($menu=="services") { 
                                    echo "active"; 
                                } ?>"><a href="services.php">Services</a></li>
                                <li class="dropdown <?php 
                                if ($menu=="linuxhosting" || $menu=="wordpresshosting" || $menu=="windowshosting" || $menu=="cmshosting") { 
                                    echo "active"; 
                                } ?>">
                                    <a href="#" class="dropdown-toggle"
                                     data-toggle="dropdown"
                                     role="button" aria-haspopup="true"
                                     aria-expanded="false">
                                    Hosting<i class="caret"></i></a>
                                <ul class="dropdown-menu" id="productcat"></ul>	
                            
                                  </li>
                                <li class="<?php
                                if ($menu=="pricing") { 
                                    echo "active"; 
                                } ?>"><a href="pricing.php">Pricing</a></li>
                                <li class="<?php 
                                if ($menu=="blog") { 
                                    echo "active"; 
                                } ?>"><a href="blog.php">Blog</a></li>
                                <li class="<?php 
                                if ($menu=="contact") { 
                                    echo "active"; 
                                } ?>"><a href="contact.php">Contact</a></li>
                                <li class="<?php 
                                if ($menu=="cart") {
                                    echo "active";
                                } ?>">
                                <a href="cart.php">
                                <i class='fas fa-cart-plus' style='font-size:20px'>
                            </i>
                            </a></li>
                                <?php 
                                if (isset($_SESSION['email'])) { ?>
                                    <li class="<?php 
                                    if ($menu=="login") { 
                                        echo "active"; 
                                    } ?>"><a href="logout.php">Logout</a></li>
                                <?php } else { ?>
                                    <li class="<?php
                                    if ($menu=="login") { 
                                        echo "active"; 
                                    } ?>"><a href="login.php">Login</a></li>
                                <?php } ?>
                            </ul>
                                      
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    <!---header--->
    <script>
        $(document).ready(function(){
        function loadcat(){
            $.ajax({
                url : "Admin/examples/adminAction.php",
                type : "POST",
                data : {action:"fetchalldatanav"},
                dataType: "json",
                success : function(data){
                        var html='';
                        for(var i=0;i<data.length;i++){
                           html+= '<li>'+'<a href="catpage.php?id='+data[i][0]+'">'+data[i][1]+'</a>'+'</li>';
                        }
                        $("#productcat").html(html);
                }
            })
            }
            loadcat();
        })
    </script>