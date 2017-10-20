<!DOCTYPE html>
<?php
include'base_db_cofig.php';

$ss=$_COOKIE['user_id'];
$query="SELECT `user_id`, `rollno`, `fname`, `lname`, `email`, `phone`, `password`, `address`, `programme`, `course` FROM `users` where user_id='$ss'";
			$result = mysqli_query($con,$query)or die('fetch error');

			if($result){
			while($rowval = mysqli_fetch_array($result))
			 {
				 $roll=$rowval['rollno'];
			$nams=$rowval['fname'];
			$lname=$rowval['lname'];
			$emails=$rowval['email'];
			$addr=$rowval['address'];
			//$pro_img=$rowval['profile_img'];
			//$mails=$rowval['created_at'];
			}}
  
?>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $roll; ?> | Profile </title>


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





    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>






    <!--=================================================-->
    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>

    


</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                 <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/logo.png" alt="" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text"></span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->
					</ul>
				</div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">
	
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow"> </h1>

                    <!--Searchbox-->
                    <div class="searchbox">
                        
                    </div>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


        

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
				
					        <div class="panel">
					            <div class="panel-heading">
					                <h3 class="panel-title">Profile Details  </h3>
					            </div>
					
					
					            <!-- BASIC FORM ELEMENTS -->
					            <!--===================================================-->
					            <form class="panel-body form-horizontal form-padding">
					
					                <!--Static-->
					                <div class="form-group">
					                    <label class="col-md-3 control-label">ROLLNO</label>
					                    <div class="col-md-9">
					                    	<input type="text" id="demo-text-input" class="form-control" disabled placeholder="rollno" value="<?php echo $roll; ?>">

					                    	</div>
					                </div>
					
					                <!--Text Input-->
					                <div class="form-group">
					                    <label class="col-md-3 control-label" for="demo-text-input">FIRST NAME</label>
					                    <div class="col-md-9">
					                        <input type="text" id="demo-text-input" class="form-control" disabled placeholder="Text" value="<?php echo $nams; ?>">
					                        
					                    </div>
					                </div>

					                 <!--Password-->
					                <div class="form-group">
					                    <label class="col-md-3 control-label" for="demo-password-input">LAST NAME</label>
					                    <div class="col-md-9">
					                        <input type="text" id="demo-text-input" class="form-control" placeholder="last name" value="<?php echo $lname; ?>" disabled>
					                        
					                    </div>
					                </div>
					
					                <!--Email Input-->
					                <div class="form-group">
					                    <label class="col-md-3 control-label" for="demo-email-input">EMAIL</label>
					                    <div class="col-md-9">
					                        <input type="email" id="demo-email-input" class="form-control" disabled placeholder="Enter your email" value="<?php echo $emails; ?>">
					                        
					                    </div>
					                </div>
					
					               
					
					                <!--Readonly Input->	
					                <div class="form-group">
					                    <label class="col-md-3 control-label" for="demo-readonly-input">Readonly input</label>
					                    <div class="col-md-9">
					                        <input type="text" id="demo-readonly-input" class="form-control" placeholder="Readonly input here..." readonly>
					                    </div>
					                </div>-->
					
					                <!--Textarea-->
					                <div class="form-group">
					                    <label class="col-md-3 control-label" for="demo-textarea-input">ADDRESS</label>
					                    <div class="col-md-9">
					                        <textarea id="demo-textarea-input" rows="9" class="form-control" disabled placeholder="Address" value=""><?php echo $addr;?></textarea>
					                    </div>
					                </div>
					
					                <div class="form-group pad-ver">
					                    <label class="col-md-3 control-label">GENDER</label>
					                    <div class="col-md-9">
					
					                        <!-- Radio Buttons -->
					                        <div class="radio">
					                            <input id="demo-form-radio" class="magic-radio" type="radio" disabled name="form-radio-button" checked>
					                            <label for="demo-form-radio">Male </label>

					                            <input id="demo-form-radio-2" class="magic-radio" type="radio" disabled name="form-radio-button" >
					                            <label for="demo-form-radio-2">Female</label>
					                        </div>
					                    </div>
					                </div>
					               
					            </form>
					            <!-- END BASIC FORM ELEMENTS -->
					
					
				</div>
                </div>
                <!--End page content-->


            </div>
           <!--END CONTENT CONTAINER-->

			<!--MAIN NAVIGATION-->
            <?php
			include 'nav_content.php';
			?>
			<!--END MAIN NAVIGATION-->
            
          
         

        </div>

        

        <!-- FOOTER -->
        <footer id="footer">
			<p class="pad-lft">&#0169; 2017 Your Company</p>
		</footer>
        <!-- END FOOTER -->
        <!-- SCROLL PAGE BUTTON -->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
      
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    

</body>
</html>
