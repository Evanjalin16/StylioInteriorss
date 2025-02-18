<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Livefloor an Interior & Furniture Category Bootstrap Responsive Template | Contact :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.html">
          <span class="sub-spl">Stylio</span>
          </a></h1>
        <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.php">Services</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>

          </ul>
        </div>
        <div class="d-lg-block d-none">
          <a href="contact.html" class="btn btn-style btn-secondary">Get Free Estimate</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Product Details</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Product Details </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /contact-->
  <?php
  require("connection.php");
  $id=$_REQUEST["var"];

$res=$con->query("Select * from `addproducts` where `id`='$id'");
$count=$res->num_rows;
if($count>0){
$row=$res->fetch_assoc();
}
?>

<form class="form-horizontal" action="order.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
	<input type="hidden" value="<?php echo $row["id"];?>" name="id">
</div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Product name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Product Name" name="pname" value="<?php echo $row["name"];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Category</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Category" name="categ" value="<?php echo $row["category"];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Subcategory</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Subcategory" name="subc" value="<?php echo $row["subcategory"];?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Price</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="price" placeholder="Enter the Price" name="price" value="<?php echo $row["price"];?>">
    </div>
  </div>
  <div class="form-group">

  <br><img src="<?php echo "admin/images/".$row["image"];?>" width="50px" height="50px">
</div>
<br>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Quantity</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="quantity" required min="1" name="quantity" >
    </div>
  </div>

  

  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label hor-form">Total Price</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="total" name="totalPrice">
        <span id="error-message"></span>
      </div>
    </div>
   
    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">Check Out</button>
    </div>
  </div>
</form>

<script>
    $(document).ready(function(){
    $('#quantity').on('keyup',function(){
      var quantity=parseFloat(this.value);
      
        var price=parseFloat($("#price").val());
        if(!isNaN(quantity) && quantity>=0){
        var total=price*quantity;
        $('#total').val(total.toFixed(2));
        
      }else{
        
        $("#total").val('');
      }
});
});
</script>
                  
          
  <!--/w3l-footer-29-main-->
  <section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="footer-list-29 col-lg-4">
            <h6 class="footer-title-29">About Company</h6>
            <p class="pr-lg-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit beatae laudantium
              voluptate rem ullam dolore nisi voluptatibus esse quasi.Integer sit amet mattis quam.</p>
            <div class="main-social-footer-29 mt-4">
              <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
              <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
              <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
              <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-lg-0 mt-5">

            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="#"> Blog posts</a></li>
              <li><a href="contact.html">Contact us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
            <ul>
              <h6 class="footer-title-29">Services</h6>
              <li>
                <a href="#url">
                  Furniture Chairs
                </a>
              </li>
              <li>
                <a href="#url">
                  Three Seater Sofas
                </a>
              </li>
              <li>
                <a href="#url">
                  Dining Tables
                </a>
              </li>
              <li>
                <a href="#url">
                  Office Chairs
                </a>
              </li>
              <li>
                <a href="#url">
                  Kitchen Cabinets
                </a>
              </li>
            </ul>


          </div>
          <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
              <li>
                <p><span class="fa fa-map-marker"></span>   Stylio, TVM rd, Marthandam.</p>
              </li>
              <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span>9876543210</a></li>
              <li><a href="mailto:Livefloor@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span>
                  Stylio@gmail.com</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="bottom-copies">
        <p class="copy-footer-29 text-center">© 2024 Stylio. All rights reserved. Design by <a
            href="#" target="_blank">
            Evanjalin</a></p>
      </div>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      <span class="fa fa-angle-up"></span>
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //footer-29 block -->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>