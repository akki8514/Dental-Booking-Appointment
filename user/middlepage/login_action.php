<?php 

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (isset($_POST['submit'])) 
{
	$checkemail = "SELECT * FROM  `patient` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
	$qryemail = mysqli_query($con,$checkemail);
	$countemail = mysqli_num_rows($qryemail);
	if ($countemail > 0) 
	{
		$rowemail = mysqli_fetch_assoc($qryemail);
		$_SESSION['user_id'] = $rowemail['p_id']; ?>

    <script type="text/javascript">
    	alert("You Are Login Successfully...!!!");
    	window.location = "index.php";
    </script>
    <?php 	}
	else
	{
		//echo "Login Not";
		header("location:index.php?page=login");
		$_SESSION['delMsg'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Sorry.. Your Email & Password Not Match.....!!!!!</div>';
		/*$_SESSION['errormsg'] = "<h3> Sorry Your Data Not Match.....!!!!!</h3>";*/
	}
}

?>