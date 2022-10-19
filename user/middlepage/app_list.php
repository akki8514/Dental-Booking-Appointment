    <div class="main-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title"> 
                                <span>Appointment List</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content blog-grid-cont">
                <div class="container">
                    <div class="row blog-grid-row">
                        <?php 
                            $selectBook = mysqli_query($con,"SELECT * FROM `appointment` WHERE `p_id` = '".$_SESSION['user_id']."' ");
                            $countBook = mysqli_num_rows($selectBook);
                            if ($countBook > 0) 
                            {
                            while($rowBook = mysqli_fetch_assoc($selectBook))
                            {
                                $cat = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `category` WHERE `cat_id` = '".$rowBook['cat_id']."' "));
                                
                                $user = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `patient` WHERE `p_id` = '".$rowBook['p_id']."'  "));
                            ?> 
                        <div class="col-lg-4 col-md-6">
                            <!-- Blog Post -->

                            <article class="blog grid-blog">
                                <div class="blog-image"> 
                                    <img class="img-fluid" src="<?php echo "../admin-template/upload/patient/".$user['profile']; ?>" alt="">
                                </div>
                                <h3 class="blog-title">
                                    <?php echo ucfirst($rowBook['fname']." ".ucfirst($rowBook['lname'])); ?>
                                </h3>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
                                        <ul>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i><b> <span><?php echo $rowBook['date']." : ".$rowBook['time']; ?></span></b>
                                            </li>
                                            <li>
                                                <i class="fa fa-user-o" aria-hidden="true"></i><b> <span>By Ankil Shah</span></b>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <?php 
                                    if ($rowBook['status']=="pending") 
                                    { ?>
                                      <h4 style="color: red;"> Dear <?php echo ucfirst($rowBook['fname'])." ".ucfirst($rowBook['lname']); ?> Your Request Was Pending...</h4>
                                      <?php } elseif ($rowBook['status']=="accept") 
                                      { ?>
                                      <h4 style="color: green;">Dear <b style="color: black;"><?php echo ucfirst($rowBook['fname']." ".$rowBook['lname']); ?></b> Your Request Was Accepted. <br> Your Appointment Date Is <b style="color: black;"><?php echo $rowBook['date']; ?></b> & Time is <b style="color: black;"><?php echo $rowBook['time']; ?></b>. <br> Your Treatment Is <b style="color: black;"><?php echo ucfirst($cat['name']); ?></b> </h4>
                                     <?php } elseif ($rowBook['status']=="reject") { ?>
                                      <h4 style="color: red;">Dear <?php echo ucfirst($rowBook['fname'])." ".ucfirst($rowBook['lname']); ?> Your Request Was Rejected...</h4>

									
											<a class="btn btn-primary appoint-btn nav-link" href="index.php?page=appointment">Appointment</a>

                                  <?php } ?>
                                </div>
                            </article>
                        </div>
                        <?php } } else { ?>
                    <div class="col-md-12">
                        <div class="main-content error-wrapper">
                            <div class="content">
                                <div class="container">
                                    <div class="error-box">
                                        <h1>505!</h1>
                                        <h3><i class="fa fa-warning"></i> Oops! Your Appointment Not Found!</h3>
                                        <!-- <p>Your Appointment Not Found...!!!</p> -->
                                        <div class="search-error">
                                            <form action="#" class="error-search-form">
                                                <input type="text" placeholder="Search">
                                                <button>
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="error-btn">
                                            <a class="btn btn-primary" href="index.php?page=appointment">Book Your Appointment Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                    </div>
                   
                </div>
            </div>
        </div>
      