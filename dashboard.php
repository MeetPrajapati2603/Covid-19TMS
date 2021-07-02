<?php
//DB conncetion
include_once('includes/config.php');
//Queries for count for dashboard
$totalTest=mysqli_num_rows(mysqli_query($con,"select id from testrecords"));

$assigned=mysqli_num_rows(mysqli_query($con,"select id from testrecords where reportStatus='Assigned'"));

$onTheWay=mysqli_num_rows(mysqli_query($con,"select id from testrecords where reportStatus='onTheWay'"));

$collected=mysqli_num_rows(mysqli_query($con,"select id from testrecords where reportStatus='sampleCollected'"));

$sentToLab=mysqli_num_rows(mysqli_query($con,"select id from testrecords where reportStatus='sampleSentToLab'"));

$reportDelivered=mysqli_num_rows(mysqli_query($con,"select id from testrecords where reportStatus='reportDelivered'"));

$registredPatients=mysqli_num_rows(mysqli_query($con,"select id from patients"));

$phlebotomist=mysqli_num_rows(mysqli_query($con,"select id from phlebotomist"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 TMS | Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="includes/css/dashboard.css" rel="stylesheet">

</head>

<body style="background-color: #f9f9f4;">
<?php include_once('includes/sidebar.php');?>
    <div class="container">
        <h2 style="margin-top:1.5%;margin-left:2.5%;color:#3b3c42;font-size: 26px;font-family: 'Cagliostro', sans-serif;">
            <b>Dashboard</b>
        </h2>
        <!-- First Row -->
        <div class="row">
            <!-- total tests -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #4e73df !important;">Total Tests</div>
                    <div class="number"><?php echo $totalTest; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-virus fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
            <!-- total assigned -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #4ea5df !important;">Total assigned </div>
                    <div class="number"><?php echo $assigned; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-user fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
            <!-- on the way for sample collectiono -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #4eaadf !important;">on the way for sample collection</div>
                    <div class="number"><?php echo $onTheWay; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-car fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
            <!-- samples collected -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #864edf !important;">samples collected</div>
                    <div class="number"><?php echo $collected; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-prescription-bottle fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- second row -->
        <div class="row">
            <!-- sample sent to lab -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #df4eaf !important;">sample sent to lab</div>
                    <div class="number"><?php echo $sentToLab; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-microscope fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
            <!-- report delivered -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #4edf4e !important;">report delivered</div>
                    <div class="number"><?php echo $reportDelivered; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-clipboard-list fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
            <!-- total registred patients -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #8a3030 !important;">Total registred patients</div>
                    <div class="number"><?php echo $registredPatients; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-users fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
            <!-- total registred phlebotomist -->
            <div class="column">
                <div class="card">
                    <div class="text" style="color: #df5f4e !important;">Total registred phlebotomist</div>
                    <div class="number"><?php echo $phlebotomist; ?></div>
                    <div class="logocolumn">
                        <i class="fas fa-user-nurse fa-3x" style="color: #9b9fb4 !important;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>