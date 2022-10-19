<div class="sidebar sidebar-menu" id="side_menu">
            <div class="sidebar-inner slimscroll">
				<a id="close_menu" href=""><i class="fa fa-close"></i></a>
                <ul class="mobile-menu-wrapper" style="display: block;">
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.php" class="nav-link">Home</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.php?page=about-us" class="nav-link">About Us</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
                            <a class="dropdown-toggle nav-link" class="nav-link" data-toggle="dropdown">Treatment</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php
                                $select = "SELECT * FROM `category` ";
                                $qry = mysqli_query($con,$select);
                                while($row = mysqli_fetch_assoc($qry))
                                { ?>
                                <a class="dropdown-item" href="index.php?page=treatment&cat_id=<?php echo $row['cat_id']; ?>"><?php echo ucfirst($row['name']); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.php?page=services" class="nav-link" >Services</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.php?page=doctor" class="nav-link" >Doctor</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.php?page=blog" class="nav-link" >Blog</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="index.php?page=contact-us" class="nav-link" >Contact Us</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="index.php?page=appointment" class="nav-link" >Appointment</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="index.php?page=login" class="nav-link" >Login</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix">
							<a href="index.php?page=register" class="nav-link" >Register</a>
                        </div>
                    </li>
                    <!-- <li>
                        <div class="mobile-menu-item clearfix">
							<a href="forgot-password.html">Forgot Password</a>
                        </div>
                    </li>
                    <li>
                        <div class="mobile-menu-item clearfix"> 
							<a href="404.html">404</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>