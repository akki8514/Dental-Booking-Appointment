       <?php 
    
       $select = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `patient` WHERE `p_id` = '".$_SESSION['user_id']."' "));

       ?>

        <div class="main-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
								<span><?php echo ucfirst($select['fname'])." ".ucfirst($select['lname']); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-4 doctor-sidebar">
                            <div class="doctor-list doctor-view">
                                <div class="doctor-inner">
                                    <img class="img-fluid" alt="" src="<?php echo "../admin-template/upload/patient/".$select['profile']; ?>">
                                    <div class="doctor-details">
                                        <div class="doctor-info">
                                            <h4 class="doctor-name"><?php echo ucfirst($select['fname'])." ".ucfirst($select['lname']); ?></h4>
                                            <p>
												<b><span class="depart"><?php echo $select['email']; ?></span></b>
                                            </p>
                                        </div>
                                        <!-- <ul class="social-list">
                                            <li>
												<a class="facebook" href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
												<a class="twitter" href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
												<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
												<a class="g-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul> -->
                                        <!-- <div class="book-appointment"> 
											<a href="index.php?page=appointment">Book Appointment</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                            <!-- <div class="about-doctor">
                                <h3 class="sub-title">About the Patient</h3>
                                


                                Address : <?php echo $select['address']; ?>
                            </div> -->
                            <div class="experience-widget">
                                <h3 class="sub-title">About Patient</h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="timeline-content">
                                              <h4>Address : <?php echo $select['address']; ?></h4>
                                                <!-- <div>Lorem ipsum dolor sit amet</div> -->
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-content">
                                                <h4>Health Center Hospital - USA (2012 to 2016)</h4>
                                                <div>Lorem ipsum dolor sit amet</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="education-widget">
                                <h3 class="sub-title">Education Informations</h3>
                                <div class="experience-box">
                                    <ul class="experience-list">
                                        <li>
                                            <div class="timeline-content">
                                                <h4>International College of Medical Science (PG) (2003 to 2008)</h4>
                                                <div>FDS</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="timeline-content">
                                                <h4>International College of Medical Science (UG) (2000 to 2003)</h4>
                                                <div>MBBS</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>