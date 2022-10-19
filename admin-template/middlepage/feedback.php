<?php 

@$f_id = $_REQUEST['f_id'];
$select = "SELECT * FROM `feedback` WHERE `f_id` = '".$f_id."' ";
$qry = mysqli_query($con,$select);
$row = mysqli_fetch_assoc($qry);
if (@$_REQUEST['f_id']!='') 
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
                        <h4 class="page-title"> Feedback Form </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form method="post" action="index.php?page=feedback_action" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="<?php echo $action; ?>">
                                <input type="hidden" name="f_id" value="<?php echo $row['f_id']; ?>">
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if(isset($_SESSION['name']) && $_SESSION['name']) { echo $_SESSION['name'];unset($_SESSION['name']); } ?><?php echo $row['name']; ?>"name="name" class="form-control">
                                    </div>
                                </div>

                                <center><h3 style="color: red;"><?php echo @$_SESSION['EmailMsg'];unset($_SESSION['EmailMsg']); ?></h3></center> 

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php if(isset($_SESSION['email']) && $_SESSION['email']) { echo $_SESSION['email'];unset($_SESSION['email']); } ?><?php echo $row['email']; ?>"name="email" class="form-control">
                                    </div>
                                </div>

                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Message</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" name="message"><?php echo $row['message']; ?></textarea>
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
                                    <button type="submit" class="btn btn-primary submit-btn" name="submit" value="submit"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->