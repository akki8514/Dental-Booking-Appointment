<?php 
ob_start();
@session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$con = mysqli_connect($hostname,$username,$password,$dbname);
if (!$con)
/*{
	echo "Server Connected";
}
else*/
{
	echo "Server Not Connected";
}

?>