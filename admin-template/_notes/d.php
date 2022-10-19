<div class="main-wrapper">
   	<div class="page-wrapper">
   		<div class="content">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h4 class="page-title">Add Doctor</h4>
                </div>
            </div>
                
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form method="post" action="index.php?page=doctor_action">
                        <input type="text" name="action" value="insert">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> First Name </label>
                                        <input class="form-control" name="fname" type="text"> 
                                        <!-- value="<?php echo $row = ['fname']; ?>" -->
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" name="lname" type="text"> 
                                        <!-- value="<?php echo $row = ['lname']; ?>" -->
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Username </label>
                                        <input class="form-control" name="username" type="text"> 
                                        <!-- value="<?php echo $row = ['username']; ?>" -->
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Email </label>
                                        <input class="form-control" name="email" type="email">
                                        <!-- value="<?php echo $row = ['email']; ?>" -->
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" name="confirmpwd" type="password">
                                    </div>
                                </div>
								
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" name="dob" class="form-control datetimepicker">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="male">Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input" value="female">Female
											</label>
										</div>
									</div>
                                </div>
								
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" name="address" class="form-control"> 
												<!-- value="<?php echo $row = ['address']; ?>" -->
											</div>
										</div>
										
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label> Country </label>
												<select class="form-control select" name="country">
													<option> 
													<!-- <?php if (isset($row['country'])
														&& $row['country']=="USA") 
														{
														 echo "selected=selected";
														} 
													?> --> 
													USA </option>
													<option>
													<!--<?php if (isset($row['country']) && $row ['country']=="United Kingdom") 
													{
														echo "selected=selected";
													} ?> -->
													United Kingdom </option>
                                                    <option> 
                                                    <!-- <?php if (isset($row['country']) && $row['country']=="INDIA") 
                                                    {
                                                    	echo "selected=selected";
                                                    } ?> --> 
                                                	INDIA </option>
												</select>
											</div>
										</div>
										
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label> City </label>
												<input type="text" name="city"  class="form-control">
												<!-- value="<?php echo $row = ['city']; ?>" -->
											</div>
										</div>
										
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label> State </label>
												<select class="form-control select" name="state">
													<option> 
													<!-- <?php if (isset($row['state']) && $row['state']=="Alaska") 
													{
														echo "selected=selected";
													} ?> -->
													Alaska </option>
													<option> 
													<!-- <?php if (isset($row['state']) && $row['state']=="Alabama") 
													{
														echo "selected=selected";
													} ?> --> 
													Alabama </option>
													<option> 
													<!-- <?php if (isset($row['state']) && $row['state']=="Gujarat") 
													{
														echo "selected=selected";
													} ?> --> 
													Gujarat </option>
												</select>
											</div>
										</div>
										
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label> Pin Code </label>
												<input type="text" name="code" class="form-control" >
												<!-- value="<?php echo $row = ['code']; ?>" -->
											</div>
										</div>
									</div>
								</div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Mobile </label>
                                        <input class="form-control" name="mobile" type="text" >
                                        <!-- value="<?php echo $row = ['mobile']; ?>" -->
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
									<div class="form-group">
										<label> Profile </label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											
											<div class="upload-input">
												<input type="file" class="form-control" name="profile">
												<!-- value="<?php echo $row = ['profile']; ?>" -->
											</div>
										</div>
									</div>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label>Short Biography</label>
                                <textarea class="form-control" name="biography" rows="2" cols="30"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="display-block"> Status </label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctor_active" value="active" >
									<label class="form-check-label" for="doctor_active">
									Active
									</label>
								</div>
								
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="inactive">
									<label class="form-check-label" for="doctor_inactive">
									Inactive
									</label>
								</div>
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button type="submit" class="btn btn-primary submit-btn" name="submit" value="submit">Create Doctor</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>