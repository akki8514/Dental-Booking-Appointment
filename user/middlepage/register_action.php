<?php

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$p_id = $_REQUEST['p_id'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$address = $_REQUEST['address'];
	$mobile = $_REQUEST['mobile'];
	$profile = $_FILES['profile']['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];

	switch ($action) 
	{
		case 'insert':

		$checkEmail = "SELECT * FROM `patient` WHERE `email` = '".$email."' ";
		$qryEmail = mysqli_query($con,$checkEmail);
		$countEmail = mysqli_num_rows($qryEmail);
		if ($countEmail > 0) 
		{
			foreach ($_REQUEST as $key => $value) 
			{
				$_SESSION[$key] = $value;
				header("location:index.php?page=register");
				$_SESSION['Emailmsg'] = '<div class="alert alert-danger" role="alert">
                                        <b> Email Id Is Already Exits..!! </b> </div>';
			}
		}
		else
		{
			move_uploaded_file($tmp_name,"../admin-template/upload/patient/".$profile);
			$insert = "INSERT `patient` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`password` = '".$password."',`dob` = '".$dob."',`gender` = '".$gender."',`address` = '".$address."',`mobile` = '".$mobile."',`profile` = '".$profile."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header('location:index.php?page=login');
				//echo "Insert Ok";
				//$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Insert Successfully....!!!!</div>';
				
			}
			else
			{
				header('location:index.php?page=register');
				//echo "Insert Not Ok";
			}
		}
			break;


		default:
			echo "Error";
			break;
	}
}
?>