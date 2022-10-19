<?php 

echo "<pre>";
print_r($_REQUEST);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$cat_id = $_REQUEST['cat_id'];
	$p_id = $_SESSION['user_id'];
	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$email = $_REQUEST['email'];
	$date = $_REQUEST['date'];
	$time = $_REQUEST['time'];
	$gender = $_REQUEST['gender'];
	$contact = $_REQUEST['contact'];
	$status = "pending";

	switch ($action) 
	{
		case 'insert':
		echo	$insert = "INSERT `appointment` SET `cat_id` = '".$cat_id."',`p_id`='".$p_id."',`fname` = '".$fname."',`lname`='".$lname."',`email` = '".$email."',`date` = '".$date."',`time` = '".$time."',`gender` = '".$gender."',`contact` = '".$contact."',`status` = '".$status."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=app_list");
				//echo "Insert Ok";
				$_SESSION['insertMsg'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">Your Data Insert Successfully....!!!!</div>';

			}
			else
			{
				echo "Insert Not Ok";
			}
			break;

		default:
			echo "Error";
			break;
	}
}

?>