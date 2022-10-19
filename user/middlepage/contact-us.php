        <div class="main-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title">
								<span>Contact Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4">
                            <div class="contact-left">
                                <div class="contact-address">
									<h3 class="company-name">Shreeji Dental Clinic</h3>
                                        <p>18,Ground Floor,
                                        <br>
                                        Savitapark Society,
                                        <br>
                                        Opp.Jain Derasar,
                                        <br>
                                        Gowindwadi Cross Road,
                                        <br>
                                        Isanpur, Ahmedabad-382443
                                      </p>
                                    <p class="m-b-0"><strong>Phone</strong>:
										<a href="tel:+9429623815">942-962-3815</a>,
                                        <br>
                                        <strong>Email</strong>: <a href="mailto:ankilshah@gmail.com">ankilshah@gmail.com</a>
                                    </p>
                                    <br>
                                    <h3 class="company-name">Map</h3>
                                    <div class="map-frame">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.1087434760543!2d72.59624951490426!3d22.983028384973114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85f1914808ff%3A0x61393f2737a77d75!2sShreeji%20Dental%20Clinic%20%26%20Implant%20Center%20-%20Dr.%20Ankil%20R.%20Shah!5e0!3m2!1sen!2sin!4v1581769085278!5m2!1sen!2sin" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <!-- <div class="working-hours">
                                    <h3>Working Hours</h3>
                                    <ul>
                                        <li>
											<span>Monday</span>  <b>9.00 AM To 5.00 PM</b>
                                        </li>
                                        <li>
											<span>Tuesday</span>  <b>9.00 AM To 5.00 PM</b>
                                        </li>
                                        <li>
											<span>Wednesday</span>  <b>9.00 AM To 5.00 PM</b>
                                        </li>
                                        <li>
											<span>Thursday</span>  <b>9.00 AM To 5.00 PM</b>
                                        </li>
                                        <li>
											<span>Friday</span>  <b>9.00 AM To 5.00 PM</b>
                                        </li>
                                        <li>
											<span>Saturday</span>  <b>11.00 AM To 3.00 PM</b>
                                        </li>
                                        <li>
											<span>Sunday</span>  <b>Closed</b>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </aside>
                        <div class="col-md-8"> 
                            <?php echo @$_SESSION['insertMsg'];unset($_SESSION['insertMsg']); ?>
                        <form class="form-signin" method="post" action="index.php?page=contact-us_action">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">
                        <input type="hidden" name="con_id" value="<?php echo $row['con_id']; ?>">

                            <div class="account-title">
                                 <h3>Contact Us</h3>
                            </div>
                            
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email">
                            </div>

                            <div class="form-group">
                                <label>Mobile Number</label>
                                <input type="text" maxlength="10" class="form-control" name="mobile_no">
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject">
                            </div>

                            <div>
                                <label>Message</label>
                                <textarea class="form-control" name="message"></textarea>
                            </div>

                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-primary account-btn" type="submit">Submit</button>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>