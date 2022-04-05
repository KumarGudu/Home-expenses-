<?php

require_once("dbcontroller.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Website</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <section class="header-section">
      <input type="checkbox" id="check">
      <header class="navbar">
        </div>
        <h2><a href="index.php" class="logo">Logo</a></h2>
        <div class="navigation">
          <a href="index.php">Home</a>
          <a href="#">About</a>
          <a href="#">Info</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
          <?php session_start();
            if(isset($_SESSION['userid'])){
            echo "
              <a href='login.php' class='loginlink'> <i class='fa fa-user' aria-hidden='true'></i> ".$_SESSION['userid']."</a> 
              <a href='logout.php' class='logout'>Logout</a>";
            }
            else{
                echo " 
                    <a href='login.php' class='loginlink'><i class='fa fa-user' aria-hidden='true'></i> Login</a>";
            }
          ?>
          <!-- <a href="login.php">Login/Register</a> -->
        </div>
        <label class="checkbtn" for="check">
        <i class="fas fa-bars menu-btn"></i>
        <i class="fas fa-times close-btn"></i>
        </label>
      </header>
    </section>

  </body>
</html>
