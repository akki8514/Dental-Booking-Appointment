		<!-- <div class="page-wrapper">
            <div class="content"> -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php 
                    	$selectDoctor = "SELECT * FROM `doctor` ";
                    	$qryDoctor = mysqli_query($con,$selectDoctor);
                    	$countDoctor = mysqli_num_rows($qryDoctor);
                    	?>
                        <div class="dash-widget">
								<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
								<div class="dash-widget-info text-right">
									<h3><?php echo $countDoctor; ?></h3>
									<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
								</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php 
                    	$selectPatient = "SELECT * FROM `patient` ";
                    	$qryPatient = mysqli_query($con,$selectPatient);
                    	$countPatient = mysqli_num_rows($qryPatient);

                    	?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $countPatient; ?></h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php
                    		$selectAppointment = "SELECT * FROM `appointment` ";
                    		$qryAppointment = mysqli_query($con,$selectAppointment);
                    		$countAppointment = mysqli_num_rows($qryAppointment);
                    	?>	
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-check-circle" aria-hidden="true"></i>
</span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $countAppointment; ?></h3>
                                <span class="widget-title3"> Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php
                    		$selectpending = "SELECT * FROM `appointment` WHERE `status` = 'pending' ";
                    		$qrypending = mysqli_query($con,$selectpending);
                    		$countpending = mysqli_num_rows($qrypending);
                    	?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $countpending; ?></h3>
                                <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
			<!-- <div class="row">
					<div class="col-12 col-md-12 col-lg-12 col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4 class="title is-3">Patient Total</h4>
									<span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
								</div>	
								<canvas id="canvas">
								</canvas>
							</div>
						</div>
					</div> 	
				</div> -->


				<div class="row">
					<!-- <div class="col-12 col-md-6 col-lg-6 col-xl-6">
						<div class="card">
							<div class="card-body"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
								<div class="chart-title">
									<h4 class="title is-3">Patient Total</h4>
									<span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
								</div>	
								<canvas id="canvas" style="display: block; height: 282px; width: 565px;" width="706" height="352" class="chartjs-render-monitor"></canvas>
							</div>
						</div>
					</div> -->
					<div class="col-xl-8" style="margin: auto;">
						<div class="card">
							<div class="card-body"><div style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
								<div class="chart-title">
									<h4 class="title is-3">Patients In</h4>
									<span class="float-right">
										<ul class="chat-user-total">
											<!-- <li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li> -->
										</ul>
									</span>
								</div>	
								<canvas id="bargraph" style="display: block; height: 282px; width: 565px;" width="706" height="352" class="chartjs-render-monitor"></canvas>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-md-8 col-lg-8 col-xl-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block"> Upcoming Appointments </h4> <a href="index.php?page=appointment_list" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										
										<thead class="d-none">
											<tr>
												<th>Patient Name</th>
												<th>Doctor Name</th>
												<th>Timing</th>
												<th class="text-right">Status</th>
											</tr>
										</thead>
										<tbody>
										<?php 
											$selectappointment = "SELECT * FROM `appointment` LIMIT 0,3 ";
											$qryappointment = mysqli_query($con,$selectappointment);
											while($rowappointment = mysqli_fetch_assoc($qryappointment))
											{
										?>
											<tr>
												<td>
													<h2><?php echo $rowappointment['fname']; ?> <!-- <span> <?php echo $rowappointment['address']; ?> --> </span></h2>
												</td>                 
												<td>
													<h5 class="time-title p-0">Appointment With</h5>
													<p>Dr. Ankil Shah</p>
												</td>
												<td>
													<h5 class="time-title p-0">Timing</h5>
													<p><?php echo $rowappointment['time']; ?></p>
												</td>
												<td class="text-right">
													<span class="btn btn-outline-primary">Take up</span>
												</td>
											</tr>
										<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    <!-- <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="card member-panel">
							<div class="card-header bg-white">
								<h4 class="card-title m-b-0">Doctors</h4>
							</div>
                            <div class="card-body">
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status away"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">BMBS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status offline"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">John Doe</span>
                                                <span class="contact-date">MBBS</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="Richard Miles"><img src="assets/img/user.jpg" alt="" class="w-40 rounded-circle"><span class="status away"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">Richard Miles</span>
                                                <span class="contact-date">MBBS, MD</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="doctors.html" class="text-muted">View all Doctors</a>
                            </div>
                        </div>
                    </div> -->
				</div>
				<div class="row">
                            <div class="col-12 ">
                                <div class="card">
									<div class="card-header">
										<h4 class="card-title d-inline-block">New Patients </h4> <a href="index.php?page=patient_list" class="btn btn-primary float-right">View all</a>
									</div>
                                    <div class="card-block">
										<div class="table-responsive">
											<table class="table m-b-0 new-patient-table">
												<tbody>
													<?php  
														$SelectPatient = "SELECT * FROM `patient` ORDER BY `p_id` DESC LIMIT 0,5";
														$qryPatient = mysqli_query($con,$SelectPatient);
														while($rowPatient = mysqli_fetch_assoc($qryPatient))
														{
													?>
													<tr>
														<td>
															<img width="28" height="28" class="rounded-circle" src="<?php echo "upload/patient/".$rowPatient['profile']; ?>"> 
															<h2><?php echo $rowPatient['fname']; ?></h2>
														</td>
														<td><?php echo $rowPatient['email']; ?></td>
														<td><?php echo $rowPatient['mobile']; ?></td>
														<td><button class="btn btn-primary btn-primary-one float-right">Fever</button></td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-12 ">
                                <div class="card">
									<div class="card-header">
										<h4 class="card-title d-inline-block">New Contact Us </h4> <a href="index.php?page=contact_list" class="btn btn-primary float-right">View all</a>
									</div>
                                    <div class="card-block">
										<div class="table-responsive">
											<table class="table m-b-0 new-contact-table">
												<tbody>
													<?php  
														$Selectcontact = "SELECT * FROM `contactus` ORDER BY `con_id` DESC LIMIT 0,5";
														$qrycontact = mysqli_query($con,$Selectcontact);
														while($rowcontact = mysqli_fetch_assoc($qrycontact))
														{
													?>
													<tr>
														<td><?php echo $rowcontact['name']; ?></td>
														<td><?php echo $rowcontact['email']; ?></td>
														<td><?php echo $rowcontact['mobile_no']; ?></td>
														<td><?php echo $rowcontact['subject']; ?></td>
														<td><?php echo $rowcontact['message']; ?></td>
													</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
                                    </div>
                                </div>
                                
                            </div>

							<!-- <div class="col-12 col-md-4 col-lg-4 col-xl-4">
									<div class="hospital-barchart">
										<h4 class="card-title d-inline-block">Hospital Management</h4></a>
									</div>
									<div class="bar-chart">
										<div class="legend">
											<div class="item">
												<h4>Level1</h4>
											</div>
											
											<div class="item">
												<h4>Level2</h4>
											</div>
											
											<div class="item text-right">
												<h4>Level3</h4>
											</div>
									
											<div class="item text-right">
												<h4>Level4</h4>
											</div>
										</div>
                
										<div class="chart clearfix">
											<?php
											$selectAdmin = "SELECT * FROM `doctor` ";
											$qryAdmin = mysqli_query($con,$selectAdmin);
											$CountAdmin = mysqli_num_rows($qryAdmin)
                                           

											 ?>
											<div class="item">
												<div class="bar">
													<span class="percent">12%</span>
									
													<div class="item-progress" data-percent="<?php echo $CountAdmin; ?>">
														<span class="title">OPD Patient</span>
													</div>
												</div>
											</div>
											
											<div class="item">
												<div class="bar">
													<span class="percent">71%</span>
									
													<div class="item-progress" data-percent="71">
														<span class="title">New Patient</span>
													</div>
												</div>
											</div>
											
											<div class="item">
												<div class="bar">
													<span class="percent">82%</span>
									
													<div class="item-progress" data-percent="82">
														<span class="title">Laboratory Test</span>
													</div>
												</div>
											</div>
									
											<div class="item">
												<div class="bar">
													<span class="percent">67%</span>
									
													<div class="item-progress" data-percent="67">
														<span class="title">Treatment</span>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="bar">
													<span class="percent">67%</span>									
													<div class="item-progress" data-percent="20">
														<span class="title">Discharge</span>
													</div>
												</div>
											</div>
										</div>
									</div>
                            </div> -->
                        </div>
            </div>
<!--             <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 -->
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            <!-- </div>
        </div> -->