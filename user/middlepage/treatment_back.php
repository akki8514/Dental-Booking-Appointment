<div class="main-content">
            <!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">	
					<span>Treatment</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row">
            <?php 
            @$cat_id = $_REQUEST['cat_id'];
            $selectCat = "SELECT * FROM `category` WHERE `cat_id` = '".$cat_id."' ";
            $qryCat = mysqli_query($con,$selectCat);
            while($rowCat = mysqli_fetch_assoc($qryCat))
            {
            ?>
            <div class="col-md-8">
                            <!-- Blog Post -->
                <article class="blog">
					<h3 class="blog-title">
						<a href="blog-details.html"><?php echo ucfirst($rowCat['name']); ?></a>
					</h3>
                    <div class="blog-info clearfix">
                        <!-- <div class="post-left">
                            <ul>
                                <li>
								    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span>Dec 6, 2017</span></a>
                                </li>
                                <li>
									<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span>By Andrew Dawis</span></a>
                                </li>
                                <li>
								    <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> <span>1</span></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                    <div class="blog-image"> 
						<a href="#"><img class="img-fluid" src="<?php echo "../admin-template/upload/category/".$rowCat['profile']; ?>" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <p><?php echo $rowCat['description']; ?></p> 
							<a href="index.php?page=appointment" class="btn btn-primary read-more">Book Appointment</a>
                    </div>
                </article>

                <div class="blog-pagination">
                    <ul class="pagination">
                        <!-- <li class="disabled page-item">
							<a href="#" class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                        </li>
                        <li class="active page-item">
							<a href="#" class="page-link">1 <span class="sr-only">(current)</span></a>
                        </li>
                                    <li class="page-item">
										<a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
										<a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">	
										<a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
										<a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
										<a href="#" class="page-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                        <aside class="col-md-4 sidebar-right">
                            <!-- Search-->
                            <div class="widget search-widget">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search..." class="form-control">
                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        <?php 
                        $selectDoc = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `doctor` "));
                        ?>
                        <div class="row">
                    
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 doctor-sidebar">
                            <div class="doctor-list doctor-view">
                                <div class="doctor-inner">
                                    <img class="img-fluid" alt="" src="assets/img/doctor-06.jpg">
                                    <div class="doctor-details">
                                        <div class="doctor-info">
                                            <h4 class="doctor-name"> Dr. Ankil Shah BDS </h4>
                                            <p>
                                                <span class="depart">Dentist</span>
                                            </p>
                                        </div>
                                        <ul class="social-list">
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
                                        </ul>
                                        <div class="book-appointment"> 
                                            <a href="index.php?page=appointment">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                         
                            <!-- <div class="doctor-list doctor-view">
                                <div class="doctor-inner">
                                    <img class="img-fluid" alt="" src="<?php echo "../admin-template/upload/doctor/".$selectDoc['profile']; ?>">
                                    <div class="doctor-details">
                                        <div class="doctor-info">
                                            <h4 class="doctor-name">Dr. <?php echo ucfirst($selectDoc['fname'])." ".ucfirst($selectDoc['lname']); ?></h4>
                                            <p>
                                                <span class="depart">Dentist</span>
                                            </p>
                                        </div>
                                        <ul class="social-list">
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
                                        </ul>
                                        <div class="book-appointment"> 
                                            <a href="index.php?page=appointment">Book Appointment</a>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <!-- Latest Posts -->
                        <!-- <div class="widget post-widget">
                                 <h5>Latest Blog</h5>
                                <ul class="latest-posts">
                            <?php 

                            $selectBlog = "SELECT * FROM `blog` ";
                            $qryBlog = mysqli_query($con,$selectBlog);
                            while($rowBlog = mysqli_fetch_assoc($qryBlog))
                            {
                            ?>
                                    <li>
                                        <div class="post-thumb"> 
											<a href="blog-details.html">
												<img class="img-fluid" src="<?php echo "../admin-template/upload/blog/".$rowBlog['profile']; ?>" alt="">
											</a>
                                        </div>
                                        <div class="post-info">
                                             <h4>
												<a href="index.php?page=blog_details&b_id=<?php echo $rowBlog['b_id']; ?>"><?php echo $rowBlog['blogname']; ?></a>
											</h4>
                                            <p><i aria-hidden="true" class="fa fa-calendar"></i> Dec 6, 2017</p>
                                        </div>
                                    </li>
                        <?php } ?>
                                </ul>
                            </div> -->
                            <!-- Categories -->
                            <div class="widget category-widget">
                                <br>
                                <h5>Categories</h5>
                                <ul class="categories">
                                    <li>
										<a href="#">Dental Implant</a>
                                    </li>
                                    <li>
										<a href="#">Children&apos;s Health Problems</a>
                                    </li>
                                    <li>
										<a href="#">Kid&apos;s Health Questions &amp; Answers</a>
                                    </li>
                                    <li>
										<a href="#">Cancer Diseases</a>
                                    </li>
                                    <li>
										<a href="#">Children&apos;s Health Problems</a>
                                    </li>
                                    <li>
										<a href="#">Kid&apos;s Health Questions &amp; Answers</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Tags -->
                            <!-- <div class="widget tags-widget">
                                <h5>Tags</h5>
                                <ul class="tags">
                                    <li>
										<a href="#" class="tag">Children</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Diseases</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Health</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Kids</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Family</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Tips</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Injection</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Treatment</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Rooms</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Health Care</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Clinic</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Consult</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Doctors</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Neurology</a>
                                    </li>
                                    <li>
										<a href="#" class="tag">Dentists</a>
                                    </li>
                                </ul>
                            </div> -->
                        </aside>
                    </div>
                </div>
            </div>
</div>