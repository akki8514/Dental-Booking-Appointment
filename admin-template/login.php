<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Dental - Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
                
				<div class="account-box">
                    <form action="login_action.php" method="post"  class="form-signin">
                        <?php echo @$_SESSION['delMsg'];unset($_SESSION['delMsg']); ?>
						<div class="account-logo">
                            <img src="assets/img/logo-dark.png" alt="Medifab">
                        </div>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" id="txtemail" name="email" class="form-control" >
                            <span id="req_email" style="display:none;color:red;">* Email Is Required</span>
                            <span id="valid_email" style="display:none;color:red;">* Enter Valid Email</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="txt_pass" class="form-control" name="password">
                            <span id="req_pass" style="display:none;color:red;">* Password Is Required</span>
                            <span id="valid_pass" style="display:none;color:red;">* 6 characters of letters, numbers and at least one special character</span>
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.php">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" onclick="return register()" name="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <!-- <div class="text-center register-link">
                            Don’t have an account? <a href="register.html">Register Now</a>
                        </div> -->
                    </form>
                </div>
                </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript">
    function register()
    {
       var email=document.getElementById('txtemail');
       var password=document.getElementById('txt_pass');

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
        
    
    }
    </script>
</body>

</html>