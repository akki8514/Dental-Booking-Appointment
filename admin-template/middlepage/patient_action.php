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
	$status = "active";

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
				header("location:index.php?page=patient");
				$_SESSION['Emailmsg'] = '<div class="alert alert-danger" 									role="alert">
                                          <b> Email Id Is Already Exits..!! </b>
                                        </div>';
			}
		}
		else
		{
			move_uploaded_file($tmp_name,"upload/patient/".$profile);
			$insert = "INSERT `patient` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`password` = '".$password."',`dob` = '".$dob."',`gender` = '".$gender."',`address` = '".$address."',`mobile` = '".$mobile."',`profile` = '".$profile."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header('location:index.php?page=patient_list');
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
			$update = "UPDATE `patient` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`password` = '".$password."',`dob` = '".$dob."',`gender` = '".$gender."',`address` = '".$address."',`mobile` = '".$mobile."',`status` = '".$status."' WHERE `p_id` = '".$p_id."' ";
			$qry = mysqli_query($con,$update); 
			if ($profile!='') 
			{
				$selectImg  = "SELECT * FROM `patient` WHERE `p_id` = '".$p_id."' ";
				$qryImg = mysqli_query($con,$selectImg);
				$rowImg = mysqli_fetch_assoc($qryImg);
				unlink("upload/patient/".$rowImg['profile']);

				move_uploaded_file($tmp_name,"upload/patient/".$profile);
				$upImg = "UPDATE `patient` SET `profile` = '".$profile."' WHERE `p_id` = '".$p_id."' ";
				$QryImg = mysqli_query($con,$upImg);
			}
			if ($qry || $QryImg) 
			{
				header('location:index.php?page=patient_list');
				//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';

			}
			else
			{
				echo "Update Not Ok";
			}
			break;

		case 'status':
			$p_id = $_REQUEST['p_id'];
			$upstatus = "UPDATE `patient` SET `status` = 'inactive' WHERE `p_id` = '".$p_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=patient_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;
		
		case 'unblock':
			$p_id = $_REQUEST['p_id'];
			$upstatus = "UPDATE `patient` SET `status` = 'active' WHERE `p_id` = '".$p_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=patient_blocklist');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;	

		case 'delete':
				$p_id = $_REQUEST['p_id'];
                $deleteImg = "SELECT * FROM `patient` WHERE `p_id` = '".$p_id."' ";
                $qryImg = mysqli_query($con,$deleteImg);
                $rowImg = mysqli_fetch_assoc($qryImg);
                unlink("upload/patient/".$rowImg['profile']);

				$delete = "DELETE FROM `patient` WHERE `p_id` = '".$p_id."' ";
				$qry = mysqli_query($con,$delete);
				if ($qry) 
				{
					header('location:index.php?page=patient_list');
					//echo "delete okok";
					$_SESSION['delMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Delete Successfully....!!!!</div>';

				}
				else
				{
					echo "delete Not";
				}
				break;	
		
		default:
			echo "Error";
			break;
	}
}
?>