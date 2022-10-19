<?php 

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$b_id = $_REQUEST['b_id'];
	$blogname = $_REQUEST['blogname'];
	$profile = $_FILES['profile']['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];
	$category = $_REQUEST['category'];
	$description = $_REQUEST['description'];
	$status = "active";

	switch ($action) 
	{
		case 'insert':
			move_uploaded_file($tmp_name,"upload/blog/".$profile);
			$insert = "INSERT `blog` SET `blogname` = '".$blogname."',`profile` = '".$profile."',`category` = '".$category."',`description` = '".$description."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=blog_list");
				//echo "Insert Ok";
				$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Insert Successfully....!!!!</div>';

			}
			else
			{
				echo "Insert Not Ok";
			}
			break;
		
		case 'update':
			$update = "UPDATE `blog` SET `blogname` = '".$blogname."',`category` = '".$category."',`description` = '".$description."',`status` = '".$status."' WHERE `b_id` = '".$b_id."' ";
			$qry = mysqli_query($con,$update);
			if ($profile!='') 
			{
				$selectImg = "SELECT * FROM `blog` WHERE `b_id` = '".$b_id."' ";
				$qryImg = mysqli_query($con,$selectImg);
				$rowImg = mysqli_fetch_assoc($qryImg);
				unlink("upload/blog/".$rowImg['profile']);

				move_uploaded_file($tmp_name,"upload/blog/".$profile);
				$upImg = "UPDATE `blog` SET `profile` = '".$profile."' WHERE `b_id` = '".$b_id."' ";
				$QryImg = mysqli_query($con,$upImg);
			}
			if ($qry || $QryImg) 
			{
				header("location:index.php?page=blog_list");
				//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';

			}
			else
			{
				echo "Update Not Ok";
			}
			break;

		case 'status':
			$b_id = $_REQUEST['b_id'];
			$upstatus = "UPDATE `blog` SET `status` = 'inactive' WHERE `b_id` = '".$b_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=blog_list');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

		case 'unblock':
			$b_id = $_REQUEST['b_id'];
			$upstatus = "UPDATE `blog` SET `status` = 'active' WHERE `b_id` = '".$b_id."' ";
			$qrystatus = mysqli_query($con,$upstatus);
			if ($qrystatus) 
			{
				header('location:index.php?page=blog_blocklist');
				//echo "Update Ok";
			}
			else
			{
				echo "Update Not";
			}
			break;

		case 'delete':
			$b_id = $_REQUEST['b_id'];
			$deleteImg = "SELECT * FROM `blog` WHERE `b_id` = '".$b_id."' ";	
			$qryImg = mysqli_query($con,$deleteImg);
			$rowImg = mysqli_fetch_assoc($qryImg);
			unlink("upload/blog/".$rowImg['profile']);
			
			$delete = "DELETE FROM `blog` WHERE `b_id` = '".$b_id."' ";
			$qry = mysqli_query($con,$delete);
			if ($qry) 
			{
				header("location:index.php?page=blog_list");
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