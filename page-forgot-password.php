<?php

include 'base_db_cofig.php';
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>


    <!--STYLESHEET-->
   
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo-icons.min.css" rel="stylesheet">


        
    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/nifty-demo.min.css" rel="stylesheet">

    <!--JAVASCRIPT-->
   
    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>


    <!--Background Image [ DEMONSTRATION ]-->
    <script src="js/demo/bg-images.js"></script>
  

</head>
<body background="img/bg-img/thumbs/bg-img-2.jpg">
	<div id="container" class="cls-container">
		
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		
		<p class="bg-info" id="msg"></p>	
		<!-- PASSWORD RESETTING FORM -->
		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel-body">
		        <?php
		        	$email = stripslashes($_POST['email']); 
		        	echo $email;
					//$email = mysqli_real_escape_string($con,$email); 
/*
					$query="SELECT `fname`,`email`, `phone`, `password` FROM `users` WHERE `email`='$email2'";
					$result = mysqli_query($con,$query)or die('fetch error');
					$rows = mysqli_num_rows($result);
					if($rwos==1){
						while($row = mysqli_fetch_array($result))
					    {
					    	echo '<script>alert("success");</script>';
					    	echo "correct email",$row['email'];
					    }
					}*/
				
		        
		        ?>
		            <h1 class="h3">Forgot password</h1>
		            <p class="pad-btm">Enter your email address to recover your password. </p>
		            <form action="" id="myform" name="myform" method="post">
		            <div class="form-group">
		            <input type="email" class="form-control" id="newmsg" name="newmsg" placeholder="Email">
		            </div>
		            <div class="form-group text-right">
		            <button class="btn btn-success btn-lg btn-block" type="submit" id="submit" name="submit">Get Your old Password</button>
		            </div>
		            </form>
		            <div class="pad-top">
		                <a href="page-login.php" class="btn-link mar-rgt">Back to Login</a>
		            </div>
		        </div>
		    </div>
		</div>
		
		<!-- DEMO PURPOSE ONLY -->
		<div class="demo-bg">
		    <div id="demo-bg-list">
		        <div class="demo-loading"><i class="psi-repeat-2"></i></div>
		        <img class="demo-chg-bg bg-trans active" src="img/bg-img/thumbs/bg-trns.jpg" alt="Background Image">
		       <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-2.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-3.jpg" alt="Background Image">
		        <img class="demo-chg-bg" src="img/bg-img/thumbs/bg-img-4.jpg" alt="Background Image">
		        
		    </div>
		</div>
		
		
	</div>
	<!-- END OF CONTAINER -->


</body>
</html>
