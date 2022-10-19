 <!--    <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content"> -->

            <?php echo @$_SESSION['insertMsg'];unset($_SESSION['insertMsg']); ?>
            <?php echo @$_SESSION['upMsg'];unset($_SESSION['upMsg']); ?>
            <?php echo @$_SESSION['delMsg'];unset($_SESSION['delMsg']); ?>
              
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                <!-- <div class="col-sm-8 col-9 text-right m-b-20 pull-right">
                                    <a href="index.php?page=patient" class="btn btn-primary btn-rounded float-right">   
                                        <i class="fa fa-plus"></i> 
                                        Add Patient
                                    </a>
                                </div> -->
                                <h4 class="card-title text-bold">Patient List</h4>

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Gender</th>
                                            <th>D.O.B</th>
                                            <th>Address</th>
                                            <th>Phone No</th>
                                            <th>Profile</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       $i = 1;
                                       $DataPatient = "SELECT * FROM `patient` WHERE `status` = 'active' ";
                                       $QryPatient = mysqli_query($con,$DataPatient);
                                       while($RowPatient = mysqli_fetch_object($QryPatient))
                                       {
                                       ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $RowPatient->fname; ?></td>
                                            <td><?php echo $RowPatient->lname; ?></td>
                                            <td><?php echo $RowPatient->email; ?></td>
                                            <td><?php echo $RowPatient->password; ?></td>
                                            <td><?php echo $RowPatient->gender; ?></td>
                                            <td><?php echo $RowPatient->dob; ?></td>
                                            <td><?php echo $RowPatient->address; ?></td>
                                            <td><?php echo $RowPatient->mobile; ?></td>
                                            <td>
                                                <img height=50 width=50 src="<?php echo "upload/patient/".$RowPatient->profile; ?>">
                                            </td>
                                            <td>
                                                <a href="index.php?page=patient_action&action=status&p_id=<?php echo $RowPatient->p_id; ?>">
                                                <span class="custom-badge status-green">
                                                    <?php echo ucfirst($RowPatient->status); ?>
                                                </span> 
                                                </a> 
                                            </td>
                                            <td>
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(62px, 27px, 0px);">
                                                    <a class="dropdown-item" href="index.php?page=patient&p_id=<?php echo $RowPatient->p_id; ?>"><i class="fa fa-pencil m-r-5"></i> Edit </a>

                                                    <!-- <a class="dropdown-item" href="index.php?page=patient_action&action=delete&p_id=<?php echo $RowPatient->p_id; ?>" onclick="return confirm('Are you Sure Want To Delete..???')" ><i class="fa fa-trash-o m-r-5"></i> Delete </a>

                                                </div> -->

                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#delete_patient<?php echo $RowPatient->p_id; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>

                                                </div>

            <div id="delete_patient<?php echo $RowPatient->p_id; ?>" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are You Sure Want To Delete This Patient?</h3>
                            <div class="m-t-20"> <a href="" class="btn btn-white" data-dismiss="modal">Close</a>
                            <a href="index.php?page=patient_action&action=delete&p_id=<?php echo $RowPatient->p_id; ?>" class="btn btn-danger">Delete</a>
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