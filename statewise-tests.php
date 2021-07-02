<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('includes/config.php');
//error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 | Statewise Test Details</title>
    <link rel="stylesheet" href="includes/css/statewise-tests.css">
</head>

<body style="background-color: #f9f9f4;">
    <!-- page wrapper -->
    <div id="wrapper">
        <?php include_once('includes/sidebar.php');?>
        <!-- Here i will add sidebar -->

        <!-- content wrapper starts -->
        <div id="content-wrapper" class="flex-column" style="background-color: rgb(255, 255, 255) !important;">
            <!-- main content -->
            <div id="content" style="flex: 1 0 auto;">
                <h1
                    style="margin-top:1.5%;margin-left:14.5%;color:#3b3c42;font-size: 26px;font-family: 'Cagliostro', sans-serif;">
                    <b>Statewise Testing Dashboard</b>
                </h1>
                <!-- Page content begins -->
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-head-text">Personal Information</h6>
                        </div>
                        <div class="card-body">
                            <table class="table" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>State Name</th>
                                        <th>Total Tests done</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>State Name</th>
                                        <th>Total Tests Done</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                <?php $query=mysqli_query($con,"SELECT patients.state as state,count(testrecords.id) as totaltest from testrecords
                                join patients on patients.mobileNo=testrecords.mobileNo group by patients.state");
                                $cnt=1;
                                while($row=mysqli_fetch_array($query)){
                                ?>
                                    <tr>
                                        <td>
                                        <?php echo $cnt;?>
                                        </td>
                                        <td>
                                        <?php echo $row['state'];?>
                                        </td>
                                        <td>
                                        <?php echo $row['totaltest'];?>
                                        </td>
                                    </tr>
                                    <?php $cnt++;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>