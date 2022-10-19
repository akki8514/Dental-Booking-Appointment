        <div class="main-content account-content">
            <div class="content">
                <div class="container">
                    <div class="account-box">
                        <form class="form-signin" action="index.php?page=change_password_action" method="post" >
                            <div class="account-title">
                                 <h3>Change Password</h3>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" disabled="" name="email" class="form-control" autofocus>
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" name="newpassword" class="form-control" autofocus>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" autofocus>
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