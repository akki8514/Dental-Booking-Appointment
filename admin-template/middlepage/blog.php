<?php 

    @$b_id = $_REQUEST['b_id'];
    $select = "SELECT * FROM `blog` WHERE `b_id` = '".$b_id."' ";
    $qry = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($qry);

    if (@$_REQUEST['b_id']!='') 
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
                        <h4 class="page-title"> Blog </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form method="post" action="index.php?page=blog_action" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="<?php echo $action; ?>"> 
                                <input type="hidden" name="b_id" value="<?php echo $row['b_id']; ?>">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Blog Name</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo $row['blogname']; ?>" name="blogname" class="form-control">
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Profile</label>
                                        <div class="col-md-8">
                                            <input class="form-control" name="profile" type="file">
                                        </div>
                                        <?php 
                                        if (isset($row['profile'])) 
                                        { ?>
                                        <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height="50" width="50" src="<?php echo "upload/blog/".$row['profile']; ?>">
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Category</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo $row['category']; ?>" name="category" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Description</label>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo $row['description']; ?>" name="description" class="form-control">
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
                                    <button type="submit" class="btn btn-primary submit-btn" name="submit" value="submit">Create Blog </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->