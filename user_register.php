<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>SIGPAS</title>
	<!--fonts-->
		<link href='//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
		rel='stylesheet' type='text/css'>
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
			<link rel="stylesheet" href="css/chocolat.css" type="text/css">
	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Bigwig Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
    
    
    <script>
	
	function validate(){
		
		
		var fname = document.getElementById("fname");
		var lname = document.getElementById("lname");
		var state = document.getElementById("state");
		var phone = document.getElementById("phone");
		var password = document.getElementById("password").value;
		var conpassword = document.getElementById("con_password").value;
		var country = document.getElementById("country");
		var emailid = document.getElementById("email_id");
		var tolerance = document.getElementById("tolerance_level");
		
		
		if(fname.value==""){
			
			
			alert("enter the first name");
			return false;
			
			
		}
		
		
		else if(lname.value==""){
			
			alert("enter the Last name");
			return false;
			
			
			
		}
		
		else if(state.value==""){
			
			alert("enter the State");
			return false;
			
			
			
		}
		
		else if(phone.value==""){
			
			alert("enter the Phone number");
			return false;
			
			
			
		}
		
		else if(phone.value.length!=10 ){
			
			alert("Invalid Phone Number");
			return false;
			
			
			
		}
		
		
		else if(password!=conpassword){
			
			alert("enter the Phone number");
			return false;
			
			
			
		}
		
		else if(country.value==""){
			
			alert("enter the Country");
			return false;
			
			
			
		}
		
		else if(emailid.value==""){
			
			alert("enter the Email id");
			return false;
				
		}
		
		else if(emailid.value.indexOf("@")==-1){
			
			
			alert("Enter valid Emailid");
			
			return false;
			
		}
		
		
		else if(emailid.value.indexOf(".com")==-1){
			
			
			alert("Enter valid Emailid");
			
			return false;
			
		}
		
		else if(tolerance.value==""){
			
			alert("enter the Tolerance");
			return false;
			
			
			
		}
		
		else if(isNaN(tolerance.value)){
					alert("Enter Valid  Tolerance Level");
					return false;	
				}
				else if(tolerance.value < 1){
					alert("Enter Valid Tolerance Level");
					return false;	
				}
		
		else{
			
			return true;	
		}
		
		
		
		
	}
	
	
	
	
	</script>
    
    
    <style>
	
	label{
		
		color: #000;
	}
	
	</style>
    
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<script src="js/modernizr.custom.97074.js"></script>
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner-slider -->
<div id="home" class="banner-slider">
	<div class="header">
									<div class="header-left">
										<a class="link link--kumya" href="#"><span data-letters="SIGPAS">SIGPAS</span></a>
									</div>
									<div class="navigation">
										<span class="menu"><img src="images/menu.png" alt=""/></span>
												<nav class="cl-effect-11" id="cl-effect-11">	
													<ul class="nav1">	
														<li><a class="scroll" href="#home" data-hover="HOME">HOME</a></li>
														<li><a class="scroll" href="#about" data-hover="ABOUT">ABOUT</a></li>
														<li><a class="scroll" href="#services" data-hover="SERVICES">SERVICES</a></li>
														<!--<li><a class="scroll" href="#portfolio" data-hover="PORTFOLIO">PORTFOLIO</a></li>-->
														<li><a class="scroll" href="#contact" data-hover="CONTACT">CONTACT</a></li>
													
													</ul>
												</nav>
													<!-- script for menu -->
														<script> 
															$( "span.menu" ).click(function() {
															$( "ul.nav1" ).slideToggle( 300, function() {
															 // Animation complete.
															});
															});
														</script>
													<!-- //script for menu -->

									</div>
									<div class="clearfix"></div>
							</div>
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
		<!-- responsiveslides -->
		<div id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				
				
				<li>
					<div class="banner">
							
							<div class="container">
								<div class="banner-info">
									<h3>You Can Register Here</h3>
						   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/7eTM5Rqin.png" width="100" height="100">
								</div>
							</div>
					</div>
				</li>
			</ul>
		</div>
