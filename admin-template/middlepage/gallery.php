<?php 

    @$g_id = $_REQUEST['g_id'];
    $select = "SELECT * FROM `gallery` WHERE `g_id` = '".$g_id."' ";
    $qry = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($qry);

    if (@$_REQUEST['g_id']!='') 
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
                        <h4 class="page-title"> Gallery </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form  method="post" action="index.php?page=gallery_action" enctype="multipart/form-data">
                                
                                <input type="hidden" name="action" value="<?php echo $action; ?>">
                                <input type="hidden" name="g_id" value="<?php echo $row['g_id']; ?>">

                                <!-- <div class="form-group row">
                                    <label class="col-form-label col-md-2">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" name="gname" class="form-control" value="<?php echo $row['gname']; ?>">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Treatment</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="cat_id">
                                                <option>-- Select --</option>
                                                <?php
                                                $select = "SELECT * FROM `category` ";
                                                $qry = mysqli_query($con,$select);
                                                while($row = mysqli_fetch_assoc($qry))
                                            { ?>
                                                <option>
                                                <a class="dropdown-item" href="<?php echo $row['cat_id']; ?>"><?php echo ucfirst($row['name']); ?></a>

                                            <?php } ?></option>
                                            </select>
                                        </div>
                                </div>

                                
                                <div class="form-group row">
                                      <label class="col-form-label col-md-2">Profile</label>
                                    <div class="col-md-8">
                                        <input class="form-control" name="img[]" multiple type="file">
                                    </div>
                                    <?php if (isset($row['profile'])) 
                                    { ?>
                                        <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height="50" width="50" src="<?php echo "upload/gallery/".$row['profile']; ?>">
                                            </div>
                                        </div>  
                                    <?php } ?>
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
                                    <button type="submit" class="btn btn-primary submit-btn" name="submit" value="submit">Submit</button>
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->