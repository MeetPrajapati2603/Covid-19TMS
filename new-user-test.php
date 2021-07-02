<?php
//default timezone
//DB conncetion
include_once('includes/config.php');
if(isset($_POST['submit'])){
        //getting post values
        $fname=$_POST['fullname'];
        $mnumber=$_POST['mobilenumber'];
        $dob=$_POST['dob'];
        $govtid=$_POST['govtissuedid'];
        $govtidnumber=$_POST['govtidnumber'];
        $address=$_POST['address'];
        $state=$_POST['state'];
        $testtype=$_POST['testtype'];
        $timeslot=$_POST['testtimeslot'];
        $orderno= mt_rand(100000000, 999999999);
        $query = "INSERT INTO `patients` 
        (`fullName`, `mobileNo`, `dateOBirth`, `govIdName`, `govIdNo`, `address`, `state`, `testType`, `timeSlot`, `orderNo`)
         VALUES ('$fname', '$mnumber', '$dob', '$govtid', '$govtidnumber', '$address', '$state', '$testtype', '$timeslot', '$orderno');";
        $result = mysqli_multi_query($con, $query);
        if ($result) {
        echo '<script>alert("Your test request submitted successfully. Order number is "+"'.$orderno.'")</script>';
          echo "<script>window.location.href='new-user-test.php'</script>";
        } 
        else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";  
        echo "<script>window.location.href='new-user-test.php'</script>";
        }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Test Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cagliostro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/new-user-test.css">
</head>

<body style="background-color: #f9f9f4;">
<?php include_once('includes/sidebar.php');?>
    <div class="container" style="margin-left: 14%;">

        <h2 style="margin-top:1.5%;margin-left:3%;color:#3b3c42;font-size: 26px;font-family: 'Cagliostro', sans-serif;">
            <b>New Covid-19 Test Registration</b>
        </h2>
        <form name="newTesting" method="post">
            <div class="row">
                <div class="column">
                    <div class="personalInfoCard">
                        <h2
                            style="margin-top:0.5%;margin-left:0.5%;color:#0d208f;font-size: 22px;font-family: 'Cagliostro', sans-serif;">
                            <b>Personal Information</b>
                        </h2>
                        <label class="lableText">Full Name</label><br>
                        <input type="text" class="new-user-input" id="fullname" name="fullname"
                            placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only"
                            required="true">
                        <br>
                        <label class="lableText">Mobile Number</label><br>
                        <input type="text" class="new-user-input" id="mobilenumber" name="mobilenumber"
                            placeholder="Please enter your mobile number" pattern="[0-9]{10}"
                            title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                        <span id="mobile-availability-status" style="font-size:12px;"></span>
                        <br>
                        <label class="lableText">DOB</label><br>
                        <input type="date" class="new-user-input" id="dob" name="dob" required="true">
                        <br>
                        <label class="lableText">Any Govt Issued ID</label><br>
                        <input type="text" class="new-user-input" id="govtissuedid" name="govtissuedid"
                            placeholder="Pancard / Driving License / Voter id / any other" required="true">
                        <br>
                        <label class="lableText">Govt Issued ID Number</label><br>
                        <input type="text" class="new-user-input" id="govtidnumber" name="govtidnumber"
                            placeholder="Enter Goevernment Issued ID Number" required="true">
                        <br>
                        <label class="lableText">Address</label><br>
                        <textarea class="new-user-input" id="address" name="address" required="true"
                            placeholder="Enter your full addres here"></textarea>
                        <br>
                        <label class="lableText">State</label><br>
                        <input type="text" class="new-user-input" id="state" name="state"
                            placeholder="Enter your State Here" required="true">
                    </div>
                </div>

                <div class="column">
                    <div class="testingInfoCard">

                        <h2
                            style="margin-top:0.5%;margin-left:0.5%;color:#0d208f;font-size: 22px;font-family: 'Cagliostro', sans-serif;">
                            <b>Testing Information</b>
                        </h2>
                        <label class="lableText">Test Type</label><br>
                        <select class="new-user-input" id="testtype" name="testtype" required="true">
                            <option value="">Select</option>
                            <option value="Antigen">Antigen</option>
                            <option value="RT-PCR">RT-PCR</option>
                            <option value="ANTIBODY">ANTIBODY</option>
                        </select><br>

                        <label class="lableText">Time Slot for Test</label><br>
                        <input type="datetime-local" class="new-user-input" id="testtimeslot" name="testtimeslot"
                            class="form-control"><br>
                        <input type="submit" class="new-submit" name="submit" id="submit">
                        

                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </form>
    </div>
</body>

</html>
