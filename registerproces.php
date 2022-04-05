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

require_once 'dbcontroller.php';

//set all post values
if( isset( $_POST ) && !empty( $_POST ) ) {


	$data 				= $_POST; //set Post data
	$userid  		    = $data ['userid'];
	$username   		= $data ['username'];
	$email              = $data ['email'];
    $pass      	        = $data ['pass'];
    $user_address      	= $data ['user_address'];
    $postal_code      	= $data ['postal_code'];
	$phone      	    = $data ['phone'];
	$back 				= "<a href='register.php'>Back to Register</a>";
	if (empty($userid)) 
		{
		 echo "<h1>First Name is required</h1><br><br>";
		 echo  "$back";
		 die();
		}
    
    if (empty($username)) 
    	{ 
    		echo "<h1>Last Name is required</h1><br><br>";
    		echo  "$back"; 
		 	die();
    	}
   
    if (empty($email)) 
    	{ 
    		echo "Email is required<br><br>";
    		echo  "$back";
    		die(); 
		} 
		 
	if (empty($phone)) 
    	{ 
    		echo "Mobile No is required<br><br>";
    		echo  "$back";
		    die();
		}
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
		$insert_data = "INSERT INTO register ( userid, username, email, phone, pass, user_address, postal_code )
		VALUES ( '{$userid}', '{$username}', '{$email}', '{$phone}','" . md5($pass) . "', '{$user_address}', '{$postal_code}' )";
		if ( $con->query($insert_data) === TRUE ) {
            echo "<body>
            <div class='wrapper'>
            <div class='title'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>
                  </div>
                  </body>";		
		}
		else {
		    echo "Error: " . $insert_data . "<br>" . $con->error. "<br>";
			 }
    }else {   		
    		echo("$email is not a valid email address"); 
    		echo  "<br>$back";
		  }
} else {

	echo "Please enter the required fields<br>";
	
}
?>
</body>
</html>

