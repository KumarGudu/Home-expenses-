<?php
    $con=mysqli_connect("localhost","root","root","myData");
    if(!$con){
        die("Database connection failure..".mysqli_connect_error());
    }
    
?>