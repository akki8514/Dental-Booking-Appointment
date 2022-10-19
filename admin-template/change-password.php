<?php include '../include/config.php'; 

?>

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
                    <form class="form-signin" method="post" action="change-password_action.php">
						<div class="account-logo">
                            <a href="index.html"><img src="assets/img/logo-dark.png" alt="Medifab"></a>
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" disabled="" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label> New Password </label>
                            <input type="password" name="newpassword" class="form-control" autofocus>
                        </div>
                        <div class="form-group">
                            <label> Confirm Password </label>
                            <input type="password" name="cpassword" class="form-control" autofocus>
                        </div>
                        
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <!-- <div class="main-wrapper">
        <div class="account-page">
            <div class="container">
                <h3 class="account-title">Change Password</h3>
                <div class="account-box">
                    <div class="account-wrapper">
                        <div class="account-logo">
                            <a href="index.html"><img src="assets/img/Logo_Hospital.png" alt="Medifab"></a>
                        </div>
                        <form action="http://dreamguys.co.in/demo/medifab/admin-template/index.html">
                            <div class="form-group form-focus">
                                <label class="focus-label">Current Password</label>
                                <input class="form-control floating" type="password">
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">New Password</label>
                                <input class="form-control floating" type="password">
                            </div>
                            <div class="form-group form-focus">
                                <label class="focus-label">New Repeat Password</label>
                                <input class="form-control floating" type="password">
                            </div>
                            <div class="form-group m-b-0 text-center">
                                <button class="btn btn-primary btn-block account-btn" type="submit">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>