<?php 

echo "<pre>";
print_r($_REQUEST);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$mobile_no = $_REQUEST['mobile_no'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];

	switch ($action) 
	{
		case 'insert':
			$insert = "INSERT `contactus` SET `name` = '".$name."',`email` = '".$email."',`mobile_no` = '".$mobile_no."',`subject` = '".$subject."',`message` = '".$message."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=contact-us");
				//echo "Insert Ok";
				$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert"><center>Thank You For Contact With Us....!!!!</center></div>';

			}
			else
			{
				echo "Insert Not Ok";
			}
			break;

		case 'delete':
			$delete = "DELETE FROM `contactus` WHERE `con_id` = '".$con_id."' ";
			$qrydel = mysqli_query($con,$delete);
			if ($qrydel) 
			{
				header("location:index.php?page=contact_list");
				$_SESSION['delMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Delete Successfully....!!!!</div>';
			}
			else
			{
				echo "Delete Not Ok";
			}
			break;

		default:
			echo "Error";
			break;
	}
}

?>