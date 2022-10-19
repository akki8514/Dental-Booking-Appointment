<?php 

    @$cat_id = $_REQUEST['cat_id'];
    $select = "SELECT * FROM `category` WHERE `cat_id` = '".$cat_id."' ";
    $qry = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($qry);

    if (@$_REQUEST['cat_id']!='') 
    {
        $action = "update";
    }
    else
    {
        $action = "insert";
    }


?>

   <!--  <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content"> -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title"> Category </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form  method="post" action="index.php?page=category_action" enctype="multipart/form-data">
                                
                                <input type="hidden" name="action" value="<?php echo $action; ?>">
                                <input type="hidden" name="cat_id" value="<?php echo $row['cat_id']; ?>">

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Description</label>
                                    <div class="col-md-10">
                                        <input type="text" name="description" class="form-control" value="<?php echo $row['description']; ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Sort Description</label>
                                    <div class="col-md-10">
                                        <input type="text" name="description1" class="form-control" value="<?php echo $row['description1']; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Profile</label>
                                    <div class="col-md-8">
                                        <input class="form-control" multiple="" name="profile" type="file">
                                    </div>
                                    <?php if (isset($row['profile'])) 
                                    { ?>
                                        <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height="50" width="50" src="<?php echo "upload/category/".$row['profile']; ?>">
                                            </div>
                                        </div>  
                                    <?php } ?>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Icon</label>
                                    <div class="col-md-8">
                                        <input class="form-control" multiple="" name="icon" type="file">
                                    </div>
                                    <?php if (isset($row['icon'])) 
                                    { ?>
                                        <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height="50" width="50" src="<?php echo "upload/icon/".$row['icon']; ?>">
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