        <div class="main-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title"> 
								<span>Gallery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content blog-grid-cont">
                <div class="container">
                    <div class="row blog-grid-row">
                        <?php 
                                    $select = "SELECT * FROM `gallery`";
                                    $qry = mysqli_query($con,$select);
                                    while($rw=mysqli_fetch_Assoc($qry)){
                                ?>
                        <div class="col-lg-2 col-md-12">
                                <div class="blog-image"> 
									<a data-toggle="modal" data-target="#gallery<?php echo $rw['g_id']; ?>"><img class="img-fluid" src="<?php echo '../admin-template/upload/gallery/'.$rw['profile'] ?>" alt=""></a>
                                </div>
                        </div>

                        <div id="gallery<?php echo $rw['g_id']; ?>" class="modal fade delete-modal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                   <div class="modal-body text-center">
                                    <h4>
                                        <?php echo $rw['cat_id']; ?>
                                    </h4>
                                      <img src="<?php echo "../admin-template/upload/gallery/".$rw['profile']; ?>" alt="" width="450" height="500"> 
                                   </div>
                                </div>
                            </div>
                        </div>
           
							<?php } ?>
                    </div>
                </div>
            </div>
        </div>