<?php
session_start();
//DB conncetion
include_once('includes/config.php');
if(isset($_POST['login']))
  {
    $uname=$_POST['username'];
    $Password=md5($_POST['inputpwd']);
    $check = "SELECT * FROM admintbl WHERE adminUsername='$uname' AND adminPassword='$Password' ";
    $query=mysqli_query($con, $check);
    $count=mysqli_num_rows($query);

    if($count==1)
    {
        $_SESSION['login-body'] = "<div id='login-page-title'>Login Successful</div>";
        header('location:dashboard.php');  
    }
    else 
    {
        $_SESSION['login-body'] = "<div id='login-page-title'><script>alert('Invalid Details')</script></div>";
    }
    }
  ?>
  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cagliostro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/login.css">

</head>

<body class="login-body">
    <div class="container" style="margin-left: 0.8%;margin-top: 8%;">
        <h2 id="login-page-title" align="center"
            style="margin-top:4%;color:#1c2b29;font-size: 32px;">
            <b>Covid Testing Managment System</b></h2>
            <?php
                if(isset($_SESSION['login-body']))
                {
                    echo $_SESSION['login-body'];
                    unset($_SESSION['login-body']);
                }
            ?>

        <div class="login-card-body">
            <form name="login" method="POST">
                <div class="login-card-table">
                    <table class="main-card-table">
                        <tr>
                            <th class="card-login-image"><img src="images\mask.jpg" alt="Covid-Image"></th>
                            <th class="login-form-table">
                                <div class="input-info">
                                    <input type="text" class="login-input" name="username" id="username"
                                        placeholder="Enter Username" required="true">
                                    <input type="password" class="login-input" name="inputpwd" id="inputpwd"
                                        placeholder="Password">
                                    <input type="submit" name="login" class="login-button-home" value="login">
                                    <hr style="width: 75%;margin-top:15px;">
                                    <a class="small-ref" href="forgotpsw.php"
                                        style="font-weight:bold;text-decoration: none;color:rgb(29, 91, 143);">Forgot
                                        Password?</a>
                                    <br>

                                </div>
                            </th>
                        </tr>
                    </table>

                </div>
            </form>
        </div>
    </div>

</body>

</html>