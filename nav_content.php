   <?php
   
   include'base_db_cofig.php';
  
		//$con = mysqli_connect("localhost","id768632_ruler","Jack@#Ball","id768632_info");
			//$ss=$_SESSION['rollno'];
			//$query="select * from users where rollno='$ss'";
   			$ss=$_COOKIE['rollno'];
			$query="select * from users where rollno='$ss'";
			$result = mysqli_query($con,$query)or die('fetch error');

			if($result){
			while($rowval = mysqli_fetch_array($result))
			 {
				 $roll=$rowval['rollno'];
			$nams=$rowval['fname'];
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
                                        <a href="page-profile.php" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                                        </a>
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
						            if(isset($_COOKIE['rollno'])!=""){
						            	echo' <A href="student-home.php"';
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
						
						            <!--Category name-->
						            <li class="list-header">Components</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-boot-2"></i>
						                    <span class="menu-title">Update Events</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="update-paper.php">Update Paper</a></li>
											<li><a href="update-project.php">Update Project</a></li>
											<li><a href="update-sport.php">Update Sports</a></li>
											<li><a href="update-IV.php">Update Industrial Vist</a></li>
											<li><a href="update-workshop.php">Update Workshop</a></li>
						                </ul>
						            </li>
						
						            <!--Menu list itemS->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-pen-5"></i>
						                    <span class="menu-title">Forms</span>
											<i class="arrow"></i>
						                </a>
						
						                <!-Submenu->
						                <ul class="collapse">
						                    <li><a href="forms-general.html">General</a></li>
											<li><a href="forms-components.html">Advanced Components</a></li>
											<li><a href="forms-validation.html">Validation</a></li>
											<li><a href="forms-wizard.html">Wizard</a></li>
											<li><a href="forms-file-upload.html">File Upload</a></li>
											<li><a href="forms-text-editor.html">Text Editor</a></li>
											<li><a href="forms-markdown.html">Markdown</a></li>
											
						                </ul>
						            </li>-->
						
						            <!--Menu list item->
						            <li>
						                <a href="view-events.php">
						                    <i class="demo-psi-receipt-4"></i>
						                    <span class="menu-title">View Events</span>
											<i class="arrow"></i>
						                </a>
						
						                <!-Submenu->
						                <ul class="collapse">
											<li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
											<li><a href="tables-datatable.html">Data Tables</a></li>
											
						                </ul>
						            </li>-->
						
						            <!--Menu list item-->
						            <li>
						                <a href="view-events.php">
						                    <i class="demo-psi-receipt-4"></i>
						                    <span class="menu-title">View Events</span>
						                    <i class="arrow"></i>
						                </a>
						            </li>

						             <li>
						                <a href="pave-view-certies.php">
						                    <i class="demo-psi-receipt-4"></i>
						                    <span class="menu-title">View Uploads</span>
						                    <i class="arrow"></i>
						                </a>
						            </li>

						            <li>
						                <a href="misc-calendar.php">
						                    <i class="glyphicon glyphicon-calendar"></i>
						                    <span class="menu-title">Calender</span>
						                    <i class="arrow"></i>
						                </a>
						            </li>
						
						            <li class="list-divider"></li>
						
						            <!--Category name->
						            <li class="list-header">More</li>
						
						          
						
						         
						
						            <!-Menu list item->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-file-html"></i>
						                    <span class="menu-title">Pages</span>
											<i class="arrow"></i>
						                </a>
						
						                <!-Submenu->
						                <ul class="collapse">
						                    <li><a href="page-blank.php">Blank Page</a></li>
											<li class="list-divider"></li>
											
						                </ul>
						            </li>->
				
						            <li class="list-divider"></li>
						
						            <!-Category name->
						            <li class="list-header">Extras</li>
						
						            <!-Menu list item->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-happy"></i>
						                    <span class="menu-title">Icons Pack</span>
											<i class="arrow"></i>
						                </a>
						
						                <!-Submenu->
						                <ul class="collapse">
						                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
											<li><a href="icons-themify.html">Themify</a></li>
											<li><a href="icons-font-awesome.html">Font Awesome</a></li>
											
						                </ul>
						            </li>
						
						            <!-Menu list item->
						            <li>
						                <a href="#">
						                    <i class="demo-psi-medal-2"></i>
						                    <span class="menu-title">
												PREMIUM ICONS
												<span class="label label-danger pull-right">BEST</span>
											</span>
						                </a>
						
						                <!-Submenu->
						                <ul class="collapse">
						                    <li><a href="premium-line-icons.html">Line Icons Pack</a></li>
											<li><a href="premium-solid-icons.html">Solid Icons Pack</a></li>
											
						                </ul>
						            </li>
						
						            <!-Menu list itemS->
						            <li>
						                <a href="helper-classes.html">
						                    <i class="demo-psi-inbox-full"></i>
						                    <span class="menu-title">Helper Classes</span>
						                </a>
						            </li>  -->
						       </ul>


                               

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->