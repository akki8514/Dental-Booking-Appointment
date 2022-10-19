<html>
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  </head>

  <?php
include('../include/config.php');

    //$cat_id = $_GET['cat_id'];


  $id=intval($_GET['id']);
  $query="SELECT * FROM area WHERE city_id='333 '";
  $result=mysqli_query($con,$query);


?>
      <label>Area</label>
      <select class="form-control select" name="area_id" class="selectpicker" data-show-subtext="true" data-live-search="true">        
        <option data-subtext="Rep California">Select Area</option>
         <?php while($row=mysqli_fetch_array($result)) { ?>
       <option value=<?php echo $row['id']?>> <?php echo $row['office_name']." , ".$row['taluka']." , ".$row['pincode'];  ?></option> 
       <?php } ?>	
      </select>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
</html>

<!--  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

<?php
include('../include/config.php');

    //$cat_id = $_GET['cat_id'];


  $id=intval($_GET['id']);
  $query="SELECT * FROM area WHERE city_id='427'";
  $result=mysqli_query($con,$query);


?>

<div class="container" id='AreaSelect'>
    <div class="row-fluid">
      <select class="selectpicker" data-show-subtext="true" data-live-search="true">
        <option data-subtext="Rep California">Select City</option> 
        <?php while($row=mysqli_fetch_array($result)) { ?>
  <option value=<?php echo $row['id']?>> <?php echo $row['office_name']." , ".$row['taluka']." , ".$row['pincode'];  ?></option>
<?php } ?>
      </select>
    </div>
  </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>    -->