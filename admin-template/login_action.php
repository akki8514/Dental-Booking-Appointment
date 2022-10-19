<?php 
include('../include/config.php');
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if (isset($_POST['submit'])) 
{
	$checkEmail = "SELECT * FROM `doctor` WHERE `email` = '".$email."' AND `password` = '".$password."' ";
	$qryEmail = mysqli_query($con,$checkEmail);
	$countEmail = mysqli_num_rows($qryEmail);
	if ($countEmail > 0) 
	{
	   $rowEmail = mysqli_fetch_assoc($qryEmail); 
	   $_SESSION['id'] = $rowEmail['d_id']; ?>
	   <script type="text/javascript">
	   	alert("You are Login successfully...!!!!");
	   	window.location="index.php";
	   // header("location:index.php");
	   </script>
	   <!-- echo "login okk"; --> 
<?php 	}
	else
	{
		header("location:login.php");
		//echo "Login Not";
		$_SESSION['delMsg'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Sorry.. Your Email & Password Not Match.....!!!!!</div>';
		
	}
}

?>