</div>
<div class="clearfix"></div>
<!-- //banner-slider -->
<!-- about -->
<div id="about" class="testi">
	<div class="container">
		<div class="about-header">
			<h3>Register Form</h3>
		</div>
		<form method="post" action="user_reg_action.php" enctype="multipart/form-data" id="contactfrm" role="form">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="name" >First Name</label>
              <input type="text" class="form-control" name="fname" id="fname" placeholder="Enterthe First name" title="Please enter your name (at least 2 characters)">
            </div>

			<div class="form-group" style="color:#FFFFFF">
              <label for="name">Last Name</label>
              <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter the Last name" title="Please enter your name (at least 2 characters)">
            </div>
			
			
			
			<div class="form-group" style="color:#FFFFFF">
              <label for="name" style="color:#000">Gender</label>
			  <div class="radio">
            <label style="color:#000"><input type="radio" value="male" id="male" name="optradio">male</label>
             </div>
			 
             <div class="radio">
            <label style="color:#000"><input type="radio" value="female" id="female" name="optradio">female</label>
               </div>
              
            </div>
			
			<div class="form-group" style="color:#FFFFFF">
              <label for="name">Country</label>
              <select class="form-control" type="file" onchange="sel_country()" name="country" id="country" aria-describedby="emailHelp">
					<option value="sel_country">--Select Country--</option>
					<?php
					include 'connection.php';
					$res="select * from countries";

$result=mysql_query($res);
$count=mysql_num_rows($result);

if($count>0){

while($row=mysql_fetch_array($result))
{
	?>
	
	<option value="<?php echo $row['cont_id'];  ?>"><?php echo $row['name'];   ?></option>
	
	<?php
	
}
}
					
					?>
					
					</select>
            </div>
			
			<div class="form-group" style="color:#FFFFFF">
              <label for="name">State</label>
             <select class="form-control" type="file" name="state" id="state" aria-describedby="emailHelp">
		   <option>--Select State--</option>
		   </select>
            </div>
			
			
			
			<div class="form-group" style="color:#FFFFFF">
              <label for="name">Email Id</label>
              <input type="text" class="form-control" name="email_id" id="email_id" placeholder="Enter the Email id" title="Please enter your name (at least 2 characters)">
            </div>
            
       
         <div class="form-group" style="color:#FFFFFF">
              <label for="name">Tolerence Level</label>
              <input type="text" class="form-control" name="tolerance_level" id="tolerance_level" placeholder="Enter the tolerance Level" title="Please enter your name (at least 2 characters)">
            </div>
			
			   
			
			
				<div class="form-group" style="color:#FFFFFF">
              <label for="name">Phone</label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter the Phone Number" title="Please enter your name (at least 2 characters)">
            </div>
			
				<div class="form-group" style="color:#FFFFFF">
              <label for="comments">Photo</label>
               <input type="file" class="form-control" name="photo" id="photo" placeholder="Enter name" title="Please enter your name (at least 2 characters)">
            </div>
			
			
			
		
			
			<div class="form-group" style="color:#FFFFFF">
              <label for="comments">Password</label>
               <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password Password" title="Please enter your name (at least 2 characters)">
            </div>
			
				<div class="form-group" style="color:#FFFFFF">
              <label for="comments">Confirm Password</label>
               <input type="password" class="form-control" name="password" id="con_password" placeholder="Enter Your Confirm Password" title="Please enter your name (at least 2 characters)">
            </div>
			<br><br><br>
			
			<div class="form-group">
            
               <button type="submit" class="btn btn-default" style="background-color:#FFFFFF" onClick=" return validate()">Submit</button>
            </div>
			
			
            <div class="result"></div>
          </div>
        </form>
	</div>
</div>

<div id="about" class="testi">
	<div class="container">
		<div class="about-header">
			<h3>ABOUT</h3>
		</div>
		<div class="testi-grids">
			<div class="col-md-6 testi-grid">
				<h3><span>Who are we?</span> We are the biggest creative business in the world</h3>
			</div>
			<div class="col-md-6 testi-grid">
				<p>Here a graphical password system with a supportive sound signature to increase the remembrance of the password is discussed. In proposed work a click-based graphical password scheme called Cued Click Points (CCP) is presented. In this system a password consists of sequence of some images in which user can select one click-point per image. In addition user is asked to select a sound signature corresponding to each click point this sound signature will be used to help the user in recalling the click point on an image. System showed very good Performance in terms of speed, accuracy, and ease of use. Users preferred CCP to Pass Points, saying that selecting and remembering only one point per image was easier and sound signature helps considerably in recalling the click points </p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //about -->
