<?php 

echo "<pre>";
print_r($_REQUEST);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$a_id = $_REQUEST['a_id'];
	$fname = $_REQUEST['fname'];
	$email = $_REQUEST['email'];
	$date = $_REQUEST['date'];
	$time = $_REQUEST['time'];
	$gender = $_REQUEST['gender'];
	$contact = $_REQUEST['contact'];
	$status = "pending";

	switch ($action) 
	{
		case 'insert':
			$checkemail = "SELECT * FROM `appointment` WHERE `email` = '".$email."' ";
			$qryemail = mysqli_query($con,$checkemail);
			$countemail = mysqli_num_rows($qryemail);
			if ($countemail > 0) 
			{
				foreach ($_REQUEST as $key => $value) 
				{
					$_SESSION[$key] = $value;
					header('location:index.php?page=appointment');
					$_SESSION['EmailMsg'] = 'Email Already Exits...!!!';
				}
			}
			else
			{
			$insert = "INSERT `appointment` SET `fname` = '".$fname."',`email` = '".$email."',`date` = '".$date."',`time` = '".$time."',`gender` = '".$gender."',`address` = '".$address."',`contact` = '".$contact."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=appointment_list");
				//echo "Insert Ok";
				$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Insert Successfully....!!!!</div>';

			}
			else
			{
				echo "Insert Not Ok";
			}
			}
			break;
		
		case 'update':
			$update = "UPDATE `appointment` SET `fname` = '".$fname."',`email` = '".$email."',`date` = '".$date."',`time` = '".$time."',`gender` = '".$gender."',`contact` = '".$contact."',`status` = '".$status."' WHERE `a_id` = '".$a_id."' ";
			$qry = mysqli_query($con,$update);
			if ($qry) 
			{
				header("location:index.php?page=appointment_list");
				//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';

			}
			else
			{
				echo "Update Not Ok";
			}
			break;

		/*case 'status':
			$a_id = $_REQUEST['a_id'];
			$upstatus = "UPDATE `appointment` SET `status` = 'inactive' WHERE `a_id` = '".$a_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=appointment_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;*/

		case 'accept':
			$a_id = $_REQUEST['a_id'];
			$upstatus = "UPDATE `appointment` SET `status` = 'accept' WHERE `a_id` = '".$a_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=appointment_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

			case 'reject':
			$a_id = $_REQUEST['a_id'];
			$upstatus = "UPDATE `appointment` SET `status` = 'reject' WHERE `a_id` = '".$a_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=appointment_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

		case 'delete':
			$a_id = $_REQUEST['a_id'];
			$delete = "DELETE FROM `appointment` WHERE `a_id` = '".$a_id."' ";
			$qry = mysqli_query($con,$delete);
			if ($delete) 
			{
				header("location:index.php?page=appointment_list");
				//echo "Delete Ok";
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