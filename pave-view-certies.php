<?php
include'base_db_cofig.php';
if($_COOKIE['rollno']=='' && $_COOKIE['user_id']==''){
header("Location: index.php");
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <link href="img/favicon.ico" rel="icon" type="image/icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | Certificates</title>
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
    <!--Demo script [ DEMONSTRATION ]-->
    <script src="js/demo/nifty-demo.min.js"></script>
    
    <!--Bootstrap MDB style [ REQUIRED ]-->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!--MDB-JS [ RECOMMENDED ]-->
    <script src="js/mdb.min.js"></script>

    <script>
    function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getdetails.php?q="+str,true);
        xmlhttp.send();
    }
}
//getdetails
    </script>
</head>
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        <!--NAVBAR-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <div class="navbar-header">
                    <a href="index-2.html" class="navbar-brand">
                        <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text"></span>
                        </div>
                    </a>
                </div>
                <!--End brand logo & name-->
                <!--Navbar Dropdown-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">
                        <!--Navigation toogle button-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--End Navigation toogle button-->
                    </ul>
                </div>
                <!--End Navbar Dropdown-->
            </div>
        </header>
        <!--END NAVBAR-->

        <div class="boxed">
            <!--CONTENT CONTAINER-->
            <div id="content-container">
                
                <!--Page Title-->
                <div id="page-title">
                    <h1 class="page-header text-overflow">View Certificates</h1>

                    <!--Searchbox-->
                    <div class="searchbox">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <!--End page title-->

                <!--Page content-->
                <div id="page-content">
                
                <form action="">
                        <select name="users" onchange="showUser(this.value)" class="card btn-block form-control btn-outline-blue md-form">
                            <option value="">SELECT</option>
                            <option value="paper_presentations">Paper Presentation</option>
                            <option value="project_presentations">Project Presentation</option>
                            <option value="workshops">workshops</option>
                            <option value="industrial_vists">industrial_vists</option>
                            <option value="sports">sports</option>
                        </select>
                </form> 
                    <div id="txtHint"><b>Your Certificates will be listed here...</b></div>
                <br><Br>
                    
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
            <div class="show-fixed pull-right">
                You have <a href="#" class="text-bold text-main">
                <span class="label label-danger">3</span> pending action.</a>
            </div>
            <!-- Visible when footer positions are static -->
        </footer>
        <!-- END FOOTER -->

        <!-- SCROLL PAGE BUTTON -->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--END SCROLL PAGE BUTTON -->

    </div>
    <!-- END OF CONTAINER -->

</body>
</html>
<!--
<table cellspacing="5" cellpadding="5" border="2">
                        <thead><tr><th>certificates</th></tr></thead>
                        <tbody>-->
                    <?php
                    /*
                    $ids=$_COOKIE['rollno'];
                    $userid=$_COOKIE['user_id'];
                    $loc="img/uploads";
                    $query="SELECT `certificate_path` FROM `paper_presentations` WHERE `user_id` = '$userid'";
                    $result = mysqli_query($con,$query)or die('fetch error');
                    if($result){
                    while($rowt=mysqli_fetch_array($result)){
                        echo '<tr><td>';
                        */
                        ?>
                <!--<img src="<?php echo $rowt['certificate_path']; ?>" height="150" weight="150" alt="no image so error">-->
                        <?php
                        /*
                        }
                        }
                        else
                            { echo'error';}
                            */
                        ?>
                        <!--
                        </td></tr>
                    </tbody>
                    </table>-->