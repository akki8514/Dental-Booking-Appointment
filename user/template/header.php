<!-- Mobile Header -->
        <header class="mobile-header">
            <div class="panel-control-left">
				<a class="toggle-menu" href="#side_menu"><i class="fa fa-bars"></i></a>
            </div>
            <div class="page_title">
				<a href="index.php">
					<img src="assets/img/shreeji.png" alt="Logo" class="img-fluid" width="56" height="50">
				</a>
            </div>
        </header>
<!-- Mobile Header /-->

<header class="header">
            <div class="header-top">
                <div class="container">
                	<h6><div class="pull-left">
                		<i class="fa fa-phone" aria-hidden="true"></i>
                		 &nbsp;+91 942 962 3815
                		<br>
                	    <i class="fa fa-envelope" aria-hidden="true"></i>
                		 &nbsp;shahankil21@yahoo.com 
                	</div></h6>

                <ul class="nav navbar-nav main-nav float-right ml-auto">
                	<li class="nav-item">
						<a class="btn btn-primary appoint-btn nav-link" href="index.php?page=appointment">Appointment</a>
					</li>
				</ul>

              	    <center>
              	    	<div class="col-md-3" style="margin-left: 600px;">
                        <div class="search-error">
                            <form action="#" class="error-search-form">
                                <input type="text" placeholder="Search">
                                <button>
									<i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    </center>

                <div class="clearfix"></div> 
                
                    <div class="row">         
                         <div class="col-md-2 float-left">
                            <div class="logo">
								<a href="index.php"><img alt="Logo" src="assets/img/shreeji.png" style="margin: -20px 0px 0px -40px;" width="56" height="50"></a>
                            </div>
                        </div>

                        <div class="col-md-10">
							<nav class="navbar navbar-expand-md p-0" style="margin-bottom: 10px;">
								<div class="navbar-collapse collapse" id="navbar">
									<ul class="nav navbar-nav main-nav float-right ml-auto">
										<li class="nav-item">
											<a href="index.php" class="nav-link">Home</a>
										</li>

										<li class="nav-item">
											<a href="index.php?page=doctor" class="nav-link"> Dentist Profile </a>
										</li>
									 
									    

										<li class="dropdown nav-item"> 
											<a class="dropdown-toggle nav-link" data-toggle="dropdown"> Treatment </a>
											<div class="dropdown-menu dropdown-menu-right">
											<?php
												$select = "SELECT * FROM `category` ";
												$qry = mysqli_query($con,$select);
												while($row = mysqli_fetch_assoc($qry))
											{ ?>
												<a class="dropdown-item" href="index.php?page=treatment&cat_id=<?php echo $row['cat_id']; ?>"><?php echo ucfirst($row['name']); ?></a>

											<?php } ?>
											</div>
										</li>
										<li class="nav-item">
											<a href="index.php?page=gallery" class="nav-link"> Gallery </a>
										</li>
										
										<?php 
										if (isset($_SESSION['user_id'])!="") 
										{ ?>
										<li class="nav-item">
										<a class="dropdown-item" href="index.php?page=app_list">Appointment List</a> 
										</li>
									    <?php } ?>

									    <li class="nav-item">
											<a href="index.php?page=about-us" class="nav-link"> About Us </a>
										</li>
									    
										<li class="nav-item">
											<a href="index.php?page=contact-us" class="nav-link">Contact Us</a>
										</li>
										
										
										<li class="dropdown nav-item"> 
											<a class="dropdown-toggle settings-icon nav-link" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<?php 
												if (@$_SESSION['user_id']=="") 
												{ ?>
												<a class="dropdown-item" href="index.php?page=login">Login</a>
												<a class="dropdown-item" href="index.php?page=register">Register</a>
											<?php } else { ?>
												
												<a class="dropdown-item" href="index.php?page=logout">Logout</a>
											<?php } ?>

												<!-- <a class="dropdown-item" href="forgot-password.html">Forgot Password</a> -->
												<!-- <a class="dropdown-item" href="404.html">404</a> -->
											</div>
										</li>

                                <!-- <div class="active-pink-1 active-pink-2 mb-2">
								  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
								</div> -->

										<?php 
									 @$selectPa = "SELECT * FROM `patient` WHERE `p_id` = '".$_SESSION['user_id']."' ";
										$qryPa  = mysqli_query($con,$selectPa);
										while($rowPa = mysqli_fetch_assoc($qryPa))
                                        {
										?>
										<li>
											<a href="index.php?page=user_profile"><img height="50" width="50" style="border-radius: 50px;" src="<?php echo "../admin-template/upload/patient/".$rowPa['profile']; ?>"></a>
										</li>
									<?php } ?>
									</ul>
								</div>
							</nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>