<!-- testi -->
<!--<div class="about">
	<div class="container">
		<div class="about-grids">
			<div class="col-md-5 about-left">
				<p>At vero eos et accusamus et iusto 
				odio dignissimos ducimus qui blanditiis 
				praesentium voluptatum 
				quos dolores et quas molestias excepturi
				sint occaecati 
				</p>
				<div class="buttonone"><a class="hvr-bounce-to-bottom morebtn text-right" href="#">MORE</a></div>
			</div>
			<div class="col-md-2 about-middle text-center">
					<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider4").responsiveSlides({
										auto: true,
										pager: false,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
					<!-- responsiveslides -->
					<!--<div class="callbacks_container">
						<ul class="rslides" id="slider4">
							<li>
								<div class="about-img">
									<img src="images/team-1.png" alt=""/>
								</div>
							</li>
							<li>
								<div class="about-img">
									<img src="images/team-2.png" alt=""/>
								</div>
							</li>
							<li>
								<div class="about-img">
									<img src="images/team-3.png" alt=""/>
								</div>
							</li>
						</ul>
					</div>
			</div>
			<div class="col-md-5 about-right">
				<h3>JAMES THOMPSON</h3>
				<h4>FrogsLand Design</h4>
				<p>SENIOR ART DIRECTOR</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //testi -->
<!-- awarded -->
<!--<div class="award">
	<div class="container">
		<div class="award-grids">
			<div class="col-md-6 award-left">
				<img src="images/img1.jpg" alt=""/>
			</div>
			<div class="col-md-6 award-right">
				<h3>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</h3>
				<p>Temporibus autem quibusdam et aut officiis 
				debitis aut rerum necessitatibus saepe eveniet 
				ut et voluptates repudiandae sint et molestiae 
				non recusandae. Itaque earum rerum hic tenetur 
				a sapiente delectus, ut aut reiciendis voluptatibus 
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<p></p>
	</div>
</div>
<!-- //awarded -->
<!-- services -->
<div class="services" id="services">
	<div class="container">
		<div class="sevices-main">
			<div class="ser-top">
			<h3>Services</h3>
			<p>We are Technology Services Partner to Leading Businesses. We build Smart Applications for Web, Mobile and Cloud.</p>
			</div>
			<div class="col-md-4 ser-grid">
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				<h4>Registraion</h4>
				<span class="ser-gridline"> </span>
				
				
			</div>
			<div class="col-md-4 ser-grid">
				<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
				<h4>Login</h4>
				<span class="ser-gridline"> </span>
				
				
			</div>
			<div class="col-md-4 ser-grid">
				<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				<h4>Sound Signature</h4>
				<span class="ser-gridline"> </span>
	
			</div>
			<div class="col-md-4 ser-grid">
				<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				<h4>Graphical Password</h4>
				<span class="ser-gridline"> </span>
			
			</div>
			<div class="col-md-4 ser-grid">
				<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
				<h4>File Management</h4>
				<span class="ser-gridline"> </span>
				
			</div>
			<div class="col-md-4 ser-grid">
				<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
				<h4>Security</h4>
				<span class="ser-gridline"> </span>

			</div>
			<div class="clearfix"> </div>			
		</div>
	</div>
</div>
<!--services end here-->
<!-- portfolio -->

<!-- //portfolio -->
<!-- get-in -->
<div id="contact" class="get-in-touch">
	<div class="container">
		<div class="get-info text-center">
			<h3>CONTACT</h3>
			<h4><i>Feel Free To Contact Us</i></h4>
			<p>We are Technology Services Partner to Leading Businesses. We build Smart Applications for Web, Mobile and Cloud.</p>
		</div>
	</div>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"></iframe>
	</div>
</div>
<!-- //get-in -->
<!-- contact-us -->
<div class="contact-us">
	<div class="container">
		<div class="contact-grids">
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></div>
				<p>GET Innovative</p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-globe" style="font-size:30px" aria-hidden="true"></span></div>
				<p><a href="#">www.getinnovatives.com</a></p>
			</div>
			<div class="col-md-4 contact-grid text-center">
				<div class="point-icon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
				<p>04651 208803</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<!--<div class="contact-info">
			<form>
				<input type="text" placeholder="Your Name" required>
				<input type="text" placeholder="Your E-Mail" required>
				<input type="text" placeholder="Subject" required>
				<textarea placeholder="Your Message" required></textarea>
				<input type="submit" value="SEND MESSAGE">
			</form>
		</div>-->
	</div>
</div>
<!-- //contact-us -->
<!-- footer -->
<div class="copy-right">
	<div class="container">
		<p>Copyright &copy; 2022 SIGPAS. All Rights Reserved | Design by  <a href="https://www.getinnovatives.com/">GET Innovative</a></p>
	</div>
</div>
<!-- footer -->
<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
		function sel_country(){

//var cert_type = $('#cert_typ').val();
var country=$('#country').val();



	$.ajax({
		url: 'search_state.php',
		type:'POST',
		data:{country:country},
		success:function(result){
			//alert(result);return false;
			  $('#state').html(result);
			 
		 }
	  });
}
	</script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>