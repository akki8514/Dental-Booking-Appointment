    <!-- <div class="main-wrapper">
        <div class="page-wrapper">
            <div class="content">
 -->
              
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="card-block">
                                
                                <h4 class="card-title text-bold">contactus List</h4>

                                <div class="table-responsive">
                                    <table class="datatable table table-stripped ">
                                    <thead>
                                        <tr>
                                            <th>Sr No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile No.</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php 
                                       $i = 1;
                                       $Datacontactus = "SELECT * FROM `contactus` ";
                                       $Qrycontactus = mysqli_query($con,$Datacontactus);
                                       while($Rowcontactus = mysqli_fetch_object($Qrycontactus))
                                       {
                                       ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $Rowcontactus->name; ?></td>
                                            <td><?php echo $Rowcontactus->email; ?></td>
                                            <td><?php echo $Rowcontactus->mobile_no; ?></td>
                                            <td><?php echo $Rowcontactus->subject; ?></td>
                                            <td><?php echo $Rowcontactus->message; ?></td>
                                            
                                        </tr>
                                    <?php $i++; } ?>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->