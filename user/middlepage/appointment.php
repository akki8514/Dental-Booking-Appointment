      <?php 
      if ($_SESSION['user_id']=="") 
      {
         header("location:index.php?page=login");
      }

      ?>
        <div class="main-content account-content">
            <div class="content">
                <div class="container">
                    <div class="account-box">
                        <div class="appointment">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="nav-item"> 
									<a data-toggle="tab" aria-expanded="false" class="nav-link active"><span> Appointment</span></a>
                                </li>
                               <!--  <li class="nav-item"> 
									<a href="#online-consultation" data-toggle="tab" aria-expanded="true" class="nav-link"><span>Online Consultation</span></a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="clinic-consultation">
                                    <form method="post" action="index.php?page=app_action">
                                        <input type="hidden" name="action" value="insert">
                                        <div class="form-group">
                                            <label>Treatment</label>
                                            <select class="form-control" name="cat_id">
                                                <option value="">Select Any One</option>
                                                <?php 
                                                $selectCat = "SELECT * FROM `category` ";
                                                $qryCat = mysqli_query($con,$selectCat);
                                                while($rowCat = mysqli_fetch_assoc($qryCat))
                                                {
                                                ?>
                                                <option value="<?php echo $rowCat['cat_id']; ?>"><?php echo $rowCat['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>First Name <span class="text-red">*</span>
                                            </label>
                                            <input type="text" name="fname" id="f_name" class="form-control">
                                            <span id="req_f_name" style="display:none;color:red;">* First Name Is Required</span>
                                            <span id="valid_f_name" style="display:none;color:red;">* Enter valid First Name</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name <span class="text-red">*</span>
                                            </label>
                                            <input type="text" name="lname" id="l_name" class="form-control">
                                            <span id="req_l_name" style="display:none;color:red;">* Last Name Is Required</span>
                                            <span id="valid_l_name" style="display:none;color:red;">* Enter Vaild Last Name</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span class="text-red">*</span>
                                            </label>
                                            <input type="text" name="email" id="email" class="form-control">
                                            <span id="req_email" style="display:none;color:red;">* Email Is Required</span>
                                            <span id="valid_email" style="display:none;color:red;">* Enter Valid Email</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Date <span class="text-red">*</span>
                                            </label>
                                            <div class="cal-icon">
                                            <input type="date" name="date" id="date" min="<?php echo date("Y-m-d"); ?>" class="form-control">
                                            <span id="req_date" style="display:none;color:red;">* Please Select Date</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Time <span class="text-red">*</span>
                                            </label>
                                            <div class="time-icon">
                                            <input type="time" name="time" id="" class="form-control">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>Gender <span class="text-red">*</span>
                                            </label>
                                            <br>
                                            <input type="radio" name="gender" id="gender_m" value="male"> Male
                                            <input type="radio" name="gender" id="gender_f" value="female"> Female<br>
                                            <span style="display: none; color:#FF0000" id="req_gender">*Please Select Gender</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact <span class="text-red">*</span>
                                            </label>
                                            <input type="text" name="contact" id="mob" maxlength="10" class="form-control">
                                            <span style="display:none; color:#FF0000;" id="req_mobile">* Enter Mobile Number</span>
                                            <span style="display:none; color:#FF0000;" id="valid_mobile">* Enter 10 Digit Mobile Number</span>
                                        </div>
                                    
                                        
                                        <div class="form-group text-center m-b-0">
                                            <input type="submit" name="submit" onclick="return appointment()" class="btn btn-primary account-btn" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript">
function appointment()
{
    var f_name = document.getElementById('f_name');
    var l_name = document.getElementById('l_name');
    var email = document.getElementById('email');
    var date = document.getElementById('date');
    var time = document.getElementById('time');
    var gender_m = document.getElementById('gender_m');
    var gender_f = document.getElementById('gender_f');
    var mob = document.getElementById('mob');

    //First Name
    if(f_name.value==''){
        document.getElementById('req_f_name').style.display='';
        document.getElementById('valid_f_name').style.display='none';
        alert('Please Enter First Name');
        f_name.focus();
        return false;
    }else if(f_name.value!='' && f_name.value.search(/^[a-zA-Z ]+$/)==-1){
        document.getElementById('req_f_name').style.display='none';
        document.getElementById('valid_f_name').style.display='';
        alert('Please Enter Valid First Name');
        f_name.focus();
        return false;
    }else{
        document.getElementById('req_f_name').style.display='none';
        document.getElementById('valid_f_name').style.display='none';   
    }
    //Last Name
    if(l_name.value==''){
        document.getElementById('req_l_name').style.display='';
        document.getElementById('valid_l_name').style.display='none';
        alert('Please Enter Last Name');
        l_name.focus();
        return false;
    }else if(l_name.value!='' && l_name.value.search(/^[a-zA-Z ]+$/)==-1){
        document.getElementById('req_l_name').style.display='none';
        document.getElementById('valid_l_name').style.display='';
        alert('Please Enter Valid Last Name');
        l_name.focus();
        return false;
    }else{
        document.getElementById('req_l_name').style.display='none';
        document.getElementById('valid_l_name').style.display='none';
    }

    //Email
    if(email.value==''){
        document.getElementById("req_email").style.display='';
        document.getElementById("valid_email").style.display='none';
        alert("Please Enter Email");   
        email.focus();
        return false;
    }else if(email.value!='' && email.value.search(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/)==-1){
        document.getElementById("req_email").style.display='none';
        document.getElementById("valid_email").style.display='';
        alert("Please Enter Correct Email");   
        email.focus();
        return false;
    }else{
        document.getElementById("req_email").style.display='none';
        document.getElementById("valid_email").style.display='none';
    }

    //Date
    if(date.value == '0000-00-00' || date.value == '')
    {
        document.getElementById('req_date').style.display='';
        alert('Please Select Date');
        date.focus();
        return false; 
    }
    else
    {
        document.getElementById('req_date').style.display='none';
    }    

    //Gender
    if(gender_m.checked==false && gender_f.checked==false){
        document.getElementById("req_gender").style.display='';
        alert("Please Select Gender");
        gender_m.focus();
        return false;   

    }else{
        document.getElementById("req_gender").style.display='none';
    }

    //Mobile no
    if(mob.value=='')
    {
        document.getElementById('req_mobile').style.display='';
        document.getElementById('valid_mobile').style.display='none';
        alert('Please Enter Mobile Number');
        mob.focus();
        return false;   
    }
    else if(mob.value.search(/^\d{10}$/))
    {
        document.getElementById('req_mobile').style.display='none';
        document.getElementById('valid_mobile').style.display='';
        alert('Please Enter Valid 10 Digit Mobile Number');
        mob.focus();
        return false;
    }
    else
    {
        document.getElementById('req_mobile').style.display='none';
        document.getElementById('valid_mobile').style.display='none';
    }

}

</script>