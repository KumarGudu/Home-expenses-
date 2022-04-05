<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>
<body>
<?php
    require('dbcontroller.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['userid'])) {
        $userid = stripslashes($_REQUEST['userid']);    // removes backslashes
        $userid = mysqli_real_escape_string($con, $userid);
        $pass = stripslashes($_REQUEST['pass']);
        $pass = mysqli_real_escape_string($con, $pass);
        // Check user is exist in the database
        $query    = "SELECT * FROM `register` WHERE userid='$userid'
                     AND pass='" . md5($pass) . "'";                     
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['userid'] = $userid;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "
            <section class='side'>
        <img src='./image/img.svg'>
    </section>

    <section class='main'>
        <div class='login-container'>
            <p class='title'>Incorrect userid/pass.</p>
            <div class='separator'></div>
            <p class='welcome-message'><p class='link'>Click here to <a href='login.php'>Login</a> again.</p></p>
        </div>
    </section>";
        }
    } else {
?>
    <section class="side">
        <img src="./image/img.svg" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome back</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed and have access to all our services</p>

            <form class="login-form " method="post" name="login">
                <div class="form-control">
                    <input type="text" name="userid" placeholder="userid">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" name="pass" placeholder="pass">
                    <i class="fas fa-lock"></i>
                </div>
                <input type="submit" value="Login" name="submit" class="submit"/>
                <p class="register-messege">Don't have an account ? Please <a href='register.php'>REGISTER</a> hear </p>
            </form>
        </div>
    </section>
    <?php
    }
?>
    
</body>
</html>