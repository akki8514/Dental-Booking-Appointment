<?php 

echo "<pre>";
print_r($_REQUEST);
print_r($_FILES);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$cat_id = $_REQUEST['cat_id'];
	$name = $_REQUEST['name'];
	$description = $_REQUEST['description'];
	$description1 = $_REQUEST['description1'];
	$profile = $_FILES['profile']['name'];
	$tmp_name = $_FILES['profile']['tmp_name'];
	$icon = $_FILES['icon']['name'];
	$tmp_name1 = $_FILES['icon']['tmp_name'];
	$status = "active";

	switch ($action) 
	{
		case 'insert':
			move_uploaded_file($tmp_name,"upload/category/".$profile);
			move_uploaded_file($tmp_name1,"upload/icon/".$icon);
			$insert = "INSERT INTO `category` SET `name` = '".$name."',`description` = '".$description."' ,`description1` = '".$description1."',`profile` = '".$profile."',`icon` = '".$icon."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=category_list");
				//echo "Insert Ok";
				$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Insert Successfully....!!!!</div>';
				
			}
			else
			{
				echo "Insert Not Ok";
			}
			break;

		case 'update':
			$update = "UPDATE `category` SET `name` = '".$name."',`description` = '".$description."',`description1` = '".$description1."',`status` = '".$status."' WHERE `cat_id` = '".$cat_id."' ";
			$qry = mysqli_query($con,$update);
			if ($profile!='' || $icon!="") 
			{
				$selectImg = "SELECT * FROM `category` WHERE `cat_id` = '".$cat_id."' ";
				$qryImg = mysqli_query($con,$selectImg);
				$rowImg = mysqli_fetch_assoc($qryImg);
				unlink("upload/category/".$rowImg['profile']);
				unlink("upload/icon/".$rowImg['icon']);

				move_uploaded_file($tmp_name,"upload/category/".$profile);
				move_uploaded_file($tmp_name1,"upload/icon/".$icon);
				$upImg = "UPDATE `category` SET `profile` = '".$profile."',`icon` = '".$icon."' WHERE `cat_id` = '".$cat_id."' ";
				$QryImg = mysqli_query($con,$upImg);
			}
			if ($qry || $QryImg) 
			{
				header("location:index.php?page=category_list");
				//echo "Update Ok";
				$_SESSION['upMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Update Successfully....!!!!</div>';

			}
			else
			{
				echo "Update Not Ok";
			}
			break;

		case 'status':
				$cat_id = $_REQUEST['cat_id'];
				$upstatus = "UPDATE `category` SET `status` = 'inactive' WHERE `cat_id` = '".$cat_id."' ";
				$qrystatus = mysqli_query($con,$upstatus);
				if ($qrystatus) 
				{
					header('location:index.php?page=category_list');
					//echo "Update Ok";
				}
				else
				{
					echo "Update Not";
				}
				break;	

		case 'unblock':
				$cat_id = $_REQUEST['cat_id'];
				$upstatus = "UPDATE `category` SET `status` = 'active' WHERE `cat_id` = '".$cat_id."' ";
				$qrystatus = mysqli_query($con,$upstatus);
				if ($qrystatus) 
				{
					header('location:index.php?page=category_blocklist');
					//echo "Update Ok";
				}
				else
				{
					echo "Update Not";
				}
				break;

		case 'delete':
			$cat_id = $_REQUEST['cat_id'];
			$deleteImg = "SELECT * FROM `category` WHERE `cat_id` = '".$cat_id."' ";
			$qryImg = mysqli_query($con,$deleteImg);
			$rowImg = mysqli_fetch_assoc($qryImg);
			unlink("upload/category/".$rowImg['profile']);
			
			$delete = "DELETE FROM `category` WHERE `cat_id` = '".$cat_id."' ";
			$qry = mysqli_query($con,$delete);
			if ($qry) 
			{
				header("location:index.php?page=category_list");
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