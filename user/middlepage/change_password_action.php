<?php 

$changepassword = $_REQUEST['cpassword'];
$newpassword = $_REQUEST['newpassword'];

if ($changepassword == $newpassword) 
{
	$update = "UPDATE `patient` SET `password` = '".$changepassword."' WHERE `email` = '".$_SESSION['email']."' ";
	$qry = mysqli_query($con,$update);
	if ($qry) 
	{
		header("location:index.php?page=login");
		//echo "Upadte Ok";
	}
	else
	{
		header("location:index.php?page=change_password");
		//echo "Upadte Not";
	}
}
else
{
	header("location:index.php?page=change_password");
	//echo "ERROR";
}

?>

