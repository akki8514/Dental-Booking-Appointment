<?php 

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$g_id = $_REQUEST['g_id'];
	$gname = $_REQUEST['gname'];
	$profile = $_FILES['profile']['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];
	$status = "active";

	switch ($action) 
	{
		case 'insert':
			move_uploaded_file($tmp_name,"upload/gallery/".$profile);
			$insert = "INSERT INTO `gallery` SET `gname` = '".$gname."',`profile` = '".$profile."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=gallery_list");
				//echo "Insert Ok";
				$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Insert Successfully....!!!!</div>';
				
			}
			else
			{
				echo "Insert Not Ok";
			}
			break;
		
		case 'update':
			$update = "UPDATE `gallery` SET `gname` = '".$gname."',`status` = '".$status."' WHERE `g_id` = '".$g_id."' ";
			$qry = mysqli_query($con,$update);

			if ($profile!='') 
			{
				$selectImg = "SELECT * FROM `gallery` WHERE `g_id` = '".$g_id."' ";
				$qryImg = mysqli_query($con,$selectImg);
				$rowImg = mysqli_fetch_assoc($qryImg);
				unlink("upload/gallery/".$rowImg['profile']);
				
				move_uploaded_file($tmp_name,"upload/gallery/".$profile);
				$upImg = "UPDATE `gallery` SET `profile` = '".$profile."' WHERE `g_id` = '".$g_id."' ";
				$QryImg = mysqli_query($con,$upImg);
			}

			if ($qry || $QryImg) 
			{
				header("location:index.php?page=gallery_list");
				//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';

			}
			else
			{
				echo "Update Not Ok";
			}
			break;

		case 'status':
			$g_id = $_REQUEST['g_id'];
			$upstatus = "UPDATE `gallery` SET `status` = 'inactive' WHERE `g_id` = '".$g_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=gallery_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

		case 'unblock':
			$g_id = $_REQUEST['g_id'];
			$upstatus = "UPDATE `gallery` SET `status` = 'active' WHERE `g_id` = '".$g_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=gallery_blocklist');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

		case 'delete':
			$g_id = $_REQUEST['g_id'];
			$deleteImg = "SELECT * FROM `gallery` WHERE `g_id` = '".$g_id."' ";
			$qryImg = mysqli_query($con,$deleteImg);
			$rowImg = mysqli_fetch_assoc($qryImg);
			unlink("upload/gallery/".$rowImg['profile']);
			
			$delete = "DELETE FROM `gallery` WHERE `g_id` = '".$g_id."' ";
			$qry = mysqli_query($con,$delete);
			if ($qry) 
			{
				header("location:index.php?page=gallery_list");
				//echo "Delete Ok";
				$_SESSION['delMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Delete Successfully....!!!!</div>';

			}
			else
			{
				echo "Delete Not Ok";
			}
			break;

		default:
			echo "error";
			break;
	}
}



?>