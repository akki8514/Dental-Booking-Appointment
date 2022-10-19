<div class="main-content">
            <section class="section home-banner row-middle">
                <div class="inner-bg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9">
                            <div class="banner-content">
                                <!-- <h1>Clean Medical Template</h1> -->
                                <h1>VARIOUS DENTAL TREATMENTS TO BOOST YOUR&nbsp; HEALTH AND PERSONALITY. </h1>
								<!-- <a title="Consult" class="btn btn-primary consult-btn" href="index.php?page=appointment">Consult</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section features">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header text-center">
                                <h3 class="header-title">About Clinic</h3>
                                <div class="line"></div>
                                <p>
                                The fine and abiding enterprise that he has shown in being able to set up an ultra-modern dental clinic in Ahmedabad, India where all the facilities are available for catering to each smile or a better denture.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row feature-row">
                        <div class="col-md-4">
                            <div class="feature-box">
                                <div class="feature-img">
                                    <img width="60" height="60" alt="Book an Appointment" src="assets/img/icon-01.png">
                                </div>
                                <h4>Book an Appointment</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor.
								</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box">
                                <div class="feature-img">
                                    <img width="60" height="60" alt="Consult with a Doctor" src="assets/img/icon-02.png">
                                </div>
                                <h4>Consult with a Doctor</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor.
								</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box">
                                <div class="feature-img">
                                    <img width="60" height="60" alt="Make a family Doctor" src="assets/img/icon-03.png">
                                </div>
                                <h4>Make a family Doctor</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor.
								</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section departments">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header text-center">
                                <h3 class="header-title">Treatments</h3>
                                <div class="line"></div>
                                <p>We are providing dentures are totally gone he has ensured that all futuristic services are available with him such as restorative as well as cosmetic dentistry; and in addition, he has updated his knowledge constantly over the years by attending all the Continuing Education Programmes conducted by the Indian Dental Association on cosmetic dentistry, crown and bridge, root canal treatment.
								</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                            $selectCat = "SELECT * FROM `category` WHERE `cat_id` LIMIT 0,3";
                            $qryCat = mysqli_query($con,$selectCat);
                            while($rowCat = mysqli_fetch_assoc($qryCat))
                            {
                        ?>
                        <div class="col-md-4">
                            <div class="dept-box">
                                <div class="dept-img"> 
									<a href="index.php?page=treatment&cat_id=<?php echo $rowCat['cat_id']; ?>"><img width="67" height="80" alt="Dentists" src="<?php echo "../admin-template/upload/icon/".$rowCat['icon']; ?>"></a>
                                </div>
                                <h4>
									<a href="index.php?page=treatment&cat_id=<?php echo $rowCat['cat_id']; ?>"><?php echo ucfirst($rowCat['name']); ?></a>
								</h4>
                                <p><?php echo ucfirst($rowCat['description1']); ?>
								</p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="see-all"> 
								<a href="index.php?page=cat" class="btn btn-primary see-all-btn">See all Treatments</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section departments">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header text-center">
                                <h3 class="header-title">Feedback</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php 
                            $selectCat1 = "SELECT * FROM `feedback` ORDER BY `f_id` DESC LIMIT 0,6 ";
                            $qryCat1 = mysqli_query($con,$selectCat1);
                            while($rowCat1 = mysqli_fetch_assoc($qryCat1))
                            {
                                $selectUser = "SELECT * FROM `patient` WHERE `p_id` = '".$rowCat1['p_id']."' ";
                                $qryUser = mysqli_query($con,$selectUser);
                                $rowUser = mysqli_fetch_assoc($qryUser);
                        ?>
                        <div class="col-md-4">
                            <div class="dept-box">
                                <div class="dept-img"> 
                                    <?php 
                                    if ($rowUser['profile']!="") 
                                        { ?>
                                    <img width="50" height="50" alt="Dentists" src="<?php echo "../admin-template/upload/patient/".$rowUser['profile']; ?>">
                                    <?php } else { ?>
                                        <img src="assets/img/logo.png">
                                    <?php } ?>
                                </div>
                                <h4>
                                    <?php echo ucfirst($rowCat1['name']); ?>
                                </h4>
                                <p><?php echo ucfirst($rowCat1['message']); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="see-all"> 
                                <a href="index.php?page=feedback" class="btn btn-primary see-all-btn">Make Feedback</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
</div>