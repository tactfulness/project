<?php
include'base_db_cofig.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page | Student</title>


    <!--STYLESHEET-->
    <!--=================================================-->

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
     <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
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
    <!--Form Wizard [ SAMPLE ]-->
    <script src="js/demo/form-wizard.js"></script>
    <!--Background Image [ DEMONSTRATION ]-->
    <script src="js/demo/bg-images.js"></script>
	<!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

    <!--Bootstrap MDB style [ REQUIRED ]->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!--MDB-JS [ RECOMMENDED ]->
    <script src="js/mdb.min.js"></script>-->
   
<script>
$(document).ready(function() {
    $('#identicalForm').formValidation();
});
</script>

</head>
<body>
	<div id="container" class="cls-container">
		
		
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		
		
		<!-- REGISTRATION FORM -->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h4">Create a New Account</h1>
					</div>

<?php


//rollNo,firstName,txt_email,lastName,password,phoneNo,rePassword,address,programme,txt_sec,course,advisor
if(isset($_REQUEST['rollNo'])){

	$rollNo=stripslashes($_REQUEST['rollNo']);
	$rollNo=mysqli_escape_string($con,$rollNo);

	$firstName=stripslashes($_REQUEST['firstName']);
	$firstName=mysqli_escape_string($con,$firstName);
	
	$lastName=stripslashes($_REQUEST['lastName']);
	$lastName=mysqli_escape_string($con,$lastName);

	$txt_email=stripslashes($_REQUEST['txt_email']);
	$txt_email=mysqli_escape_string($con,$txt_email);
	
	$programme=stripslashes($_REQUEST['programme']);
	$programme=mysqli_escape_string($con,$programme);
	
	$course=stripslashes($_REQUEST['course']);
	$course=mysqli_escape_string($con,$course);
	
	$txt_sec=stripslashes($_REQUEST['txt_sec']);
	$txt_sec=mysqli_escape_string($con,$txt_sec);
	
	$password=stripslashes($_REQUEST['password']);
	$password=mysqli_escape_string($con,$password);
	
	$phoneNo=stripslashes($_REQUEST['phoneNo']);
	$phoneNo=mysqli_escape_string($con,$phoneNo);
	
	$address=stripslashes($_REQUEST['address']);
	$address=mysqli_escape_string($con,$address);
	
	$advisor=stripslashes($_REQUEST['advisor']);
	$advisor=mysqli_escape_string($con,$advisor);
	$created_at = date("Y-m-d H:i:s");
/*
rollNo,firstName,lastName,txt_email,programme,course,txt_sec,password,phoneNo,address,advisor,created_at
5260337
114165*/
$query = "INSERT INTO `users`(`rollno`, `fname`, `lname`, `email`, `phone`, `password`, `address`, `programme`, `course`, `section`, `class_advisor`, `created_at`)
		VALUES ('$rollNo', '$firstName', '$lastName', '$txt_email','$phoneNo', '$password', '$address','$programme', '$course','$txt_sec','$advisor','$created_at');";
		$result = mysqli_query($con,$query);
		if($result){
			echo'<script type="text/javascript">window.location.href = "page-login.php";</script>';
		}
		else
		echo 'error';	
}
else{
?>

		            <form action="" method="post" id="identicalForm" name="identicalForm" data-fv-framework="bootstrap"
    data-fv-icon-valid="glyphicon glyphicon-ok"
    data-fv-icon-invalid="glyphicon glyphicon-remove"
    data-fv-icon-validating="glyphicon glyphicon-refresh">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Rollno" name="rollNo" required="required">
		                        </div>
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="First Name" name="firstName" required="required">
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="email" class="form-control" placeholder="E-Mail" name="txt_email" required="required">
		                        </div>
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Last Name" name="lastName" required="required">
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="password" class="form-control" placeholder="Password" name="password" required="required">
		                        </div>
		                        <div class="form-group">
		                            <input type="text" required="required" class="form-control" placeholder="Contact Number" name="phoneNo">
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="password" class="form-control" required="required" placeholder="Re-Type Password" name="rePassword" data-fv-identical="true"
                data-fv-identical-field="password"
                data-fv-identical-message="The password and its confirm are not the same" />
		                        </div>
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Address" required="required" name="address">
		                        </div>
		                    </div>
							<div class="col-sm-6">
		                        <div class="form-group">
		                        <select class=" mdb-select colorful-select dropdown-danger"  required="required"name="programme">
					            	<option value="">Select your Programme</option>
					            	<option value="BE">BE</option>
									<option value="ME">ME</option>
					            </select>
		                        </div>
		                        <div class="form-group">
		                        <select class="mdb-select colorful-select dropdown-primary" name="txt_sec" required="required">
					                		<option value="">Select your Section</option>
					                		<option value="A">A</option>
					                		<option value="B">B</option>
					                		<option value="C">C</option>
					                		<option value="D">D</option>
					                	</select>
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <select required="required" class="mdb-select colorful-select dropdown-danger" name="course">
					                    	<option value="">Select your Course</option>
					                    	<option value="CSE">CSE</option>
					                    	<option value="MECH">MECH</option>
					                    	<option value="CIVIL">CIVIL</option>
					                    	<option value="EEE">EEE</option>
					                    	<option value="ECE">ECE<option>
					            </select>
		                        </div>
		                        <div class="form-group">
		                            <input type="text" required="required" class="form-control" placeholder="Advisor Name" name="advisor">
		                        </div>
		                    </div>
		                </div>
		                <!--<div class="checkbox pad-btm text-left">
		                    <input id="demo-form-checkbox" class="magic-checkbox" type="checkbox">
		                    <label for="demo-form-checkbox">I agree with the <a href="" class="btn-link text-semibold">Terms and Conditions</a></label>
		                </div>-->
		                <br>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
		            </form>
		            <?php
		        }
		        ?>
		        </div>
		        <div class="pad-all">
		            Already have an account ? <a href="page-login.php" class="btn-link mar-rgt text-semibold">Sign In</a>
		
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
