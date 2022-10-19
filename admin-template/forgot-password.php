<?php
    include("../include/config.php");

    if (isset($_REQUEST['submit']) && $_REQUEST['submit']!="") 
    {
        $email = $_REQUEST['email'];
        $select = "SELECT *FROM `doctor` WHERE `email` = '".$email."' ";
        $qry = mysqli_query($con,$select);
        $count = mysqli_num_rows($qry);
        //echo $count;
        if ($count > 0) 
        {
            $_SESSION['email'] = $email;
            header("location:change-password.php");
            //echo "Email Ok";
        }
        else
        {
            //header("location:forgot-password.php");
            echo "Email Not";
        }
    }

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
                    <form class="form-signin" action="">
						<div class="account-logo">
                            <img src="assets/img/logo-dark.png" alt="Medifab">
                        </div>
                        <div class="form-group">
                            <label>Enter Your Email</label>
                            <input type="text" name="email" class="form-control" autofocus>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" value="submit" name="submit" type="submit">Reset Password</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
</body>
</html>