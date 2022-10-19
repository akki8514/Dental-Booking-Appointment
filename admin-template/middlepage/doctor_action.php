<?php

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$d_id = $_REQUEST['d_id'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$dob = $_REQUEST['dob'];
	$gender = $_REQUEST['gender'];
	$address = $_REQUEST['address'];
	$mobile = $_REQUEST['mobile'];
	/*$degree = $_FILES['degree']['name'];
	$tmp_name = $_FILES['degree']['tmp_name'];*/
	$profile = $_FILES['profile']['name'];
	$temp_name = $_FILES['profile']['tmp_name'];
	$status = "active";

	switch ($action) 
	{
		case 'insert':
            
            $checkEmail = "SELECT * FROM `doctor` WHERE `email` = '".$email."' ";
            $qryEmail = mysqli_query($con,$checkEmail);
            $countEmail = mysqli_num_rows($qryEmail);
            if ($countEmail > 0) 
            {
            	foreach ($_REQUEST as $key => $value) 
            	{
            		$_SESSION[$key] = $value;
            		header("location:index.php?page=doctor");
            		$_SESSION['EmailMsg'] = 'Email Alredy Exits...!!!';
            	}
            }
            else
            {
            /*move_uploaded_file($tmp_name,"upload/degree/".$degree);*/
            move_uploaded_file($temp_name,"upload/doctor/".$profile);
		echo	$insert = "INSERT `doctor` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`password` = '".$password."',`dob` = '".$dob."',`gender` = '".$gender."',`address` = '".$address."',`mobile` = '".$mobile."',`profile` = '".$profile."',`status` = '".$status."' ";
		/*echo	$insert = "INSERT `doctor` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`password` = '".$password."',`dob` = '".$dob."',`gender` = '".$gender."',`address` = '".$address."',`mobile` = '".$mobile."',`degree` = '".$degree."',`profile` = '".$profile."',`status` = '".$status."' ";*/
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header('location:index.php?page=doctor_list');
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
		echo	$update = "UPDATE `doctor` SET `fname` = '".$fname."',`lname` = '".$lname."',`email` = '".$email."',`password` = '".$password."',`dob` = '".$dob."',`gender` = '".$gender."',`address` = '".$address."',`mobile` = '".$mobile."',`status` = '".$status."' WHERE `d_id` = '".$d_id."' ";
			$qry = mysqli_query($con,$update);
			if ($profile!=""/* || $degree!=""*/) 
			{
				$SelectImg = "SELECT * FROM `doctor` WHERE `d_id` = '".$d_id."' ";
				$Qryimg = mysqli_query($con,$SelectImg);
				$rowimg = mysqli_fetch_assoc($Qryimg);
				/*unlink("upload/degree/".$rowimg['degree']);*/
				unlink("upload/doctor/".$rowimg['profile']);
                 
				/*move_uploaded_file($tmp_name,"upload/degree/".$degree);*/
				move_uploaded_file($temp_name,"upload/doctor/".$profile);
				$Upimg = "UPDATE `doctor` SET `profile` = '".$profile."' WHERE `d_id` = '".$d_id."' ";
				/*$Upimg = "UPDATE `doctor` SET `profile` = '".$profile."',`degree` = '".$degree."' WHERE `d_id` = '".$d_id."' ";*/
				$qryimg = mysqli_query($con,$Upimg);
			}
			if ($qry || $QryImg) 
			{
				header('location:index.php?page=doctor_list');
			 	//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';

			}
			else
			{
				echo "Update Not";
			} 
			break;

		case 'status':
			$d_id = $_REQUEST['d_id'];
			$upstatus = "UPDATE `doctor` SET `status` = 'inactive' WHERE `d_id` = '".$d_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				//echo "update ok";
				header('location:index.php?page=doctor_list');

			}
			else
			{
				echo "update not";
			}
			break;

		case 'unblock':
			$d_id = $_REQUEST['d_id'];
			$upstatus = "UPDATE `doctor` SET `status` = 'active' WHERE `d_id` = '".$d_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=doctor_blocklist');
				//echo "update ok";
			}
			else
			{
				echo "update not";
			}
			break;

		case 'delete':
				$d_id = $_REQUEST['d_id'];
				$deleteImg = "SELECT * FROM `doctor` WHERE `d_id` = '".$d_id."' ";
				$qryImg = mysqli_query($con,$deleteImg);
				$rowImg = mysqli_fetch_assoc($qryImg);
				unlink("upload/doctor/".$rowImg['profile']);
				/*unlink("upload/degree/".$rowImg['degree']);*/

				$delete = "DELETE FROM `doctor` WHERE `d_id` = '".$d_id."' ";
				$qry = mysqli_query($con,$delete);
				if ($qry) 
				{
					header('location:index.php?page=doctor_list');
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