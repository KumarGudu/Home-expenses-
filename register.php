<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
<?php  
       require_once("nav.php");
   ?>
    <form class="form" action="registerproces.php" method="post">
        <div class="wrapper">
            <div class="title">
            Registration Form
            </div>
            <div class="form">
            <div class="inputfield">
                <label>User Name</label>
                <input type="text" name="userid" class="input" required>
            </div>  
                <div class="inputfield">
                <label>User Name</label>
                <input type="text" name="username" class="input" required>
            </div>  
            <div class="inputfield">
                <label>Password</label>
                <input type="password" name="pass" class="input" required>
            </div>  
            <div class="inputfield">
                <label>Confirm Password</label>
                <input type="password" name="con_password" class="input" required>
            </div> 
            <!-- <div class="inputfield">
                <label>Gender</label>
                <div class="custom_select">
                    <select>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                </div>
            </div>  -->
            <div class="inputfield">
                <label>Email</label>
                <input type="text" name="email" class="input" required>
            </div> 
            <div class="inputfield">
                <label>Phone Number</label>
                <input type="text" name="phone" class="input" required>
            </div> 
            <div class="inputfield">
                <label>Address</label>
                <textarea class="textarea" name="user_address" required></textarea>
            </div> 
            <div class="inputfield">
                <label>Postal Code</label>
                <input type="text" name="postal_code" class="input" required>
            </div> 
            <div class="inputfield terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Agreed to terms and conditions</p>
            </div> 
            <div class="inputfield">
            <input type="submit" name="submit" value="Register" class="btn">
            </div>
            </div>
        </div>	
    </form>
</body>
</html>