<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<?php
session_start();
$email=$_SESSION['ee'];

?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Livefloor an Interior & Furniture Category Bootstrap Responsive Template | Services :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.php">Services</a>
            </li>
 
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myorders.php">My Orders</a>
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
         <div>
          
          <?php echo $email;?>
          <li><a href="logout.php">Logout</a></li>
          
         </div>
        
         <li><a href="edited.php">Update Profile</a></li>
      </nav>
    </div>
  </header>
  <!-- //header -->
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Services</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Services </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   
<section class="w3l-grids1">
  <div class="hny-three-grids py-5">
    <div class="container py-lg-5">
      <div class="row">
      <?php
          require("connection.php");
          $res=$con->query("select * from `addproducts`");
          $count=$res->num_rows;
          ?>
    <?php 
    if($count>0)
    {
      while($row=$res->fetch_assoc())
      {
        
?>
  
     
        <div class="col-md-4 col-sm-6 mt-0 grids5-info">

       
          
          <a href="#url"><img src="<?php echo "admin/images/".$row['image'];?>" class="img-fluid" ></a>
          <h5><?php echo $row['category'];?></h5>
          <h4><a href="#url" ><?php echo $row['name'];?></a></h4>
          <h5><?php echo $row['price'];?></h5>
          <p><?php echo $row['description'];?></p><br>
          <form action="buynow.php?var=<?php echo $row["id"];?>" method="post" enctype="multipart/form-data">
          <input type="submit" name="submit" value="Buy Now" class="btn btn-danger"/>
          </form>
        </div><br>
        
        <?php
      }
    }
    ?>  
      </div>
    </div>
  </div>
</section>

 <!-- call to action 5 -->
<section class="w3l-cta5">
  <div class="call-to-action-5 py-5">
    <div class="container py-lg-5">
      <div class="call-to-action-5-content text-center">
        <h3 class="hny-title">Start learning for bright future</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus sapiente commodi maiores ullam est nostrum aliquam!</p>
        <a href="#url" class="btn btn-style btn-primary mb-4">Read More</a>
        <div class="three-grids d-grid grid-columns-3">
          <div class="grid">
            <div class="icon">
              <span class="fa fa-graduation-cap" aria-hidden="true"></span>
            </div>
            <div class="icon-info">
              <h4><a href="#">Creative Designers</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab sint consectetur quasi mollitia? Qui, nihil?</p>
            </div>
          </div>
          <div class="grid">
            <div class="icon">
              <span class="fa fa-check-square-o" aria-hidden="true"></span>
            </div>
            <div class="icon-info">
              <h4><a href="#">Quality Products</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab sint consectetur quasi mollitia? Qui, nihil?</p>
            </div>
          </div>
          <div class="grid">
            <div class="icon">
              <span class="fa fa-book" aria-hidden="true"></span>
            </div>
            <div class="icon-info">
              <h4><a href="#">Free Consultation</a></h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab sint consectetur quasi mollitia? Qui, nihil?</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /call to action 5 -->
<section class="w3l-features14">
  <div class="w3l-feature-6-main py-5">
    <div class="container py-lg-5">
      <div class="wrapper-max">
        <div class="header-section text-center mb-5">
          <h6 class="sub-title">Services We Do</h6>
          <h3 class="hny-title two">
            We are the best Interior designer since 1975.
          </h3>
        </div>
        <div class="grid mt-0">
          <div class="w3l-feature-6-gd">
            <div class="icon"><span class="fa fa-building-o"></span></div>
            <div class="w3l-feature-6-gd-info">
              <h3><a href="#url">Residential Design</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="w3l-feature-6-gd">
            <div class="icon"><span class="fa fa-sitemap"></span></div>
            <div class="w3l-feature-6-gd-info">
              <h3><a href="#url">Commercial Design</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

        <div class="grid">
          <div class="w3l-feature-6-gd">
            <div class="icon"><span class="fa fa-qrcode"></span></div>
            <div class="w3l-feature-6-gd-info">
              <h3><a href="#url">Corporate Design</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="w3l-feature-6-gd">
            <div class="icon"><span class="fa fa-cutlery"></span></div>
            <div class="w3l-feature-6-gd-info">
              <h3><a href="#url">Restaurant Design</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--/-->
  
<!--//-->
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
                <p><span class="fa fa-map-marker"></span>  Stylio, TVM rd, Marthandam.
               </p>
              </li>
              <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> 9876543210</a></li>
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
         </a>Evanjalin</p>
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