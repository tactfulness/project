   <?php
   //session_start();
 include'base_db_cofig.php';
  
		//$con = mysqli_connect("localhost","id768632_ruler","Jack@#Ball","id768632_info");
			//$ss=$_SESSION['rollno'];
			//$query="select * from users where rollno='$ss'";
  /*if (isset($_SESSION['staff'])) {
   echo $_SESSION['staff'];
   			$SS_n=$_SESSION['staff'];
   		}
   		else{
  	echo'session error';
  }*/
  $st_ck=$_COOKIE['staff_ur'];
 
   			$query="select * from staffs where s_name='$st_ck';";
			//$query="SELECT `s_id`, `s_name`, `email`, `s_pass`, `advisor_for` FROM `staffs` WHERE s_name='$SS_n'";

			$result = mysqli_query($con,$query)or die('fetch error');
			if($result){
			while($rowval = mysqli_fetch_array($result))
			 {
			 	echo $rowval['s_name']; 
			$nams=$rowval['s_name'];
			$emails=$rowval['email'];
			//$pro_img=$rowval['profile_img'];
			//$mails=$rowval['created_at'];
			}}
   
   ?>
   
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap">
                                        <div class="pad-btm">
                                            
                                            <img class="img-circle img-sm img-border" src="img/profile-photos/1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name"><?php echo $nams; ?></p>
                                            <span class="mnp-desc"><?php echo $emails; ?></span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <!--<a href="page-profile.php" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>-->
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                                        </a>
                                       
                                        <a href="logout.php" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut">
                                    <ul class="list-unstyled">
										<li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="page-profile.php">
                                                <i class="demo-psi-male"></i>
                                            </a>
                                        </li>
                                      
                                        <li class="col-xs-3" data-content="Logout">
                                            <a class="shortcut-grid" href="logout.php">
                                                <i class="demo-psi-lock-2"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						           
						 			<li class="list-header">Navigation</li>
						
						            <!--Menu list item-->
						            <?php
						            echo'
						            <li class="active-link">';
						            if(isset($_COOKIE['staff_ur'])!=""){
						            	echo' <A href="staff-home.php"';
						            	echo'<i class="demo-psi-home"></i>
						                    <span class="menu-title">
												<strong>Dashboard</strong>
											</span>
											</a>';
						            }
						            else{
						            	header('location:page-login.php');
						            }
						            ?>
						            </li>
						         
						            <li class="list-divider"></li>
						
						            <!--Category name->
						            <li class="list-header">Components</li>
						
						            <!	-Menu list item->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-boot-2"></i>
						                    <span class="menu-title">Update Events</span>
											<i class="arrow"></i>
						                </a>
						
						                <!-Submenu->
						                <ul class="collapse">
						                    <li><a href="update-paper.php">Update Paper</a></li>
											<li><a href="update-project.php">Update Project</a></li>
											<li><a href="update-workshop.php">Update Workshop</a></li>
											
										
											
						                </ul>
						            </li>-->
						
						        
						
						            <li class="list-divider"></li>
						             <li>
						                <a href="view-student-list.php">
						                    <i class="glyphicon glyphicon-calendar"></i>
						                    <span class="menu-title">Student List</span>
						                    <i class="arrow"></i>
						                </a>
						            </li>
						
						            <!--Category name-->
						            <li class="list-header">More</li>
						
						         
						
						       </ul>


                               

                            </div>
                        </div>
                    </div>
                    <!--End menu-->

                </div>
            </nav>
           <!--END MAIN NAVIGATION-->