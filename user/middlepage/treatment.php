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
                                    <img class="img-fluid" alt="" src="assets/img/clinic/doctor.jpg">
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
                         
                            <!-- Categories -->
                            <div class="widget category-widget">
                                <br>
                                <h5>Categories</h5>
                                <ul class="categories">
                                <?php 
                                    $sel = "SELECT * FROM `category` ";
                                    $qry = mysqli_query($con,$sel);
                                    while($rw = mysqli_fetch_assoc($qry))
                                    {
                                ?>
                                    <li>
										<a href="index.php?page=treatment&cat_id=<?php echo $rw['cat_id']; ?>"><?php echo  $rw['name']; ?></a>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
</div>