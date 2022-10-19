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

<script>
function showCity(state_id) {
    if (state_id == "") {
        document.getElementById("CitySelect").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
                document.getElementById("CitySelect").innerHTML = this.responseText;
            if (this.readyState == 4 && this.status == 200) {
            }
        };
        xmlhttp.open("GET","city.php?state_id="+state_id,true);
        xmlhttp.send();
    }
}

function showCity2(id) {
/* alert("hiiii"); */
    if (id == "") {
        document.getElementById("AreaSelect").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("AreaSelect").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","area.php?id="+id,true);
        xmlhttp.send();
    }
}


</script>


        <div class="main-content account-content">
            <div class="content">
                <div class="container">
                    <div class="account-box">
                        <form class="form-signin" method="post" action="index.php?page=register_action" enctype="multipart/form-data">
                            <input type="Hidden" name="action" value="<?php echo $action; ?>">
                            <input type="Hidden" name="p_id" value="<?php echo $row['p_id']; ?>">
                            <div class="account-title">
                                 <h3>Register</h3>
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="fname" id="txtfirst" value="<?php echo $row['fname']; ?><?php if(isset($_SESSION['fname']) && $_SESSION['fname']) { echo $_SESSION['fname'];unset($_SESSION['fname']); } ?>" class="form-control">
                                <span id="req_firstname" style="display:none;color:red;">* First Name Is Required</span>
                                  <span id="valid_firstname" style="display:none;color:red;">* Enter valid First Name</span>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lname" id="txtlastname" value="<?php echo $row['lname']; ?><?php if(isset($_SESSION['lname']) && $_SESSION['lname']) { echo $_SESSION['lname'];unset($_SESSION['lname']); } ?>" class="form-control">
                                 <span id="req_lastname" style="display:none;color:red;">* Last Name Is Required</span>
                                  <span id="valid_lastname" style="display:none;color:red;">* Enter Vaild Last Name</span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" id="txtemail" value="<?php echo $row['email']; ?><?php if(isset($_SESSION['email']) && $_SESSION['email']) { echo $_SESSION['email'];unset($_SESSION['email']); } ?>" class="form-control">
                                 <span id="req_email" style="display:none;color:red;">* Email Is Required</span>
                                  <span id="valid_email" style="display:none;color:red;">* Enter Valid Email</span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" id="txt_pass" value="<?php echo $row['password']; ?>" class="form-control">
                                <span id="req_pass" style="display:none;color:red;">* Password Is Required</span>
                                  <span id="valid_pass" style="display:none;color:red;">* 6 characters of letters, numbers and at least one special character</span>
                            </div>

                            <div class="form-group">
                                <label>Date Of Birth</label>
                                <div class="cal-icon">
                                    <input type="text" name="dob" id="txtdob" value="<?php echo $row['dob']; ?><?php if(isset($_SESSION['dob']) && $_SESSION['dob']) { echo $_SESSION['dob'];unset($_SESSION['dob']); } ?>" class="form-control datetimepicker">
                                </div>
                                 <span id="req_dob" style="display:none;color:red;">* Please Select DOB</span>

                            </div>

              

                          <div class="form-group">
                                    <label>State</label>
                                    <div class="controls">
                                        <select name="state_id" onchange="showCity(this.value)" class="form-control select">
                                            <option >Select State</option>
                                            <?php 
                                                $sel=mysqli_query($con,"SELECT * FROM `state` WHERE `id` = '15' ");
                                                while($state_row=mysqli_fetch_assoc($sel)){
                                            ?>
                                            <option value="<?php echo $state_row['id']; ?>"><?php echo $state_row['name']; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>

<div class="form-group" id='CitySelect'>
        <div class="form-group">
                                    <label>City</label>

    <div class="form-group card-label">
        <select class="form-control select"  name="city_id" required data-error="Please Select your City">
            <option>Select City</option>
        </select>
    </div>
</div>
</div>

<div class="form-group" id='AreaSelect'>
                                    <label>Area</label>

    <div class="form-group card-label">
      <select class="form-control select" name="area_id" class="selectpicker" data-show-subtext="true" data-live-search="true">
        <option data-subtext="Rep California">Select Area</option> 
      </select>
    </div>
  </div>


                            <div class="form-group">
                                <label>Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" <?php if (isset($row['gender']) && $row['gender']=="male") { echo "checked=checked"; } ?> name="gender" id="txtmale" value="male" > Male
                                    </label>
                                </div>
                                
                                <div class="radio">
                                    <label>
                                        <input type="radio" <?php if (isset($row['gender']) && $row['gender']=="female") { echo "checked=checked"; } ?> name="gender" id="txtfemale" value="female"> Female
                                    </label>
                                </div>
                               <!--  <label for="remember" style="color: black;" ></label>
                                -->             <span style="display: none; color:#FF0000" id="req_gender">*Please Select Gender</span>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                    <textarea rows="5" cols="5" class="form-control" id="txtadd" name="address" placeholder="Enter Address"><?php echo $row['address']; ?><?php echo $row['address']; ?><?php if(isset($_SESSION['address']) && $_SESSION['address']) { echo $_SESSION['address'];unset($_SESSION['address']); } ?>
                                    </textarea>
                                    <span id="req_address" style="display:none;color:red;">* Enter Address</span> 
                            </div>

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" name="mobile" id="txtcon" maxlength="10" value="<?php echo $row['mobile']; ?><?php if(isset($_SESSION['mobile']) && $_SESSION['mobile']) { echo $_SESSION['mobile'];unset($_SESSION['mobile']); } ?>" class="form-control">
                                <span style="display:none; color:#FF0000;" id="req_contact">* Enter Mobile Number</span>
                                <span style="display:none; color:#FF0000;" id="valid_contact">* Enter 10 Digit Mobile Number</span>
                            </div>
                            
                            <div class="form-group">
                                <label>Profile</label>
                                <div>
                                    <input class="form-control" id="txtpro" name="profile" type="file">
                                </div>
                                <span id="req_profile" style="display:none;color:red;">* Enter Profile</span> 
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit" name="submit" onclick="return register()" value="submit">Signup</button>
                            </div>
                            <div class="text-center login-link">Already have an account? 
								<a href="index.php?page=login">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


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
       var contactno=document.getElementById('txtcon');
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
    // validation for dob
    
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


    }
</script>