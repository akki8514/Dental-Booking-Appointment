<?php 

echo "<pre>";
print_r($_REQUEST);
if ($_REQUEST['action']) 
{
	$action = $_REQUEST['action'];
	$p_id = $_SESSION['user_id'];
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];

	switch ($action) 
	{
		case 'insert':
			echo $insert = "INSERT `feedback` SET `name` = '".$name."',`email` = '".$email."',`message` = '".$message."',`p_id`='".$p_id."' ";
			$qry = mysqli_query($con,$insert);
			if ($qry) 
			{
				header("location:index.php?page=home");
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