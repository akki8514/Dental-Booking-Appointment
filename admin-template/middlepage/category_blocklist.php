    <!-- <div class="main-wrapper">
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
                                    <a href="index.php?page=category" class="btn btn-primary btn-rounded float-right">   
                                        <i class="fa fa-plus"></i> 
                                        Add Category
                                    </a>
                                </div>
                                <h4 class="card-title text-bold">Category List</h4>

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Profile</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       $i = 1;
                                       $Datacategory = "SELECT * FROM `category` WHERE `status` = 'inactive' ";
                                       $Qrycategory = mysqli_query($con,$Datacategory);
                                       while($Rowcategory = mysqli_fetch_object($Qrycategory))
                                       {
                                       ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $Rowcategory->name; ?></td>
                                            <td><?php echo $Rowcategory->description; ?></td>
                                            <td>
                                                <img height=50 width=50 src="<?php echo "upload/category/".$Rowcategory->profile; ?>">
                                            </td>
                                            <td>
                                                <a href="index.php?page=category_action&action=unblock&cat_id=<?php echo $Rowcategory->cat_id; ?>">
                                                <span class="custom-badge status-red">
                                                    <?php echo ucfirst($Rowcategory->status); ?>
                                                </span> 
                                                </a> 
                                            </td>
                                            <td>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(62px, 27px, 0px);">
                                                    <a class="dropdown-item" href="index.php?page=category&cat_id=<?php echo $Rowcategory->cat_id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit </a>

                                                    <!-- <a class="dropdown-item" href="index.php?page=category_action&action=delete&cat_id=<?php echo $Rowcategory->cat_id; ?>" onclick="return confirm('Are you Sure Want To Delete..???')" ><i class="fa fa-trash-o m-r-5"></i> Delete </a>

                                                </div> -->

                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete_category<?php echo $Rowcategory->cat_id; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

                                                </div>

            <div id="delete_category<?php echo $Rowcategory->cat_id; ?>" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are You Sure Want To Delete This Category?</h3>
                            <div class="m-t-20"> <a href="" class="btn btn-white" data-dismiss="modal">Close</a>
                            <a href="index.php?page=category_action&action=delete&cat_id=<?php echo $Rowcategory->cat_id; ?>" class="btn btn-danger">Delete</a>
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