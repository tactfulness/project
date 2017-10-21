<?php
include'base_db_cofig.php';

if($_COOKIE['rollno']=='' && $_COOKIE['user_id']=='' && $_COOKIE['staff_ur']==""){
header("Location: index.php");
}
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | Paper</title>


    <!--STYLESHEET-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!--Bootstrap MDB style [ REQUIRED ]-->
    <link href="css/mdb.min.css" rel="stylesheet">

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

   <!--MDB-JS [ RECOMMENDED ]-->
    <script src="js/mdb.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="js/nifty.min.js"></script>


    
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>

    



</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
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
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                
                <!--Page Title-->
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Update paper</h1>
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <?php
                echo '<pre>' . print_r($_COOKIE, TRUE) . '</pre>';
                    ?>
					<hr class="new-section-sm bord-no">
					<div class="row">
					    <div class="col-lg-6 col-lg-offset-3">
					        <div class="panel panel-trans text-center">
					        <div class="panel-heading">
					            <h3 class="panel-title">Update Your Paper Presentation Details.</h3>
					        </div>
					        <div class="panel-body">
                                <form action="upload_ppr.php" method="post" enctype="multipart/form-data">
                                    <div class="form-inline-lg">
                                    <label class="col-lg-3 control-label">College Type</label>
                                        <select name="clg_type" class="mdb-select colorful-select">
                                        <option value=""></option>
                                        <option value="Inside kec">Inside KEC</option>
                                        <option value="Outside kec">Outside KEC</option>    
                                        </select>
                                    </div><br>                                    
                                    <div class="form-inline-lg">
                                        <input type="text" class="form-control"  placeholder="Paper Title" name="paper_title" id="paper_title">
                                    </div><br>                                   
                                    <div class="form-inline-lg">

                                        <input type="text" class="form-control"  placeholder="College Name" name="clg_name" id="clg_name">
                                    </div><br>

                                    <div class="form-inline-lg">
                                        <input type="text" class="form-control"  placeholder="College Place" name="clg_place" id="clg_place">
                                    </div><br>
                                    <div class="form-inline-lg">
                                    <label class="col-lg-3 control-label" for="won_prize" >Select Prize</label>
                                        <select name="won_prize" class="mdb-select colorful-select">
                                        <option value=""></option>
                                        <option value="First">First</option>
                                        <option value="Second">Second</option>    
                                        <option value="Third">Third</option>
                                        </select>
                                    </div><br>
                                    <div class="form-inline-lg">
                                        <input type="date" class="form-control"  placeholder="Presented Date" name="p_date" id="p_date">
                                    </div><br>
                                     <div class="form-inline-lg">
                                         <label for="file">Certificate</label>
                                        <input type="file" class="form-control"  name="file" id="file">
                                    </div><br>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="upload" id="upload">UPDATE</button>


                                </form>
					        </div>
					        </div>
					    </div>
					</div>
					
					
					
                </div>
                <!--===================================================-->
                <!--End page content-->


            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--MAIN NAVIGATION-->
             <?php
            include 'nav_content.php';
            ?>
        

            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
            </div>



            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                14GB of <strong>512GB</strong> Free.
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2017 Your Company</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    


</body>

<!-- Mirrored from www.themeon.net/nifty/v2.6.1/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 03:35:59 GMT -->
</html>

