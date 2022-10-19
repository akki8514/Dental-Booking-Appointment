<?php 

echo "<pre>";
print_r($_REQUEST);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$f_id = $_REQUEST['f_id'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];
	$status = "active";

	switch ($action) 
	{
		case 'insert':
			$checkemail = "SELECT * FROM `feedback` WHERE `email` = '".$email."' ";
			$qryemail = mysqli_query($con,$checkemail);
			$countemail = mysqli_num_rows($qryemail);
			if ($countemail > 0 )
			{
				foreach ($_REQUEST as $key => $value) 
				{
					$_SESSION[$key] = $value;
					header('location:index.php?page=feedback');
            		$_SESSION['EmailMsg'] = 'Email Alredy Exits...!!!';
				}
			}
			else
			{
			$insert = "INSERT INTO `feedback` SET `name` = '".$name."',`email` = '".$email."',`message` = '".$message."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=feedback_list");
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
			$update = "UPDATE `feedback` SET `name` = '".$name."',`email` = '".$email."',`message` = '".$message."',`status` = '".$status."' WHERE `f_id` = '".$f_id."' ";
			$qry = mysqli_query($con,$update);
			if ($qry) 
			{
				header("location:index.php?page=feedback_list");
				//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';
			}
			else
			{
				echo "Update Not Ok";
			}
			break;

		case 'status':
			$f_id = $_REQUEST['f_id'];
			$upstatus = "UPDATE `feedback` SET `status` = 'inactive' WHERE `f_id` = '".$f_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=feedback_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

		case 'unblock':
			$f_id = $_REQUEST['f_id'];
			$upstatus = "UPDATE `feedback` SET `status` = 'active' WHERE `f_id` = '".$f_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=feedback_blocklist');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;
		
		case 'delete':
			$f_id = $_REQUEST['f_id'];
			$delete = "DELETE FROM `feedback` WHERE `f_id` = '".$f_id."' ";
			$qry = mysqli_query($con,$delete);
			if ($qry) 
			{
				header("location:index.php?page=feedback_list");
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