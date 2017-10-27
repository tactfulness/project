
<?php
include'base_db_cofig.php';
if($_COOKIE['rollno']=='' && $_COOKIE['user_id']=='' && $_COOKIE['staff_ur']==""){
header("Location: index.php");
}
session_start();


?>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Student</title>


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


        
    <!--Morris.js [ OPTIONAL ]-->
    <link href="plugins/morris-js/morris.min.css" rel="stylesheet">


    <!--Magic Checkbox [ OPTIONAL ]-->
    <link href="plugins/magic-check/css/magic-check.min.css" rel="stylesheet">



<!--Bootstrap MDB style [ REQUIRED ]-->
    <link href="css/mdb.min.css" rel="stylesheet">

   <!--MDB-JS [ RECOMMENDED ]-->
    <script src="js/mdb.min.js"></script>


    
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

    
    <!--Morris.js [ OPTIONAL ]-->
    <script src="plugins/morris-js/morris.min.js"></script>
	<script src="plugins/morris-js/raphael-js/raphael.min.js"></script>


    <!--Sparkline [ OPTIONAL ]-->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>


    <!--Specify page [ SAMPLE ]-->
    <script src="js/demo/dashboard.js"></script>




    
  

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
                    <h1 class="page-header text-overflow">Dashboard</h1>
                </div>
                <!--End page title-->
            <?php   
               //echo '<pre>' . print_r($_COOKIE, TRUE) . '</pre>';
               $zx=$_COOKIE['user_id'];
//$toatalCount=0;
            $qry="select count(*) as ppts from paper_presentations where user_id='$zx'";
            $qry_data = mysqli_query($con, $qry);
            $approve_count = mysqli_fetch_array($qry_data);
            $toatalCount = array_shift($approve_count);
            //echo 'total paper presentations you\'ve done ',$toatalCount;

            $qry1="select count(*) as pros from project_presentations where user_id='$zx'";
            $qry_pro = mysqli_query($con, $qry1);
            $approve_pro = mysqli_fetch_array($qry_pro);
            $toatalPRO = array_shift($approve_pro);
            //echo '<br>total project presentations you\'ve done ',$toatalPRO;
            
            $qry3="select count(*) as works from workshops where user_id='$zx'";
            $qry_w = mysqli_query($con, $qry3);
            $approve_w = mysqli_fetch_array($qry_w);
            $toatalW = array_shift($approve_w);
            //echo '<br>total project presentations you\'ve done ',$toatalW;
            
            $qry4="select count(*) as iv from industrial_visits where user_id='$zx'";
            $qry_s = mysqli_query($con, $qry4);
            $approve_s = mysqli_fetch_array($qry_s);
            $toatalS = array_shift($approve_s);
            //echo '<br>total sport you\'ve done ',$toatalS;

            $qry5="select count(*) as sport from sports where user_id='$zx'";
            $qry_iv = mysqli_query($con, $qry5);
            $approve_iv = mysqli_fetch_array($qry_iv);
            $toatalIV = array_shift($approve_iv);
            //echo '<br>total sport you\'ve done ',$toatalIV;
            ?>

            <!--Page content-->
            <div id="page-content">
            
                <p class="text-danger">Your Activities</p>
                <table class="table table-striped ">
                    <thead class="mdb-color green lighten-1">
                        <tr >
                          <th>Paper Presentation</th>
                          <th>Project Presentation</th>
                          <th>Workshops</th>
                          <th>Industrial Visit</th>
                          <th>Sports</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr class="table-active"><td><?php echo $toatalCount; ?></td>
                          <td><? echo $toatalPRO; ?></td>
                          <td><?php echo $toatalW; ?></td>
                          <td><?php echo $toatalS; ?></td>
                          <td><?php echo $toatalIV; ?></td>
                        </tr>
                        </tbody>
                </table>
                
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
    
    
 

</body>

<!-- Mirrored from www.themeon.net/nifty/v2.6.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 03:32:52 GMT -->
</html>
