<?php session_start();
//DB conncetion
include_once('includes/config.php');
//error_reporting(0);

$searchdata=$_POST['searchdata'];

?>

            


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 TMS | Search Report Results</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/search-report-result.css">
</head>

<body style="background-color: #f9f9f4;">
    <!-- page wrapper -->
    <div id="wrapper">
        <?php include_once('includes/sidebar.php');?>
        <!-- Here i will add sidebar -->

        <!-- content wrapper starts -->
        <div id="content-wrapper" class="flex-column">
            <!-- main content -->
            <div id="content" style="flex: 1 0 auto;background: #f9f9f4;">
            
                <h1
                    style="margin-top:1.5%;margin-left:14.5%;color:#3b3c42;font-size: 26px;font-family: 'Cagliostro', sans-serif;">
                    <b>Search Report <?php echo $searchdata;?></b>
                </h1>
                <!-- Page content begins -->
                <div class="container">
                    <form method="post" action="search-report-result.php">
                        <div class="row">
                            <div class="column">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form name="assignto" method="post">
                                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Sno.</th>
                                                        <th>Order No.</th>
                                                        <th>Patient Name</th>
                                                        <th>Mobile No.</th>
                                                        <th>Test Type</th>
                                                        <th>Time Slot</th>
                                                        <th>Reg. Date</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Sno.</th>
                                                        <th>Order No.</th>
                                                        <th>Patient Name</th>
                                                        <th>Mobile No.</th>
                                                        <th>Test Type</th>
                                                        <th>Time Slot</th>
                                                        <th>Reg. Date</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                
                                                <?php $query1=mysqli_query($con,"SELECT testrecords.orderNo,patients.fullName,patients.mobileNo,testrecords.testType,patients.timeSlot,testrecords.registrationDate,testrecords.id as testid from testrecords
                                                join patients on patients.mobileNo=testrecords.mobileNo
                                                where (patients.fullName like '%$searchdata%' || patients.mobileNo like '%$searchdata%' || testrecords.orderNo like '%$searchdata%')");
                                                $cnt=1;
                                                while($row=mysqli_fetch_array($query1)){
                                                ?>

                                                    <tr>
                                                        <td>
                                                        <?php echo $cnt;?>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['orderNo'];?>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['fullName'];?>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['mobileNo'];?>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['testType'];?>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['timeSlot'];?>
                                                        </td>
                                                        <td>
                                                        <?php echo $row['registrationDate'];?>
                                                        </td>
                                                    </tr>
                                                    <?php $cnt++;} ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>