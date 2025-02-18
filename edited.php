




<?php 

session_start();
$id=$_SESSION["userid"];
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Minimal an Admin Panel Category Flat Bootstrap Responsive Website Template | Forms :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="admin/js/jquery.min.js"> </script>
<script src="admin/js/bootstrap.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
<!-- Mainly scripts -->
<script src="admin/js/jquery.metisMenu.js"></script>
<script src="admin/js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>

 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i><br>
				<span>Update Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	
<div class="grid-form1">
<h3 id="forms-horizontal">Edit Profile</h3>

<?php

require("connection.php");


$res=$con->query("SELECT *
FROM register 
WHERE `id` = '$id'");
$count=$res->num_rows;
if($count>0)
$row=$res->fetch_assoc();

?>

<form class="form-horizontal" action="updates.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
	<input type="hidden" value="<?php echo $row["id"];?>" name="id">
</div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label hor-form">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Name" name="Name" value="<?php echo  htmlspecialchars($row["Name"]);?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Category" name="email" value="<?php echo htmlspecialchars($row["email"]);?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Subcategory" name="password" value="<?php echo htmlspecialchars($row["password"]);?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Price" name="phone" value="<?php echo htmlspecialchars($row["phone"]);?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label hor-form">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" placeholder="Enter the Price" name="address" value="<?php echo htmlspecialchars($row["address"]);?>">
    </div>
  </div>
  
  <div class="form-group">
  
  <label for="country">Select Country</label>
    <select name="country" id="country">
       
        <?php
        require("connection.php");
     
        $country=$row["country"];
     
		
        $res1 = $con->query("SELECT * FROM countries where cont_id=$country");
        $count1 = $res1->num_rows;
        if ($count1 > 0) {
           $row1 = $res1->fetch_assoc();
                ?> 
                <option value="<?php echo $row1["cont_id"]; ?>">
                    <?php echo $row1["name"]; ?>
                </option>
                 <?php
            }
        
        ?> 
         <?php
        require("connection.php");
        $res3 = $con->query("SELECT * FROM countries");
        $count3 = $res3->num_rows;
        if ($count3 > 0) {
            while ($row3 = $res3->fetch_assoc()) {
                ?>
                <option value="<?php echo htmlspecialchars($row3["cont_id"]); ?>">
                    <?php echo htmlspecialchars($row3["name"]); ?>
                </option>
                <?php
            }
        }
        ?>
        
    </select><br><br>
	<label for="state">Select State</label>
    <select name="state" id="state">
    

    <?php
        require("connection.php");
     
        $state=$row["state"];
     
		
        $res2 = $con->query("SELECT * FROM `states` where `stat_id`='$state'");
        $count2 = $res2->num_rows;
        if ($count2 > 0) {
           $row2 = $res2->fetch_assoc();
                ?> 
                <option value="<?php echo $row2["stat_id"]; ?>">
                    <?php echo $row2["sname"]; ?>
                </option>
                 <?php
            }
        
        ?> 
       
    </select><br><br>
      </div>
    <script type="text/javascript">
    $(document).ready(function() {
      
       
      $("#country").change(function() {
            var countryId = $(this).val();
          
           
            // Only call AJAX if a valid country is selected
            if (countryId !== "none") {
                $.ajax({
                    url: 'state1.php',
                    type: 'POST',
                    data: { country: countryId },
                    success: function(result) {
                        $('#state').html(result);
                        
                         // Populate states dropdown
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error: " + status + error);
                    }
                });
            } else {
                $('#state').html('<option value="none" selected>Select State</option>'); // Reset states dropdown
            }
        });
    });
</script>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
<!---->

  	        
	 
  
 	<!--//grid-->
		<!---->
<div class="copy">
            <p> &copy; 2024 Stylio. All Rights Reserved | Design by Evanjalin </p>	    </div>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
<!---->

</body>
</html>

