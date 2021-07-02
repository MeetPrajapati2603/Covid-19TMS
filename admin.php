<?php
//default timezone
//DB conncetion
include_once('includes/config.php');
if(isset($_POST['submit'])){
        //getting post values
        $adminname=$_POST['adminName'];
        $adminUsername=$_POST['adminUserName'];
        $adminpsw=md5($_POST['adminpassword']);
        $adminmnumber=$_POST['adminmobilenumber'];
        $adminEmail=$_POST['email'];
        $admindob=$_POST['admindob'];
        $query = "INSERT INTO `admintbl` 
        (`adminName`, `adminMobile`, `adminDOB`, `adminMail`, `adminUsername`, `adminPassword`)
         VALUES ('$adminname', '$adminnumber', '$admindob', '$adminEmail', '$adminUsername', '$adminpsw');";
        $result = mysqli_multi_query($con, $query);
        if ($result) {
        echo '<script>alert("Your registration is successful.")</script>';
          echo "<script>window.location.href='admin.php'</script>";
        } 
        else {
            echo "<script>alert('Something went wrong. Please try again.');</script>";  
        echo "<script>window.location.href='admin.php'</script>";
        }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Admin Registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cagliostro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/new-user-test.css">
</head>

<body style="background-color: #f9f9f4;">
<?php include_once('includes/sidebar.php');?>
    <div class="container" style="margin-left: 14%;">

        <h2 style="margin-top:1.5%;margin-left:3%;color:#3b3c42;font-size: 26px;font-family: 'Cagliostro', sans-serif;">
            <b>New Admin Registration</b>
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
                        <input type="text" class="new-user-input" id="adminName" name="adminName"
                            placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only"
                            required="true">
                        <br>
                        <label class="lableText">Mobile Number</label><br>
                        <input type="text" class="new-user-input" id="adminmobilenumber" name="adminmobilenumber"
                            placeholder="Please enter your mobile number" pattern="[0-9]{10}"
                            title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                        <span id="mobile-availability-status" style="font-size:12px;"></span>
                        <br>
                        <label class="lableText">DOB</label><br>
                        <input type="date" class="new-user-input" id="admindob" name="admindob" required="true">
                        <br>
                        <label class="lableText">E-mail</label><br>
                        <input type="email" class="new-user-input" id="email" name="email"
                            placeholder="Enter your mail id Here" required="true">
                    </div>
                </div>

                <div class="column">
                    <div class="testingInfoCard">

                    
                        <h2
                            style="margin-top:0.5%;margin-left:0.5%;color:#0d208f;font-size: 22px;font-family: 'Cagliostro', sans-serif;">
                            <b>Username and Password</b>
                        </h2>

                        
                        <label class="lableText">Username</label><br>
                        <input type="text" class="new-user-input" id="adminUserName" name="adminUserName" required="true"
                            placeholder="Enter your Username here"> <br>

                            <label class="lableText">Password</label><br>
                        <input type="password" class="new-user-input" id="adminpassword" name="adminpassword" required="true"
                            placeholder="Enter your Password here">
                        <br>
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
