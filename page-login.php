<?php
include'base_db_cofig.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Staff Login </title>
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
    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="plugins/magic-check/css/magic-check.min.css" rel="stylesheet">
	
	<!--Bootstrap MDB style [ REQUIRED ]-->
    <link href="css/mdb.min.css" rel="stylesheet">
	<!--MDB-JS [ RECOMMENDED ]-->
    <script src="js/mdb.min.js"></script>
	
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
<body>
	<div id="container" class="cls-container">		
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Account Login</h1>
		                <p>Sign In to your account</p>
		            </div>
					  <!--Panel with Tabs-->
					    <div class="panel panel-primary">
						<!--Panel heading-->
							<div class="panel-heading">
					        	<div class="panel-control">
								<!--Nav tabs-->
					            	<ul class="nav nav-tabs">
					                <li class="active"><a data-toggle="tab" href="#demo-tabs-box-1">Student Login</a></li>
					                <li><a data-toggle="tab" href="#demo-tabs-box-2">Staff Login</a></li>
					                </ul>
					            </div>
					        </div>
							<!--Panel body-->
					        <div class="panel-body">
					        <?php
					        if (isset($_REQUEST['rollno'])){
							$username = stripslashes($_REQUEST['rollno']); 
							$username = mysqli_real_escape_string($con,$username); 
							$password = stripslashes($_REQUEST['pasasword']);
							$password = mysqli_real_escape_string($con,$password);
							$query = "SELECT * FROM `users` WHERE `rollno`='$username' AND `password`='$password'";
							//$query = "SELECT * FROM `users` WHERE rollno='$username' and password='".md5($password)."'";
							$result = mysqli_query($con,$query) or die(mysql_error());
							$rows = mysqli_num_rows($result);
							if($rows==1){
								while($tr=mysqli_fetch_array($result)){
									$we=$tr['user_id'];
								}
								$_SESSION['rollno'] = $username;
								setcookie("rollno", $_SESSION['rollno'], time()+30000); 
								setcookie("user_id", $we, time()+30000); 
								echo'<script type="text/javascript">window.location.href = "student-home.php";</script>';
							}else{
								echo"<div class='form'><h3>Username/password is incorrect.</h3><br>";
								echo"Please wait it will redirect to login page</div>";
								header('Refresh: 2;url=page-login.php');
							}
						}
						?>
						<!--Tabs content-->
						<div class="tab-content">
							<div id="demo-tabs-box-1" class="tab-pane fade in active">
								<form action="" method="post">
									<div class="form-group">
										<input type="text" class="form-control" required="required" placeholder="Rollno" name="rollno" autofocus>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" required="required" placeholder="Password" name="pasasword">
									</div>
									<button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
								</form>
							</div>
							<div id="demo-tabs-box-2" class="tab-pane fade">
								<form action="staff-log.php" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<input type="text" class="form-control" required="required" placeholder="Username" name="st_ur" autofocus>
									</div>
									<div class="form-group">
										<input type="password" class="form-control" required="required" name="s_pass" placeholder="Password">
									</div>
									<button class="btn btn-primary btn-lg btn-block" type="submit">Sign In</button>
								</form>
						    </div>
						</div>
					</div>
				</div>
				<!--End of panel with tabs-->
			</div>
			<div class="pad-all">
				<a href="page-forgot-password.php" class="btn-link mar-rgt">Forgot password ?</a>
				<a href="page-register.php" class="btn-link mar-lft">Create a new account</a>
			</div>
		</div>
	</div>
	<!-- BACKGROUND CHANGER -->
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