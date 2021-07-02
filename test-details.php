<?php 
include_once('includes/config.php');
error_reporting(0);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 TMS | Test-Details</title>
    <link rel="stylesheet" href="includes/css/test-details.css">
</head>

<body style="background-color: #f9f9f4;">
    <!-- page wrapper -->
    <div id="wrapper">
        <?php include_once('includes/sidebar.php');?>

        <!-- content wrapper starts -->
        <div id="content-wrapper" class="flex-column" style="background-color: #f9f9f4;>
            <div id="content" style="flex: 1 0 auto;">
                <?php 
                $query=mysqli_query($con,"SELECT * from testrecords
                join patients on patients.mobileNo=testrecords.mobileNo
                where  testrecords.id='2'");
                while($row=mysqli_fetch_array($query)){ 
                ?>
                <h1
                    style="margin-top:1.5%;margin-left:14.5%;color:#3b3c42;font-size: 26px;font-family: 'Cagliostro', sans-serif;">
                    <b>Test Details#</b>
                </h1>
                <!-- Page content begins -->
                <div class="container">

                    <div class="row">
                        <!-- personal information --->
                        <div class="columnr1">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-head-text">Personal Information</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table" width="100%" cellspacing="0">
                                        <tr>
                                            <!-- in td need to add php echo lines after completion -->
                                            <th>Full Name</th>
                                            <td><?php echo $row['fullName'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Mobile Number</th>
                                            <td><?php echo $row['mobileNo'];?></td>
                                        </tr>

                                        <tr>
                                            <th>DOB (Date of Birth)</th>
                                            <td><?php echo $row['dateOBirth'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Govt Issued Id</th>
                                            <td><?php echo $row['govIdName'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Govt Issued Id No</th>
                                            <td><?php echo $row['govIdNo'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Full Address</th>
                                            <td><?php echo $row['address'];?></td>
                                        </tr>

                                        <tr>
                                            <th>State</th>
                                            <td><?php echo $row['state'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Profile Reg Date</th>
                                            <td><?php echo $row['registrationDate'];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Test infromation -->
                        <div class="columnr1">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="card-head-text">Test Information</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table" width="100%" cellspacing="0">
                                        <tr>
                                            <!-- in td need to add php echo lines after completion -->
                                            <th>Order No</th>
                                            <td><?php echo $row['orderNo'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Test Type</th>
                                            <td><?php echo $row['testType'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Time Slot</th>
                                            <td><?php echo $row['timeSlot'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Report status</th>
                                            <td><?php echo $row['reportStatus'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Assigned to</th>
                                            <td><?php echo $row['assignedToName'];?></td>
                                        </tr>


                                        <tr>
                                            <th>Assigned Date</th>
                                            <td><?php echo $row['registrationDate'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Report</th>
                                            <td><?php echo $row['finalReport'];?></td>
                                        </tr>

                                        <tr>
                                            <th>Report Delivered Time</th>
                                            <td>2021-08-16 15:15:15</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="columnr2" style="padding-left:24%;">
                            <div class="card" >
                                <div class="card-header">
                                    <h6 class="card-head-text" align="center">Test Tracking History</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table" width="100%" cellspacing="0">
                                        <!-- All php code is remaining. -->
                                        <tr>
                                            <th>Patient name</th>
                                            <th>Status</th>
                                            <th>Remark Date</th>
                                            <th>Remark By</th>
                                        </tr>
                                        <tr>
                                            <td>
                                            <?php echo $row['fullName'];?>
                                            </td>
                                            <td>
                                            <?php echo $row['reportStatus'];?>
                                            </td>
                                            <td>
                                                2021-06-24 15:30:45
                                            </td>
                                            <td>
                                            <?php echo $row['assignedToName'];?>
                                            </td>
                                        </tr>
                                        
                                    </table>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>