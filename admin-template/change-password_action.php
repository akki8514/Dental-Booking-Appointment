<?php 

include '../include/config.php';

$changepassword = $_REQUEST['cpassword'];
$newpassword = $_REQUEST['newpassword'];

if ($changepassword == $newpassword) 
{
	$update = "UPDATE `doctor` SET `password` = '".$changepassword."' WHERE `email` = '".$_SESSION['email']."' ";
	$qry = mysqli_query($con,$update);
	if ($qry) 
	{
		header("location:login.php");
		//echo "Upadte Ok";
	}
	else
	{
		header("location:change-password.php");
		//echo "Upadte Not";
	}
}
else
{
	header("location:change-password.php");
	//echo "ERROR";
}



?>