        <!-- Content -->
        <div class="main-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
								<span>Treatments</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content departments">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-header text-center">
                                <h3 class="header-title">All Treatments</h3>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row department-row">
                        <?php 
                        $selectCat = "SELECT * FROM `category` ";
                        $qryCat = mysqli_query($con,$selectCat);
                        while($rowCat = mysqli_fetch_assoc($qryCat))
                        {
                        ?>
                        <div class="col-md-4">
                            <div class="dept-box">
                                <div class="dept-img"> 
									<a href="index.php?page=treatment&cat_id=<?php echo $rowCat['cat_id']; ?>"><img width="67" height="80" alt="Dentists" src="<?php echo  "../admin-template/upload/icon/".$rowCat['icon']; ?>"></a>
                                </div>
                                <h4><a href="index.php?page=treatment&cat_id=<?php echo $rowCat['cat_id']; ?>"><?php echo ucfirst($rowCat['name']); ?></a></h4>
                                <p><?php echo ucfirst($rowCat['description1']); ?>
								</p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </section>
        </div>