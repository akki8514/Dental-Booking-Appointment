<?php include '../include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title> Shriji Dental Clinic </title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Owl Carousel Css -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		
		<!-- Main Css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/select2.min.css">

        <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		

    </head>
    
    <body>
        <!-- Header -->
		<?php include 'template/header.php'; ?>
		<!-- Header /-->
		
        <!-- Mobile Sidebar -->
        <?php include 'template/sidebar.php'; ?>
		<!-- Mobile Sidebar /-->
        <!-- <?php //include 'template/mobile_sidebar.php'; ?> -->
		
		<!-- Content -->
        <?php //include 'middle page/home.php'; 

        @$page = $_REQUEST['page'];
        if ($page == "" && basename($_SERVER['PHP_SELF']) == "index.php") 
        {
            $page = "home";
        }
        if ($page != "" && file_exists("middlepage/".$page.".php")) 
        {
            include ("middlepage/".$page.".php");
        }
        else
        {
            include ("middlepage/error.php");
            //echo "Page Is Not Found";;
        }


        ?>
 		<!-- Content /-->
		 
        <!-- Footer -->
        <?php include 'template/footer.php'; ?>
		<!-- Footer /-->
		
		<!-- Sidebar Overlay -->
        <div class="sidebar-overlay" data-reff="#side_menu"></div>
		 
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		
		<!-- Custom JS -->		
		<script src="assets/js/theme.js"></script>

		<script src="assets/js/jquery-3.2.1.min.js"></script>

		<script src="assets/js/select2.min.js"></script>

		<script src="assets/js/moment.min.js"></script>

		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	

		<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Simple Column Chart with Index Labels"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",
		dataPoints: [
			{ x: 5, y: 100 },
			{ x: 20, y: 55 },
			{ x: 30, y: 50 },
			{ x: 40, y: 65 },
			{ x: 50, y: 92, indexLabel: "Highest" },
			{ x: 60, y: 68 },
			{ x: 70, y: 38 },
			{ x: 80, y: 71 },
			{ x: 90, y: 54 },
			{ x: 100, y: 60 },
			{ x: 110, y: 36 },
			{ x: 120, y: 49 },
			{ x: 130, y: 21, indexLabel: "Lowest" }
		]
	}]
});
chart.render();

}
</script>


    </body>
</html>