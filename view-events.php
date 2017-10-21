
<?php
include'base_db_cofig.php';

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | Events</title>


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


        
    <!--DataTables [ OPTIONAL ]-->
    <link href="plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">





    
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


    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>

    
    <!--DataTables [ OPTIONAL ]-->
    <script src="plugins/datatables/media/js/jquery.dataTables.js"></script>
	<script src="plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	<script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>


    <!--DataTables Sample [ SAMPLE ]-->
    <script src="js/demo/tables-datatables.js"></script>


</head>
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
            <div id="content-container">
                
                <!--Page Title-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">Data Tables</h1>

                    
                </div>
                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <!--End page title-->


        

                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
					<!-- paper Data Tables -->
					<!--===================================================-->
                    <?php
					echo'<div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Paper Presentation Details</h3>
					    </div>
					    <div class="panel-body">
					        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Title</th>
					                    <th>College Type</th>
					                    <th class="min-tablet">College Name</th>
					                    <th class="min-tablet">College Place</th>
					                    <th class="min-desktop">Attended date</th>
					                    <th class="min-desktop">Prize</th>
					                </tr>
					            </thead>
					            <tbody>';
                                $ss=$_COOKIE['user_id'];
                                $qra="SELECT `pp_id`, `user_id`, `pp_title`, `clg_type`, `clg_name`, `clg_place`, `certificate_path`, `ppr_prize`, `p_date`, `created_at` FROM `paper_presentations` where user_id='$ss'";
                                $result = mysqli_query($con,$qra)or die('fetch error');
                                //$qrys=mysqli_query($con,"
                                if($result){
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo'<tr>';
                                    echo'<td>'. $row['pp_title'].'</td>';
                                    echo'<td>'. $row['clg_type'].'</td>';
                                    echo'<td>'. $row['clg_name'].'</td>';
                                    echo'<td>'. $row['clg_place'].'</td>';
                                    echo'<td>'. $row['p_date'].'</td>';
                                    echo'<td>'. $row['ppr_prize'].'</td>';
                                    echo'</tr>';

                                }
                            }
                            else
                                { echo'error';}
                                echo'   
                                </tbody>
                            </table>';
                                    
                    echo'
					    </div>
					</div>';
					//<!-- End paper Table -->
					
					
					//<!-- project table -->

                    echo'
					<div class="panel">
					    <div class="panel-heading">
					        <h3 class="panel-title">Project Presentation Details</h3>
					    </div>
					    <div class="panel-body">
					        <table id="demo-dt-selection" class="table table-striped table-bordered" cellspacing="0" width="100%">
					            <thead>
					                <tr>
					                    <th>Project Title</th>
					                    
					                    <th class="min-tablet">College Name</th>
					                    <th class="min-tablet">College Place</th>
					                    <th class="min-desktop">Attended date</th>

					                    <th class="min-desktop">Prize</th>
					                </tr>
					            </thead>
					            <tbody>';
                                   
                                $qra="SELECT `pro_id`, `user_id`, `clg_type`, `pro_title`, `cl_name`, `cl_place`, `pro_prize`, `certificate_path`, `pro_date`, `create_at` FROM `project_presentations` where user_id='$ss'";
                                $result = mysqli_query($con,$qra)or die('fetch error');
                                //$qrys=mysqli_query($con,"
                                if($result){
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo'<tr>';
                                    echo'<td>'. $row['pro_title'].'</td>';
                                    echo'<td>'. $row['cl_name'].'</td>';
                                    echo'<td>'. $row['cl_place'].'</td>';
                                    echo'<td>'. $row['pro_date'].'</td>';
                                    
                                    echo'<td>'. $row['pro_prize'].'</td>';
                                    echo'</tr>';

                                }
                            }
                            else
                                { echo'error';}
                                echo'   
                                </tbody>
                            </table>
					    </div>
					</div>';
                    ?>
					<!--===================================================-->
					<!-- End project table -->
					
					
					
				
					
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
     <!-- END OF CONTAINER -->


    
     

</body>
</html>

