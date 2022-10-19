        <div class="main-content account-content">
            <div class="content">
                <div class="container">
                    <div class="account-box">
                        <?php echo @$_SESSION['delMsg'];unset($_SESSION['delMsg']); ?>
                        <form class="form-signin" action="index.php?page=login_action" method="post" >
                            <div class="account-title">
                                 <h3>Login</h3>
                            </div>
                            <div class="form-group">
                                <label>Username or Email</label>
                                <input type="text" id="email" name="email" class="form-control" autofocus>
                                <span id="req_email" style="display:none;color:red;">* Email Is Required</span>
                                <span id="valid_email" style="display:none;color:red;">* Enter Valid Email</span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                                <span id="req_pass" style="display:none;color:red;">* Password Is Required</span>
                                <span id="valid_pass" style="display:none;color:red;">* 6 characters of letters, numbers and at least one special character</span>
                            </div>
                            <div class="form-group text-right"> 
								<a href="index.php?page=forgot-password">Forgot your password?</a>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" onclick="return register()" name="submit" value="submit" type="submit">Login</button>
                            </div>
                            <div class="text-center register-link">Don&#x2019;t have an account? 
								<a href="index.php?page=register">Register Now</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
    function register()
    {
       var email=document.getElementById('email');
       var password=document.getElementById('password');

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