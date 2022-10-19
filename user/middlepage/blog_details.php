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
                        $b_id = $_REQUEST['b_id'];
                        $selectCat = "SELECT * FROM `blog` WHERE `b_id` = '".$b_id."' ";
                        $qryCat = mysqli_query($con,$selectCat);
                        while($rowCat = mysqli_fetch_assoc($qryCat))
                        {
                        ?>
                        <div class="col-md-8">
                            <!-- Blog Post -->
                            <article class="blog">
									<h3 class="blog-title">
										<a href="blog-details.html"><?php echo ucfirst($rowCat['blogname']); ?></a>
									</h3>
                                <div class="blog-info clearfix">
                                    <div class="post-left">
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
                                    </div>
                                </div>
                                <div class="blog-image"> 
									<a href="blog-details.html"><img class="img-fluid" src="<?php echo "../admin-template/upload/blog/".$rowCat['profile']; ?>" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <p><?php echo $rowCat['description']; ?></p> 
										<a href="index.php?page=appointment" class="btn btn-primary read-more">Book Appointment</a>
                                </div>
                            </article>
                            <!-- Blog Post -->
                            
                            <!-- Blog Post -->
                            
                            <!-- Blog Post -->
                         
                            <div class="blog-pagination">
                                <ul class="pagination">
                                    <li class="disabled page-item">
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
                                    </li>
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
                            <!-- Latest Posts -->
                            <div class="widget post-widget">
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
												<a href="index.php?page=blog&b_id=<?php echo $rowBlog['b_id']; ?>"><?php echo $rowBlog['blogname']; ?></a>
											</h4>
                                            <p><i aria-hidden="true" class="fa fa-calendar"></i> Dec 6, 2017</p>
                                        </div>
                                    </li>
                        <?php } ?>
                                </ul>
                            </div>
                            <!-- Categories -->
                            <div class="widget category-widget">
                                <h5>Blog Categories</h5>
                                <ul class="categories">
                                    <li>
										<a href="#">Cancer Diseases</a>
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
                            <div class="widget tags-widget">
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
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>