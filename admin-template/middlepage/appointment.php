<?php 

    @$a_id = $_REQUEST['a_id'];
    $select = "SELECT * FROM `appointment` WHERE `a_id` = '".$a_id."' ";
    $qry = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($qry);

    if (@$_REQUEST['a_id']!='') 
    {
        $action = "update";
    }
    else
    {
        $action = "insert";
    }

?>
<!-- <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content"> -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title"> Appointment </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form method="post" action="index.php?page=appointment_action" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="<?php echo $action; ?>">
                                <input type="hidden" name="a_id" value="<?php echo $row['a_id']; ?>">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if(isset($_SESSION['fname']) && $_SESSION['fname']) { echo $_SESSION['fname'];unset($_SESSION['fname']); } ?><?php echo $row['fname']; ?>" name="fname" class="form-control">
                                    </div>
                                </div>

                                <center><h3 style="color: red;"><?php echo @$_SESSION['EmailMsg'];unset($_SESSION['EmailMsg']); ?></h3></center> 
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if(isset($_SESSION['email']) && $_SESSION['email']) { echo $_SESSION['email'];unset($_SESSION['email']); } ?><?php echo $row['email']; ?>" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date</label>
                                        <div class="col-md-10">
                                            <div class="cal-icon">
                                                <input type="text" value="<?php if(isset($_SESSION['date']) && $_SESSION['date']) { echo $_SESSION['date'];unset($_SESSION['date']); } ?><?php echo $row['date']; ?>" name="date" class="form-control datetimepicker">
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Time</label>
                                        <div class="col-md-10">
                                            <div class="time-icon">
                                                <input type="text" value="<?php if(isset($_SESSION['time']) && $_SESSION['time']) { echo $_SESSION['time'];unset($_SESSION['time']); } ?><?php echo $row['time']; ?>" class="form-control" name="time" id="datetimepicker3">
                                            </div>
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Gender</label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" <?php if (isset($row['gender']) && $row['gender']=="male") {
                                                    echo "checked=checked";
                                                } ?> name="gender" value="male" > Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" <?php if (isset($row['gender']) && $row['gender']=="female") {
                                                    echo "checked=checked";
                                                } ?> name="gender" value="female"> Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label class="col-form-label col-md-2">Address</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" name="address" placeholder="Enter Address"><?php echo $row['address']; ?></textarea>
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Contact</label>
                                    <div class="col-md-10">
                                        <input type="text" maxlength="10" value="<?php if(isset($_SESSION['contact']) && $_SESSION['contact']) { echo $_SESSION['contact'];unset($_SESSION['contact']); } ?><?php echo $row['contact']; ?>" name="contact" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Status</label>
                                    <div class="col-md-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" <?php if (isset($row['status']) && $row['status']=="active") {
                                                    echo "checked=checked";
                                                } ?> name="status" value="active"> Active
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" <?php if (isset($row['status']) && $row['status']=="inactive") {
                                                    echo "checked=checked";
                                                } ?> name="status" value="inactive"> Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary submit-btn" name="submit" value="submit">Create Appointment </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->