<?php 

    @$d_id = $_REQUEST['d_id'];
    $select = "SELECT *FROM `doctor` WHERE `d_id` = '".$d_id."' ";
    $qry = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($qry);
    
    if (@$_REQUEST['d_id']!='') 
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
                        <h4 class="page-title"> Doctor </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <form method="post" action="index.php?page=doctor_action" enctype="multipart/form-data">
                                <input type="Hidden" name="action" value="<?php echo $action; ?>">
                                <input type="Hidden" name="d_id" value="<?php echo $row['d_id']; ?>"> 
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">First Name</label>
                                    <div class="col-md-10">
                                        <input type="text" name="fname" id="txtfirst" class="form-control" value="<?php if(isset($_SESSION['fname']) && $_SESSION['fname']) { echo $_SESSION['fname'];unset($_SESSION['fname']); } ?><?php echo $row['fname']; ?>">
                                        <span id="req_firstname" style="display:none;color:red;">* First Name Is Required</span>
                                        <span id="valid_firstname" style="display:none;color:red;">* Enter valid First Name</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Last Name</label>
                                    <div class="col-md-10">
                                        <input type="text" id="txtlastname" value="<?php if(isset($_SESSION['lname']) && $_SESSION['lname']) { echo $_SESSION['lname'];unset($_SESSION['lname']); } ?><?php echo $row['lname']; ?>" name="lname" class="form-control">
                                        <span id="req_lastname" style="display:none;color:red;">* Last Name Is Required</span>
                                        <span id="valid_lastname" style="display:none;color:red;">* Enter Vaild Last Name</span>
                                    </div>
                                </div>

                                <center><h3 style="color: red;"><?php echo @$_SESSION['EmailMsg'];unset($_SESSION['EmailMsg']); ?></h3></center> 

                                
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="text" name="email" id="txtemail" class="form-control" value="<?php if(isset($_SESSION['email']) && $_SESSION['email']) { echo $_SESSION['email'];unset($_SESSION['email']); } ?><?php echo $row['email']; ?>" >
                                        <span id="req_email" style="display:none;color:red;">* Email Is Required</span>
                                        <span id="valid_email" style="display:none;color:red;">* Enter Valid Email</span>
                                    </div>
                                </div>

                               
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" name="password" id="txt_pass" class="form-control" value="<?php echo $row['password']; ?>">
                                        <span id="req_pass" style="display:none;color:red;">* Password Is Required</span>
                                        <span id="valid_pass" style="display:none;color:red;">* 6 characters of letters, numbers and at least one special character</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Date of Birth</label>
                                    <div class="col-md-10">
                                        <div class="cal-icon">
                                            <input type="text" name="dob" id="txtdob" value="<?php if(isset($_SESSION['dob']) && $_SESSION['dob']) { echo $_SESSION['dob'];unset($_SESSION['dob']); } ?><?php echo $row['dob']; ?>" class="form-control datetimepicker">
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
                                                } ?><?php if(isset($_SESSION['gender']) && $_SESSION['gender']) { echo $_SESSION['gender'];unset($_SESSION['gender']); } ?> name="gender" id="txtmale" value="male" > Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" <?php if (isset($row['gender']) && $row['gender']=="female") {
                                                    echo "checked=checked";
                                                } ?><?php if(isset($_SESSION['gender']) && $_SESSION['gender']) { echo $_SESSION['gender'];unset($_SESSION['gender']); } ?> name="gender" id="txtfemale" value="female"> Female
                                            </label>
                                        </div>
                                            <span style="display: none; color:#FF0000" id="req_gender">*Please Select Gender</span>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Address</label>
                                    <div class="col-md-10">
                                        <textarea rows="5" cols="5" class="form-control" id="txtadd" name="address" placeholder="Enter Address"><?php if(isset($_SESSION['address']) && $_SESSION['address']) { echo $_SESSION['address'];unset($_SESSION['address']); } ?><?php echo $row['address']; ?>
                                        </textarea>
                                        <span id="req_address" style="display:none;color:red;">* Enter Address</span> 

                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label class="col-form-label col-md-2">
                                    Degree </label>
                                    <div class="col-md-8">
                                        <input class="form-control" id="txtdegree" value="" name="degree" type="file">

                                        <span id="req_degree" style="display:none;color:red;">* Enter Degree</span> 


                                    <?php
                                        if (isset($row['degree'])) 
                                            {  ?>
                                        <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height=50 width=50 src="<?php echo "upload/degree/".$row['degree']; ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                    </div>
                                </div>   -->                              

                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Profile</label>
                                    <div class="col-md-8">
                                        <input class="form-control" id="txtpro" value="" name="profile" type="file">
                                    </div>
                                    <span id="req_profile" style="display:none;color:red;">* Enter Profile</span> 

                                    <?php 
                                        if (isset($row['profile'])) 
                                        { ?>
                                        <div class="col-md-2">
                                            <div class="upload-img">
                                                <img height="50" width="50" src="<?php echo "upload/doctor/".$row['profile']; ?>">
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
                                    <button type="submit" class="btn btn-primary submit-btn" name="submit" onclick="return doctor()" value="submit">Create Doctor</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->


<script type="text/javascript">
    function doctor()
    {
       var firstname=document.getElementById('txtfirst');
       var lastname=document.getElementById('txtlastname');
       var email=document.getElementById('txtemail');
       var password=document.getElementById('txt_pass');
       var dob=document.getElementById('txtdob');
       var gender1=document.getElementById('txtmale');
       var gender2=document.getElementById('txtfemale');
       var adderss=document.getElementById('txtadd');
       var contactno=document.getElementById('txtcon');
       /*var degree=document.getElementById('txtdegree');*/
       var profile=document.getElementById('txtpro');

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
    
    
    /*if(degree.value=='')
    {
        document.getElementById('req_degree').style.display='';
        alert('Please Enter Degree');
        degree.focus();
        return false;
    }
    else
    {
        document.getElementById('req_degree').style.display='none';
    }*/


    if(profile.value=='')
    {
        document.getElementById('req_profile').style.display='';
        alert('Please Enter Profile');
        profile.focus();
        return false;
    }
    else
    {
        document.getElementById('req_profile').style.display='none';
    } 


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