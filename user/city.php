 <?php
 //error_reporting(0);
include("../include/config.php");
    $state_id = $_GET['state_id'];

?>
<div class="form-group" id='CitySelect'>
    <!-- <label class="control-label" for="select01">Select City</label> -->
     <div class="controls">
        <label>City</label>
		<select class="form-control select" name="city_id" onchange="showCity2(this.value)">
			<option>Select City</option>
			<?php
				
		        $city=mysqli_query($con,"SELECT * FROM `city` WHERE `state_id` ='15'  ");
		        while($row=mysqli_fetch_assoc($city)){
		       ?>
			<option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
		<?php } ?>
		</select>
   </div>
</div>
