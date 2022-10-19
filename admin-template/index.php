<?php 

include '../include/config.php'; 
if ($_SESSION['id']=='') 
{
    header("location:login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title> Dental - Admin Template </title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/tagsinput.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

</head>

<body>
    <div class="main-wrapper">

        <?php include ("template/header.php"); ?>

        <?php include("template/slide.php"); ?>
    <div class="page-wrapper">
        <div class="content">

       <?php //include("middlepage/home.php");
       @$page = $_REQUEST['page'];
       if ($page=="" && basename($_SERVER['PHP_SELF']) == "index.php") 
       {
           $page = "home";
       }
       if ($page!="" && file_exists("middlepage/".$page.".php")) 
       {
           include("middlepage/".$page.".php");
       }
       else
       {
            include ("middlepage/error.php");
          //echo "Page Is Not Found";
       }
       ?>
        </div>
    </div>
    </div>



    <div class="sidebar-overlay" data-reff=""></div>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="assets/js/slidemenu.html"></script>
    <script type="text/javascript" src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/Chart.bundle.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/tagsinput.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>

    <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
    </script>

    <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
     </script>

<?php 

$countapp = mysqli_num_rows(mysqli_query($con,"SELECT * FROM `appointment` "));

$sel1="select * from `appointment` where date BETWEEN '2020-01-01' and '2020-01-31'";
$qry1=mysqli_query($con,$sel1);
$Jan=mysqli_num_rows($qry1);
//echo $jan;

$sel2="select * from `appointment` where date BETWEEN '2020-02-01 ' and '2020-02-28 '";
$qry2=mysqli_query($con,$sel2);
$Feb=mysqli_num_rows($qry2);

$sel3="select * from `appointment` where date BETWEEN '2020-03-01 ' and '2020-03-31 '";
$qry3=mysqli_query($con,$sel3);
$Mar=mysqli_num_rows($qry3);

$sel4="select * from `appointment` where date BETWEEN '2020-04-01 ' and '2020-04-30 '";
$qry4=mysqli_query($con,$sel4);
$Apr=mysqli_num_rows($qry4);

$sel5="select * from `appointment` where date BETWEEN '2020-05-01 ' and '2020-05-31 '";
$qry5=mysqli_query($con,$sel5);
$May=mysqli_num_rows($qry5);

$sel6="select * from `appointment` where date BETWEEN '2020-06-01 ' and '2020-06-30 '";
$qry6=mysqli_query($con,$sel6);
$Jun=mysqli_num_rows($qry6);

$sel7="select * from `appointment` where date BETWEEN '2020-07-01 ' and '2020-07-31 '";
$qry7=mysqli_query($con,$sel7);
$Jul=mysqli_num_rows($qry7);

$sel8="select * from `appointment` where date BETWEEN '2020-08-01 ' and '2020-08-31 '";
$qry8=mysqli_query($con,$sel8);
$Aug=mysqli_num_rows($qry8);

$sel9="select * from `appointment` where date BETWEEN '2020-09-01 ' and '2020-09-31 '";
$qry9=mysqli_query($con,$sel9);
$Sep=mysqli_num_rows($qry9);

$sel10="select * from `appointment` where date BETWEEN '2020-10-01 ' and '2020-10-31 '";
$qry10=mysqli_query($con,$sel10);
$Oct=mysqli_num_rows($qry10);

$sel11="select * from `appointment` where date BETWEEN '2020-11-01 ' and '2020-11-31 '";
$qry11=mysqli_query($con,$sel11);
$Nov=mysqli_num_rows($qry11);

$sel12="select * from `appointment` where date BETWEEN '2020-12-01 ' and '2020-12-31 '";
$qry12=mysqli_query($con,$sel12);
$Dec=mysqli_num_rows($qry12);


$countUser = mysqli_num_rows(mysqli_query($con,"SELECT * FROM `appointment` WHERE `status` = 'accept' "));

$sel1="select * from `appointment` where date BETWEEN '2020-01-01 ' and '2020-01-31 '";
$qry1=mysqli_query($con,$sel1);
$jan=mysqli_num_rows($qry1);

$sel2="select * from `appointment` where date BETWEEN '2020-02-01' and '2020-02-28'";
$qry2=mysqli_query($con,$sel2);
$feb=mysqli_num_rows($qry2);

$sel3="select * from `appointment` where date BETWEEN '2020-03-01' and '2020-03-31'";
$qry3=mysqli_query($con,$sel3);
$mar=mysqli_num_rows($qry3);

$sel4="select * from `appointment` where date BETWEEN '2020-04-01' and '2020-04-30'";
$qry4=mysqli_query($con,$sel4);
$apr=mysqli_num_rows($qry4);

$sel5="select * from `appointment` where date BETWEEN '2020-05-01' and '2020-05-31'";
$qry5=mysqli_query($con,$sel5);
$may=mysqli_num_rows($qry5);

$sel6="select * from `appointment` where date BETWEEN '2020-06-01' and '2020-06-30'";
$qry6=mysqli_query($con,$sel6);
$jun=mysqli_num_rows($qry6);

$sel7="select * from `appointment` where date BETWEEN '2020-07-01' and '2020-07-31'";
$qry7=mysqli_query($con,$sel7);
$jul=mysqli_num_rows($qry7);

$sel8="select * from `appointment` where date BETWEEN '2020-08-01' and '2020-08-31'";
$qry8=mysqli_query($con,$sel8);
$aug=mysqli_num_rows($qry8);

$sel9="select * from `appointment` where date BETWEEN '2020-09-01' and '2020-09-31'";
$qry9=mysqli_query($con,$sel9);
$sep=mysqli_num_rows($qry9);

$sel10="select * from `appointment` where date BETWEEN '2020-10-01' and '2020-10-31'";
$qry10=mysqli_query($con,$sel10);
$oct=mysqli_num_rows($qry10);

$sel11="select * from `appointment` where date BETWEEN '2020-11-01' and '2020-11-31'";
$qry11=mysqli_query($con,$sel11);
$nov=mysqli_num_rows($qry11);

$sel12="select * from `appointment` where date BETWEEN '2020-12-01' and '2020-12-31'";
$qry12=mysqli_query($con,$sel12);
$dec=mysqli_num_rows($qry12);

?>

<?php
$selUser="select * from `patient` where date BETWEEN '2020-01-01' and '2020-01-31'";
$qryUser=mysqli_query($con,$selUser);
$janUser=mysqli_num_rows($qryUser);

$selUser1="select * from `patient` where date BETWEEN '2020-02-01' and '2020-02-28'";
$qryUser1=mysqli_query($con,$selUser1);
$janUser1=mysqli_num_rows($qryUser1);

$selUser2="select * from `patient` where date BETWEEN '2020-03-01' and '2020-03-31'";
$qryUser2=mysqli_query($con,$selUser2);
$janUser2=mysqli_num_rows($qryUser2);

$selUser3="select * from `patient` where date BETWEEN '2020-04-01' and '2020-04-30'";
$qryUser3=mysqli_query($con,$selUser3);
$janUser3=mysqli_num_rows($qryUser3);

$selUser4="select * from `patient` where date BETWEEN '2020-05-01' and '2020-05-31'";
$qryUser4=mysqli_query($con,$selUser4);
$janUser4=mysqli_num_rows($qryUser4);

$selUser5="select * from `patient` where date BETWEEN '2020-06-01' and '2020-06-30'";
$qryUser5=mysqli_query($con,$selUser5);
$janUser5=mysqli_num_rows($qryUser5);

$selUser6="select * from `patient` where date BETWEEN '2020-07-01' and '2020-07-31'";
$qryUser6=mysqli_query($con,$selUser6);
$janUser6=mysqli_num_rows($qryUser6);

$selUser7="select * from `patient` where date BETWEEN '2020-08-31' and '2020-08-31'";
$qryUser7=mysqli_query($con,$selUser7);
$janUser7=mysqli_num_rows($qryUser7);

$selUser8="select * from `patient` where date BETWEEN '2020-09-01' and '2020-09-30'";
$qryUser8=mysqli_query($con,$selUser8);
$janUser8=mysqli_num_rows($qryUser8);

$selUser9="select * from `patient` where date BETWEEN '2020-10-01' and '2020-10-31'";
$qryUser9=mysqli_query($con,$selUser9);
$janUser9=mysqli_num_rows($qryUser9);

$selUser10="select * from `patient` where date BETWEEN '2020-11-01' and '2020-11-30'";
$qryUser10=mysqli_query($con,$selUser10);
$janUser10=mysqli_num_rows($qryUser10);

$selUser11="select * from `patient` where date BETWEEN '2020-12-01' and '2020-12-31'";
$qryUser11=mysqli_query($con,$selUser11);
$janUser11=mysqli_num_rows($qryUser11);

?>

<script>
    // Bar Chart

    var barChartData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun' , 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],

        
        datasets: [{
            label: 'Appointment',
            backgroundColor: 'rgba(1, 181, 199, 0.5)',
            borderColor: 'rgba(1, 181, 199, 1)',
            borderWidth: 1,
            data: [<?php echo $Jan; ?>,<?php echo $Feb; ?> ,<?php echo $Mar; ?>,<?php echo $Apr; ?>,<?php echo $May; ?>,<?php echo $Jun; ?>,<?php echo $Jul; ?>,<?php echo $Aug; ?>,<?php echo $Sep; ?>,<?php echo $Oct; ?>,<?php echo $Nov; ?>,<?php echo $Dec; ?>]
        }, {
            label: 'Patient',
            backgroundColor: 'rgba(228, 228, 228, 0.5)',
            borderColor: 'rgba(228, 228, 228, 1)',
            borderWidth: 1,
            data: [<?php echo $janUser; ?>, <?php echo $janUser1; ?>, <?php echo $janUser2; ?>, <?php echo $janUser3; ?>, <?php echo $janUser4; ?>, <?php echo $janUser5; ?>, 90,<?php echo $janUser7; ?>,<?php echo $janUser8; ?>,<?php echo $janUser9; ?>,<?php echo $janUser10; ?>,<?php echo $janUser11; ?>]
        }]

    };

    var ctx = document.getElementById('bargraph').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            legend: {
                display: false,
            }
        }
    });

var data = {
    labels: [
        "Red",
        "Blue",
        "Yellow"
    ],
    datasets: [
        {
            data: [300, 50, 100],
            backgroundColor: [
                "#FF6384",
                "#36A2EB",
                "#FFCE56"
            ],
            hoverBackgroundColor: [
                "#FF4394",
                "#36A2EB",
                "#FFCE56"
            ]
                        
                        
        }]
};

var options = { 
    cutoutPercentage:40,
};

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [300, 50, 100, 20, 70],
                    backgroundColor: [
                        "#FF6384",
                        "#36A2EB",
                        "#01b5c7",
                        "#FFCE56",
                        "#737AFC"
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    'Red',
                    'Orange',
                    'Yellow',
                    'Green',
                    'Blue'
                ]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('chart-area').getContext('2d');
            window.myDoughnut = new Chart(ctx, config);
        };
    </script>

</body>
</html>