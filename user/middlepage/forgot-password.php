<?php
    if (isset($_REQUEST['submit']) && $_REQUEST['submit']!="") 
    {
        $email = $_REQUEST['email'];
        $select = "SELECT * FROM `patient` WHERE `email` = '".$email."' ";       
        $qry = mysqli_query($con,$select);
        $count = mysqli_num_rows($qry);
        echo $count;

        if ($count > 0) 
        {
            $_SESSION['email'] = $email;
            header("location:index.php?page=change_password");
            //echo "Email Ok";
        }
        else
        {
            header("location:index.php?page=forgot-password");
            //echo "Email Not";
        }
    }
?>
        <div class="main-content account-content">
            <div class="content">
                <div class="container">
                    <div class="account-box">
                        <form class="form-signin" method="post">
                            <div class="account-title">
                                 <h3>Forgot Password</h3>
                            </div>  
                            <div class="form-group">
                                <label>Enter Your Email</label>
                                <input type="text" name="email" class="form-control" autofocus>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" name="submit" value="submit" type="submit">Reset Password</button>
                            </div>
                            <div class="text-center register-link"> 
								<a href="index.php?page=login">Back to Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>