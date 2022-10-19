  <!--   <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
 -->
            <?php echo @$_SESSION['insertMsg'];unset($_SESSION['insertMsg']); ?>
            <?php echo @$_SESSION['upMsg'];unset($_SESSION['upMsg']); ?>
            <?php echo @$_SESSION['delMsg'];unset($_SESSION['delMsg']); ?>
              
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <div class="col-sm-8 col-9 text-right m-b-20 pull-right">
                                    <a href="index.php?page=feedback" class="btn btn-primary btn-rounded float-right">   
                                        <i class="fa fa-plus"></i> 
                                        Add Feedback
                                    </a>
                                </div>
                                <h4 class="card-title text-bold">Feedback List</h4>

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       $i = 1;
                                       $DataFeedback = "SELECT * FROM `feedback` WHERE `status` = 'active' ";
                                       $Qryfeedback = mysqli_query($con,$DataFeedback);
                                       while($rowFeedback = mysqli_fetch_object($Qryfeedback))
                                       {
                                       ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowFeedback->name; ?></td>
                                            <td><?php echo $rowFeedback->email; ?></td>
                                            <td><?php echo $rowFeedback->message; ?></td>
                                            <td>
                                                <a href="index.php?page=feedback_action&action=status&f_id=<?php echo $rowFeedback->f_id; ?>">
                                                    <span class="custom-badge status-green">
                                                        <?php echo ucfirst($rowFeedback->status); ?>
                                                    </span>
                                                </a>
                                            </td>
                                            <td>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(62px, 27px, 0px);">
                                                    <a class="dropdown-item" href="index.php?page=feedback&f_id=<?php echo $rowFeedback->f_id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit </a>

                                                    <!-- <a class="dropdown-item" href="index.php?page=feedback_action&action=delete&f_id=<?php echo $rowFeedback->f_id; ?>" onclick="return confirm('Are you Sure Want To Delete..???')" ><i class="fa fa-trash-o m-r-5"></i> Delete </a>

                                                </div> -->

                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete_feedback<?php echo $rowFeedback->f_id; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

                                                </div>

            <div id="delete_feedback<?php echo $rowFeedback->f_id; ?>" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are You Sure Want To Delete This Feedback?</h3>
                            <div class="m-t-20"> <a href="" class="btn btn-white" data-dismiss="modal">Close</a>
                            <a href="index.php?page=feedback_action&action=delete&f_id=<?php echo $rowFeedback->f_id; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>

                                            </div>
                                            </td>
                                        </tr>
                                    <?php $i++; } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->