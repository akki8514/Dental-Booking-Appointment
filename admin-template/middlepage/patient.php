<?php 

    @$p_id = $_REQUEST['p_id'];
    $select = "SELECT * FROM `patient` WHERE `p_id` = '".$p_id."' ";
    $qry = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($qry);

    if (@$_REQUEST['p_id']!='') 
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
                        <h4 class="page-title"> Pateint </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form method="post" action="index.php?page=patient_action" enctype="multipart/form-data">
                                <input type="Hidden" name="action" value="<?php echo $action; ?>"> 
                                <input type="Hidden" name="p_id" value="<?php echo $row['p_id']; ?>">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" id="txtfirst" value="<?php if(isset($_SESSION['fname']) && $_SESSION['fname']) { echo $_SESSION['fname'];unset($_SESSION['fname']); } ?><?php echo $row['fname']; ?>" name="fname" class="form-control">
                                        <span id="req_firstname" style="display:none;color:red;">* First Name Is Required</span>
                                        <span id="valid_firstname" style="display:none;color:red;">* Enter valid First Name</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" id="txtlastname" value="<?php if(isset($_SESSION['lname']) && $_SESSION['lname']) { echo $_SESSION['lname'];unset($_SESSION['lname']); } ?><?php echo $row['lname']; ?>"name="lname" class="form-control">
                                        <span id="req_lastname" style="display:none;color:red;">* Last Name Is Required</span>
                                  <span id="valid_lastname" style="display:none;color:red;">* Enter Vaild Last Name</span>
                                    </div>
                                </div>

                                <?php echo @$_SESSION['Emailmsg'];unset($_SESSION['Emailmsg']); ?>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" id="txtemail" value="<?php if(isset($_SESSION['email']) && $_SESSION['email']) { echo $_SESSION['email'];unset($_SESSION['email']); } ?><?php echo $row['email']; ?>"name="email" class="form-control">
                                        <span id="req_email" style="display:none;color:red;">* Email Is Required</span>
                                  <span id="valid_email" style="display:none;color:red;">* Enter Valid Email</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" id="txt_pass" name="password" class="form-control">
                                        <span id="req_pass" style="display:none;color:red;">* Password Is Required</span>
                                        <span id="valid_pass" style="display:none;color:red;">* 6 characters of letters, numbers and at least one special character</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date of Birth</label>
                                    <div class="col-md-10">
                                        <div class="cal-icon">
                                            <input type="text" id="txtdob" value="<?php if(isset($_SESSION['dob']) && $_SESSION['dob']) { echo $_SESSION['dob'];unset($_SESSION['dob']); } ?><?php echo $row['dob']; ?>" name="dob" class="form-control datetimepicker">
                                            <span id="req_dob" style="display:none;color:red;">* Please Select DOB</span>
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
                                                } ?> name="gender" id="male" value="male" > Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" <?php if (isset($row['gender']) && $row['gender']=="female") {
                                                    echo "checked=checked";
                                                } ?> name="gender" id="female" value="female"> Female
                                            </label>
                                        </div>
                                        <span style="display: none; color:#FF0000" id="req_gender">*Please Select Gender</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Address</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" id="txtadd" name="address"  placeholder="Enter Address"><?php if(isset($_SESSION['address']) && $_SESSION['address']) { echo $_SESSION['address'];unset($_SESSION['address']); } ?><?php echo $row['address']; ?><?php echo $row['address']; ?></textarea>
                                        <span id="req_address" style="display:none;color:red;">* Enter Address</span> 
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Profile</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="txtpro" name="profile" type="file">
                                        </div>
                                        <span id="req_profile" style="display:none;color:red;">* Enter Profile</span> 
                                        <!-- <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height=50 width=50 src="<?php echo 
                                            "upload/patient/".$row['profile']; ?>">
                                            </div>
                                        </div> -->
                                        <?php 
                                            if (isset($row['profile'])) 
                                            { ?>
                                            <div class="col-md-2">
                                                <div class="upload-img">
                                                    <img height="50" width="50" src="<?php echo "upload/patient/".$row['profile']; ?>">
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Mobile</label>
                                    <div class="col-md-10">
                                        <input type="text" maxlength="10" id="txtcon" value="<?php if(isset($_SESSION['mobile']) && $_SESSION['mobile']) { echo $_SESSION['mobile'];unset($_SESSION['mobile']); } ?><?php echo $row['mobile']; ?>" name="mobile" class="form-control">
                                        <span style="display:none; color:#FF0000;" id="req_contact">* Enter Mobile Number</span>
                                        <span style="display:none; color:#FF0000;" id="valid_contact">* Enter 10 Digit Mobile Number</span>
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
                                    <button type="submit" onclick="return register()" class="btn btn-primary submit-btn" name="submit" value="submit">Create Patient </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->



<script type="text/javascript">
    function register()
    {
       var firstname=document.getElementById('txtfirst');
       var lastname=document.getElementById('txtlastname');
       var email=document.getElementById('txtemail');
       var password=document.getElementById('txt_pass');
       var dob=document.getElementById('txtdob');
       var adderss=document.getElementById('txtadd');
       var gender1=document.getElementById('txtmale');
       var gender2=document.getElementById('txtfemale');
       var profile=document.getElementById('txtpro');
       var contactno=document.getElementById('txtcon');


    if(firstname.value=='')
    {
        document.getElementById('req_firstname').style.display='';
        document.getElementById('valid_firstname').style.display='none';
        alert('Please Enter First Name');
        firstname.focus();
        return false;   
    }
    else if(firstname.value.search(/^[A-Za-z ]+$/))
    {
        document.getElementById('req_firstname').style.display='none';
        document.getElementById('valid_firstname').style.display='';
        alert('Please Enter Valid First Name');
        firstname.focus();
        return false;
    }
    else
    {
        document.getElementById('req_firstname').style.display='none';
        document.getElementById('valid_firstname').style.display='none';
    }
    
    if(lastname.value=='')
    {
        document.getElementById('req_lastname').style.display='';
        document.getElementById('valid_lastname').style.display='none';
        alert('Please Enter Last Name');
        lastname.focus();
        return false;   
    }
    else if(lastname.value.search(/^[A-Za-z ]+$/))
    {
        document.getElementById('req_lastname').style.display='none';
        document.getElementById('valid_lastname').style.display='';
        alert('Please Enter Correct Last First Name');
        lastname.focus();
        return false;
    }
    else
    {
        document.getElementById('req_lastname').style.display='none';
        document.getElementById('valid_lastname').style.display='none';
    }

    if(email.value=='')
    {
        //var ptrnemail=/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i;
        document.getElementById('req_email').style.display='';
        document.getElementById('valid_email').style.display='none';
        alert("Please Enter email");   
        email.focus();
        return false;
    }
    else if(email.value.search(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}.$/i))
    {
        document.getElementById('req_email').style.display='none';
        document.getElementById('valid_email').style.display='';
        alert("Please Enter Correct email");   
        email.focus();
        return false;
    }
    else
    {
        document.getElementById('req_email').style.display='none';
        document.getElementById('valid_email').style.display='none';
    }
       
    if(password.value=='')
    {
        document.getElementById('req_pass').style.display='';
        document.getElementById('valid_pass').style.display='none';
        alert("Please Enter Password");  
        password.focus();
        return false;
    
    }
    else if(password.value.search(/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/))
    {
        document.getElementById('req_pass').style.display='none';
        document.getElementById('valid_pass').style.display='';
        alert("Please Enter Correct Password In this sequence ");  
        password.focus();
        return false;
    }
    else
    {
        document.getElementById('req_pass').style.display='none';
        document.getElementById('valid_pass').style.display='none';
    }
        
    if(dob.value == '0000-00-00' || dob.value == '')
    {
        document.getElementById('req_dob').style.display='';
        alert('Please SELECT DOB');
        dob.focus();
        return false; 
    }
    else
    {
        document.getElementById('req_dob').style.display='none';
    }
     
    if(adderss.value=='')
    {
        document.getElementById('req_address').style.display='';
        alert('Please Enter Address');
        adderss.focus();
        return false;
    }
    else
    {
        document.getElementById('req_address').style.display='none';
    } 
    // validation for gender
    if(gender1.checked==false && gender2.checked==false)
    {

        document.getElementById('req_gender').style.display='';
        alert("Please Select gender");   
        gender1.focus();
        return false;
    }
    else
    {
        document.getElementById('req_gender').style.display='none';
    }


    if(profile.value=='')
    {
        document.getElementById('req_profile').style.display='';
        alert('Please Enter profile');
        profile.focus();
        return false;
    }
    else
    {
        document.getElementById('req_profile').style.display='none';
    }

    // validation for contactno
    if(contactno.value=='')
    {
        document.getElementById('req_contact').style.display='';
        document.getElementById('valid_contact').style.display='none';
        alert('Please Enter Mobile Number');
        contactno.focus();
        return false;   
    }
    else if(contactno.value.search(/^\d{10}$/))
    {
        document.getElementById('req_contact').style.display='none';
        document.getElementById('valid_contact').style.display='';
        alert('Please Enter 10 Digit Mobile Number');
        contactno.focus();
        return false;
    }
    else
    {
        document.getElementById('req_contact').style.display='none';
        document.getElementById('valid_contact').style.display='none';
    }


    }
</script>