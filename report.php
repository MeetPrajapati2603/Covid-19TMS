<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);
//session validation
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid-19 TMS | Report</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="includes/css/report.css">
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
                    <b>Search Report</b>
                </h1>
                <!-- Page content begins -->
                <div class="container">
                    <form method="post" action="search-report-result.php">
                        <div class="row">
                            <div class="column">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; margin-bottom: 3px;">Search By Patient Name or Mobile Number or Order Number</label>
                                        <input type="text" class="form-control" id="serachdata" name="serachdata"
                                            required="true" placeholder="Enter name or mobile number or Order Number">
                                    </div>


                                    <div class="form-group">
                                        <input type="submit" class="button" name="search" id="search"
                                            value="Search">
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